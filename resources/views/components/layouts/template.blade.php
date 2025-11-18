<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? config('app.name', 'Laravel App') }}</title>

    {{-- Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Livewire Styles --}}
    @livewireStyles
</head>

<body class="min-h-screen bg-gray-100 text-gray-900">

    

    <!-- Main Content Wrapper -->
    <div class="min-h-screen flex flex-col" 
         

        

        
        <main class="p-6">
            {{ $slot }}
        </main>

    </div>

    {{-- Livewire Scripts --}}
    @livewireScripts
</body>
</html>
