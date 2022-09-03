@extends('../layouts/template')

@section('title','Search customer')

@section('navbar')
@endsection

@section('by')
@endsection

@section('container')
<div class="container" style="margin-top:50px">
   
    <table>
    <tr><th colspan="5" style="text-align: center">New Account Bank</th></tr>
    <tr>
        <th>Customer ID</th>
        <th>Name</th>
        <th>Surname</th>
        <th>Sort Code</th>
        <th>Deposit</th>
    </tr>

    {!! Form::open(['route'=>'account.store', 'method'=>'POST']) !!}
    
    <tr>
        <td>{!! Form::text('customer_id', $data[0],['id'=>'cust_id','readonly']) !!}</td>
        <td>{!! Form::text('Name', $data[1],['id'=>'name','readonly']) !!}</td>
        <td>{!! Form::text('Surname', $data[2],['id'=>'name','readonly']) !!}</td>
        <td>{!! Form::text('Sort_Code', $data[3],['id'=>'sortcode','readonly']) !!}</td>
        <td>{!! Form::text('Balance', '',['id'=>'deposit']) !!}</td>
    </tr>
    <tr>
        <td colspan="3" style="text-align: center">{!! Form::submit('Send') !!}</td>
        <td colspan="2" style="text-align: center"><button type="reset">Reset</button></td>
    </tr>
    {!! Form::close() !!}
    </table>


</div>
@endsection