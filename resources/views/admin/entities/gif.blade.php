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
                        Partagé le gif : <span>{{ $unique }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection