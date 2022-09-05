@extends('../layouts/template')

@section('title','Customers')

@section('navbar')
@endsection

@section('by')
@endsection

@section('container')
<div class="container">
<h3 style='text-align:center'>Customer list</h3>

<table class="table table-bordered">
    <tr>
        <th>NAME</th>
        <th>SURNAME</th>
        <th>Date of Birth</th>
        <th>ADDRESS</th>
        <th>EMAIL</th>
        <th>PHONE</th>
    </tr>
    @foreach ($customers as $customer)
    <tr>
        <td>{{$customer->Name}}  </td>
        <td>{{$customer->Surname}}  </td>
        <td>{{$customer->Date_of_Birth}}  </td>
        <td>{{$customer->Address}}  </td>
        <td>{{$customer->Email}}  </td>
        <td>{{$customer->Phone}}  </td>
        <td><a href="{{route('customer.edit',$customer->id)}}"><button>Update</button></a></td>
        <td><a href="{{route('customer.show',$customer->id)}}"><button>Delete</button></a></td>
        <td><a href="#"><button>More Information</button></a></td>
    </tr>
     
    @endforeach


</table>
</div>


@endsection