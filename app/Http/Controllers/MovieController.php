<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        return Movie::all();
    }
    
    public function store(Request $request) {
        $movies = $request->all();
        Movie::insert($movies);
        return response()->json(['message' => 'Filmes inseridos com sucesso'], 201);
    }
    
    
    public function show(Movie $movie)
    {
        return $movie;
    }
    
    public function update(Request $request, Movie $movie)
    {
        $movie->update($request->all());
        return response()->json($movie, 200);
    }
    
    public function destroy(Movie $movie)
    {
        $movie->delete();
        return response()->json(null, 204);
    }
}
