<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Requests\TrackerRequest;

class TrackerController extends Controller
{
    public function index()
    {
        // Get by Most Points
        $response = Http::get('http://rest.nbaapi.com/api/PlayerDataTotals/query?season=2025&sortBy=Points&ascending=false&pageSize=5');
        $points = $response->json();

        // Get by Most Assists
        $response = Http::get('http://rest.nbaapi.com/api/PlayerDataTotals/query?season=2025&sortBy=Assists&ascending=false&pageSize=5');
        $assists = $response->json();

        // Get by Most Steals
        $response = Http::get('http://rest.nbaapi.com/api/PlayerDataTotals/query?season=2025&sortBy=Steals&ascending=false&pageSize=5');
        $steals = $response->json();

        return view('index', compact(['points', 'assists', 'steals']));
    }

    public function search(TrackerRequest $request)
    {
        $validated = $request->validated();

        $response = Http::get('http://rest.nbaapi.com/api/PlayerDataTotals/query', [
            'playerName' => $validated['playerName'],
            'season' => $validated['season']
        ]);
        $data = $response->json();

        $search = Str::ascii(strtolower($validated['playerName']));

        $unique = collect($data)->filter(function ($player) use ($search) {
            $name = $player['playerName'] ?? null;
            $normalizedName = Str::ascii(strtolower(trim($name)));
            return str_contains($normalizedName, $search);
        })->values();

        $players = $unique
            ->sortByDesc('Season')
            ->unique('playerName')
            ->values();

        if (count($players) != 0) {
            return view('tracker.results', compact('players'));
        }

        return back()->with('message', 'Player stats does not exist.');
    }

    public function show()
    {
        $response = Http::get('http://rest.nbaapi.com/api/PlayerDataTotals/query', [
            'playerName' => $_GET['playerName'],
            'season' => $_GET['season']
        ]);
        $players = $response->json();

        $response_all = Http::get('http://rest.nbaapi.com/api/PlayerDataTotals/query', [
            'playerName' => $_GET['playerName'],
            'sortBy' => 'Season',
            'ascending' => 'false',
            'pageSize' => 50
        ]);
        $players_all = $response_all->json();

        if ($players && $players_all) {
            return view('tracker.show', compact(['players', 'players_all']));
        }

        return view('index');
    }
}
