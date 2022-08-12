<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackController extends Controller
{
    public function back(){
        $back = [
            ["nom" => "Sarah",
            "fonction" => "CEO",
            "chemin d'une photo" => "#"],
            ["nom" => "Paul",
            "fonction" => "CEO",
            "chemin d'une photo" => "#"],
            ["nom" => "Kadri",
            "fonction" => "CEO",
            "chemin d'une photo" => "#"],
        ];
        return view("team.web.dev.backend");
    }
}
