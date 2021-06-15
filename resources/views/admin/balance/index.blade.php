@extends('adminlte::page')

@section('title', 'Home Dashboard')

@section('content_header')
	<h1 class="m-0 text-dark">Saldo</h1>

	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="">Dashboard</a></li>
		<li class="breadcrumb-item"><a href="">Saldo</a></li>
	</ol>
@stop


@section('content')

	<div class="col-lg-3 col-6">
	<!-- small box -->
	<div class="small-box bg-success">
	  <div class="inner">
	    <h3>R${{ number_format($amount,2,'.','') }}<sup style="font-size: 20px"></sup></h3>

	    <p>Saldo</p>
	  </div>
	  <div class="icon">
	    <i class="ion ion-stats-bars"></i>
	  </div>
	  <a href="#" class="small-box-footer">Histórico <i class="fas fa-arrow-circle-right"></i></a>
	</div>
</div>

@stop


