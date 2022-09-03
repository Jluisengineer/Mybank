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
        <th>Account ID</th>
        <th>Surname</th>
        <th>Sort Code</th>
        <th>Reference</th>
        <th>In</th>
        <th>Out</th>
    </tr>

    {!! Form::open(['route'=>'transaction.store', 'method'=>'POST']) !!}
    @foreach ($customer as $item)
    <tr>
        <td>{!! Form::text('account_id', $item->id,['id'=>'cust_id','readonly']) !!}</td>
        <td>{!! Form::text('Surname', $item->Surname,['id'=>'name','readonly']) !!}</td>
        <td>{!! Form::text('Sort_Code', $item->Sort_Code,['id'=>'sortcode','readonly']) !!}</td>
        <td>{!! Form::text('Reference', '',['id'=>'reference']) !!}</td>
        <td>{!! Form::text('In', '',['id'=>'in']) !!}</td>
        <td>{!! Form::text('Out', '',['id'=>'out']) !!}</td>
    </tr>
    @endforeach
    <tr>
        <td colspan="3" style="text-align: center">{!! Form::submit('Send') !!}</td>
        <td colspan="2" style="text-align: center"><button type="reset">Reset</button></td>
    </tr>
    {!! Form::close() !!}
    </table>


</div>
@endsection