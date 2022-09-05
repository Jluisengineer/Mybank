@extends('../layouts/template')

@section('title','Search customer')

@section('navbar')
@endsection

@section('by')
@endsection

@section('container')
<div class="container" style="margin-top:50px">
    {!! Form::open(['route'=>'transaction.create', 'method'=>'GET']) !!}
    <table>
        <tr><th colspan="2" style="text-align: center">Search Account Bank</th></tr>
        <tr>
            <td>{!! Form::label('name', 'Name: ') !!}</td>
            <td>{!! Form::text('Name', '',['id'=>'name','placeholder'=>'Name']) !!}</td>
        </tr>
        <tr>
            <td>{!! Form::label('sort', 'Sort Code: ') !!}</td>
            <td>{!! Form::text('Sort_Code', '',['id'=>'sort','placeholder'=>'Sort Code']) !!}</td>
        </tr>

        <tr>
            <td style="text-align: center">{!! Form::submit('Search') !!}</td>
            <td style="text-align: center"><button type="reset">Reset</button></td>
        </tr>
    </table>

{!! Form::close() !!}
</div>
@endsection