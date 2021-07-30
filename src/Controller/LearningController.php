<?php

namespace App\Controller;

use App\Services\Capitalizer;
use App\Services\Dasher;
use App\Services\DasherCapitalizer;
use App\Services\Logger;
use App\Services\MasterClass;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Test\FormBuilderInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LearningController extends AbstractController
{
    /**
     * @Route("/learning", name="learning")
     */
    public function index(Request $request): Response
    {
        $form = $this->createFormBuilder()
            ->add('message', TextType::class)
            ->add('transform', ChoiceType::class, [
                'choices'  => [
                    'Dasher' => 0,
                    'Capitalize' => 1,
                    'All in' => 2
                ],
            ])
            ->add('log', SubmitType::class, ['label' => 'Log it'])
            ->getForm();

        $message = "";
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $task = $form->getData();

            switch ($task['transform']) {
                case 0:
                    $mc = new MasterClass(new Dasher(), new Logger());
                    $message = $mc->processor($task['message']);
                    break;
                case 1:
                    $mc = new MasterClass(new Capitalizer(), new Logger());
                    $message = $mc->processor($task['message']);
                    break;
                case 2:
                    $mc = new MasterClass(new DasherCapitalizer(new Dasher(), new Capitalizer()), new Logger());
                    $message = $mc->processor($task['message']);
                    break;
            }
        }
        return $this->render('learning/index.html.twig', [
            'controller_name' => 'LearningController',
            'form' => $form->createView(),
            'message' => $message
        ]);
}}
