@extends('template')
@section('content')

 <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">Edit Form</h4>
                    <form action="{{ route('type.update',$type->id) }}" method="post" enctype="multipart/form-data">
                    	<input type="hidden" name="_method" value="PUT">
                           @csrf
                       
                            <div class="form-group">
                           <label for="category_id" class="col-md-4 control-label">Type</label>
                           <select name="category_id" class="form-control">
                               @foreach ($animal as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                               @endforeach
                           </select>
                            </div>
                             <div class="form-group">
                            <label for="inputAddress">Name</label>
                            <input type="text" class="form-control" name="name" value="{{$type->name}}"required="">
                        </div>

                       
                       
               
                        <div class="form-group">
                          <ul class="nav nav-tabs" id="myTab" role="tablist">
                           <li class="nav-item">
                             <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Old Photo</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">New Photo</a>
                            </li>
                          </ul>
                        <div class="tab-content" id="myTabContent">
                         <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"><img src="{{asset($type->photo)}}" class="img-fluid w-25"><input type="hidden" name="oldimage" value="{{$type->photo}}"></div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"> <input type="file" name="photo" value="" class="form form-control {{$errors->has('photo') ? 'is-invalid' : ''}}">
                         @if ($errors->has('photo'))
                           <span class="invalid-feedback" role="alert">
                             <strong>{{ $errors->first('photo') }}</strong>
                           </span>
                          @endif
                        </div>
                        </div>
                        </div>
                         <div class="form-group">
                            <label for="inputAddress">Price</label>
                            <input type="text" class="form-control" name="price" value="{{$type->item->price}}" required="">
                        </div>
                         <div class="form-group">
                            <label for="inputAddress">Code No</label>
                            <input type="text" class="form-control" name="code" value="{{$type->item->codeno}}" required="">
                        </div>
                            <div class="form-group">
                            <label for="inputAddress">No animal</label>
                            <input type="text" class="form-control" name="animal" value="{{$type->item->no_animal}}" required="">
                        </div>
                            <div class="form-group">
                            <label for="inputAddress">Description</label>
                            <input type="text" class="form-control" name="desc" value="{{$type->behavior->description}}" required="">
                        </div>
                        
                        
                      <button class="btn btn-primary btn-lg btn-block error-w3l-btn" type="submit">Update</button>
                      
                    </form>
     </div>

@endsection