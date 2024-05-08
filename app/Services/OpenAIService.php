<?php
// app/Services/OpenAIService.php

namespace App\Services;

use GuzzleHttp\Client;

class OpenAIService
{
    protected $client;
    protected $apiKey;

    public function __construct($apiKey)
    {
        $this->client = new Client();
        $this->apiKey = env('OPENAI_API_KEY');
    }

    public function generateText($prompt)
    {
        $response = $this->client->post('https://api.openai.com/v1/completions', [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->apiKey,
                'Content-Type' => 'application/json',
            ],
            'json' => [
                'model' => 'gpt-3.5-turbo',
                'prompt' => $prompt,
                'max_tokens' => 100,
                'temperature' => 0.7,
                'n' => 1, // Number of completions to generate
            ],
        ]);

        return json_decode($response->getBody()->getContents(), true)['choices'][0]['text'] ?? null;
    }
}
