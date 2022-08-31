@extends('../layouts/template')

@section('title','Customers')

@section('navbar')
@endsection

@section('by')
@endsection

@section('container')
<h3>Update customer</h3>
<div class="container" style="margin-top:50px">
    {!! Form::open(['route'=>['customer.destroy',$customer->id], 'method'=>'DELETE']) !!}
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Email</th>        
        </tr>
        <tr>
            <td>{{$customer->id}}</td>
            <td>{{$customer->Name}}</td>
            <td>{{$customer->Surname}}</td>
            <td>{{$customer->Email}}</td>    
        </tr>
        <tr>
            <td colspan="2">{!! Form::submit('Delete') !!}</td>
            <td colspan="2"><a href="/index"><input type="button" value="cancel"></a></td>
        </tr>
       
    </table>
    

{!! Form::close() !!}
</div>
@endsection



