<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $header }}</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>    
</head>
<body>
    <div class="bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
          <div class="mx-auto max-w-2xl lg:mx-0">
            <h2 class="text-4xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-5xl">Blog</h2>
            <p class="mt-2 text-lg/8 text-gray-600">Découvrez les secrets des plus grands albums et artistes qui ont marqué l'histoire de la musique.</p>
          </div>
            {{$slot}}
        </div>
      </div>
</body>
</html>