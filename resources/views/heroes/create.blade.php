@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row justify-content-center">

        <div class="col-lg-4">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('heroes.store') }}" method='POST' enctype="multipart/form-data">
                @csrf

                Image:
                <input type="file" name="image" class="form-control filter-input">
                <br>
                Name:
                <input type="text" name="name" class="form-control filter-input" value="{{ old('name') }}">
                <br>
                Powerstats:
                <select class="form-control" name="character_id">
                    <option value="">Powerstats</option>
                    @foreach ($characters as $character)
                        <option value="{{ $character->id}}" @if(old('character_id') == $character->id) selected @endif>
                        ID: {{ $character->id}}
                        Intelligence: {{ $character->intelligence }}
                        Strength: {{ $character->strength }}
                        Speed: {{ $character->speed }}
                        Durability: {{ $character->durability }}
                        Power: {{ $character->power }}
                        Combat: {{ $character->combat }}</option>
                    @endforeach
                </select>
                <br>
                Alignment:
                {{-- <input type="text" name="intelligence" class="form-control filter-input" value="{{ old('intelligence') }}">
                <input type="text" name="strength" class="form-control filter-input" value="{{ old('strength') }}">
                <input type="text" name="speed" class="form-control filter-input" value="{{ old('speed') }}">
                <input type="text" name="durability" class="form-control filter-input" value="{{ old('durability') }}">
                <input type="text" name="power" class="form-control filter-input" value="{{ old('power') }}">
                <input type="text" name="combat" class="form-control filter-input" value="{{ old('combat') }}"> --}}
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="alignment" id="flexRadioDefault1" value="Good" {{ old('alignment') == 'Good' ? 'checked' : '' }}>
                    <label class="form-check-label" for="flexRadioDefault1">
                      Good
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="alignment" id="flexRadioDefault1" value="Badass" {{ old('alignment') == 'Badass' ? 'checked' : '' }}>
                    <label class="form-check-label" for="flexRadioDefault2">
                      Badass
                    </label>
                  </div>
                  <br>
                Height:
                <input type="number" name="height" class="form-control" value="{{ old('height') }}">
                <br>
                Weight:
                <input type="number" name="weight" class="form-control" value="{{ old('weight') }}">
                <br>
                Aliases:
                <input type="text" name="aliases" class="form-control" value="{{ old('aliases') }}">
                <br>
                <button type="submit" class="btn btn-success">Creat Hero</button>

                <a class="btn btn-primary m-3" href="{{ route('heroes.index') }}">Back</a>

            </form>
        </div>
    </div>
</div>

@endsection
