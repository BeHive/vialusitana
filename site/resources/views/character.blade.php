@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row flex-xl-nowrap justify-content-center">

            <div class="col-md-8">

                <div class="d-flex justify-content-between">
                    <h4>Characters</h4>
                    <a href="{{ route('characterCreate') }}" class="btn btn-primary">
                        Add
                    </a>
                </div>

                <br>
                <ul class="list-group">
                    @forelse($characters as $character)
                        <li class="list-group-item">
                            <a href="{{ route('characterEdit', ['id' => $character['id'] ]) }}"
                               class="list-group-item-action">
                                {{ $character->name }}
                            </a>
                        </li>
                    @empty
                        <li class="list-group-item">You have no characters of this type</li>
                    @endforelse
                </ul>

            </div>
        </div>
    </div>
@endsection
