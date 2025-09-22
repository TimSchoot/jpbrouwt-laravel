<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>


<div class="min-h-screen flex">

    <!-- Sidebar -->
    <div class="w-64 bg-gray-800 text-white">
        <div class="p-4 text-center font-bold">JPT Brouw</div>
        <nav>
            <ul>
                <li><a href="#" class="block p-4 hover:bg-gray-700">Dashboard</a></li>
                <li><a href="#" class="block p-4 hover:bg-gray-700">Bestelling Plaatsen</a></li>
                <li><a href="#" class="block p-4 hover:bg-gray-700">Producten</a></li>
                <li><a href="#" class="block p-4 hover:bg-gray-700">Facturen</a></li>
                <li><a href="#" class="block p-4 hover:bg-gray-700">Oude Facturen</a></li>
                <li><a href="{{ route('klanten') }}" class="block p-4 hover:bg-gray-700">Klanten</a></li>
                <li><a href="{{ route('app') }}" class="block p-4 hover:bg-gray-700">Log-in</a></li>

            </ul>
        </nav>
    </div>

    <!-- Main Content -->
    <div class="flex-1 p-6">