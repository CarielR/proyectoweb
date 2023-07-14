<<<<<<< Updated upstream
@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @livewire('servicios')
        </div>     
    </div>   
=======
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Servicios</title>
  <link rel="icon" type="image/png" href="img/AW.png">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

<style>
    .siderbar:hover {
        background-color: red;
    }
	.log{
		float: left;
		width: 100px; /* Ajusta el valor según el tamaño deseado */
        height: auto;
		margin-right: 20px;
	}
</style>
@vite(['resources/js/app.js'])

</head>
<body class="hold-transition sidebar-mini">
<!-- side-bar-->
<x-side-bar></x-side-bar>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home#">Home</a></li>
              <li class="breadcrumb-item active">Servicios</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
      @livewire('servicios')
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

>>>>>>> Stashed changes
</div>
@endsection