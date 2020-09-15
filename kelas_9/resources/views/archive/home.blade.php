@extends ('layouts.master')

@section ('content-header')
    <h1>
        Archive 
        <small>Home</small>
    </h1>

    <ol class="breadcumb">
        <li>
            <a href="#">
                <i class="fa fa-dashboard"></i>
                Home
            </a>
        </li>
        <li class="active">Archive</li>
    </ol>
@endsection

@section ('content')
<div class="row">
    <div class="col-md-4">
        <a href="/archive/create">
            <button class="btn btn-block btn-primary btn-sm">Add Archive</button>
        </a>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Archive</h3>
            </div>

            <div class="box-body no-padding">
                <table class="table table-striped">
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Name</th>
                        <th>Detail</th>
                        <th>Inventory Name</th>
                        <th>Action</th>
                    </tr>

                    @foreach ($data as $d)
                    <tr>
                        <td>#</td>
                        <td>{{$d->name}}</td>
                        <td>{{$d->detail}}</td>
                        <td>{{$d->inventory->name}}</td>
                        <td>
                            <a href="/archive/edit/{{$d->id}}">EDIT</a> |
                            <a href="/archive/delete/{{$d->id}}">DELETE</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection