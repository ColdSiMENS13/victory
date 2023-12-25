<?php

namespace App\Services;

use App\Exceptions\FileExtensionIsNotSupportedException;
use App\Exceptions\FileIsNotUploadedException;
use App\Exceptions\LargeFileSizeException;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class UploadImageService
{
    private string $extension;
    public function getUploadedFile($request): UploadedFile
    {
        if($request->files->get('image') === null)
        {
            throw new FileIsNotUploadedException();
        }

       return $request->files->get('image');
    }

    public function validateImage(UploadedFile $uploadedFile): string
    {
        $this->extension = $uploadedFile->getClientOriginalExtension();

        if ($this->extension !== "png" && $this->extension !== "jpg" && $this->extension !== "jpeg")
        {
            throw new FileExtensionIsNotSupportedException();
        }
        elseif ($uploadedFile->getMaxFilesize() > PHP_INT_MAX)
        {
            throw new LargeFileSizeException();
        }

        return $uploadedFile->getClientOriginalName();
    }

    public function uploadAndMove(UploadedFile $uploadedFile): string
    {
        $originalFileName = $this->validateImage($uploadedFile);
        $newFileName = uniqid()."-".$originalFileName;
        $uploadedFile->move("../Uploads/$this->extension", $newFileName);

        return realpath("../Uploads/$this->extension/".$newFileName);
    }
}