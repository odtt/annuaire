<?php

namespace App\Controller;

use App\Entity\Apropos;
use App\Form\AproposType;
//use App\Repository\AproposRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/apropos")
 */
class AproposController extends AbstractController
{
//    private $aproposRepository;
//
//    public function __construct(AproposRepository $aproposRepository)
//    {
//        $this->aproposRepository = $aproposRepository;
//    }

    /**
     * @Route("/", name="apropos_index", methods={"GET"})
     */
    public function index(): Response
    {
//        return $this->render('apropos/index.html.twig', [
//            'apropos' => $this->aproposRepository->findAll(),
//        ]);
    }

    /**
     * @Route("/new", name="apropos_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $apropo = new Apropos();
        $form = $this->createForm(AproposType::class, $apropo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($apropo);
            $entityManager->flush();

            return $this->redirectToRoute('apropos_index');
        }

        return $this->render('apropos/new.html.twig', [
            'apropo' => $apropo,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="apropos_show", methods={"GET"})
     */
    public function show(Apropos $apropo): Response
    {
        return $this->render('apropos/show.html.twig', [
            'apropo' => $apropo,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="apropos_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Apropos $apropo): Response
    {
        $form = $this->createForm(AproposType::class, $apropo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('apropos_index', [
                'id' => $apropo->getId(),
            ]);
        }

        return $this->render('apropos/edit.html.twig', [
            'apropo' => $apropo,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="apropos_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Apropos $apropo): Response
    {
        if ($this->isCsrfTokenValid('delete'.$apropo->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($apropo);
            $entityManager->flush();
        }

        return $this->redirectToRoute('apropos_index');
    }
}
