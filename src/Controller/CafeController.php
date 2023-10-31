<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\CafeRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Cafe;
use App\Entity\TypeCafe;
class CafeController extends AbstractController
{
   #[Route('/private-liste-cafe', name: 'app_liste-cafe')]
   public function listeCafe(EntityManagerInterface $entityManagerInterface): Response
   {
       $repoCafe = $entityManagerInterface->getRepository(TypeCafe::class);
       $cafes = $repoCafe->findAll();
       return $this->render('base/cafe.html.twig', [
          'cafes' => $cafes
       ]);
   
 
 }
}