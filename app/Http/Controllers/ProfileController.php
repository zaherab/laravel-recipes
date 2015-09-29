<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Recipe;

use Response;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    /**
     * Display a details about the logged in user
     *
     * @return Response
     */
    public function index()
    {
        $viewData = [
            'user' => User::findOrFail(\Auth::user()->id),
        ];
        return Response::view('profile.index', $viewData);
    }

    /**
     * Display a list of the logged in user's recipes
     *
     * @return Response
     */
    public function recipes()
    {
        $viewData = [
            'user' => User::find(\Auth::user()->id)->with('savedRecipes', 'createdRecipes')->first(),
        ];
        return Response::view('profile.recipes', $viewData);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }
}
