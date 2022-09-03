@extends('../layouts.template')
@section('title','Management')

@section('navbar')

@endsection
<divclass='by'>
@section('by')
</div>
@endsection

@section('container')
<div>
    <h1 class="text-center">MyBank Customer Management</h1>
    </div>
    <div id="options">
            <table class="table table-info table-borderless text-center">
            <tr>
                <td><a href="{{route('customer.create')}}"><img src="{{asset('/images/dataentry.jpg')}}" title= "New customer" alt="New customer" ></a></td>
                <td><a href="{{route('search.customerView')}}"><img src="{{asset('/images/search.jpg')}}" title= "Search customer" alt="Search customer"></a></td>
            </tr>
            <tr><td>New Customer</td><td>Search Customer</td></tr>
            <tr>
                <td><a href="new_transaction.php"><img src="{{asset('/images/newaccountmanager.jpg')}}" title="New transaction" alt="New transaction" ></a></td>
                <td><a href="{{route('customer.index')}}"><img src="{{asset('/images/listaccountmanagers.jpg')}}" title="List Customers" alt="List Customers" ></a></td>
            </tr>
            <tr><td>New Transaction</td><td>List of Customers</td></tr>
            </table>
    </div>
    
    @endsection