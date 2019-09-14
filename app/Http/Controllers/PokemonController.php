<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;

class PokemonController extends Controller
{

    private $client;
    private $baseUrl;

    public function __construct()
    {
        $this->client = new Client();
        $this->baseUrl = env('POKE_API');
    }

    public function searchPokemon(Request $request)
    {
        $pokemon = $request->get('search');
        try {
            $response = $this->client->get($this->baseUrl . 'pokemon/' . $pokemon);
            $pokemon = json_decode($response->getBody(), true);
            //get pokemon evolution info
            $evolutionChain = self::getEvolutionChain($pokemon['id']);
            $evolvesToName = $this->getEvolutionName($evolutionChain, $pokemon['name']);
            $evolvesToSprite = isset($evolvesToName) ? $this->getPokemonSprite($evolvesToName) : null;
            //PokeApi returns a sprite array with nulls in, this results in hole in the carousel so i clean it up
            $pokemonSprites = array_filter($pokemon['sprites']);
            //remove moves from pokemon object to speed up page loading
            $pokemon = array_except($pokemon, ['moves']);
            return view('pages.pokemon', compact('pokemon', 'evolvesToSprite', 'evolvesToName', 'pokemonSprites'));
        } catch (RequestException $rex) {
            return view('pages.pokemon')->with('pokemon', null);
        }
    }

    function getEvolutionChain($pokemonId)
    {
        //get pokemon species, required to get evolution_chain
        $species = $this->getPokemonSpecies($pokemonId);
        try {
            $response = $this->client->get($species['evolution_chain']['url']);
            $evolutionChain = json_decode($response->getBody(), true);
            return $evolutionChain;
        } catch (RequestException $rex) {
            return null;
        }
    }

    function getPokemonSpecies($pokemonId)
    {
        try {
            $response = $this->client->get($this->baseUrl . 'pokemon-species/' . $pokemonId);
            $species = json_decode($response->getBody(), true);
            return $species;
        } catch (RequestException $rex) {
            return null;
        }
    }

    function getEvolutionName($evolutionChain, $pokemonName){
        $chain = $evolutionChain['chain'];
        while(isset($chain['evolves_to'][0])){
            if($chain['species']['name'] == $pokemonName)
                return $chain['evolves_to'][0]['species']['name'];
            $chain = $chain['evolves_to'][0];
        }
        return null;
    }

    public function getPokemonSprite($pokemonName)
    {
        try {
            $response = $this->client->get($this->baseUrl . 'pokemon/' . $pokemonName);
            $pokemon = json_decode($response->getBody(), true);
            return $pokemon['sprites']['front_default'];
        } catch (RequestException $rex) {
            return null;
        }
    }
}
