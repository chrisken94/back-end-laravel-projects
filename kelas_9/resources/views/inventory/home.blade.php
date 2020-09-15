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
<div class="row">
    <div class="col-md-4">
        <a href="/inventory/create">
            <button class="btn btn-block btn-primary btn-sm">Create {{$judul}}</button>
        </a>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data {{$judul}}</h3>
            </div>

            <div class="box-body no-padding">
                <table class="table table-striped">
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Name</th>
                        <th>Code</th>
                        <th>Archive</th>
                        @if (Auth::user()->role == 1)
                            <th>Action</th>
                        @endif
                    </tr>

                    @foreach ($data as $d)
                    <tr>
                        <td>#</td>
                        <td><a href="inventory/show/{{$d->id}}">{{$d->name}}</a></td>
                        <td>{{$d->detail}}</td>
                        <!-- <td>{{$d->archive->name}}</td> -->
                        <td>{{$d->archive["name"]}}</td>
                        @if (Auth::user()->role == 1)
                        <td>
                            <a href="/inventory/edit/{{$d->id}}">EDIT</a> |
                            <a href="/inventory/delete/{{$d->id}}">DELETE</a>
                        </td>
                        @endif
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection