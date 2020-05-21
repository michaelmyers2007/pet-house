@extends('template')
@section('content')
   <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">Animal Form</h4>
                    <form action="{{ route('animal.store') }}" method="post" enctype="multipart/form-data">
                           @csrf
                 <div class="form-group">
                            <label for="inputAddress">Type</label>
                            <input type="text" class="form-control" name="type" required="">
                 </div>
             
             
             
               
                <button class="btn btn-primary btn-lg btn-block error-w3l-btn" type="submit">ADD</button>
            </form>
        </div>

@endsection