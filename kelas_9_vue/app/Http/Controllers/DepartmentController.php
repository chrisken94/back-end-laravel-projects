<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    // public function index() {
    //     $client = new \GuzzleHttp\Client();
    //     // $response = $client->request('GET', 'https://api.github.com/repos/guzzle/guzzle');
    //     $response = $client->request('GET', 'https://google.com');

    //     // echo $response->getStatusCode(); // 200
    //     // echo $response->getHeaderLine('content-type'); // 'application/json; charset=utf8'
    //     echo $response->getBody(); // '{"id": 1420053, "name": "guzzle", ...}'
    //     dd($response);
    //     // return $response;
    // }

    public function index() {
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'http://127.0.0.1:8001/api/department');
        $body = $response->getBody()->getContents();
        $data = json_decode($body);
        // dd($data);
        return view('department/home', [
            "data" => $data
        ]);
        // return $body;
        // echo $response->getBody();
    }
}
