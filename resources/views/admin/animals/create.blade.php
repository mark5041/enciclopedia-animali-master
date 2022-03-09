@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @if (session('status'))
                <div class="alert alert-danger">
                    {{ session('status') }}
                </div>
            @endif
        </div>
        <div class="row">
            <div class="col">
                <h1>
                    Create New Animal
                </h1>
            </div>
        </div>
        <div class="row">
            <form class="col" action="{{ route('admin.animals.store') }}" method="post"
                enctype="multipart/form-data">
                @csrf
                @method('POST')

                <div class="mb-3">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="name" name="name" value=" {{ old('name') }}">
                    @error('name')
                        <div class="alert alert-danger mt-3">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <select class="form-select" name="specie_id">
                        <option value="">Select a specie</option>
                        @foreach ($species as $specie)
                            <option @if (old('specie_id') == $specie->id) selected @endif value="{{ $specie->id }}">
                                {{ $specie->name }}</option>
                        @endforeach
                    </select>
                    @error('specie_id')
                        <div class="alert alert-danger mt-3">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control" id="description" rows="3"
                        name="description"> {{ old('description') }}</textarea>
                    @error('description')
                        <div class="alert alert-danger mt-3">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Upload</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="photo" name="photo">
                        <label class="custom-file-label" for="photo">Choose file</label>
                    </div>
                    @error('photo')
                        <div class="alert alert-danger mt-3">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <input class="btn btn-primary" type="submit" value="Save">
            </form>
        </div>
    </div>
@endsection
