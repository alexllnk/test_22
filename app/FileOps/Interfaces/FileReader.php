<?php


namespace App\FileOps\Interfaces;


interface FileReader
{
    public function read(string $filename) : array ;
}
