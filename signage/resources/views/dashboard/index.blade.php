@extends('layouts.master')
@section('title', 'Report')
@section('content')
<div class="row">
    <div class="col s12">
        <h4>Report of {{ date('F j, Y') }}</h4>
    </div>
</div>
<div class="row">
    <div class="col s12">
        <ul class="tabs tab-demo z-depth-1" style="width: 100%;">
            <li class="tab col s3"><a href="#monthly-div" class="active">Monthly Report</a></li>
            <li class="tab col s3"><a class="" href="#weekly-div">Weekly Report</a></li>
            <li class="tab col s3"><a href="#graph-div">Graph</a></li>
            <li class="tab col s3"><a href="#counting-div">Counting</a></li>
        <div class="indicator" style="right: 410.25px; left: 0px;"></div></ul>
    </div>
    <div id="monthly-div" class="col s12">
        <div class="row">
            <div class="col s12 m12 l12"><h5>{{ date('F, Y') }}</h5></div>
            <div class="col s12 m12 l12">
                <div class="card">
                    <div class="card-content">
                        <table id="monthly" class="display responsive-table datatable-example">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Picture</th>
                                    <th>Name</th>
                                    @for ($i = 0; $i < 31; $i++)
                                        <th>{{$i + 1}}</th>
                                    @endfor
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Picture</th>
                                    <th>Name</th>
                                    @for ($i = 0; $i < 31; $i++)
                                        <th>{{$i + 1}}</th>
                                    @endfor
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($customers as $customer)
                                    <tr>
                                        <td>{{$customer->id}}</td>
                                        <td><img src="{{asset('images/'.$customer->picture)}}" style="width:30px;" /></td>
                                        <td>{{$customer->name}}</td>
                                        <td><span>O</span><br><span>X</span></td>
                                        <td><span>O</span><br><span>X</span></td>
                                        <td><span>O</span><br><span>X</span></td>
                                        <td><span>O</span><br><span>O</span></td>
                                        @for ($i = 0; $i < 27; $i++)
                                            <td><span>O</span><br><span>X</span></td>
                                        @endfor
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="weekly-div" class="col s12" style="display: none;">
        <div class="row">
            <div class="col s12 m12 l12"><h5>{{ date('F, Y') }}</h5></div>
            <div class="col s12 m12 l12">
                <div class="card">
                    <div class="card-content">
                        <table id="weekly" class="display responsive-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Picture</th>
                                    <th>Name</th>
                                    <th>Monday</th>
                                    <th>Tuesday</th>
                                    <th>Wednesday</th>
                                    <th>Thursday</th>
                                    <th>Friday</th>
                                    <th>Saturday</th>
                                    <th>Sunday</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Picture</th>
                                    <th>Name</th>
                                    <th>Monday</th>
                                    <th>Tuesday</th>
                                    <th>Wednesday</th>
                                    <th>Thursday</th>
                                    <th>Friday</th>
                                    <th>Saturday</th>
                                    <th>Sunday</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($customers as $customer)
                                    <tr>
                                        <td>{{$customer->id}}</td>
                                        <td><img src="{{asset('images/'.$customer->picture)}}" style="width:30px;" /></td>
                                        <td>{{$customer->name}}</td>
                                        @for ($i = 0; $i < 7; $i++)
                                            <td><span>O</span><br><span>X</span></td>
                                        @endfor
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="graph-div" class="col s12" style="display: none;"><p class="p-v-sm">Graph Content</p></div>
    <div id="counting-div" class="col s12" style="display: none;"><p class="p-v-sm">Counting Content</p></div>
</div>
@endsection