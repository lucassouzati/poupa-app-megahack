@extends('layouts.app2')

@section('content')
<div class="container">
	@include('flash::message')
    <div class="row top-home text-center">
    		<div class="col-12">
    			<div class="row justify-content-center">
    				<div class="col-4">
    					<span class="valores-home">SALDO ATUAL</span><br>
	    				<strong><span class="valores-home">R$ 375,00</span></strong>
    				</div>
    			</div>
    			<div class="row justify-content-between">
    				<div class="col-4">
    					<a href="{{route('receitas.index')}}" title="">
	    					<span class="valores-home">RECEITA</span><br>
	    					<strong><span class="valores-home">R$ 2100,00</span></strong>
    					</a>
    				</div>
    				<div class="col-4">
    					<a href="{{route('despesas.index')}}" title="">
	    					<span class="valores-home">DESPESA</span><br>
	    					<strong><span class="valores-home">R$ 1800,00</span></strong>
    					</a>
    				</div>
    			</div>
    		</div>
    </div>
    <br>
    <div class="row justify-content-center text-center">
    	<div class="col-6">
    		<a href="{{route('receitas.create')}}" title=""><button class="button-home-receita btn btn-success">Nova Receita</button></a>
    	</div>
    	<div class="col-6">
    		<a href="{{route('despesas.create')}}" title="">
    		<button class="button-home-despesa btn btn-danger ">Nova Despesa</button></a>
    		
    	</div>
    	
    </div>
    <br>
    <div class="row">
    	<div class="col-12">
    		<div class="row">
	    			<span style="font-size: 12px;">TOTAL</span>
    			<div class="col-12" style="padding: 0px;">
    			<div class="row justify-content-between">
    				<div class="col-6">
    					<span class="label-termometros">R$ 1425,00 de R$ 1800,00</span>		
    				</div>
    				<div class="col-2">
    					<span class="label-termometros">79,12%</span>
    				</div>
    			</div>
    			</div>
    			<div class="col-md-12">
    				<div class="d-flex flex-row align-items-center">
    					<div class="p-2 flex-fill barra-verde" style="background-color: #5EB43E; z-index: 4; left: 15px">
    						
    					</div>
    					<div class="p-2 flex-fill barra-amarela" style="background-color: #FCC60C; z-index: 3">
    						
    					</div>
    					<div class="p-2 flex-fill barra-laranja fundo-vazio" style="background-color: #F7A00E; z-index: 2; left: -15px;">
    						
    					</div>
    					<div class="p-2 flex-fill barra-vermelha fundo-vazio" style="background-color: #dc3545; z-index: 1; left: -30px;">
    						
    					</div>
    				</div>
    			</div>
    			
    		</div>
    		<div class="row">
    			
    		</div>
    	</div>
    	
    </div>
    <br>
</div>
@endsection
