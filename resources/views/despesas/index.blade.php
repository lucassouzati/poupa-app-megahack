@extends('layouts.app2')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Despesas</h1>
        <h1 class="pull-right">
           <a class="btn btn-secondary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('despesas.create') }}">Adicionar Nova</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        {{-- <div class="box box-primary">
            <div class="box-body">
                    @include('despesas.table')
            </div>
        </div> --}}
        <div class="row align-items-center">
            @foreach($despesas as $despesa)
            <div class="col-12">
                <div class="card">
                    <div class="card-body" style="padding-left: 8px; padding-right: 8px;">
                        <div class="row">
                            <div class="col-8">
                                <h5 class="card-title">{{$despesa->nome}}
                                <i class="fa fa-{{$despesa->categoria->icone}}" title="{{$despesa->categoria->nome}}" aria-hidden="true"></i>
                                @if($despesa->efetuada)
                                    <span class="status-span bg" title="Efetuada"></span>
                                 @else
                                    <span class="status-span br" title="Pendente"></span>
                                 @endif
                                 </h5>
                                <h6 class="card-subtitle mb-2 muted">{{$despesa->data_formatada}}</h6>
                            </div>
                            <div class="col-4">
                                <span>R$ {{$despesa->valor_despesa_formatado}}</span><br>
                                {!! Form::open(['route' => ['despesas.destroy', $despesa->id], 'method' => 'delete']) !!}
                                <div class='btn-group'>
                                    <a href="{{ route('despesas.edit', [$despesa->id]) }}" class='btn btn-secondary btn-xs' title="Editar"><i class="fa fa-pencil"></i></a> 
                                    {!! Form::button('<i class="fa fa-trash" title="Excluir"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Você tem certeza?')"]) !!}
                                </div>
                                {!! Form::close() !!}
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <br>
        <div class="text-center">
        
        </div>
    </div>
@endsection

