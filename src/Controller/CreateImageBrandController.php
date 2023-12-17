<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CreateImageBrandController extends AbstractController
{
    #[Route(path: '/image', name: 'image')]
    public function returnImageForm(): Response
    {
        return $this->render('imageUpload.html.twig');
    }

    #[Route(path: '/image/upload', name: 'upload')]
    public function uploadImage(): Response
    {
        $name = $_FILES['image']['name'];
        $tmp_name = $_FILES['image']['tmp_name'];
        move_uploaded_file($tmp_name, "../Uploads" . $name);
        return $this->render('imageUpload.html.twig');
    }

}