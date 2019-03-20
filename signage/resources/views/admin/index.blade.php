@extends('layouts.master')
@section('title', 'Administrator')
@section('content')
<div class="row">
    <div class="col s12 m12 l12">
        <div class="card">
            <div class="card-content">
                <table id="monthly" class="display responsive-table datatable-example">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Authorization</th>
                            <th>Password</th>
                            
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Authorization</th>
                            <th>Password</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->author}}</td>
                                <td>{{$user->password}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection