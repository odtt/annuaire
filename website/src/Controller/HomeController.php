<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('home/index.html.twig');
    }

    /**
     * Fonction chargant le contenu de la section : 'apropos' sur le site
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAbout()
    {
        //Requete de pour recuperer les donnees depuis la BD
        return $this->render('about/about.html.twig', []);
    }

    /**
     * Fonction chargant toutes les categories de plateformes
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showCategories()
    {
        //Requete de pour recuperer les donnees depuis la BD
        return $this->render('plateformes/categories.html.twig', []);
    }

    /**
     * Fonction chargant tous les témoignages sur le site
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showTestimonials()
    {
        //Requete de pour recuperer les donnees depuis la BD
        return $this->render('testimonial/testimonial.html.twig', []);
    }

    /**
     * Fonction chargant tous les membre de l'équipe travaillant sur le site
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showTeamMembers()
    {
        //Requete de pour recuperer les donnees depuis la BD
        return $this->render('team/members.html.twig', []);
    }

    /**
     * Fonction chargant tous les partenaires de opendata.tg
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showPartners()
    {
        //Requete de pour recuperer les donnees depuis la BD
        return $this->render('partners/partners.html.twig', []);
    }

    /**
     * Fonction chargant toutes les FAQs
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showFaqs()
    {
        //Requete de pour recuperer les donnees depuis la BD
        return $this->render('faq/faqs.html.twig', []);
    }

    /**
     * Fonction traitant le formulaire de contact
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showContactUs()
    {
        // Requete de pour recuperer les donnees depuis la BD
        // Traitement des données du formulaire
        return $this->render('', []);
    }
}
