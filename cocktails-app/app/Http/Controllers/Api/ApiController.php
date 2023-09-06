<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cocktail as Cocktail;

class ApiController extends Controller
{
    function index()
    {
        $cocktails = Cocktail::paginate(7);
        return response()->json($cocktails);
    }
}
