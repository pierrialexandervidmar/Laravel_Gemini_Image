<?php

namespace App\Service;

use Gemini\Laravel\Facades\Gemini;
use Gemini\Data\Blob;
use Gemini\Enums\MimeType;

class GeminiService
{
  public function analyzeImage(String $imageUrl): string
  {
    $prompt = "Describe this image. Answer in portuguese.";  
    $imageBlog = new Blob(
      mimeType: MimeType::IMAGE_JPEG,
      data: base64_encode(file_get_contents($imageUrl))
    );
    $result = Gemini::geminiProVision()->generateContent([$prompt, $imageBlog]);

    return $result->text();
  }
}