<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    private $client;
    private $baseUrl;

    public function __construct()
    {
        $this->client = new Client();
        $this->baseUrl = env('POKE_API');
    }

    public function getTypeDetails($typeName)
    {
        try {
            $response = $this->client->get($this->baseUrl . 'type/' . $typeName);
            $type = json_decode($response->getBody(), true);
            $doubleDamageFrom = $type['damage_relations']['double_damage_from'];
            $doubleDamageTo = $type['damage_relations']['double_damage_to'];
            $halfDamageFrom = $type['damage_relations']['half_damage_from'];
            $halfDamageTo = $type['damage_relations']['half_damage_to'];
            $noDamageFrom = $type['damage_relations']['no_damage_from'];
            $noDamageTo = $type['damage_relations']['no_damage_to'];
            return view('pages.typeDetail', compact('typeName', 'doubleDamageFrom', 'doubleDamageTo', 'halfDamageFrom', 'halfDamageTo', 'noDamageFrom', 'noDamageTo'));
        } catch (RequestException $rex) {
            return redirect('/types');
        }
    }
}
