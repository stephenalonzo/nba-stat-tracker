<x-layout>
    <section>
        <div class="mx-auto lg:max-w-screen-lg">
            <div class="p-3">
                <a href="{{ url()->previous() }}"
                    class="{{ url()->previous() == url()->current() ? 'hidden' : '' }}">&larr;
                    Back</a>
            </div>
            @foreach ($players as $player)
                <img src="{{ asset('img/blank.png') }}" alt="" class="w-full h-72 object-contain">
                <div class="p-6 bg-gray-100 text-center space-y-4 rounded-md border border-gray-400">
                    <h3 class="font-semibold text-2xl">{{ $player['playerName'] ?? '' }}</h3>
                    <div class="grid grid-cols-3 gap-6">
                        <div class="space-y-2 w-full h-full p-3 border border-gray-400 rounded-md">
                            <span class="text-2xl font-semibold">
                                {{ number_format(round($player['points'] / $player['games'], 1), 1) }}
                            </span>
                            <p>PPG</p>
                        </div>
                        <div class="space-y-2 w-full h-full p-3 border border-gray-400 rounded-md">
                            <span class="text-2xl font-semibold">
                                {{ number_format(round($player['totalRb'] / $player['games'], 1), 1) }}
                            </span>
                            <p>RPG</p>
                        </div>
                        <div class="space-y-2 w-full h-full p-3 border border-gray-400 rounded-md">
                            <span class="text-2xl font-semibold">
                                {{ number_format(round($player['assists'] / $player['games'], 1), 1) }}
                            </span>
                            <p>APG</p>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="flex flex-col">
                <div class="-m-1.5 overflow-x-auto">
                    <div class="p-1.5 min-w-full inline-block align-middle">
                        <div class="overflow-hidden">
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                                <thead>
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                            Season</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                            Team</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                            GP</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                            Min</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                            Pts</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                            FGM</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                            FGA</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                            FG%</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                            3PM</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                            3PA</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                            3P%</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                            FTM</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                            FTA</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                            FT%</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                            OREB</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                            DREB</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                            REB</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                            AST</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                            TOV</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                            STL</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                            BLK</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                            PF</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                                    @foreach ($players_all as $all)
                                        <tr>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                                {{ date('Y', strtotime('' . $all['season'] . '-05-30 -1 year')) . '-' . $all['season'] }}
                                            </td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                                {{ $all['team'] }}</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                                {{ $all['games'] }}</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                                {{ number_format(round($all['minutesPg'] / $all['games'], 1), 1) }}
                                            </td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                                {{ number_format(round($all['points'] / $all['games'], 1), 1) }}</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                                {{ number_format(round($all['fieldGoals'] / $all['games'], 1), 1) }}
                                            </td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                                {{ number_format(round($all['fieldAttempts'] / $all['games'], 1), 1) }}
                                            </td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                                {{ number_format(round($all['fieldPercent'] * 100, 1), 1) }}</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                                {{ number_format(round($all['threeFg'] / $all['games'], 1), 1) }}</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                                {{ number_format(round($all['threeAttempts'] / $all['games'], 1), 1) }}
                                            </td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                                {{ number_format(round($all['threePercent'] * 100, 1), 1) }}</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                                {{ number_format(round($all['ft'] / $all['games'], 1), 1) }}</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                                {{ number_format(round($all['ftAttempts'] / $all['games'], 1), 1) }}
                                            </td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                                {{ number_format(round($all['ftPercent'] * 100, 1), 1) }}</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                                {{ number_format(round($all['offensiveRb'] / $all['games'], 1), 1) }}
                                            </td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                                {{ number_format(round($all['defensiveRb'] / $all['games'], 1), 1) }}
                                            </td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                                {{ number_format(round($all['totalRb'] / $all['games'], 1), 1) }}</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                                {{ number_format(round($all['assists'] / $all['games'], 1), 1) }}</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                                {{ number_format(round($all['turnovers'] / $all['games'], 1), 1) }}
                                            </td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                                {{ number_format(round($all['steals'] / $all['games'], 1), 1) }}</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                                {{ number_format(round($all['blocks'] / $all['games'], 1), 1) }}</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                                {{ number_format(round($all['personalFouls'] / $all['games'], 1), 1) }}
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
