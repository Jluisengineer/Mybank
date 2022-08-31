@extends('../layouts.template')
@section('title','Recorded')
  
@section('by')
    
@endsection

@section('container')
<h4 class="text-center primary">CLIENT RECORDED</h4>
<script language='javascript'>
    function redireccionar(){
        window.location.href = '/index';
      }
       
      setTimeout('redireccionar()', 2000);</script>
@endsection