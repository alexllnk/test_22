<?php


namespace App\FileOps\Concrete;


use App\FileOps\Interfaces\FileReader;

class XMLReader implements FileReader
{

    public function read(string $filename) : array
    {
        return [
            'data' => 'foobar',
            'sourceType' => 'xml'
        ];
    }
}
