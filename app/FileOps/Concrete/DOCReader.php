<?php


namespace App\FileOps\Concrete;


use App\FileOps\Interfaces\FileReader;

class DOCReader implements FileReader
{

    public function read(string $filename) : array
    {
        return [
            'data' => 'foobar',
            'sourceType' => 'doc'
        ];
    }
}
