@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Specie</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($animals as $animal)
                        <tr>
                            <td>{{ $animal->name }}</td>
                            <td>{{ $animal->specie->name }}</td>
                            
                            <td><a class="btn btn-primary" href="{{ route('admin.animals.show', $animal->id) }}">View</a>
                            </td>
                            <td>
                                <a class="btn btn-info" href="{{ route('admin.animals.edit', $animal->id) }}">Modify</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
