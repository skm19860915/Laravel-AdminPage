@extends('layouts.master')
@section('title', 'Customer')
@section('content')
<div class="row">
    <div class="col s12 m12 l12">
        <div class="card">
            <div class="card-content">
                <table id="monthly" class="display responsive-table datatable-example">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Picture</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Registered Date</th>
                            <th>Permission</th>    
                            <th>#</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Picture</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Registered Date</th>
                            <th>Permission</th>    
                            <th>#</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($customers as $customer)
                            <tr>
                                <td>{{$customer->id}}</td>
                                <td><img src="{{asset('images/'.$customer->picture)}}" style="width:30px;" /></td>
                                <td>{{$customer->name}}</td>
                                <td>{{$customer->email}}</td>
                                <td>{{$customer->password}}</td>
                                <td>{{$customer->registered_at}}</td>
                                @if ($customer->permission == 1)
                                    <td>
                                        <input type="checkbox" id="{{$customer->id}}" checked />
                                        <label for="{{$customer->id}}"></label>
                                    </td>    
                                @else
                                    <td>
                                        <input type="checkbox" id="{{$customer->id}}" />
                                        <label for="{{$customer->id}}"></label>
                                    </td>    
                                @endif
                                <td>
                                    <a class="btn-floating waves-effect waves-light green"  data-perm-id="{{$customer->id}}" onclick="saveChanges(this)"><i class="material-icons">save</i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>    
@push('javascript')
<script>
    function saveChanges(obj) 
    {
        var id = $(obj).data('perm-id');
        var status = 0;
        if(document.getElementById(id).checked == true){
            status = 1;
        }
        $.ajax({
            url: "{{url('customer')}}",
            type: "POST",
            data: {id, status},
            success: function(response) {
                if(response['success'] == 1){
                    Materialize.toast('Saved in successfully', 2000, 'rounded');
                }
            },
        });
    }
</script>
@endpush
@endsection