@extends('layout.default')

@section('title')
    Leaderboard
@stop

@section('content')
    <h1>Leaderboard</h1>
    <h2>Best Time</h2>
    <table>
        @for($i = 0; $i < count($top_best_time); $i++)
            <tr>
                <td>#{{ $i + 1 }}</td>
                <td>{{ $top_best_time[$i]->username }}</td>
                <td>{{ Utility::formatHundredth($top_best_time[$i]->best_time) }}s</td>
            </tr>
        @endfor
    </table>

    <h2>Multiplayer Games Won</h2>
    <table>
        @for($i = 0; $i < count($top_won); $i++)
            <tr>
                <td>#{{ $i + 1 }}</td>
                <td>{{ $top_won[$i]->username }}</td>
                <td>{{ $top_won[$i]->won }}</td>
            </tr>
        @endfor
    </table>

    <h2>Games Played</h2>
    <table>
        @for($i = 0; $i < count($top_total_games); $i++)
            <tr>
                <td>#{{ $i + 1 }}</td>
                <td>{{ $top_total_games[$i]->username }}</td>
                <td>{{ $top_total_games[$i]->total_games }}</td>
            </tr>
        @endfor
    </table>

    <h2>Single Player Games Played</h2>
    <table>
        @for($i = 0; $i < count($top_singleplayer_games); $i++)
            <tr>
                <td>#{{ $i + 1 }}</td>
                <td>{{ $top_singleplayer_games[$i]->username }}</td>
                <td>{{ $top_singleplayer_games[$i]->singleplayer_games }}</td>
            </tr>
        @endfor
    </table>

    <h2>Multiplayer Games Played</h2>
    <table>
        @for($i = 0; $i < count($top_multiplayer_games); $i++)
            <tr>
                <td>#{{ $i + 1 }}</td>
                <td>{{ $top_multiplayer_games[$i]->username }}</td>
                <td>{{ $top_multiplayer_games[$i]->multiplayer_games }}</td>
            </tr>
        @endfor
    </table>
@stop