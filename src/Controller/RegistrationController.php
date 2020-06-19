<?php

namespace App\Controller;

use App\Entity\RefPokemonType;
use DateTime;
use Doctrine\ORM\Mapping as ORM;


use App\Entity\Pokemon;
use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Entity\PokemonType;
use App\Security\PokegameAuthenticator;
use Doctrine\DBAL\Exception\UniqueConstraintViolationException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Guard\GuardAuthenticatorHandler;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class RegistrationController extends AbstractController
{
    /**
     * @Route("/register", name="app_register")
     */
    public function register(Request $request, UserPasswordEncoderInterface $passwordEncoder, GuardAuthenticatorHandler $guardHandler, PokegameAuthenticator $authenticator): Response
    {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
            $user->setPassword(
                $passwordEncoder->encodePassword(
                    $user,
                    $form->get('password')->getData()
                )
            );
            $user->setRoles(['ROLE_USER']);
			$user->setPieces(5000);
            $entityManager = $this->getDoctrine()->getManager();
            try {
                $entityManager->persist($user);
                $entityManager->flush();
                $dresseur = $this->
                getDoctrine()
                    ->getRepository(User::class)
                    ->findBy(['username' =>  $form->get('username')->getData()]);
                $dressId = $dresseur[0]->getId();
                $pokemon = new Pokemon();

                $espece = $this
                    ->getDoctrine()
                    ->getRepository(PokemonType::class)
                    ->find((int) $form->get('starter')->getData());

                dump($espece);
                $pokemon->setNom($espece->getNom());
                $pokemon->setDresseurid($dressId);
                $pokemon->setXp(0);
                $pokemon->setNiveau(1);
                $pokemon->setPrix(0);
				$pokemon->setEstEnVente(0);
                $dateEntrainement = new DateTime('0/0/0 0:0:0');
				$dateEntrainement->format('d/m/Y H:i:s');
				$dateChasse = new DateTime('0/0/0 0:0:0');
				$dateChasse->format('d/m/Y H:i:s');
                $pokemon->setDerniereChasse($dateChasse);
                $pokemon->setDernierEntrainement($dateEntrainement);
                $sexe = rand(0,1);
                if ($sexe == 1) {
                    $pokemon->setSexe('F');
                }
                else {
                    $pokemon->setSexe('M');
                }                $pokemon->setIdEspece($espece->getId());
                $entityManager->persist($pokemon);
                $entityManager->flush();


            } catch (UniqueConstraintViolationException $exception) {
                return $this->render('registration/register_error.html.twig', [
                    'error' => 'Le pseudo existe déjà. Veuillez vous inscrire avec un autre pseudo.'
                ]);
            }



            // do anything else you need here, like send an email

            return $guardHandler->authenticateUserAndHandleSuccess(
                $user,
                $request,
                $authenticator,
                'main' // firewall name in security.yaml
            );
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView()
        ]);
    }
}
