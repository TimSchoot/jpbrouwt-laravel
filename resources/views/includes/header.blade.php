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
                <li><a href="dashboard.php" class="block p-4 hover:bg-gray-700">Dashboard</a></li>
                <li><a href="new_customer.php" class="block p-4 hover:bg-gray-700">Nieuwe Klant</a></li>
                <li><a href="new_order.php" class="block p-4 hover:bg-gray-700">Bestelling Plaatsen</a></li>
                <li><a href="producten.php" class="block p-4 hover:bg-gray-700">Producten</a></li>
                <li><a href="invoices.php" class="block p-4 hover:bg-gray-700">Facturen</a></li>
                <li><a href="old_invoices.php" class="block p-4 hover:bg-gray-700">Oude Facturen</a></li>
                <li><a href="customers.php" class="block p-4 hover:bg-gray-700">Klantenlijst</a></li>
            </ul>
        </nav>
    </div>

    <!-- Main Content -->
    <div class="flex-1 p-6">