<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Panier;
use App\Form\PanierType;
use App\Entity\Produit;
use App\Form\ProduitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Contracts\Translation\TranslatorInterface;


/**
 * @Route("/{_locale}")
 */
class ProduitController extends AbstractController
{
    /**
     * @Route("/produit", name="produit")
     */
    public function index(Request $request, TranslatorInterface $translator){
        $pdo = $this -> getDoctrine()->getManager();
        $produit = new Produit();
        $form = $this->createForm(ProduitType::class, $produit);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $fichier = $form->get('imageUpload')->getData();
            
            if($fichier){
                $nomfichier = uniqid(). '.' .$fichier->guessExtension();

                try {
                    $fichier->move(
                        $this->getParameter('upload_dir'),
                        $nomfichier
                    );
                }
                catch (FileException $e){
                    $this->addFlash("danger", $translator->tran('file.error' |trans));
                    return $this->redirectToRoute('produit');
                }

                $produit->setImage($nomfichier);
            }
            $pdo->persist($produit);   
            $pdo->flush();             
        }

        $produits = $pdo -> getRepository(Produit::class)->findAll();

        return $this->render('produit/index.html.twig', [
            'produits' => $produits,
            'form_produit_new' => $form->createView()
        ]);
        
    }

    /**
     * @Route("/produit/{id}", name="mon_produit")
     */
    public function produit(Request $request, Produit $produit=null){

        if($produit !=null){
            $panier=new Panier($produit);
            $form = $this->createForm(PanierType::class, $panier);
            $form->handleRequest($request);

            if($form->isSubmitted() && $form->isValid()){
                $pdo = $this -> getDoctrine()->getManager();
                $pdo->persist($panier);
                $pdo->flush();

                $this->addFlash("success", 'Produit ajouté au panier !');
            }
            
            return $this->render('produit/produit.html.twig',[
                'produit'=> $produit,
                'form'=>$form->createView()
            ]);

        }
        else{
            $this-> addFlash("danger", "Produit introuvable !");
            return $this->redirectToRoute('produit');
        }

    }

    /**
     * @Route("/produit/delete/{id}", name="delete_produit")
     */
    public function delete(Produit $produit=null){
        if($produit != null){
            $pdo = $this->getDoctrine()->getManager();
            $pdo -> remove($produit);
            $pdo -> flush();

            $this-> addFlash("success", "Produit supprimé de la liste !");
        }
        else{
            $this-> addFlash("danger", "Produit introuvable");
        }

        if ($produit->getImage() != null) {
            unlink($this->getParameter('upload_dir') . $produit->getImage());
        }

        return $this->redirectToRoute('produit');
    }
}

