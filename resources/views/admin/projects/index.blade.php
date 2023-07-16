@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4 d-flex flex-wrap justify-content-between">
        <div class="row">

            @foreach ($projects as $project)
                <div class="col-4">
                    <div class="card projCard mb-4">
                        <div class="card-header">
                            <h3>{{ $project->title }}</h3>
                        </div>
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div>
                                <img class="projImg" src="{{ $project->image ? asset("storage/" . $project->image) : asset("public/storage/placeholders/placeholder.png") }}" alt="">

                                <p class="mb-3">{{ $project->description }}</p>
                                <p>Tipo: {{$project->type->type}}</p>
                            </div>
                            <div><a class="btn btn-primary" href="{{ route('admin.projects.show', $project) }}">Scopri di
                                    più</a></div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection

<style>
    .projCard {
        min-height: 500px;
        
        padding: 1em;
    }

    .projImg{
    height: 300px;
    width: 90%;
    object-fit: cover;
    object-position: top;
    margin-bottom: 1em;
}
</style>
