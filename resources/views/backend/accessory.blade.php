@extends('template')
@section('content')
   <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">Accessory Form</h4>
                    <form action="{{ route('accessory.store') }}" method="post" enctype="multipart/form-data">
                           @csrf
                        <div class="form-group">
                           <label for="category_id" class="col-md-4 control-label">Type</label>
                           <select name="category_id" class="form-control">
                               @foreach ($type as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                               @endforeach
                           </select>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Name</label>
                            <input type="text" class="form-control" name="name" required="">
                        </div>
                               <div class="form-group">
                            <label for="inputAddress">Photo</label>
                            <input type="file" name="photo" class="form-control-file {{ $errors->has('photo') ? ' is-invalid' : '' }}" />
                            @if ($errors->has('photo'))
                            <span class="invalid-feedback" role="alert">
                             <strong>{{ $errors->first('photo') }}</strong>
                            </span>
                            @endif
                        </div>
                        
                        <div class="form-group">
                            <label for="inputAddress">Per Price </label>
                            <input type="text" class="form-control" name="price" required="">
                        </div>
                      
                        <div class="form-group">
                            <label for="inputAddress">Quantity</label>
                            <input type="text" class="form-control" name="qty" required="">
                         </div>
                         
          
                        <button class="btn btn-primary btn-lg btn-block error-w3l-btn" type="submit">ADD</button>
                    </form>
     </div>

@endsection