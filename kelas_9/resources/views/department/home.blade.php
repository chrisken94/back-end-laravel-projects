@extends ('layouts.master')

@section ('content-header')
    <h1>
        Department 
        <small>Home</small>
    </h1>

    <ol class="breadcumb">
        <li>
            <a href="#">
                <i class="fa fa-dashboard"></i>
                Home
            </a>
        </li>
        <li class="active">Department</li>
    </ol>
@endsection

@section ('content')
<div class="row">
    <div class="col-md-4">
        <a href="/department/create">
            <button class="btn btn-block btn-primary btn-sm">Add Department</button>
        </a>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Department</h3>
            </div>

            <div class="box-body no-padding">
                <table class="table table-striped">
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Name</th>
                        <th>Code</th>
                        <th>Action</th>
                    </tr>

                    @foreach ($data as $d)
                    <tr>
                        <td>#</td>
                        <td>{{$d->name}}</td>
                        <td>{{$d->code}}</td>
                        <td>
                            <a href="/department/edit/{{$d->id}}">EDIT</a> |
                            <a href="/department/delete/{{$d->id}}">DELETE</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection