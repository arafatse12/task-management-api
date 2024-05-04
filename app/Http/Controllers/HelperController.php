<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelperController extends Controller
{


    public function __construct()
    {

    }
    public function index()
    {
        $data = [];
        $input = request()->all();

        if (in_array('taskStatus', $input)) {
            $data['taskStatus'] = collect(config('enums.task_status'));
        }

        return response()->json(returnData(2000, $data));
    }
}
