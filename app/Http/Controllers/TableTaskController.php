<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableTaskController extends Controller
{
    public function testTask()
    {
        return view('table-page.index');
    }
}
