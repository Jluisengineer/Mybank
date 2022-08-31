@extends('../layouts/template')

@section('title','New customer')

@section('navbar')
@endsection

@section('by')
@endsection

@section('container')
<div class="container" style="margin-top:50px">
    {!! Form::open(['route'=>'customer.store', 'method'=>'POST']) !!}
    <table>
        <tr><th colspan="2" style="text-align: center">New Customer</th></tr>
        <tr>
            <td>{!! Form::label('name', 'Name: ') !!}</td>
            <td>{!! Form::text('Name', '',['id'=>'name','placeholder'=>'Name']) !!}</td>
        </tr>
        <tr>
            <td>{!! Form::label('surname', 'Surname: ') !!}</td>
            <td>{!! Form::text('Surname', '',['id'=>'surname','placeholder'=>'Surname']) !!}</td>
        </tr>
        <tr>
            <td>{!! Form::label('dob', 'Date of Birth: ') !!}</td>
            <td>{!! Form::date('Date_of_Birth', '',['id'=>'dob']) !!}
             </td>
        </tr>
        <tr>
            <td>{!! Form::label('address', 'Address: ') !!}</td>
            <td>{!! Form::text('Address', '',['id'=>'address','placeholder'=>'Address']) !!}</td>
        </tr>
        <tr>
            <td>{!! Form::label('email', 'Email: ') !!}</td>
            <td>{!! Form::email('Email', '',['id'=>'email','placeholder'=>'email@email']) !!}</td>
        </tr>
        <tr>
            <td>{!! Form::label('phone', 'Phone: ') !!}</td>
            <td>{!! Form::text('Phone', '',['id'=>'phone','placeholder'=>'Phone']) !!}</td>
        </tr>
        <tr>
            <td>{!! Form::label('deposit', 'Deposit: ') !!}</td>
            <td>{!! Form::text('Balance', '',['id'=>'deposit','placeholder'=>'New deposit']) !!}</td>
        </tr>
        <tr>
            <td style="text-align: center">{!! Form::submit('Send') !!}</td>
            <td style="text-align: center"><button type="reset">Reset</button></td>
        </tr>

    </table>

{!! Form::close() !!}
</div>
@endsection