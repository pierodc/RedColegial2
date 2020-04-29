<?php

namespace App\Controller;

use App\Entity\Connection_db;
use App\Entity\Producto;
use App\Form\ProductoType;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

//use Doctrine\DBAL\Driver\Connection;
//use Doctrine\DBAL\DriverManager;


class ProductoController extends AbstractController
{
    /**
     * @Route("/producto", name="producto")
     */
    public function index()
    {
		//$Producto = new Producto;
		$db = new Connection_db;
		
		
		$sql = "SELECT * FROM Producto";
		$Productos = $db->conn->query($sql); // Simple, but has several drawbacks

		
		return $this->render('producto/index2.html.twig', [
            'controller_name' => 'ProductoController',
			'Productos' => $Productos,
        ]);
    }
	
	
	
	
	 
	  /**
     * @Route("/producto/new", name="producto_new")
     */
  	public function new(Request $request)
    {
		$defaults = [
            'dueDate' => new \DateTime('tomorrow'),
        ];

		 $form = $this->createFormBuilder($defaults)
            ->add('task', TextType::class)
            ->add('dueDate', DateType::class)
            ->getForm();

		$form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            // ... perform some action, such as saving the data to the database

            return $this->redirectToRoute('producto');
        }
        return $this->render('producto/new.html.twig', [
            'form' => $form->createView(),
        ]);
		
		
		
    }
	
	
	
	  /**
	 * @Route("/producto/{slug}", name="producto_show")
	 */
    public function show($slug = '')
    {
        return $this->render('producto/detalle.html.twig', [
            'controller_name' => 'ProductoController',
			'slug' => $slug,
        ]);
		
    }
	
	
	
	
}
