@extends ('layouts.master')

@section ('content-header')
    <h1>
        Employee 
        <small>Home</small>
    </h1>

    <ol class="breadcumb">
        <li>
            <a href="#">
                <i class="fa fa-dashboard"></i>
                Home
            </a>
        </li>
        <li class="active">Employee</li>
    </ol>
@endsection

@section ('content')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Data {{$judul}} {{$data->name}}</h3>
    </div>

    <div class="box-body no-padding">
        <table class="table table-striped">
            <tr>
                <th style="width: 10px">#</th>
                <th>Name Inventory</th>
            </tr>
            @foreach ($data->inventory as $d)
                <tr>
                    <td>#</td>
                    <td>{{$d->name}}</td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection