@extends('admin')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-2">
                <div class="card ">
                    <div class="card-header">Dashboard
                        <a href="">
                            <button class="btn btn-primary">Reload</button>
                        </a>
                    </div>

                    <div class="card-body">
                        <img src="{{ $unique }}" alt="">
                    </div>
                    <div class="card-footer">
                        Partagé le gif : <a href="{{ $unique }}" target="_blank"><span>{{ $unique }}</span></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col">
                <h3 class="text-center jumbotron d-flex justify-content-center">Gifs déjà généré</h3>
            </div>
        </div>

        <div class="row">
            @if($allGif->count() > 1 )
            @foreach($allGif as $gif)
            <div class="col">
                <div class="card m-3">
                    <div class="card-body">
                        <img src="{{ $gif->img_url }}" alt="">
                    </div>
                    <div class="card-footer">
                        Partagé le gif : <a href="{{ $gif->img_url }}" target="_blank"><span>{{ $gif->img_url }}</span></a>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>
        <div class="d-flex justify-content-center">
            {{ $allGif->links() }}
        </div>
    </div>

@endsection