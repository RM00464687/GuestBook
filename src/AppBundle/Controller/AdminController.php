<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\Session;

class AdminController extends Controller
{
    /**
     * @Route("/admin/", name="adminpage")
     */
    public function indexAction(Request $request)
    {
        $error = NULL;
        if ($request->getMethod() == 'POST') {
            $username = $request->request->get('username');
            $password = $request->request->get('password');
            if (!empty($username) && !empty($password)) {
                $users = $this->getDoctrine()
                        ->getRepository(\AppBundle\Entity\User::class)
                        ->findOneBy(['username' => $username, 'password' => $password]);
                
                if (!empty($users)) {
                    $session = new Session();
                    //$session->start();
                    $session->set('adminuser', $users);
                    
                    return $this->redirectToRoute('listpage');
                } else {
                    $error = "Invalid UserName and Password!!";
                }
            } else {
                $error = "UserName and Password cannot be blank!!";
            }
        }
        
        // replace this example code with whatever you need
        return $this->render('admin/index.html.twig', [
            'error' => $error
        ]);
    }
    
    
    
    /**
     * @Route("/admin/list", name="listpage")
     */
    public function listAction(Request $request)
    {
        $session = new Session();
        $users = $session->get('adminuser');
        if (empty($users)) {
            return $this->redirectToRoute('adminpage');
        }
        
        $guestBook = $this->getDoctrine()
                        ->getRepository(\AppBundle\Entity\GuestBook::class)
                        ->findBy(['status' => 1]);
        
        $users = $this->getDoctrine()
                        ->getRepository(\AppBundle\Entity\User::class)
                        ->findBy(['status' => 1, 'userType' => 2]);
        $allUser = array();
        foreach ($users as $user) {
            $allUser[$user->getId()] = $user->getName();
        }
        
        // replace this example code with whatever you need
        return $this->render('admin/list.html.twig', [
            'guestBook' => $guestBook,
            'allUser' => $allUser,
        ]);
    }
    
    
    
    /**
     * @Route("/admin/logout", name="logoutpage")
     */
    public function logoutAction(Request $request)
    {
        $session = new Session();
        $users = $session->get('adminuser');
        if (empty($users)) {
            return $this->redirectToRoute('adminpage');
        }
        
        $session->clear();
        return $this->redirectToRoute('adminpage');
    }
    
    
    /**
     * @Route("/admin/approve", name="adminapprovepage")
     */
    public function approveAction(Request $request)
    {
        $session = new Session();
        $users = $session->get('adminuser');
        if (empty($users)) {
            return $this->redirectToRoute('adminpage');
        }
        
        $bookId = $request->query->get('id');
        if (!empty($bookId)) {
            $guestBook = $this->getDoctrine()
                        ->getRepository(\AppBundle\Entity\GuestBook::class)
                        ->findOneBy(['id' => $bookId]);
        
            $entityManager = $this->getDoctrine()->getManager();
            $guestBook->setStatus(1);
            $entityManager->persist($guestBook);
            $entityManager->flush();

            // return to listing page
            return $this->redirectToRoute('listpage');
        } else {
            return $this->redirectToRoute('listpage');
        }
    }
    
    
    /**
     * @Route("/admin/remove", name="adminremovepage")
     */
    public function removeAction(Request $request)
    {
        $session = new Session();
        $users = $session->get('adminuser');
        if (empty($users)) {
            return $this->redirectToRoute('adminpage');
        }
        
        $bookId = $request->query->get('id');
        if (!empty($bookId)) {
            $guestBook = $this->getDoctrine()
                        ->getRepository(\AppBundle\Entity\GuestBook::class)
                        ->findOneBy(['id' => $bookId]);
        
            $entityManager = $this->getDoctrine()->getManager();
            $guestBook->setStatus(2);
            $entityManager->persist($guestBook);
            $entityManager->flush();

            // return to listing page
            return $this->redirectToRoute('listpage');
        } else {
            return $this->redirectToRoute('listpage');
        }
        
    }
}
