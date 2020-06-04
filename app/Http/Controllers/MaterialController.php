<?php

namespace App\Http\Controllers;

use App\Material;
use App\Question;
use Illuminate\Http\Request;

class MaterialController extends HomeController
{
    public function index()
    {
        $materials =  Material::withCount('questions')->get();
        // dd($materials);
        $data = [
            "materials" => $materials
        ];
        return view('dashboard.admin.materials.index', $data);
    }


}
