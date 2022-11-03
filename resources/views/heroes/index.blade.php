@extends('layouts.app')


@section('content')
<a class="btn btn-primary m-2" href="{{ route('heroes.create') }}">Create Hero</a>
<div class="row">
    <div class="col-lg-6">
        <table class="table caption-top">
            <thead>
            <tr>
                <th scope="col">Image</th>
                <th scope="col">Name</th>
                <th scope="col">@sortablelink('character.intelligence','Intelligence')</th>
                <th scope="col">@sortablelink('character.strength','Strength')</th>
                <th scope="col">@sortablelink('character.speed','Speed')</th>
                <th scope="col">@sortablelink('character.durability','Durability')</th>
                <th scope="col">@sortablelink('character.power','Power')</th>
                <th scope="col">@sortablelink('character.combat','Combat')</th>
                <th scope="col">Alignment</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @forelse ( $heroes as $hero)
            <tr>
                <td><img src="{{ asset('images/' .$hero->image) }}" alt=""></td>
                <td>{{ $hero->name }}</td>
                <td>{{ $hero->character->intelligence }}</td>
                <td>{{ $hero->character->strength }}</td>
                <td>{{ $hero->character->speed }}</td>
                <td>{{ $hero->character->durability }}</td>
                <td>{{ $hero->character->power }}</td>
                <td>{{ $hero->character->combat }}</td>
                <td>{{ $hero->alignment }}</td>
                <td>
                    <form method="POST" action="{{ route('heroes.destroy', $hero) }}">
                    @csrf
                    @method('DELETE')
                    <a class="btn btn-success" href="{{ route('heroes.show', $hero) }}">Show</a>
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
                </td>
            @empty
                <td>
                    <div class="card mb-4 text-center">
                        <div class="card-body">
                            <p class="card-text">
                                Create your first hero
                            </p>
                        </div>
                    </div>
                </td>
            @endforelse
            </tr>
            </tbody>
        </table>
        {!! $heroes->appends(\Request::except('page'))->render() !!}
    </div>
</div>

@endsection
