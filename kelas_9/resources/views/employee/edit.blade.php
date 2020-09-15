@extends ('layouts.master')

@section ('content-header')
    <h1>
        Employee 
        <small>Edit</small>
    </h1>

    <ol class="breadcumb">
        <li>
            <a href="#">
                <i class="fa fa-dashboard"></i>
                Edit
            </a>
        </li>
        <li class="active">Employee</li>
    </ol>
@endsection

@section ('content')
<div class="row">
    <div class="col-md-6">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Data Employee</h3>
            </div>

            <form action="/department/update" role="form" method="post">
                <div class="box-body">
                    <div class="form-group">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="id" value="{{ $data->id }}">
                    </div>
                    <div class="form-group">
                        <label>Position Name</label>
                        <select type="text" name="position_id" class="form-control">
                            <option value="{{$data->position_id}}">{{$data->position->name}}</option>
                                @foreach ($position as $pos)
                                    @if ($pos->id != $data->position_id)
                                        <option value="{{$pos->id}}">{{$pos->name}}</option>
                                    @endif
                                @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" value="{{ $data->name }}" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" name="address" value="{{ $data->address }}" placeholder="Address">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" value="{{ $data->email }}" placeholder="Email">
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