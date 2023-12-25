<?php

namespace App\Controller;

use App\Services\UploadImageService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CreateImageBrandController extends AbstractController
{
    public function __construct(private UploadImageService $uploadImageService)
    {
    }

    #[Route(path: '/image', name: 'image')]
    public function returnImageForm(): Response
    {
        return $this->render('imageUpload.html.twig');
    }

    #[Route(path: '/image/upload', name: 'upload', methods: 'POST')]
    public function uploadImage(Request $request): Response
    {
        $uploadedFile = $this->uploadImageService->getUploadedFile($request);

        return $this->json($this->uploadImageService->uploadAndMove($uploadedFile));
    }

}