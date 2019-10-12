@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row flex-xl-nowrap justify-content-center">

            <div class="col-md-8">

                <div class="d-flex justify-content-between">
                    <h4>Party</h4>
                </div>
                <br>
                <div class="card-columns">
                    @foreach($partyMembers as $member)
                        <div class="card p-1">
                            <img src="/storage/{{$member->avatar}}" class="card-img-top" alt="{{$member->name}}">
                            <div class="card-body">
                                <h5 class="card-title">{{$member->name}}</h5>
                                <p class="card-text">{{$member->role['display_name']}}</p>
                            </div>
                        </div>

                    @endforeach
                </div>

            </div>
        </div>
    </div>
@endsection
