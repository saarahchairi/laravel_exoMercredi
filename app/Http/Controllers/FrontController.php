<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function front(){
        $fronts = [
            ["nom" => "Sarah",
            "fonction" => "CEO",
            "cheminDunePhoto" => "https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80"],
            ["nom" => "Paul",
            "fonction" => "CEO",
            "cheminDunePhoto" => "https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80"],
            ["nom" => "Kadri",
            "fonction" => "CEO",
            "cheminDunePhoto" => "https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80"],
        ];
        return view("team.web.dev.frontend",compact("fronts"));
    }
}
