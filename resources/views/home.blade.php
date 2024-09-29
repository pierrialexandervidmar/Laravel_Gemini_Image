<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&family=Open+Sans:ital@0;1&family=Oswald:wght@400;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="assets/style.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Store by Image</title>
</head>

<body>
    @extends('layouts.app')
    @section('content')
        <main>
            <section class="hero-area">
                <h3 class="subtitle">Aqui você encontra o que tanto procura!</h3>
                <h1 class="title">O que você está procurando???</h1>
                <form method="POST" action="{{ route('gemini-image.store') }}">
                    @csrf
                    <div class="search-area">
                        <input class="search-text" type="url" name="image_url"
                            placeholder="Cole a imagem que está procurando..." />
                        <button class="search-button">Procurar</button>
                    </div>

                    @if (session('message'))
                        <div class="flex justify-center items-center bg-white w-1/2 my-4 p-6 shadow-md rounded-lg">
                            <img class="max-h-64 rounded-lg" src="{{ Session::get('image_url') }}" alt="Imagem da URL.">
                        </div>
                        <div class="bg-white w-1/2 my-4 p-6 shadow-md rounded-lg">
                            <p class="text-justify">{{ Session::get('message') }}</p>
                        </div>
                    @endif
                </form>
            </section>





        </main>
    @endsection
</body>

</html>
