<?php

namespace App\Http\Controllers;

use App\Service\GeminiService;
use Illuminate\Http\Request;

class GeminiImageController extends Controller
{
    public function create() {
        return view("home");
    }

    public function store(Request $request, GeminiService $geminiService) {
        
        $url = $request->input('image_url');

        try {
            $analysisResult = $geminiService->analyzeImage($url);
            $message = $analysisResult;
        }
        catch (\Exception $e) {
            $message = "Não consegui analisar a imagem: " . $e->getMessage();
        }

        return back()->with('message', $message);
    }
}
