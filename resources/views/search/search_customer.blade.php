@extends('../layouts/template')

@section('title','Search customer')

@section('navbar')
@endsection

@section('by')
@endsection

@section('container')
<div class="container" style="margin-top:50px">
    {!! Form::open(['route'=>'search.customerAccount', 'method'=>'GET']) !!}
    <table>
        <tr><th colspan="2" style="text-align: center">Search Customer</th></tr>
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
            <td>{!! Form::text('Date_of_Birth', '',['id'=>'dob','placeholder'=>'YYYY/MM/DD']) !!}</td>
        </tr>
        <tr>
            <td style="text-align: center">{!! Form::submit('Search') !!}</td>
            <td style="text-align: center"><button type="reset">Reset</button></td>
        </tr>
    </table>

{!! Form::close() !!}
</div>
@endsection