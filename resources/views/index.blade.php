<x-layout>
    <section class="p-6">
        <div class="mx-auto space-y-8 md:max-w-screen-sm">
            <div class="space-y-4">
                <h1 class="text-5xl font-semibold">Track your favorite players like a pro.</h1>
                <p>From scoring trends to efficiency ratings, our NBA tracker delivers
                    advanced stats and insights to help you understand what really happens on the court.</p>
            </div>
            <div class="">
                <form action="/search" method="get" class="p-4 rounded-md bg-[#f48c06] grid gap-4">
                    @csrf
                    <input type="text" name="playerName"
                        class="px-3 py-2.5 bg-white border border-gray-400 rounded-md placeholder:text-gray-400"
                        placeholder="Enter player name">
                    <select name="season"
                        class="p-2.5 bg-white border border-gray-400 rounded-md placeholder:text-gray-400">
                        <option selected disabled>Choose Season</option>
                        <option value="2025">2024-2025</option>
                        <option value="2024">2023-2024</option>
                        <option value="2023">2022-2023</option>
                        <option value="2022">2021-2022</option>
                        <option value="2021">2020-2021</option>
                        <option value="2020">2019-2020</option>
                        <option value="2019">2018-2019</option>
                        <option value="2018">2017-2018</option>
                        <option value="2017">2016-2017</option>
                        <option value="2016">2015-2016</option>
                        <option value="2015">2014-2015</option>
                        <option value="2014">2013-2014</option>
                        <option value="2013">2012-2013</option>
                        <option value="2012">2011-2012</option>
                        <option value="2011">2010-2011</option>
                        <option value="2010">2009-2010</option>
                        <option value="2009">2008-2009</option>
                        <option value="2008">2007-2008</option>
                        <option value="2007">2006-2007</option>
                        <option value="2006">2005-2006</option>
                        <option value="2005">2004-2005</option>
                        <option value="2004">2003-2004</option>
                        <option value="2003">2002-2003</option>
                        <option value="2002">2001-2002</option>
                        <option value="2001">2000-2001</option>
                        <option value="2000">1999-2000</option>
                        <option value="1999">1998-1999</option>
                        <option value="1998">1997-1998</option>
                        <option value="1997">1996-1997</option>
                        <option value="1996">1995-1996</option>
                        <option value="1995">1994-1995</option>
                        <option value="1994">1993-1994</option>
                        <option value="1993">1992-1993</option>
                    </select>
                    <button type="submit"
                        class="px-5 py-2.5 rounded-md bg-white text-[#f48c06] hover:cursor-pointer">Submit</button>
                </form>
                @if (session()->has('message'))
                    <p class="text-red-500">{{ session('message') }}</p>
                @endif
            </div>
        </div>
    </section>
    <section class="p-6">
        <div class="mx-auto space-y-8 md:max-w-screen-sm">
            <h3 class="font-semibold">2024-2025 Season</h3>
            <div class="space-y-4">
                <h3 class="font-semibold">Total Points</h3>
                <hr class="opacity-25 w-full">
                <div class="grid grid-cols-3 gap-4">
                    @foreach ($points as $point)
                        <div class="col-span-2">
                            <p>{{ $point['playerName'] ?? '' }}</p>
                        </div>
                        <div>
                            <span>{{ $point['points'] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="space-y-4">
                <h3 class="font-semibold">Total Assists</h3>
                <hr class="opacity-25 w-full">
                <div class="grid grid-cols-3 gap-4">
                    @foreach ($assists as $assist)
                        <div class="col-span-2">
                            <p>{{ $assist['playerName'] ?? '' }}</p>
                        </div>
                        <div>
                            <span>{{ $assist['assists'] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="space-y-4">
                <h3 class="font-semibold">Total Steals</h3>
                <hr class="opacity-25 w-full">
                <div class="grid grid-cols-3 gap-4">
                    @foreach ($steals as $steal)
                        <div class="col-span-2">
                            <p>{{ $steal['playerName'] ?? '' }}</p>
                        </div>
                        <div>
                            <span>{{ $steal['steals'] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</x-layout>
