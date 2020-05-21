@extends('template')
  
@section('content')
     <section class="courses_area p_120">
        	<div class="container">
            
    			<div class="row">
                    <div class="col-lg-12">
                        <blockquote class="generic-blockquote">
                            <h4>{{$type->animal->name}}</h4>
                             
                        </blockquote>
                    </div>
                </div>

        		<div class="row courses_inner my-5">
                    <div class="col-md-4 my-2">
                        <div class="grid_item wd100">
                            <div class="courses_item">
                                <img src="{{$type->photo}}" alt="" class="img-fluid">
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 my-2">
                        <div class="grid_item wd100">
                            <div class="courses_item">
                                
                                  <div class="form-group row">

                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Name</label>
                                    <div class="col-sm-9">
                                      <p class="h6 my-2">{{$type->name}}</p>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-3 col-form-label">Price</label>
                                    <div class="col-sm-9">
                                      <p class="h6 my-2">{{$type->item->price}} </p>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-3 col-form-label">Item Code</label>
                                    <div class="col-sm-9">
                                      <p class="h6 my-2">{{$type->item->codeno}}</p>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Quantity</label>
                                    <div class="col-sm-9">
                                      <p class="h6 my-2">{{$type->item->no_animal}}</p>
                                    </div>
                                  </div>

                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Description</label>
                                    <div class="col-sm-9">
                                      <p class="h6 my-2">{{$type->behavior->description}}</p>
                                    </div>
                                  </div>
                                    
                                  @if(Auth::check())
                                  
                                  <div class="form-group row my-5">
                                    <div class="col-sm-9">
                                        <button type="submit" class="btn btn-outline-info mx-2">Add To Cart</button>
                                        <a href="{{route('type.edit',$type->id)}}" class="btn btn-outline-warning mx-2">Edite</a>
                                        <form method="post" class="d-inline-block">
                                            <input type="hidden" name="_method" value="Delete">
                                                   @csrf
                                                 <input type="submit" value="Delete" class="btn btn-outline-danger mx-2">
                                               </form>
                                        

                                    </div>
                                  </div>
                               @endif
                            </div>
                        </div>
                    </div>
                </div>

          
        	</div>
        </section>
	 
@endsection