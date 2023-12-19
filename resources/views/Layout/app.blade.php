<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Agence de voyage </title>
</head>
<body>
<div id="app"></div>
@vite('resources/js/app.js') {{-- va integer le java script de la page app.js --}}
</body>
</html>
