<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index() {
        $data = [
            [
                'first_name' => 'Sajeeva',
                'last_name' => 'Hasith',
                'location' => 'Colombo'
            ],
            [
                'first_name' => 'Anjana',
                'last_name' => 'Porawagama',
                'location' => 'Colombo'
            ]
        ];

        return response()->json($data, 200);;
    }
}
