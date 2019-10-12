@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row flex-xl-nowrap justify-content-center">

            <div class="col-md-8">

                <div class="d-flex justify-content-between">
                    <h4>The Story So Far</h4>
                </div>

                <br>

                <div id="accordion">

                    @foreach($sessions as $session)

                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center"
                                 id="heading{{$session->id}}">
                                <button class="btn" data-toggle="collapse" data-target="#collapse{{$session->id}}"
                                        aria-expanded="false" aria-controls="collapse{{$session->id}}">
                                    {{ date('Y-m-d', strtotime($session->real_date)) }}
                                    ({{ date('Y-m-d', strtotime($session->ingame_date)) }}) - {{ $session->title }}
                                </button>
                            </div>
                            <div id="collapse{{$session->id}}" class="collapse"
                                 aria-labelledby="heading{{$session->id}}" data-parent="#accordion">
                                <div class="card-body">
                                    {!! $session->description !!}
                                </div>
                            </div>
                        </div>
                        <br>

                    @endforeach
                    <div class="text-xs-center">
                        {{ $sessions->links() }}
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
