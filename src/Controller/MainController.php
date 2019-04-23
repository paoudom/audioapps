<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;

use App\Entity\Audioapp;
use App\Repository\AudioappRepository;


class MainController extends AbstractController
{

    /**
     * @var AudioappRepository
     */
    private $repository;

      public function __construct(AudioappRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @Route("/", name="homepage")
     * @return Response
     * 
     */
    public function index(PaginatorInterface $paginator, Request $request): Response
    {
 
      $audioapps = $paginator->paginate(
       $this->repository->findRecentQuery(),
       $request->query->getInt('page', 1), 
       10);

        return $this->render('main/index.html.twig', [
          'audioapps' => $audioapps,
     ]);
    }


}