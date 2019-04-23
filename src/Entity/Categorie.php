<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CategorieRepository")
 */
class Categorie
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Audioapp", mappedBy="categorie", orphanRemoval=true)
     */
    private $audioapps;

    public function __construct()
    {
        $this->audioapps = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * @return Collection|Audioapp[]
     */
    public function getAudioapps(): Collection
    {
        return $this->audioapps;
    }

    public function addAudioapp(Audioapp $audioapp): self
    {
        if (!$this->audioapps->contains($audioapp)) {
            $this->audioapps[] = $audioapp;
            $audioapp->setCategorie($this);
        }

        return $this;
    }

    public function removeAudioapp(Audioapp $audioapp): self
    {
        if ($this->audioapps->contains($audioapp)) {
            $this->audioapps->removeElement($audioapp);
            // set the owning side to null (unless already changed)
            if ($audioapp->getCategorie() === $this) {
                $audioapp->setCategorie(null);
            }
        }

        return $this;
    }

    /**
     * Generates the magic method
     * 
     */
    public function __toString(){
        // to show the name of the Category in the select
        return $this->nom;
        // to show the id of the Category in the select
        // return $this->id;
    }
}
