<?php


namespace App\FileOps\Services;


use App\FileOps\Interfaces\FileReader;

class FileReadService
{
    public function read(FileReader $fileReader, string $filename)
    {
        return $fileReader->read($filename);
    }
}
