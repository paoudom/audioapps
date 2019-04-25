<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;

use App\Entity\Audioapp;
use App\Repository\AudioappRepository;
use AppEntity\Categorie;
use App\Repository\CategorieRepository;

use App\Services\ios;


class MainController extends AbstractController
{

    /**
     * @var AudioappRepository
     */
    private $repository;
    /**
     * @var CategorieRepository
     */
    private $rcategorie;



      public function __construct(AudioappRepository $repository, CategorieRepository $categorie)
    {
        $this->repository = $repository;
        $this->categorie = $categorie;
    }

    /**
     * @Route("/", name="homepage")
     * @return Response
     * 
     */
    public function index(PaginatorInterface $paginator, Request $request, ios $ios): Response
    {

        $categories = $this->categorie->findAll();
  
        if ($request->isMethod('POST')) {
          $audioapps = $paginator->paginate(
            $this->repository->findByGroupeQuery($request->request->get('find_group')),
            $request->query->getInt('page', 1), 
            12);
          $title = 'Filter : ' . $request->request->get('find_group');
        }
        else
        {
          $audioapps = $paginator->paginate(
            $this->repository->findRecentQuery(),
              $request->query->getInt('page', 1), 
              12);
          $title = 'Last Updated apps';
        }

        
          return $this->render($ios->route() . 'main/index.html.twig', [
            'audioapps' => $audioapps,
            'categories' => $categories,
            'title' => $title,
      ]);

    }

    /**
     * @Route("/categories/{categorie}", name="index.categorie")
     * @return Response
     * 
     */
    public function indexCategories(PaginatorInterface $paginator, Request $request, ios $ios, $categorie): Response
    {

        $categories = $this->categorie->findAll();
  
        $audioapps = $paginator->paginate(
          $this->repository->findByGroupeQuery($categorie),
          $request->query->getInt('page', 1), 
          12);
        $title = 'Filter : ' . $categorie;

        
          return $this->render($ios->route() . 'main/index.html.twig', [
            'audioapps' => $audioapps,
            'categories' => $categories,
            'title' => $title,
      ]);

    }




}