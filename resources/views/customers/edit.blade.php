@extends('../layouts/template')

@section('title','Customers')

@section('navbar')
@endsection

@section('by')
@endsection

@section('container')
<h3>Update customer</h3>
<div class="container" style="margin-top:50px">
    {!! Form::open(['route'=>['customer.update',$customer->id], 'method'=>'PUT']) !!}
    <table>
        <tr><th colspan="2" style="text-align: center">Update Customer</th></tr>
        <tr>
            <td>{!! Form::label('name', 'Name: ') !!}</td>
            <td>{{$customer->Name}}</td>
            <td>{!! Form::text('Name', $customer->Name,['id'=>'name']) !!}</td>
            
        </tr>
        <tr>
            <td>{!! Form::label('surname', 'Surname: ') !!}</td>
            <td>{{$customer->Surname}}</td>
            <td>{!! Form::text('Surname', $customer->Surname,['id'=>'surname']) !!}</td>
        </tr>
        <tr>
            <td>{!! Form::label('dob', 'Date of Birth: ') !!}</td>
            <td>{{$customer->Date_of_Birth}}</td>
            <td>{!! Form::text('Date_of_Birth', $customer->Date_of_Birth,['id'=>'age','min'=>'18','max'=>'99']) !!}</td>
        </tr>
        <tr>
            <td>{!! Form::label('address', 'Address: ') !!}</td>
            <td>{{$customer->Address}}</td>
            <td>{!! Form::text('Address', $customer->Address,['id'=>'address']) !!}</td>
        </tr>
        <tr>
            <td>{!! Form::label('email', 'Email: ') !!}</td>
            <td>{{$customer->Email}}</td>
            <td>{!! Form::email('Email', $customer->Email,['id'=>'email']) !!}</td>
        </tr>
        <tr>
            <td>{!! Form::label('phone', 'Phone: ') !!}</td>
            <td>{{$customer->Phone}}</td>
            <td>{!! Form::text('Phone', $customer->Phone,['id'=>'phone']) !!}</td>
        </tr>
        <tr><td colspan="2" style="text-align: center">
        {!! Form::submit('Send') !!}
        </td>
        <td><button type="reset">Reset</button></td>
        </tr>

    </table>

{!! Form::close() !!}
</div>
@endsection



