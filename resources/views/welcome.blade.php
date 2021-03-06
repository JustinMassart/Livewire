<!doctype html>
<html lang="en">
    <head>
        @livewireStyles
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://unpkg.com/tailwindcss@2.2.17/dist/tailwind.min.css" rel="stylesheet">
        <title>Livewire</title>
    </head>
    <body>
        <div style="display: flex; justify-content:center; align-items:center;">
            @livewire('contacts')
        </div>
        @livewireScripts
    </body>
</html>
