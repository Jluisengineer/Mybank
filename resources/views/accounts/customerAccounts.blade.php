@extends('../layouts.template')

@section('title','Accounts')


@section('navbar')
    
@endsection

@section('by')
    
@endsection

@section('container')
    


<div class="container" style="margin-top:50px">
 
    <table>
    <tr><th colspan="5" style="text-align: center">New Account Bank</th></tr>
    <tr>
        <th>ID Account</th>
        <th>Name</th>
        <th>Surname</th>
        <th>Date of birth</th>
        <th>Sort Code</th>
        <th>Balance</th>
    </tr>
    @foreach ($customers as $customer)
    {!! Form::open(['route'=>['account.destroy',$customer->id], 'method'=>'DELETE']) !!}
        <tr>
            <td>{{$customer->id}}</td>
            <td>{{$customer->Name}}</td>
            <td>{{$customer->Surname}}</td>
            <td>{{$customer->Date_of_Birth}}</td>
            <td>{{$customer->Sort_Code}}</td>
            <td>{{$customer->Balance}}</td>
            
            <td><a href="{{route('transaction.edit',$customer->id)}}"><input type="button" value="New Transaction"></a></td>
            
            
            
            <td>
            {!! Form::submit('Delete') !!}
            </td>
            
        </tr>
    
    {!! Form::close() !!}
        
    @endforeach
    </table>
</div>
@endsection