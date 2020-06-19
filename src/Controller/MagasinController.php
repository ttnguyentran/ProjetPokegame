<?php

namespace App\Controller;

use App\Entity\Pokemon;
use App\Repository\PokemonRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

/**
 * @Route("/magasin")
 */
class MagasinController extends AbstractController
{
	/**
     * @Route("/", name="shop_index")
     */
    public function index(PokemonRepository $pokemonRepository)
    {
        $pokemons = $pokemonRepository->getMagasin($this->getUser()->getId());

        return $this->render('magasin/index.html.twig', [
			'pokemons' => $pokemons, 
		]);
    }
	
	
	/**
     * @Route("/{id}", name="shop_acheter", methods={"GET", "POST"})
     */
    public function acheter(PokemonRepository $pokemonRepository, UserRepository $userRepository, Pokemon $pokemon)
    {
        $prix = $pokemon->getPrix();
		$current_pieces = $this->getUser()->getPieces();
		
		if ($current_pieces < $prix) 
		{
			return $this->render('magasin/acheter_ko.html.twig', [
                'error' => 'PokePièces insuffisantes...'
			]);
		}
		
		$userRepository->updatePiecesAfterSelling($pokemon->getDresseurid(), $prix);
		$userRepository->updatePiecesAfterBuying($this->getUser()->getId(), $prix);
		
		$pokemonRepository->updateSoldPokemon ($pokemon->getId(), $this->getUser()->getId());

        return $this->render('magasin/acheter_ok.html.twig', [
			'pokemon' => $pokemon,
			'pieces' => ($this->getUser()->getPieces()-$prix),
		]);
    }
}