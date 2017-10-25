@extends('skeleton')

@section('content')
    <div class="jumbotron">
        <h1 id="title">Let's get this shit done together boys</h1>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div id="map"></div>
        </div>
    </div>
@endsection

@section('scripts')
    @include('scripts.map')
@endsection
