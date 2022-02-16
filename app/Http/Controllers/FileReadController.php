<?php

namespace App\Http\Controllers;

use App\FileOps\Concrete\DOCReader;
use App\FileOps\Concrete\TXTReader;
use App\FileOps\Concrete\XMLReader;
use App\FileOps\Services\FileReadService;

class FileReadController extends Controller
{
    /**
     * For table-page task purposes
     */
    public function testTask()
    {
        $fileName = public_path('/files/table-page.txt');
        //$fileName = public_path('/files/table-page.doc');
        //$fileName = public_path('/files/table-page.xml');
        preg_match('/[0-9a-z]+$/i', $fileName, $match);
        if (empty($match[0])) {
            throw new \Exception('Invalid filename provided.');
        }

        $ext = $match[0];
        if (strtolower($ext) === 'txt') {
            $fileReader = new TXTReader();
        } elseif (strtolower($ext) === 'doc') {
            $fileReader = new DOCReader();
        } elseif (strtolower($ext) === 'xml') {
            $fileReader = new XMLReader();
        } else {
            throw new \Exception('The extension isn\'t supported.');
        }

        $service = new FileReadService();

        $data = $service->read($fileReader, $fileName);

        return view('file-read-task.index', [
            'output' => "Read file <b>" . $fileName . "</b>>,<br> test data: <b>" . var_export($data, true) . "</b>"
        ]);
    }
}
