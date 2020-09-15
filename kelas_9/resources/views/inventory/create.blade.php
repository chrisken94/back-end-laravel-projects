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
    <div class="col-md-6">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Data Inventory</h3>
            </div>

            <form action="/inventory/store" role="form" method="post">
                <div class="box-body">
                    <div class="form-group">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="POST">
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label>Detail</label>
                        <input type="text" class="form-control" name="detail" placeholder="Masukkan Code">
                    </div>
                    <div class="form-group">
                        <label>Archive</label>
                        <input type="text" class="form-control" name="archive_name" placeholder="Masukkan Nama">
                    </div>
                    <div class="form-group">
                        <label>Detail Archive</label>
                        <input type="text" class="form-control" name="archive_detail" placeholder="Masukkan Code">
                    </div>

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection