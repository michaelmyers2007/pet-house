@extends('template')
@section('content')

   @if(isset($query))
   <section class="py-5 bg-mylight">
      <div class="container">
      
        <div class="row">
            @foreach($query as $creepers)
   

            <div class="col-md-4">
                <div class="card " style="border-radius: 1rem;">
                        <a href="{{route('type.show',$creepers->id)}}" class="mb-2 d-block" style="cursor: pointer !important;text-decoration: none;">
                        <img class="card-img-top" src="{{asset($creepers->photo)}}" alt="Card image cap">
                        <div class="card-img-overlay">
                      
                            <span class="card-title">{{$creepers->name}}</span>
                              
                        </div>
                        <div class="card-body">
                            
                             <p class="text-dark">{{$creepers->name}}</p>
                              <p class="text-dark">{{$creepers->item->price}}
                               <p class="text-dark">{{$creepers->behavior->description}}</p>
                            

                            
                         
                            
                            
                            <p class="lead small mb-0 text-secondary">{{$creepers->created_at->toFormattedDateString()}}</p>
                        </div>
                    
                    </a>
                    

                </div>
            </div>

        @endforeach
    
    
     
      </div>
      </div>
  
  </section>


       @elseif(isset($accessory))
    <section class="py-5 bg-mylight">
   
      <div class="container">
      
        <div class="row">
            @foreach($accessory as $creepers)
   

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
                               
                            

                            
                         
                            
                            
                            <p class="lead small mb-0 text-secondary">{{$creepers->created_at->toFormattedDateString()}}</p>
                        </div>
                    
                    </a>
                    

                </div>
            </div>

        @endforeach
     
     
      </div>
      </div>
      
  </section>
  @elseif(isset($food))
    <section class="py-5 bg-mylight">
   
      <div class="container">
      
        <div class="row">
            @foreach($food as $creepers)
   

            <div class="col-md-4">
                <div class="card " style="border-radius: 1rem;">
                        <a href="{{route('food.show',$creepers->id)}}" class="mb-2 d-block" style="cursor: pointer !important;text-decoration: none;">
                        <img class="card-img-top" src="{{asset($creepers->photo)}}" alt="Card image cap">
                        <div class="card-img-overlay">
                      
                            <span class="card-title">{{$creepers->name}}</span>
                              
                        </div>
                        <div class="card-body">
                            
                             <p class="text-dark">{{$creepers->name}}</p>
                              <p class="text-dark">{{$creepers->price}}
                               
                            

                            
                         
                            
                            
                            <p class="lead small mb-0 text-secondary">{{$creepers->created_at->toFormattedDateString()}}</p>
                        </div>
                    
                    </a>
                    

                </div>
            </div>

        @endforeach
     
     
      </div>
      </div>
      
  </section>
   @else
      <h1>No Details found. Try to search again !</h1>
      @endif
@endsection