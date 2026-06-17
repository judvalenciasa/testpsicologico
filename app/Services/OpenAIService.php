<?php

namespace App\Services;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;

class OpenAIService
{
    private const API_URL = 'https://api.openai.com/v1/chat/completions';
    private const MODEL = 'gpt-4o';
    private const TEMPERATURE = 0.2;
    private const SYSTEM_MESSAGE = 'Eres un evaluador objetivo. Responde solo con el número de la calificación, sin ninguna otra información.';

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
            $response = $this->client->post(self::API_URL, $this->buildRequestOptions($prompt));

            $body = json_decode($response->getBody(), true);
            Log::info('Respuesta de ChatGPT: ' . json_encode($body));

            return $body['choices'][0]['message']['content'] ?? '';
        } catch (\Exception $e) {
            // Manejar el error
            Log::error("Error al enviar la respuesta a ChatGPT: " . $e->getMessage());
            return null;
        }
    }

    private function buildRequestOptions(string $prompt): array
    {
        return [
            'headers' => [
                'Authorization' => 'Bearer ' . env('OPENAI_API_KEY'),
                'Content-Type' => 'application/json',
            ],
            'json' => [
                'model' => self::MODEL,
                'temperature' => self::TEMPERATURE,
                'messages' => [
                    [
                        'role' => 'system',
                        'content' => self::SYSTEM_MESSAGE,
                    ],
                    [
                        'role' => 'user',
                        'content' => $prompt,
                    ],
                ],
            ],
        ];
    }
}
