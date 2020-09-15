@extends ('layouts.master')

@section ('content-header')
    <h1>
        Inventory
        <small>Home</small>
    </h1>

    <ol class="breadcumb">
        <li>
            <a href="#">
                <i class="fa fa-dashboard"></i>
                Home
            </a>
        </li>
        <li class="active">Inventory</li>
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
                <th>Name Employee</th>
            </tr>
            @foreach ($data->employee as $d)
                <tr>
                    <td>#</td>
                    <td>{{$d->name}}</td>
                    <td>{{$d->pivot->created_at}}</td>
                    <td>{{$d->pivot->description}}</td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection