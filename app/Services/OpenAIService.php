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
        try {
            $response = $this->client->post('https://api.openai.com/v1/chat/completions', [
                'headers' => [
                    'Authorization' => 'Bearer ' . env('OPENAI_API_KEY'),
                    'Content-Type' => 'application/json',
                ],
                'json' => [
                    'model' => 'gpt-3.5-turbo-0125', 
                    'messages' => [
                        [
                            'role' => 'system',
                            'content' => 'You are a helpful assistant.',
                        ],
                        [
                            'role' => 'user',
                            'content' => $prompt,
                        ],
                    ],
                ],
            ]);

            $body = json_decode($response->getBody(), true);
            Log::info('Cuerpo de la respuesta de ChatGPT', ['body' => $body]);

            return $body['choices'][0]['message']['content'] ?? '';
        } catch (\Exception $e) {
            // Manejar el error
            Log::error("Error al enviar la respuesta a ChatGPT: " . $e->getMessage());
            return null;
        }
    }
}
