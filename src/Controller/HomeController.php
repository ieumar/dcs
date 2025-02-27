<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('')]
class HomeController extends AbstractController
{
    #[Route('/home', name: 'home')]
    public function home(): Response
    {
        return $this->render('home.html.twig');
    }
    #[Route('/contact', name: 'contact')]
    public function contact(): Response
    {
        return $this->render('contact.html.twig');
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
}
