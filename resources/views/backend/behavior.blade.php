@extends('template')
@section('content')
   <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">Behavior Form</h4>
                    <form action="{{ route('behavior.store') }}" method="post" enctype="multipart/form-data">
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
                            <label for="inputAddress">Description</label>
                            <textarea class="form-control" name="desc"></textarea>
                        </div>
                        
                         
          
                        <button class="btn btn-primary btn-lg btn-block error-w3l-btn" type="submit">ADD</button>
                    </form>
     </div>

@endsection