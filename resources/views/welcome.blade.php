<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite('resources/css/app.css')
</head>

<body class="font-sans antialiased">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 my-12">
        <!-- We've used 3xl here, but feel free to try other max-widths based on your needs -->
        <div class="mx-auto max-w-3xl">
            <h1 class="text-indigo-500 font-bold text-2xl ">Test</h1>
            <livewire:progress-bar lowest-step=1 highest-step=6  />
        </div>
    </div>

</body>

</html>
