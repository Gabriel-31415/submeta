@extends('layouts.app')

@section('content')

<div class="container">

    <h2 style="margin-top: 100px; ">{{ Auth()->user()->name }} - Perfil: Coordenador</h2>

       <div class="row justify-content-center d-flex align-items-center">
	      <div class="col-sm-4 d-flex justify-content-center ">
	         <a href="{{ route('coordenador.editais') }}" style="text-decoration:none; color: inherit;">
	            <div class="card text-center " style="border-radius: 30px; width: 18rem;">
	                  <div class="card-body d-flex justify-content-center">
	                      <h2 style="padding-top:15px">Editais</h2>
	                  </div>
	                 
	            </div>
	         </a>
	      </div>

	      <div class="col-sm-4 d-flex justify-content-center">
	         <a href="{{ route('coordenador.usuarios') }}" style="text-decoration:none; color: inherit;">
	            <div class="card text-center " style="border-radius: 30px; width: 18rem;">
	             <div class="card-body d-flex justify-content-center">
	                  <h2 style="padding-top:15px">Usuários</h2>
	               </div>
	            </div>
	         </a>
	      </div>
	   </div>


      

</div>

@endsection
