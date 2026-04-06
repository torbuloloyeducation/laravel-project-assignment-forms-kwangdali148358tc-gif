@props([
    'title' => 'My Laravel App',
])
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head> 
<style>
    body{
        background-color: #1c3056;
        color: white;
        font-family: Arial, sans-serif;
    }
    </style>
<body>
    <x-navbar />
{{ $slot }}

</body>
</html>