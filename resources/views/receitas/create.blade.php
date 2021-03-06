@extends('layouts.app2')

@section('content')
    <section class="content-header text-center">
        <h1>
            Cadastro de Receita
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                    {!! Form::open(['route' => 'receitas.store']) !!}

                        @include('receitas.fields')

                    {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
