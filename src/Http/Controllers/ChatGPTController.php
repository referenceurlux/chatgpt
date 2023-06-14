<?php

namespace Naif\Chatgpt\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Schema;
use Laravel\Nova\Http\Requests\NovaRequest;

class ChatGPTController extends Controller
{
    public function ask(NovaRequest $request)
    {
        $response = Http::withoutVerifying()
            ->withHeaders([
                'Authorization' => 'Bearer ' . env('CHATGPT_API_KEY'),
                'Content-Type' => 'application/json',
            ])->post('https://api.openai.com/v1/engines/text-davinci-003/completions', [
                "prompt" => $request->question,
                "max_tokens" => 200,
            ]);

        $answer = $response->json()['choices'][0]['text'];
        $total_tokens = $response->json()['usage']['total_tokens'];
        return response()->json([
            'answer' => $answer,
            'total_tokens' => $total_tokens
        ]);
    }
}
