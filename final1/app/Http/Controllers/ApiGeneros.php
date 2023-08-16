<?php

use GuzzleHttp\Client;

class ApiGeneros extends Controller
{
    public function metodo()
    {
        $client = new Client();
        $response = $client->get('https://api.example.com/genero', [
            'headers' => [
                'Authorization' => 'Bearer ' . env('API_TOKEN'),
                // Otras cabeceras que pueda requerir la API
            ],
        ]);

        $data = json_decode($response->getBody(), true);
        // Procesar la respuesta y devolverla como respuesta de tu API
        return response()->json($data);
    }
}
