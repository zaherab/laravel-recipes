<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Recipe;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\ProfileRequest;

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
            'user' => user()->findOrFail( auth()->user()->id ),
        ];

        return view( 'profile.index', $viewData );
    }

    /**
     * Display a list of the logged in user's recipes
     *
     * @return Response
     */
    public function recipes()
    {
        $user = user()->find( auth()->user()->id )->with( 'savedRecipes', 'createdRecipes' )->first();
        $viewData = [
            'user' => $user,
            'savedRecipes' => $user->savedRecipes,
            'createdRecipes' => $user->createdRecipes,
        ];

        return view( 'profile.recipes', $viewData );
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
     * @param  Request $request
     * @return Response
     */
    public function store( Request $request )
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show( $id )
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return Response
     */
    public function edit()
    {
        $viewData = [
            'user' => user()->find( auth()->user()->id ),
        ];

        return view( 'profile.edit', $viewData );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ProfileRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update( ProfileRequest $request )
    {
        $user = user()->find( auth()->user()->id );
        $user->update( $request->all() );

        return redirect()->route( 'profile.edit' );
    }
}