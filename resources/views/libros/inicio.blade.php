@extends('master')
@section('content')

<div class="container">
	@if(Session::has('success'))
			<div class="alert alert-info">
				{{Session::get('success')}}
			</div>
			@endif
		      <div class="panel panel-default">
	        <div class="panel-body">
	          <div class="pull-left"><h3>Lista Libros</h3></div>          
	          <div class="table-container">
	            <table id="mytable" class="table table-bordred table-striped">
	             <thead>
	               <th>Nombre</th>
	               <th>Resumen</th>
	               <th>No. Páginas</th>
	               <th>Edicion</th>
	               <th>Autor</th>
	               <th>Precio</th>
	               <th>Editar</th>
	               <th>Eliminar</th>
	             </thead>
	             <tbody>
	             @if($libros->count()) 
	             	@foreach($libros as $libro)           
	               <tr>
		               <td>{{$libro->nombre}}</td>
		               <td>{{$libro->resumen}}</td>
		               <td>{{$libro->npagina}}</td>
		               <td>{{$libro->edicion}}</td>
		               <td>{{$libro->autor}}</td>
		               <td>{{$libro->precio}}</td>
		               <td>
		               	<a href="{{ route('libro.editar', $libro->id) }}" class="btn btn-secondary">Editar</a>
		               </td>
		               <td>
		               	<a class="btn btn-danger" href="{{route('libro.eliminar',['id'=> $libro->id])}}">Eliminar</a>
		               </td>
	               </tr>
	               @endforeach
	               @else            
	               <tr>
	                <td colspan="8">No hay registro !!</td>
	              </tr> 
	              @endif           
	            </tbody>
	          	</table>
	          	{{ $libros->links() }}
	          <div class="pull-right">
	            <div class="btn-group">
	              <a href="{{ route('libro.crear') }}" class="btn btn-info">Añadir Libro</a>
	            </div>
	          </div>
	        </div>	        
	      </div>      
	    </div>	    
</div>

	@endsection

