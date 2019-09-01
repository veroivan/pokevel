<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public static function searchPokemon(Request $request)
    {
        $pokemon = $request->get('search');
        $client = new Client();
        $baseUrl = env('POKE_API');
        try {
            $response = $client->get($baseUrl.'pokemon/'.$pokemon);
            $pokemon = json_decode($response->getBody(), true);
            return view('pages.pokemon')->with('pokemon', $pokemon);
        } catch (RequestException $rex) {
            return view('pages.pokemon')->with('pokemon', null);
        }

    }
}
