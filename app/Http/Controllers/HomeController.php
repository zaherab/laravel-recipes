<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class HomeController extends Controller
{
    /**
     * @return Response
     */
    public function index()
    {
        return redirect()->route( 'recipes.index' );
    }
}
