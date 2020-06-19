<?php

namespace App\Repository;

use App\Entity\Pokemon;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Pokemon|null find($id, $lockMode = null, $lockVersion = null)
 * @method Pokemon|null findOneBy(array $criteria, array $orderBy = null)
 * @method Pokemon[]    findAll()
 * @method Pokemon[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PokemonRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Pokemon::class);
    }
	

    public function getPokemonByDresseurId($dresseur_id){
        $conn = $this->getEntityManager()->getConnection();
        $sql = 'SELECT * FROM pokemon WHERE dresseur_id ='. $dresseur_id;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
	
	public function getPokemonByPokemonId($id){
        $conn = $this->getEntityManager()->getConnection();
        $sql = 'SELECT * FROM pokemon WHERE id ='. id;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
	
	public function checkTimeTraining($id) {
        $conn = $this->getEntityManager()->getConnection();
        $sql = 'SELECT * FROM pokemon
                WHERE id NOT IN
                (SELECT id FROM pokemon WHERE (dernier_entrainement > DATE_SUB(Now(), INTERVAL 1 HOUR)))
				AND	id NOT IN 
				(SELECT id FROM pokemon WHERE est_en_vente = 1) 
				AND id = ' . $id;
        $stmt= $conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
	
	public function getListPokemonToGoHunting($dresseur_id) {
        $conn = $this->getEntityManager()->getConnection();
        $sql = 'SELECT * FROM pokemon
                WHERE id NOT IN
                (SELECT id FROM pokemon WHERE (derniere_chasse > DATE_SUB(Now(), INTERVAL 1 HOUR)))
				AND id NOT IN 
				(SELECT id FROM pokemon WHERE (dernier_entrainement > DATE_SUB(Now(), INTERVAL 1 HOUR)))
				AND dresseur_id = ' . $dresseur_id;
        $stmt= $conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
	
	
	public function updateDernierEntrainement($id) {
        $conn = $this->getEntityManager()->getConnection();
        $sql = 'UPDATE pokemon SET dernier_entrainement = Now() where id =' . $id;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }

    public function updateXp($id, $xp) {
        $conn = $this->getEntityManager()->getConnection();
        $sql = 'UPDATE pokemon SET xp =' . $xp . ' WHERE id =' . $id;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }

    public function updateNiveau($id, $niveau) {
        $conn = $this->getEntityManager()->getConnection();
        $sql = 'UPDATE pokemon SET niveau =' . $niveau . ' WHERE id =' . $id;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }
	
	public function updateDerniereChasse($id) {
        $conn = $this->getEntityManager()->getConnection();
        $sql = 'UPDATE pokemon SET derniere_chasse = Now() where id =' . $id;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }
	
	public function putOnSell($id) {
        $conn = $this->getEntityManager()->getConnection();
        $sql = 'UPDATE pokemon SET est_en_vente = 1 where id =' . $id;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }
	
	public function getMagasin($id) {
        $conn = $this->getEntityManager()->getConnection();
        $sql = 'SELECT * FROM pokemon WHERE est_en_vente = 1 AND dresseur_id <> ' . $id;
        $stmt = $conn->prepare($sql);
		$stmt->execute();
        return $stmt->fetchAll();
    }
	
	public function updateSoldPokemon ($id, $id_dresseur) {
        $conn = $this->getEntityManager()->getConnection();
        $sql = 'UPDATE pokemon SET prix_vente = 0, est_en_vente = 0, dresseur_id = ' . $id_dresseur . ' where id =' . $id;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }
}