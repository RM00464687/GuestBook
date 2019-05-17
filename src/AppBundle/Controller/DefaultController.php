<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\Session;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $session = new Session();
        $loggedInUser = $session->get('user');
        
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
        return $this->render('default/index.html.twig', [
            'loggedInUser' => $loggedInUser,
            'guestBook' => $guestBook,
            'allUser' => $allUser,
        ]);
    }
    
    
    /**
     * @Route("/login", name="userlogin")
     */
    public function loginAction(Request $request)
    {
        $error = NULL;
        if ($request->getMethod() == 'POST') {
            $email = $request->request->get('email');
            $password = $request->request->get('password');
            if (!empty($email) && !empty($password)) {
                $users = $this->getDoctrine()
                        ->getRepository(\AppBundle\Entity\User::class)
                        ->findOneBy(['email' => $email, 'password' => $password, 'userType' => 2]);
                
                if (!empty($users)) {
                    $session = new Session();
                    //$session->start();
                    $session->set('user', $users);
                    
                    return $this->redirectToRoute('guestbookpage');
                } else {
                    $error = "Invalid Email and Password!!";
                }
            } else {
                $error = "Email and Password cannot be blank!!";
            }
        }
        
        // replace this example code with whatever you need
        return $this->render('default/login.html.twig', [
            'error' => $error,
        ]);
    }
    
    
    /**
     * @Route("/add-guest-book", name="guestbookpage")
     */
    public function addGuestBookAction(Request $request)
    {
        $session = new Session();
        $loggedInUser = $session->get('user');
        if (empty($loggedInUser)) {
            return $this->redirectToRoute('userlogin');
        }
        
        $error = NULL;
        if ($request->getMethod() == 'POST') {
            $name = $request->request->get('name');
            $content = $request->request->get('content');
            if (!empty($name) && !empty($content)) {
                $entityManager = $this->getDoctrine()->getManager();
                
                $guestBook = new \AppBundle\Entity\GuestBook();
                $guestBook->setName($name);
                $guestBook->setContent($content);
                $guestBook->setUserId(2);
                $guestBook->setStatus(1);
                
                $guestBook->setCreatedDate(new \DateTime('NOW'));
                
                $entityManager->persist($guestBook);

                $entityManager->flush();
                
                return $this->redirectToRoute('homepage');
            } else {
                $error = "Name and Content cannot be blank!!";
            }
        }
        
        // replace this example code with whatever you need
        return $this->render('default/add-guest-book.html.twig', [
            'loggedInUser' => $loggedInUser,
            'error' => $error,
        ]);
    }
    
    
    /**
     * @Route("/signup", name="usersignup")
     */
    public function signupAction(Request $request)
    {
        $errorMsg = NULL;
        $error = NULL;
        $errorCnt = 0;
        if ($request->getMethod() == 'POST') {
            $name = $request->request->get('name');
            $username = $request->request->get('username');
            $email = $request->request->get('email');
            $password = $request->request->get('password');
            
            if (empty($name)) {
                $errorMsg .= "Name cannot be blank!!<br>";
                $errorCnt = 1;
            }
            
            if (empty($username)) {
                $errorMsg .= "UserName cannot be blank!!<br>";
                $errorCnt = 1;
            }           

            if (empty($email)) {
                $errorMsg .= "Email cannot be blank!!<br>";
                $errorCnt = 1;
            }
            
            if (empty($password)) {
                $errorMsg .= "Password cannot be blank!!<br>";
                $errorCnt = 1;
            }
            
            if (empty($errorCnt)) {
                $users = $this->getDoctrine()
                        ->getRepository(\AppBundle\Entity\User::class)
                        ->findOneBy(['username' => $username]);
                
                if (!empty($users)) {
                    $error = "Username already exists. Please try another!!";
                } else {
                    $entityManager = $this->getDoctrine()->getManager();

                    $user = new \AppBundle\Entity\User();
                    $user->setName($name);
                    $user->setEmail($email);
                    $user->setUsername($username);
                    $user->setPassword($password);
                    $user->setStatus(1);
                    $user->setUserType(2);

                    // tells Doctrine you want to (eventually) save the Product (no queries yet)
                    $entityManager->persist($user);

                    // actually executes the queries (i.e. the INSERT query)
                    $entityManager->flush();
                    
                    return $this->redirectToRoute('userlogin');
                }
            } else {
                $error = $errorMsg;
            }
        }
        
        // replace this example code with whatever you need
        return $this->render('default/signup.html.twig', [
            'error' => $error,
        ]);
    }
    
    
    /**
     * @Route("/logout", name="userlogoutpage")
     */
    public function logoutAction(Request $request)
    {
        $session = new Session();
        $users = $session->get('user');
        if (empty($users)) {
            return $this->redirectToRoute('userlogin');
        }
        
        $session->clear();
        return $this->redirectToRoute('userlogin');
    }
}
