<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
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
    public function uploadImage(Request $request)
    {
        $image = $request->files->get('image');
        dd($image);
    }

}