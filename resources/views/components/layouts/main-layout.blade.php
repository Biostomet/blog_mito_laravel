<!DOCTYPE html>
<html lang="fr">
@props(['title'])

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://unpkg.com/scrollreveal"></script>
    <title>Document | {{ $title }}</title>
    @vite('resources/css/app.css')

</head>

<body>
    @include('partials._session')
    <h1 id="toto">Hello word</h1>
    {{ $slot }}
    @vite('resources/js/app.js')
</body>

</html>
