<x-layout>
    <section class="p-6">
        <div class="mx-auto space-y-6 min-h-screen lg:max-w-screen-lg">
            <h3 class="text-xl">Search results for <span class="font-semibold">"{{ request('playerName') }}"</span></h3>
            <hr class="opacity-25 w-full">
            <div class="flex flex-col">
                <div class="-m-1.5 overflow-x-auto">
                    <div class="p-1.5 min-w-full inline-block align-middle">
                        <div class="overflow-hidden">
                            <table class="min-w-full divide-y divide-gray-200">
                                <tbody class="divide-y divide-gray-200">
                                    @foreach ($players as $player)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap font-medium text-gray-800">
                                                {{ $player['playerName'] ?? '' }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-end text-sm">
                                                <a href="/track?playerName={{ $player['playerName'] ?? '' }}&season={{ $player['season'] ?? '' }}"
                                                    class="px-5 py-2.5 inline-flex items-center gap-x-2 rounded-lg border border-transparent bg-gray-900 text-white hover:bg-gray-600 focus:outline-hidden focus:bg-gray-600">View
                                                    Stats &rarr;</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
