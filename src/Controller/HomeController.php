<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'home')]
    public function index(): Response
    {
        $json = file_get_contents("projet.json");
        $projets = json_decode($json);
        //dd($projets);
        return $this->render('index.html.twig',[
            "projets"=>$projets]);
    }
    #[Route('/cv', name: 'cv')]
    public function cv(): Response
    {
        return $this->render('cv.html.twig');
    }
    #[Route('/competences', name: 'competences')]
    public function competences(): Response
    {
        $json = file_get_contents("projet.json");
        $projet = json_decode($json);
        
        return $this->render('competences.html.twig', [
            'projets' => $projet,
        ]);
    }
    
    #[Route('/contact', name: 'contact')]
    public function contact(): Response
    {
        return $this->render('contact.html.twig');
    }
    #[Route('/excel', name: 'excel')]
    public function excel(): Response
    {
        return $this->render('excel.html.twig');
    }
    
    #[Route('/certifications', name: 'certifications')]
    public function certification(): Response
    {
        $json = file_get_contents("certification.json");
        $certifications = json_decode($json);

        return $this->render('certification.html.twig',[
            "certifications"=>$certifications
        ]);
    }
}
