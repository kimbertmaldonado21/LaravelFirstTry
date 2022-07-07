<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-50">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My First Project</title>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="/dist/output.css" rel="stylesheet">
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
        <script src="https://cdn.tailwindcss.com"></script>

        <style>
            [v-cloack]{
                display: none;
            }
        </style>
    </head>
    <body class="h-full">
        <div id="app" v-cloak class="min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8"></div>

        
       @vite('resources/js/app.js')
       
    </body>
    <script setup>
    import { LockClosedIcon } from '@heroicons/vue/solid'
    </script>
    
</html>
