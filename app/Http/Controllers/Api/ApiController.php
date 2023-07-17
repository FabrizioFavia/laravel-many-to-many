<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index(){
        $projects = Project::paginate(4);

        $response = [
            'success'=> true,
            'results'=> $projects
        ];

        return response()->json($response);
    }
}
