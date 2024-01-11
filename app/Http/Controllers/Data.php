<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Data extends Controller
{
    public function index() {
        $fakeData = [
            'id' => 1,
            'name' => 'nageeb'
        ];
        return response()->json($fakeData);
    }
}
