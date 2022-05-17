<?php

namespace App\Http\Controllers;

use App\Models\Movie;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $movies = Movie::all();
        return response()->json($movies);
    }

    public function filterBy($filter)
    {
        if ($filter == 'name') $movies = Movie::all()->sortBy('name');
        if (!isset($movies)) return response()->json(['message' => 'Wrong input', 400]);

        return response()->json($movies);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $movie = Movie::create($request->all());
        return response()->json($movie, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Movie $movie
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Movie $movie)
    {
        return response()->json($movie);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Movie $movie
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Movie $movie)
    {
        $movie->update($request->all());

        return response()->json($movie, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Movie $movie
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();

        return response()->json(null, 204);
    }
}
