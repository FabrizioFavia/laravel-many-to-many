@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4 d-flex flex-wrap justify-content-between">
        <div class="row w-100">
            <h1 class="mb-5">Inserisci un nuovo progetto</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form class="form-control needs-validation p-2" action="{{ route('admin.projects.store') }}" method="post">
                @csrf


                <div class="mb-3">
                    <label class="mb-1 fs-6" for="title">Titolo Progetto</label>
                    <input type="text" name="title" id="title" value="{{ old('title') }}" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="mb-1 fs-6" for="description">Descrizione</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{ old('description') }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="mb-1 fs-6" for="image">URL immagine</label>
                    <input type="text" name="image" id="image" value="{{ old('image') }}" class="form-control">
                </div>
                {{-- FORM CHECK --}}


                <p class="mb-3 fs-6">Seleziona le tecnologie utilizzate nel progetto</p>
                <div class="mb-3 d-flex w-25">
                    @foreach ($technologies as $i=>$technology)
                        <div class="form-check me-5 my-3">
                            <input class="form-check-input" type="checkbox" value="{{$technology->id}}" id="technologies{{$i}}" name="technologies[]">
                            <label for="technologies{{$i}}" class="form-check-label" for="flexCheckDefault">
                                {{$technology->name}}
                            </label>
                        </div>
                    @endforeach
                </div>
                <hr>


                {{-- SELECT --}}

                <div class="mb-3">
                    <label class=" fs-6" for="difficoltà">Seleziona difficoltà</label>

                    <select name="type_id" id="difficoltà">Seleziona difficoltà
                        @foreach ($types as $type)
                            <option value="{{ $type->id }}">{{ $type->type }}</option>
                        @endforeach
                    </select>
                </div>




                <button type="submit" class="btn btn-primary">Inserisci</button>
            </form>

        </div>
    </div>
@endsection
