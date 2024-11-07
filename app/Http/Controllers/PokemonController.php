<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function index()
{
    $pokemons = Pokemon::all();
    return view('pokemons.index', compact('pokemons'));
}

public function create()
{
    return view('pokemons.create');
}

public function store(Request $request)
{
    Pokemon::create($request->all());
    return redirect('pokemons.index')->with('success', 'Pokemon created successfully.');
}

public function edit($id)
{
    $pokemons = Pokemon::findOrFail($id);
    return view('pokemons.edit', compact('pokemon'));
}

public function update(Request $request, Pokemon $pokemon)
{
   $request->validade([
    'nome' => 'required|string',
    'tipo' => 'required|string',
    'pontos_de_poder' => 'required|integer',
   ]);

   $pokemon->updade($request->all());

   return redirect()->route('pokemons.index')->with('sucess', 'Pokemon atualizado com sucesso!');
}

public function destroy(Pokemon $pokemon)
{
    $pokemon->delete();
    return redirect()->route('pokemons.index')->with('success', 'Product deleted successfully.');
}
}
