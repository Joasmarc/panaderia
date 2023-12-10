<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $request = \Config\Services::request();
        $uri = $request->getUri();
        $data = [
            "valor" => $uri->getSegment(2),
        ];
        return view('inicio', $data);
    }
}
