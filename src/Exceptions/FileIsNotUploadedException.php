<?php

namespace App\Exceptions;

use Symfony\Component\HttpFoundation\Response;

class FileIsNotUploadedException extends \RuntimeException
{
    public function __construct()
    {
        parent::__construct('File is not uploaded', Response::HTTP_BAD_REQUEST);
    }
}
