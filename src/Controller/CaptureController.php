<?php

namespace App\Controller;

use DateTime;
use App\Entity\Pokemon;
use App\Entity\PokemonType;
use App\Entity\Capture;
use App\Form\CaptureType;
use App\Repository\EntityRepository;
use App\Repository\PokemonRepository;
use App\Repository\CaptureRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

/**
 * @Route("/capture")
 */
class CaptureController extends AbstractController
{
	
	/**
     * @Route("/", name="capture_poke_dispo_index", methods={"GET", "POST"})
     */
    public function index(PokemonRepository $pokemonRepository)
    {
        $pokemons = $pokemonRepository->getListPokemonToGoHunting($this->getUser()->getId());

        return $this->render('capture/index.html.twig', ['pokemons' => $pokemons]);
    }
	
	
	/**
     * @Route("/{id}", name="capture_zone_index", methods={"GET", "POST"})
     */
    public function showZone(Pokemon $pokemon, CaptureRepository $captureRepository)
    {
        return $this->render('capture/zone.html.twig', ['zones' => $captureRepository->findAll(), 'pokemon' => $pokemon]);
    }
	
	
	/**
     * @Route("/{id}/{zone_id}", name="capture_list_poke_par_zone", methods={"GET", "POST"})
     */
    public function capturer(Request $request, $id, $zone_id, EntityRepository $entityRepository, PokemonRepository $pokemonRepository)
    {		
		$listePokeInZone = $entityRepository->getPokemonByZone($zone_id);
			
		$random1 = rand(0, count($listePokeInZone)-1);
        $poke = $listePokeInZone[$random1];
		$nomPoke = $poke['nom'];
		$random2 = rand(0, 1);
		$sexe;
		
		if ($random2 == 0) {
            $sexe = 'F';
        }
        else if ($random2 == 1) {
            $sexe = 'M';
        }
		
		$niveau = 1;
		
		$randomPoke = '' . $poke['nom'] . ',' . $poke['id'] . ',' . $sexe;

        return $this->render('capture/capture.html.twig', [
			'randomPoke' => $randomPoke, 
			'nom_pokemon' => $nomPoke,
			'sexe' => $sexe,
			'niveau' => $niveau,
			'id' => $id, 
			'zone_id' => $zone_id,
		]);
    }
	
	
	/**
     * @Route("/{id}/{zone_id}/{pokemon}", name="capture_ok", methods={"GET", "POST"})
     */
    public function capturerOK($id, $zone_id, $pokemon, PokemonRepository $pokemonRepository)
    {
		$pokemon = explode(',', $pokemon);
		
		$pokemonRepository->updateDerniereChasse($id);
			
        $captured_pokemon = new Pokemon();
        $captured_pokemon->setNom($pokemon[0]);
		$captured_pokemon->setIdEspece($pokemon[1]);
        $captured_pokemon->setDresseurid($this->getUser()->getId());
        $captured_pokemon->setXp(0);
        $captured_pokemon->setNiveau(1);
        $captured_pokemon->setPrix(0);
        $date = new DateTime('0/0/0 0:0:0');
        $date->format('d/m/Y H:i:s');
        $captured_pokemon->setDerniereChasse($date);
        $captured_pokemon->setDernierEntrainement($date);			
		$captured_pokemon->setSexe($pokemon[2]);
			
		$entityManager = $this->getDoctrine()->getManager();
		$entityManager->persist($captured_pokemon);
		$entityManager->flush();

        return $this->render('capture/capture_ok.html.twig', ['pokemon' => $captured_pokemon]);
    }
}