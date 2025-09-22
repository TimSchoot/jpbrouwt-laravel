@include('includes.header')

<div class="mx-auto px-4 py-6">

    @if(session('success'))
        <div class="mb-4 p-4 bg-green-100 text-green-800 border border-green-200 rounded">
            {{ session('success') }}
        </div>
    @endif

    <h1 class="text-2xl font-bold mb-6">Nieuwe klant toevoegen</h1>

    <form action="{{ route('klant.store') }}" method="POST" class="mb-8 space-y-4 bg-white p-6 rounded shadow">
        @csrf
        <input type="text" name="naam" placeholder="Naam" required class="w-full px-4 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-400 focus:outline-none">
        <input type="email" name="email" placeholder="Email" required class="w-full px-4 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-400 focus:outline-none">
        <input type="text" name="straat_postcode" placeholder="Adres + postcode" required class="w-full px-4 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-400 focus:outline-none">
        <input type="text" name="plaats" placeholder="Plaats" required class="w-full px-4 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-400 focus:outline-none">
        <button type="submit" class="px-6 py-2 bg-blue-600 text-white font-semibold rounded hover:bg-blue-700 transition-colors">Verstuur</button>
    </form>

    <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-semibold">Klantenlijst</h2>

        <!-- Page size selector -->
        <form method="GET" class="flex items-center space-x-2">
            <label for="perPage" class="text-gray-700">Items per pagina:</label>
            <select name="perPage" id="perPage" onchange="this.form.submit()" class="border border-gray-300 rounded px-2 py-1">
                @foreach([5, 10, 20, 50, 100] as $size)
                    <option value="{{ $size }}" {{ request('perPage', 10) == $size ? 'selected' : '' }}>{{ $size }}</option>
                @endforeach
            </select>
        </form>
    </div>

    <div class="overflow-x-auto bg-white rounded shadow">
        <table class="w-full divide-y divide-gray-200 min-w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Klantnummer</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Naam</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Adres + Postcode</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Plaats</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aangemaakt op</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($klanten as $klant)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">{{ str_pad($klant->klant_nummer, 6, '0', STR_PAD_LEFT) }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $klant->naam }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $klant->email }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $klant->straat_postcode }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $klant->plaats }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $klant->created_at->format('d-m-Y H:i') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Pagination links -->
    <div class="mt-4">
        {{ $klanten->withQueryString()->links('vendor.pagination.tailwind') }}
    </div>

</div>
