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
        <th>Name</th>
        <th>Surname</th>
        <th>Date of birth</th>
        <th>Sort Code</th>
        <th>Balance</th>
    </tr>
    @foreach ($customer as $item)
    {!! Form::open(['route'=>['account.destroy',$item->id], 'method'=>'DELETE']) !!}
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->Name}}</td>
            <td>{{$item->Surname}}</td>
            <td>{{$item->Date_of_Birth}}</td>
            <td>{{$item->Sort_Code}}</td>
            <td>{{$item->Balance}}</td>
            <td><a href="{{route('search.customer')}}"><button>New Transaction</button></a></td>
            
            
            
            <td>
            {!! Form::submit('Delete') !!}
            </td>
            
        </tr>
    
    {!! Form::close() !!}
        
    @endforeach
    </table>
</div>
@endsection