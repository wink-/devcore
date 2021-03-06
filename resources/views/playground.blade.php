<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Livewire Tables</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <livewire:styles />

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
    <!-- Styles -->
    @powerGridStyles
    <style>
        [x-cloak] { display: none !important; }
    </style>
</head>
<body>
    <livewire:wotable/>
    
    <livewire:scripts />
    @powerGridScripts    
{{--    <script src="https://cdn.jsdelivr.net/gh/livewire/sortable@v0.x.x/dist/livewire-sortable.js"></script>--}}
    <script src="https://unpkg.com/@nextapps-be/livewire-sortablejs@0.1.1/dist/livewire-sortable.js"></script>
</body>
</html>