@extends('template')

@section('content')
   
   <section class="py-5 bg-mylight">
   	
      <div class="container">
	  <h4>Creeper</h4>
	    <div class="row">
	    	@foreach($a as $creepers)
	    	@if($creepers->type->animal->name=='fish')

	    	<div class="col-md-4">
    			<div class="card " style="border-radius: 1rem;">
    				    <a href="{{route('accessory.show',$creepers->id)}}" class="mb-2 d-block" style="cursor: pointer !important;text-decoration: none;">
					    <img class="card-img-top" src="{{asset($creepers->photo)}}" alt="Card image cap">
					  	<div class="card-img-overlay">
					  
							<span class="card-title">{{$creepers->name}}</span>
							  
						</div>
					    <div class="card-body">
					    	
					    	 <p class="text-dark">{{$creepers->name}}</p>
					    	  <p class="text-dark">{{$creepers->price}}
					    	   <p class="text-dark">{{$creepers->no_accessories}}</p>
					    	

					    	
						 
							
							
						    <p class="lead small mb-0 text-secondary">{{$creepers->created_at->toFormattedDateString()}}</p>
					    </div>
					
					</a>
					

				</div>
    		</div>
    		
	    @endif
	    @endforeach
	  
	  </div>
      </div>
  </section>
      <hr class="border-secondary">

    
  
 
 

	 
@endsection