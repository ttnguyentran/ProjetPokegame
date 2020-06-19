<?php

namespace App\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="pokemon")
 * @ORM\Entity
 */
class Pokemon
{
    /**
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
	 * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @ORM\Column(name="nom", type="string", length=30, nullable=false)
     */
    private $nom;

    /**
     * @ORM\Column(name="sexe", type="string", length=30, nullable=false)
     */
    private $sexe;

    /**
     * @ORM\Column(name="xp", type="integer", nullable=false)
     */
    private $xp;

    /**
     * @ORM\Column(name="niveau", type="integer", nullable=false)
     */
    private $niveau;

    /**
	 * @var int
     * @ORM\Column(name="prix_vente", type="integer", nullable=false)
     */
    private $prix;

    /**
     * @ORM\Column(name="dresseur_id", type="integer", nullable=false)
     */
    private $dresseur_id;


    /**
     * @ORM\Column(name="id_espece", type="integer")
     */
    private $idEspece;

    /**
     * @ORM\Column(name="derniere_chasse", type="datetime")
     * @Assert\DateTime()
     */
    private $derniereChasse;


    /**
     * @ORM\Column(name="dernier_entrainement", type="datetime")
     * @Assert\DateTime()
     */
    private $dernierEntrainement;
	
	/**
     * @ORM\Column(name="est_en_vente", type="integer")
     */
    private $enVente;
	
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

    public function getSexe(): ?string
    {
        return $this->sexe;
    }

    public function setSexe(string $sexe): self
    {
        $this->sexe = $sexe;

        return $this;
    }

    public function getXp(): ?int
    {
        return $this->xp;
    }

    public function setXp(int $xp): self
    {
        $this->xp = $xp;

        return $this;
    }

    public function getNiveau(): ?int
    {
        return $this->niveau;
    }

    public function setNiveau(int $niveau): self
    {
        $this->niveau = $niveau;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(int $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getDresseurid(): ?int
    {
        return $this->dresseur_id;
    }

    public function setDresseurid(int $dresseur_id): self
    {
        $this->dresseur_id = $dresseur_id;

        return $this;
    }


    public function getIdEspece(): ?int
    {
        return $this->idEspece;
    }

    public function setIdEspece(int $idEspece): self
    {
        $this->idEspece = $idEspece;

        return $this;
    }
	
	public function getEstEnVente(): ?int
    {
        return $this->enVente;
    }

    public function setEstEnVente(int $enVente): self
    {
        $this->enVente = $enVente;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getDerniereChasse(): DateTime
    {
        return $this->derniereChasse;
    }

    /**
     * @param DateTime $derniereChasse
     */
    public function setDerniereChasse(DateTime $derniereChasse): void
    {
        $this->derniereChasse = $derniereChasse;
    }

    /**
     * @return DateTime
     */
    public function getDernierEntrainement(): DateTime
    {
        return $this->dernierEntrainement;
    }

    /**
     * @param DateTime $dernierEntrainement
     */
    public function setDernierEntrainement(DateTime $dernierEntrainement): void
    {
        $this->dernierEntrainement = $dernierEntrainement;
    }

    /**
     * @return DateTime
     */
    public function getDateDerniereAction(): DateTime
    {
        return $this->dateDerniereAction;
    }

    /**
     * @param DateTime $dateDerniereAction
     */
    public function setDateDerniereAction(DateTime $dateDerniereAction): void
    {
        $this->dateDerniereAction = $dateDerniereAction;
    }
}
