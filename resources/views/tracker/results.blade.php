<x-layout>
    <section class="p-6">
        <div class="mx-auto space-y-6 lg:max-w-screen-lg">
            <h3 class="text-xl">Search results for <span class="font-semibold">"{{ request('playerName') }}"</span></h3>
            <hr class="opacity-25 w-full">
            <div class="flex flex-col">
                <div class="-m-1.5 overflow-x-auto">
                    <div class="p-1.5 min-w-full inline-block align-middle">
                        <div class="overflow-hidden">
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                                <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                                    @foreach ($players as $player)
                                        <tr>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                                {{ $player['playerName'] ?? '' }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                <a href="/track?playerName={{ $player['playerName'] ?? '' }}&season={{ $player['season'] ?? '' }}"
                                                    class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-hidden focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400">View</a>
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
