@extends('frontend.master')
@section('content')
<input type="button" name="Test" id="te">


@endsection

@section('script')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- JavaScript and JQuery -->
  <script>
    $(document).ready(function(e){
      $("#te").click(function(){
        alert("Hi");
        });
    });
  </script>