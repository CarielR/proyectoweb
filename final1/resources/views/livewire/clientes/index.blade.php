<!DOCTYPE html>
<html lang="es">
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>clientes</title>
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
<body class="">
<!-- side-bar-->
<x-side-bar></x-side-bar>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
      @livewire('clientes')
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->


</body>
</html> 
<x-footer />