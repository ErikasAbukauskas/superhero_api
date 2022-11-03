@extends('layouts.app')


@section('content')
<div class="container container-show">
        <h3 class="clients-list text-center">Information About Hero</h3>
        <table class="clients table table-striped">
            <tr>
                <th>Hero Picture</th>
                <th>Alignment</th>
                <th>Height</th>
                <th>Weight</th>
                <th>Aliases</th>
            </tr>
                <tr class="client">
                    <td><img src="{{ asset('images/' .$hero->image) }}" alt=""></td>
                    <td><h5>{{ $hero->alignment }}</h5></td>
                    <td><h5>{{ number_format($hero->height / 100, 2) }} m</h5></td>
                    <td><h5>{{ $hero->weight }} kg</h5></td>
                    <td><h5>{{ $hero->aliases }}</h5></td>

                </tr>
        </table>
</div>


@endsection
