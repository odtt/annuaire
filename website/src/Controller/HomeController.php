<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Entity\Plateforme;
use App\Repository\PlateformeRepository;
use Pagerfanta\Pagerfanta;
use App\Repository\CategorieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Pagerfanta\Adapter\DoctrineORMAdapter;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    private $categoryRepo;
    private $entityManager;
    private $plateformRepo;

    public function __construct(CategorieRepository $categorieRepository, EntityManagerInterface $entityManager, PlateformeRepository $plateformRepo)
    {
        $this->categoryRepo = $categorieRepository;
        $this->entityManager = $categorieRepository;
        $this->plateformRepo = $plateformRepo;
    }

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
     * Fonction chargant toutes les plateformes
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function platformsList()
    {
        //Requete de pour recuperer les donnees depuis la BD
        return $this->render('plateformes/list.html.twig', [
            'plateforms' => $this->plateformRepo->findBy(['visible' => true], ['nom' => 'ASC'])
        ]);
    }

    /**
     * @Route(path="/plateformes/{id}", name="show.platform")
     * Fonction chargant toutes les categories de plateformes
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showPlatform(Plateforme $plateform)
    {
        //Requete de pour recuperer les donnees depuis la BD

        return $this->render('plateformes/list.html.twig', [
            'platform' => $plateform
        ]);
    }

    /**
     * Fonction chargeant toutes les categories de plateformes
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showCategories()
    {
        // $queryBuilder = $this->entityManager->createQueryBuilder('c')
        //     ->andWhere('c.visible = 1')
        //     ->orderBy('c.nom', 'ASC');
        // $adapter = new DoctrineORMAdapter($queryBuilder);        
        // // $adapter = new DoctrineORMAdapter($this->categoryRepo->findBy(['visible' => true], ['nom' => 'ASC']));
        // $pagerfanta = new Pagerfanta($adapter);
        //     return $this->render('pagination.html.twig', [
        //     'my_pager' => $pagerfanta,
        // ]);
        //Requete de pour recuperer les donnees depuis la BD

        return $this->render('plateformes/categories.html.twig', [
            'categories' => $this->categoryRepo->findBy(['visible' => true], ['nom' => 'ASC'])
        ]);
    }

    /**
     * @Route(path="/category/{id}", name="show.category")
     * Fonction chargant la categorie courante
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showOneCategory(Categorie $categorie)
    {
        //Requete de pour recuperer les donnees depuis la BD
        return $this->render('plateformes/category.html.twig', [
            'category' => $categorie
        ]);
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
