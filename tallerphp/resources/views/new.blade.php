@extends('app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            {!! Form::open(['route' => 'producto.store', 'method' => 'post',                   'novalidate'
                ]
                ) !!}
                <div class="form-group">
                        {!! Form::label(
                            'descripcion',
                            'Descripcion'
                        ) !!}
                        {!! Form::text(
                            'descripcion', null,
                            [
                                'class' => 'form-control',
                                'required' => required]
                            )
                        !!}
                </div>
                <div clas="form-group">
                        {!! Form::label(
                            'precio',
                            'Precio $'
                        ) !!}
                        {!! Form::text(
                            'precio', null,
                            [
                                'class' => 'form-control',
                                'required' => required]
                            )
                        !!}
                </div>
                <div class="form-group">
                    {!! Form::submit(
                        'Enviar',
                        ['class' => 'btn btn-success'])
                    !!}
                </div>
                {!! Form::close() !!}
        </div>
    </div>
</div>
