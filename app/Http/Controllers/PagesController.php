<?php

namespace App\Http\Controllers;

use App\Detection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;


class PagesController extends Controller
{

    public function index()
    {
        return view('index');
    }

    public function task1()
    {
        return view('tasks.task1');
    }

    public function task2()
    {
        return view('tasks.task2');
    }

    public function task3()
    {
        $detection = Detection::all();
        return response()->json(
            $detection,
            200
        );
    }

    public function send(Request $request)
    {
        $rules = [
            'uid'            => 'required|numeric',
            'height'         => 'required|string',
            'weight'         => 'required|string',
            'detection_date' => 'required|string',
            'gps'            => 'required|string',
        ];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return [
                'fail'   => true,
                'errors' => $validator->getMessageBag()->toArray(),
            ];
        }

        $detection = new Detection();
        $detection->uid = $request->input('uid');
        $detection->height = $request->input('height');
        $detection->weight = $request->input('weight');
        $detection->detection_date = $request->input('detection_date');
        $detection->gps = $request->input('gps');
        $detection->save();

        return response()->json(
            "Successfully added!",
            200
        );
    }
}
