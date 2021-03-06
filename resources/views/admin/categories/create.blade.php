@extends('admin.template.main')

@section('title', 'Crear Categoria')

@section('content')
    <div class="container-fluid">
    {!! Form::open(['route' => 'categories.store', 'method' => 'POST'])  !!}
        <div class="form-group">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre de categoria', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}
    </div>

@endsection