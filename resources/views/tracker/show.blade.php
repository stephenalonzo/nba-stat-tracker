<x-layout>
    <section class="p-6">
        <div class="mx-auto lg:max-w-screen-lg">
            <a href="{{ url()->previous() }}">&larr;
                Back</a>
            @if (!file_exists(public_path('img/' . $player['team'] . '/' . $player['playerId'] . '.png')))
                <img loading="lazy" src="{{ asset('img/blank.png') }}" alt="" class="w-full h-60 object-contain">
            @else
                <img loading="lazy" src="{{ asset('img/' . $player['team'] . '/' . $player['playerId'] . '.png') }}"
                    alt="" class="w-full h-60 object-contain">
            @endif
            <div class="p-6 bg-gray-100 text-center space-y-4 rounded-t-md border-t border-l border-r border-gray-400">
                <p class="text-lg">{{ $player['team'] . ' | ' . $player['position'] }}</p>
                <h3 class="font-semibold text-2xl">{{ $player['playerName'] ?? '' }}</h3>
                <p class="text-lg">
                    @switch($player['season'])
                        @case(2025)
                            {{ '2024-2025 Season Stats' }}
                        @break

                        @case(2024)
                            {{ '2023-2024 Season Stats' }}
                        @break

                        @case(2023)
                            {{ '2022-2023 Season Stats' }}
                        @break

                        @case(2022)
                            {{ '2021-2022 Season Stats' }}
                        @break

                        @case(2021)
                            {{ '2020-2021 Season Stats' }}
                        @break

                        @case(2020)
                            {{ '2019-2020 Season Stats' }}
                        @break

                        @case(2019)
                            {{ '2018-2019 Season Stats' }}
                        @break

                        @case(2018)
                            {{ '2017-2018 Season Stats' }}
                        @break

                        @case(2017)
                            {{ '2016-2017 Season Stats' }}
                        @break

                        @case(2016)
                            {{ '2015-2016 Season Stats' }}
                        @break

                        @case(2015)
                            {{ '2014-2015 Season Stats' }}
                        @break

                        @case(2014)
                            {{ '2013-2014 Season Stats' }}
                        @break

                        @case(2013)
                            {{ '2012-2013 Season Stats' }}
                        @break

                        @case(2012)
                            {{ '2011-2012 Season Stats' }}
                        @break

                        @case(2011)
                            {{ '2010-2011 Season Stats' }}
                        @break

                        @case(2010)
                            {{ '2009-2010 Season Stats' }}
                        @break

                        @case(2009)
                            {{ '2008-2009 Season Stats' }}
                        @break

                        @case(2008)
                            {{ '2007-2008 Season Stats' }}
                        @break

                        @case(2007)
                            {{ '2006-2007 Season Stats' }}
                        @break

                        @case(2006)
                            {{ '2005-2006 Season Stats' }}
                        @break

                        @case(2005)
                            {{ '2004-2005 Season Stats' }}
                        @break

                        @case(2004)
                            {{ '2003-2004 Season Stats' }}
                        @break

                        @case(2003)
                            {{ '2002-2003 Season Stats' }}
                        @break

                        @case(2002)
                            {{ '2001-2002 Season Stats' }}
                        @break

                        @case(2001)
                            {{ '2000-2001 Season Stats' }}
                        @break

                        @case(2000)
                            {{ '1999-2000 Season Stats' }}
                        @break

                        @case(1999)
                            {{ '1998-1999 Season Stats' }}
                        @break

                        @case(1998)
                            {{ '1997-1998 Season Stats' }}
                        @break

                        @case(1997)
                            {{ '1996-1997 Season Stats' }}
                        @break

                        @case(1996)
                            {{ '1995-1996 Season Stats' }}
                        @break

                        @case(1995)
                            {{ '1994-1995 Season Stats' }}
                        @break

                        @case(1994)
                            {{ '1993-1994 Season Stats' }}
                        @break

                        @case(1993)
                            {{ '1992-1993 Season Stats' }}
                        @break

                        @default
                    @endswitch
                </p>
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
            <div class="p-1.5 flex flex-col rounded-b-md border-b border-l border-r border-gray-400">
                <div class="-m-1.5 overflow-x-auto">
                    <div class="p-1.5 min-w-full inline-block align-middle">
                        <div class="overflow-hidden">
                            <table class="min-w-full divide-y divide-gray-200">
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
