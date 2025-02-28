<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\BrowserKit\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('')]
class HomeController extends AbstractController
{
    #[Route('', name: 'default')]
    public function default(): Response
    {
        return $this->redirectToRoute('home');
    }
    #[Route('/home', name: 'home')]
    public function home(): Response
    {
        return $this->render('home.html.twig');
    }
    #[Route('/contact', name: 'contact')]
    public function contact(Request $request): Response
    {
        $data = [];
        if ($request->getMethod() == 'POST') {
            $data['sent'] = "sent";
        }
        return $this->render('contact.html.twig', $data);
    }
    #[Route('/about', name: 'about')]
    public function about(): Response
    {
        return $this->render('about.html.twig');
    }
    #[Route('/staff', name: 'staff')]
    public function staff(): Response
    {
        return $this->render('staff.html.twig');
    }
    #[Route('/academics', name: 'academics')]
    public function academics(): Response
    {
        return $this->render('academics.html.twig');
    }
    #[Route('/admin', name: 'admin')]
    public function admin()
    {
        $this->denyAccessUnlessGranted("ROLE_ADMIN");
    }
    #[Route('/admissions', name: 'admissions')]
    public function admissions()
    {
        throw new \Exception("An error occurred");
    }
}
