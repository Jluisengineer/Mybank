@extends('../layouts.template')
@section('title','Recorded')
  
@section('by')
    
@endsection

@section('container')

<h5 class='text-center' style="margin-top: 100px;">Customer deleted</h5>
<script language='javascript'>
    function redireccionar(){
        window.location.href = '/customer';}
       
      setTimeout('redireccionar()', 2000); </script>
@endsection