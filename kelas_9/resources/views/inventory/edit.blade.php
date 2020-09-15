@extends ('layouts.master')

@section ('content-header')
    <h1>
        Inventory
        <small>Edit</small>
    </h1>

    <ol class="breadcumb">
        <li>
            <a href="#">
                <i class="fa fa-dashboard"></i>
                Edit
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

            <form action="/inventory/update" role="form" method="post">
                <div class="box-body">
                    <div class="form-group">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="id" value="{{ $data->id }}">
                        <input type="hidden" name="id_archive" value="{{$archive->id}}">
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" value="{{ $data->name }}" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label>Detail</label>
                        <input type="text" class="form-control" name="detail" value="{{ $data->detail }}" placeholder="Masukkan Alamat">
                    </div>
                    <div class="form-group">
                        <label>Archive</label>
                        <input type="text" class="form-control" name="archive_name" value="{{ $archive->name }}" placeholder="Masukkan Nama">
                    </div>
                    <div class="form-group">
                        <label>Detail Archive</label>
                        <input type="text" class="form-control" name="archive_detail" value="{{ $archive->detail }}" placeholder="Masukkan Alamat">
                    </div>
                </div>

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection