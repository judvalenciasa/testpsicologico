<?php

namespace App\Services;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;

class OpenAIService
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function enviarRespuestaAChatGPT($prompt)
    {
        // Verificar que $prompt sea una cadena válida
        if (!is_string($prompt) || empty(trim($prompt))) {
            Log::error('El prompt proporcionado no es una cadena válida o está vacío.');
            return null;
        }

        try {
            $response = $this->client->post('https://api.openai.com/v1/chat/completions', [
                'headers' => [
                    'Authorization' => 'Bearer ' . env('OPENAI_API_KEY'),
                    'Content-Type' => 'application/json',
                ],
                'json' => [
                    'model' => 'gpt-4o',
                    'messages' => [
                        [
                            'role' => 'system',
                            'content' => 'Eres un psicólogo profesional. Tu objetivo es ayudar al usuario a enfrentar sus desafíos personales y ofrecer respuestas reflexivas y empáticas basadas en principios psicológicos.',
                        ],
                        [
                            'role' => 'user',
                            'content' => $prompt,
                        ],
                    ],
                ],
            ]);

            $body = json_decode($response->getBody(), true);

            return $body['choices'][0]['message']['content'] ?? '';
        } catch (\Exception $e) {
            // Manejar el error
            Log::error("Error al enviar la respuesta a ChatGPT: " . $e->getMessage());
            return null;
        }
    }
}
