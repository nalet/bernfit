<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Form\UserPreferenceType;
use App\Entity\UserPreference;
use Symfony\Component\HttpFoundation\Request;

class StartController extends Controller
{
    /**
     * @Route("/", name="start")
     */
    public function index(Request $request)
    {
        // replace this line with your own code!
        try {
            $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

            $user = $this->getUser();

            $userPreference = $this->getDoctrine()->getManager()->getRepository(UserPreference::class)->find($this->getUser());
            if ($userPreference == null) {
                $userPreference = new UserPreference();
                $userPreference->setUser($user);
                
            }

            $form = $this->createForm(UserPreferenceType::class, $userPreference);

            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {

                $this->getDoctrine()->getManager()->persist($userPreference);
                $this->getDoctrine()->getManager()->flush();
            }


            return $this->render('start/start.html.twig', array('form' => $form->createView()));
        } catch (Exception $e) {
        }

        return $this->render('start/start.html.twig');
    }
}
