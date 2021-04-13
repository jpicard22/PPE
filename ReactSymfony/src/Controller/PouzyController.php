<?php

namespace App\Controller;

use App\Entity\Livre;
use App\Form\LivresType;
use App\Form\EditProfilType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use phpDocumentor\Reflection\PseudoTypes\False_;
use Symfony\Component\Validator\Constraints\Collection;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoder;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class PouzyController extends AbstractController
{
    /**
     * @Route("/", name="Pouzy")
     */
    public function index(): Response
    {
        return $this->render('pages/home.html.twig', [
            'controller_name' => 'PouzyController',
        ]);
    }

     /**
     * @Route("/about-us", name="app_about")
     */
    public function about(): Response
    {
        return $this->render('pages/about.html.twig');

    }

     /**
     * @Route("/connecte", name="connecte")
     */
    public function connecte(): Response
    {
        return $this->render('pages/connecte.html.twig');
    }


    /**
     * @Route("/livres", name="livres")
     */
    public function livres(): Response
    {
    
        return $this->render('pages/livres.html.twig');
       
    }

    
     /**
     * @Route("/connecte/livres/ajout", name="ajoutlivre")
     */
    public function ajoutLivre(Request $request)
    {

        $livre = new Livre;

        $form = $this->createForm(LivresType::class, $livre);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $livre->setUsers($this->getUser());
           

            $em = $this->getDoctrine()->getManager();
            $em->persist($livre);
            $em->flush();

            return $this->redirectToRoute('connecte');
        }
        return $this->render('pages/ajoutlivre.html.twig'
        
        //, [
        //   'form' => $form->createView(),
       // ]
    );

    }

     /**
     * @Route("/profil", name="profil")
     */
    public function profil(): Response
    {
        return $this->render('pages/profil.html.twig');
    }

     /**
     * @Route("/connecte/profil/editprofil", name="editprofil")
     */
    public function editprofil(Request $request)
    {

        $user = $this->getUser();

        $form = $this->createForm(EditProfilType::class, $user);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
           
           

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            $this->addFlash('message', 'Profil mis à jour');

            return $this->redirectToRoute('connecte');
        }
        return $this->render('pages/editprofil.html.twig', [
            'form' => $form->createView(),
        ]);

    }

    /**
     * @Route("/connecte/profil/editpass", name="editpass")
     */
    public function editPass(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        if($request->isMethod('POST')){
            $em = $this->getDoctrine()->getManager();

            $user = $this->getUser();

            //on vérifie si les 2 mots de passe sont identiques
            if($request->request->get('pass') == $request->request->get('pass2')){
                $user->setPassword($passwordEncoder->encodePassword($user, $request->request->get('pass')));
                $em->flush();
                $this->addFlash('message', 'Mot de passe mis à jour avec succès');

            }else{
                $this->addFlash('error', 'Les deux mots de passe ne sont pas identiques');
            }

        }

      
        return $this->render('pages/editpass.html.twig');

    }

}