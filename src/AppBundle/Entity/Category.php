<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 *
 * @ORM\Table(name="category")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CategoryRepository")
 */
class Category
{
    /**
     * @var int
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="name_category", type="string", length=255)
     */
    private $nameCategory;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Film", mappedBy="category")
     */
    private $film;

    /**
     * Get id
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nameCategory
     * @param string $nameCategory
     * @return Category
     */
    public function setNameCategory($nameCategory)
    {
        $this->nameCategory = $nameCategory;

        return $this;
    }

    /**
     * Get nameCategory
     * @return string
     */
    public function getNameCategory()
    {
        return $this->nameCategory;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->film = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add film
     *
     * @param \AppBundle\Entity\Film $film
     *
     * @return Category
     */
    public function addFilm(\AppBundle\Entity\Film $film)
    {
        $this->film[] = $film;

        return $this;
    }

    /**
     * Remove film
     *
     * @param \AppBundle\Entity\Film $film
     */
    public function removeFilm(\AppBundle\Entity\Film $film)
    {
        $this->film->removeElement($film);
    }
}
