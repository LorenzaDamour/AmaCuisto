<?php

namespace Partage\PartageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Atelier
 *
 * @ORM\Table(name="atelier")
 * @ORM\Entity(repositoryClass="Partage\PartageBundle\Repository\AtelierRepository")
 */
class Atelier
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="Equipements", type="string", length=255)
     */
    private $equipements;

    /**
     * @var string
     *
     * @ORM\Column(name="Ingredients", type="string", length=255)
     */
    private $ingredients;

    /**
     * @var string
     *
     * @ORM\Column(name="Tarif", type="string", length=255)
     */
    private $tarif;
    /**
     * @var bool
     *
     * @ORM\Column(name="available", type="boolean")
     */
    private $available;

    /**
     * @ORM\ManyToOne(targetEntity="Users", inversedBy="atelier")
     * @ORM\JoinColumn(name="users_id", referencedColumnName="id")
     */

    private $user;


  /**
       * @ORM\OneToMany(targetEntity="Participation", mappedBy="atelier")
        * @ORM\JoinColumn(name="participation_id", referencedColumnName="id")
       */
    private $participations;
    /**
     * @ORM\OneToMany(targetEntity="StatutAtelier", mappedBy="atelier")
     */
    private $statut;

    /**
     * @ORM\OneToMany(targetEntity="Photos",mappedBy="atelier")
     */
    private $photos;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Atelier
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set equipements
     *
     * @param string $equipements
     *
     * @return Atelier
     */
    public function setEquipements($equipements)
    {
        $this->equipements = $equipements;

        return $this;
    }

    /**
     * Get equipements
     *
     * @return string
     */
    public function getEquipements()
    {
        return $this->equipements;
    }

    /**
     * Set ingredients
     *
     * @param string $ingredients
     *
     * @return Atelier
     */
    public function setIngredients($ingredients)
    {
        $this->ingredients = $ingredients;

        return $this;
    }

    /**
     * Get ingredients
     *
     * @return string
     */
    public function getIngredients()
    {
        return $this->ingredients;
    }

    /**
     * Set tarif
     *
     * @param string $tarif
     *
     * @return Atelier
     */
    public function setTarif($tarif)
    {
        $this->tarif = $tarif;

        return $this;
    }

    /**
     * Get tarif
     *
     * @return string
     */
    public function getTarif()
    {
        return $this->tarif;
    }

    /**
     * Set users
     *
     * @param \Partage\PartageBundle\Entity\Users $users
     *
     * @return Atelier
     */
    public function setUsers(\Partage\PartageBundle\Entity\Users $users = null)
    {
        $this->users = $users;

        return $this;
    }

    /**
     * Get users
     *
     * @return \Partage\PartageBundle\Entity\Users
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Set user
     *
     * @param \Partage\PartageBundle\Entity\Users $user
     *
     * @return Atelier
     */
    public function setUser(\Partage\PartageBundle\Entity\Users $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Partage\PartageBundle\Entity\Users
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->assisteAtelier = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add assisteAtelier
     *
     * @param \Partage\PartageBundle\Entity\Users $assisteAtelier
     *
     * @return Atelier
     */
    public function addAssisteAtelier(\Partage\PartageBundle\Entity\Users $assisteAtelier)
    {
        $this->assisteAtelier[] = $assisteAtelier;

        return $this;
    }

    /**
     * Remove assisteAtelier
     *
     * @param \Partage\PartageBundle\Entity\Users $assisteAtelier
     */
    public function removeAssisteAtelier(\Partage\PartageBundle\Entity\Users $assisteAtelier)
    {
        $this->assisteAtelier->removeElement($assisteAtelier);
    }

    /**
     * Get assisteAtelier
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAssisteAtelier()
    {
        return $this->assisteAtelier;
    }


    /**
     * Set participation
     *
     * @param \Partage\PartageBundle\Entity\Participation $participation
     *
     * @return Atelier
     */
    public function setParticipation(\Partage\PartageBundle\Entity\Participation $participation = null)
    {
        $this->participation = $participation;

        return $this;
    }

    /**
     * Get participation
     *
     * @return \Partage\PartageBundle\Entity\Participation
     */
    public function getParticipation()
    {
        return $this->participation;
    }

    /**
     * Add statut
     *
     * @param \Partage\PartageBundle\Entity\StatutAtelier $statut
     *
     * @return Atelier
     */
    public function addStatut(\Partage\PartageBundle\Entity\StatutAtelier $statut)
    {
        $this->statut[] = $statut;

        return $this;
    }

    /**
     * Remove statut
     *
     * @param \Partage\PartageBundle\Entity\StatutAtelier $statut
     */
    public function removeStatut(\Partage\PartageBundle\Entity\StatutAtelier $statut)
    {
        $this->statut->removeElement($statut);
    }

    /**
     * Get statut
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Add participation
     *
     * @param \Partage\PartageBundle\Entity\Participation $participation
     *
     * @return Atelier
     */
    public function addParticipation(\Partage\PartageBundle\Entity\Participation $participation)
    {
        $this->participations[] = $participation;

        return $this;
    }

    /**
     * Remove participation
     *
     * @param \Partage\PartageBundle\Entity\Participation $participation
     */
    public function removeParticipation(\Partage\PartageBundle\Entity\Participation $participation)
    {
        $this->participations->removeElement($participation);
    }

    /**
     * Get participations
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getParticipations()
    {
        return $this->participations;
    }

    /**
     * Set available
     *
     * @param boolean $available
     *
     * @return Atelier
     */
    public function setAvailable($available)
    {
        $this->available = $available;

        return $this;
    }

    /**
     * Get available
     *
     * @return boolean
     */
    public function getAvailable()
    {
        return $this->available;
    }

    /**
     * Add photo
     *
     * @param \Partage\PartageBundle\Entity\Photos $photo
     *
     * @return Atelier
     */
    public function addPhoto(\Partage\PartageBundle\Entity\Photos $photo)
    {
        $this->photos[] = $photo;

        return $this;
    }

    /**
     * Remove photo
     *
     * @param \Partage\PartageBundle\Entity\Photos $photo
     */
    public function removePhoto(\Partage\PartageBundle\Entity\Photos $photo)
    {
        $this->photos->removeElement($photo);
    }

    /**
     * Get photos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPhotos()
    {
        return $this->photos;
    }
}
