@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4 d-flex">
        <div class="row">
                    <div class="col-12">
                        <div class="card projCard mb-4">
                            <div class="card-header">
                                <h3>{{ $project->title }}</h3>
                            </div>
                            <div class="card-body d-flex flex-column justify-content-between">
                                <img class="projImg" src="{{ $project->image }}" alt="">
                                <p>{{$project->description}}</p>
                            </div>
                        </div>
                    </div>
        </div>
    </div>
@endsection

<style>
.projCard{
    width: 68vw;
    height: 400px;
    
}

.projImg{
    height: 350px;
    object-fit: cover;
    object-position: top;
    margin-bottom: 1em;
}

</style>