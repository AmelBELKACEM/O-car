<?php

namespace App\Controller;

use App\Entity\Car;
use App\Form\CarType;
use App\Repository\CarRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CarController extends AbstractController
{
    /**
     * @Route("/", name="app_car")
     */
    public function index(CarRepository $carRepository): Response
    {
        $cars = $carRepository->findAll();
        return $this->render('car/index.html.twig', [
            'cars'=>$cars
        ]);
    }

    /**
     * @Route("/add", name="app_car_add", methods={"GET", "POST"})
     */
    public function add(Request $request, CarRepository $carRepository): Response
    {
        $car = new Car();
        $form = $this->createForm(CarType::class, $car);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
        
        
            // au sauvegarde l'entité
            $carRepository->add($car, true);

            // on redirige vers la page du film
            return $this->redirectToRoute('app_car');
        }
        return $this->renderForm('car/add.html.twig', [
           'car' => $car,
           // pour afficher le form
           'form' => $form,
        ]);
    
    }

}
