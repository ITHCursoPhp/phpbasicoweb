@extends('app')
@section('content')
<div class="container">
    <div class="row">
        {!! Form::open(
            [
                'route' => 'producto/search',
                'method' => 'post',
                'novalidate',
                'class' => 'form-inline'
            ]
        ) !!}
        <div clas="form-group">
            <label form="exampleInputDescripcion">Descripcion</label>
            <input type="text" class="form-controll" name="descripcion" />

        </div>
        <button type="submit" class="btn btn-default">Search</button>
        <a href="{{ route('producto.index') }}" class="btn btn-primary">All</a>
        <a href="{{ route('producto.create') }}" class="btn btn-primary">Create</>

        {!! Form::close() !!}
    </div>
</div>
