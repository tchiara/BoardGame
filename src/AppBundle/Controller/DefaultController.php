<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type as FormType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller {

    /**
     * @Route("/", name="home")
     * @Template
     */
    public function homeAction() {
        return [];
    }

    /**
     * @Route("/rules", name="rules")
     * @Template
     */
    public function rulesAction() {
        return [];
    }

    /**
     * @Route("/create", name="createParty")
     * @Template
     */
    public function createPartyAction(Request $request) {
//        Creation du formulaire de creation d'une partie
        $oForm = $this->createFormBuilder()
                ->add('Theme', EntityType::class, array(
                    'class' => 'AppBundle:Theme',
                    'choice_label' => 'wording',
                    'multiple' => false, 'expanded' => true))
                ->add('Type', FormType\ChoiceType::class, array('choices' => array(
                        'Seul' => 'Alone_user',
                        'Multi-joueurs' => 'Multiple_user'),
                    'multiple' => false, 'expanded' => true))
                ->add('nombreJoeur', FormType\ChoiceType::class, array('choices' => array(
                        '1' => '1',
                        '2' => '2',
                        '3' => '3',
                        '4' => '4',
                        '5' => '5',
                        '6' => '6',
                        '7' => '7',
                        '8' => '8',
                        '9' => '9'),
                    'multiple' => false, 'expanded' => true))
                ->add('Creer', FormType\SubmitType::class, array('attr' => array('class' => 'save')))
                ->getForm();
// Génération du formulaire

        $oForm->handleRequest($request);
        if ($oForm->isSubmitted() && $oForm->isValid()) {
            $form = $oForm->getData();
            return $this->redirectToRoute('game_create', array(
                        'nbJ' => $form['nombreJoeur'],
                        'theme' => $form['Theme']->getId()
            ));
        }

        return ['formCreate' => $oForm->createView()];
    }

    /**
     * @Route("/join", name="joinParty")
     * @Template
     */
    public function joinPartyAction(Request $request) {
        // recupération des informations de toutes les parties de la base de données.
        $repoGame = $this->getDoctrine()->getRepository('AppBundle:Game');
        $oGame = $repoGame->findAll();
        return['games' => $oGame];
    }

    /**
     * @Route("/gameTheme", name="gameTheme")
     * @Template
     */
    public function gameThemeAction() {
        return [];
    }

}
