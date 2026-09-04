@props(['title' => 'Lumen', 'description' => ''])
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- The title below is set per page via the layout component's title attribute -->
    <title>{{ $title }} — Lumen</title>
    <meta name="description" content="{{ $description }}">
    <meta property="og:title" content="{{ $title }} — Lumen">
    <meta property="og:description" content="{{ $description }}">
    <meta property="og:type" content="website">
    <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 64 64'><rect width='64' height='64' rx='16' fill='%231e4038'/><circle cx='32' cy='32' r='10' fill='white'/></svg>">

    <link rel="preconnect" href="https://rsms.me/">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Serif:ital@0;1&display=swap" rel="stylesheet">

    <!-- The line below loads Tailwind and inlines your resources/css/site.css -->
    @vite('resources/css/site.css')

    <!-- Header shrink-on-scroll and current-page marking — see public/js/main.js -->
    <script src="/js/main.js" defer></script>
</head>
<body class="flex min-h-dvh flex-col bg-white text-[#0f231d] antialiased" data-instant-navigation>

    <x-nav/>

    <main class="isolate flex-1">
        {{ $slot }}
    </main>

    <x-footer/>

</body>
</html>
