<?php

namespace App\Controller;

use DateTime;
use App\Entity\Pokemon;
use App\Entity\ElementaryType;
use App\Entity\PokemonType;
use App\Form\SellForm;
use App\Repository\PokemonRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

/**
 * @Route("/pokemon")
 */
class PokemonController extends AbstractController
{
	/**
     * @Route("/", name="pokemon_index")
     */
    public function index(PokemonRepository $pokemonRepository)
    {
        $pokemons = $pokemonRepository->getPokemonByDresseurId($this->getUser()->getId());

        return $this->render('pokemon/index.html.twig', ['pokemons' => $pokemons]);
    }
	
	/**
     * @Route("/{id}", name="pokemon_show", methods={"GET", "POST"})
     */
    public function show(Pokemon $pokemon): Response
    {
        $espece = $this->getDoctrine()->getRepository(PokemonType::class)->find($pokemon->getIdEspece());
		$nom = $pokemon->getNom();
		$sexe = $pokemon->getSexe();
		$niveau = $pokemon->getNiveau();
        $typeEntity1 = $this->getDoctrine()->getRepository(ElementaryType::class)->find($espece->getType1());
        $type1 = $typeEntity1->getLibelle();
		
        if ($espece->getType2()) 
		{
            $typeEntity2 = $this->getDoctrine()->getRepository(ElementaryType::class)->find($espece->getType2());
            $type2 = $typeEntity2->getLibelle();
        }
        else
		{
            $type2 = null;
		}
		
        $derniereChasse = $pokemon->getDerniereChasse()->format('d/m/Y H:i:s');
        $dernierEntrainement = $pokemon->getDernierEntrainement()->format('d/m/Y H:i:s');
		$estEnVente = $pokemon->getEstEnVente();
		$prix = $pokemon->getPrix();

        return $this->render('pokemon/show.html.twig', [
            'pokemon' => $pokemon,
            'espece' => $espece,
			'nom' => $nom,
			'sexe' => $sexe,
			'niveau' => $niveau,
            'type1' => $type1,
            'type2' => $type2,
            'dernierEntrainement' => $dernierEntrainement,
            'derniereChasse' => $derniereChasse,
			'estEnVente' => $estEnVente,
			'prix' => $prix,
        ]);

    }
	
	
	/**
     * @Route("/{id}/entrainer", name="pokemon_train", methods={"GET","POST"})
     */
    public function train(Request $request, Pokemon $pokemon, PokemonRepository $pokeRepository)
    {
        $espece = $this->getDoctrine()->getRepository(PokemonType::class)->find($pokemon->getIdEspece());
        $courbeNiveau = $espece->getTypeCourbeNiveau();

        $niveau = $pokemon->getNiveau();
        $nextLevel = $niveau + 1;
        $trainable = $pokeRepository->checkTimeTraining($pokemon->getId());

        if (count($trainable) == 0) {
            return $this->render('pokemon/entrainement_ko.html.twig', [
                'error' => 'Un Pokémon ne peut être entrainé qu\'une fois par heure / Ce Pokémon est en vente'
            ]);
        }

        $gainExp = $this->getGainExp($courbeNiveau, $nextLevel);

        $newXp = rand(10, 30);
        $pokemon->setXp($pokemon->getXp() + $newXp);
        $pokeRepository->updateXp($pokemon->getId(), $pokemon->getXp());

        while($pokemon->getXp() >= $gainExp) 
		{
            $gainExp = $this->getGainExp($courbeNiveau, $nextLevel+1);
            $pokemon->setNiveau($nextLevel);
            $pokeRepository->updateNiveau($pokemon->getId(), $nextLevel);
            if($gainExp - $pokemon->getXp() > 0) {
                break;
            } else {
                $nextLevel++;
            }
        }

        $pokeRepository->updateDernierEntrainement($pokemon->getId());
		$pokemon->setDernierEntrainement(new DateTime('now'));
		$dernierEntrainement = $pokemon->getDernierEntrainement()->format('d/m/Y H:i:s');

        return $this->render('pokemon/entrainement_ok.html.twig', [
            'pokemon' => $pokemon,
            'xpgagne' => $newXp,
			'dernierEntrainement' => $dernierEntrainement,
        ]);
    }
	
	
	/**
     * @Route("/{id}/vendre", name="pokemon_sell", methods={"GET","POST"})
     */
	public function sell(Request $request, Pokemon $pokemon, PokemonRepository $pokeRepository)
    {
		$form = $this->createForm(SellForm::class, $pokemon);
        $form->handleRequest($request);
		
		if ($form->isSubmitted() && $form->isValid()) 
		{	
			$this->getDoctrine()->getManager()->flush();
			$pokeRepository->putOnSell($pokemon->getId());
			return $this->render('pokemon/vendre_ok.html.twig');
		}
		
		return $this->render('pokemon/vendre.html.twig', [
			'form' => $form->createView(),
			'nom' => $pokemon->getNom(),
			'sexe' => $pokemon->getSexe(),
			'niveau' => $pokemon->getNiveau(),
		]);	
	}
	
	
	public function getGainExp(String $courbeNiveau, int $nextLevel) {
        switch ($courbeNiveau) {
            case "R":
                $gainExp = intval(0.8 * (pow($nextLevel, 3)));
                break;
            case "M":
                $gainExp = intval(pow($nextLevel, 3));
                break;
            case "P":
                $gainExp = intval(1.2 * (pow($nextLevel, 3)) - 15 * (pow($nextLevel, 2)) + 100 * $nextLevel - 140);
                break;
            case "L":
                $gainExp = intval(1.25 * (pow($nextLevel, 3)));
                break;
        }
        return $gainExp;
    }
	
}