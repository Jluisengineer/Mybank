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
    
        @foreach ($customer as $item)
       
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->Name}}</td>
                <td>{{$item->Surname}}</td>
                <td>{{$item->Date_of_Birth}}</td>
                <td>{{$item->Sort_Code}}</td>
                <td>{{$item->Balance}}</td>
            </tr>
        
      
            
        @endforeach
      


    </table>
</div>
@endsection