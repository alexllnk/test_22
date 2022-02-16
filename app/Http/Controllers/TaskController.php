<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JamesGordo\CSV\Parser;


class TaskController extends Controller
{

    /**
     * For table-page task purposes
     */
    public function testTask()
    {


        // Initalize the CSV parser
        $csvDataParsed = new Parser(public_path('/files/presidents.csv'));

        // Check whether the parsed data is empty
        if (empty($csvDataParsed->all())) {
            throw new \Exception('CSV-file is empty');
        }

        // The task logic
        $presidents = (array)$csvDataParsed->all();
        usort($presidents, function ($a, $b) {
            return $a->dateofBirth - $b->dateofBirth;
        });

        $yearWithMax = $presidents[0]->dateofBirth;
        $maxNumber = 1;
        foreach ($presidents as $key => $president) {
            $numberOfAlive = 1;
            for ($i = 0; $i < $key; $i++) {
                if ($presidents[$i]->dateofDeath > $presidents[$key]->dateofBirth) {
                    $numberOfAlive++;
                }
            }
            if ($numberOfAlive > $maxNumber) {
                $yearWithMax = $presidents[$key]->dateofBirth;
                $maxNumber = $numberOfAlive;
            }
        }
        return view('presidents-task.index', [
            'output' => "Max was in <b>$yearWithMax</b> with the number of <b>$maxNumber</b>"
        ]);

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
