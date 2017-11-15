@extends('admin')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard
                        <a href="">
                            <button class="btn btn-primary">Reload</button>
                        </a>
                    </div>

                    <div class="panel-body">
                        <img src="{{ $unique }}" alt="">
                    </div>
                    <div class="panel-footer">
                        Partagé le gif : <a href="{{ $unique }}" target="_blank"><span>{{ $unique }}</span></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <h3 class="text-center jumbotron">Gifs déjà généré</h3>
        </div>

        <div class="row">
            @if($allGif->count() > 1 )
            @foreach($allGif as $gif)
            <div class="col-md-5">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <img src="{{ $gif->img_url }}" alt="">
                    </div>
                    <div class="panel-footer">
                        Partagé le gif : <a href="{{ $gif->img_url }}" target="_blank"><span>{{ $gif->img_url }}</span></a>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>

@endsection