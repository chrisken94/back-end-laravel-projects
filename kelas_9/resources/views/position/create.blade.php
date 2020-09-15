@extends ('layouts.master')

@section ('content-header')
    <h1>
        Position 
        <small>Home</small>
    </h1>

    <ol class="breadcumb">
        <li>
            <a href="#">
                <i class="fa fa-dashboard"></i>
                Home
            </a>
        </li>
        <li class="active">Position</li>
    </ol>
@endsection

@section ('content')
<div class="row">
    <div class="col-md-6">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Data Position</h3>
            </div>

            <form action="/position/store" role="form" method="post">
                <div class="box-body">
                    <div class="form-group">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="POST">
                    </div>
                    <div class="form-group">
                        <label>Department Name</label>
                        <select type="text" class="form-control" name="department_id" placeholder="Department Name">
                            @foreach ($department as $dept)
                                <option value="{{$dept->id}}">{{$dept->name}}</option>
                            @endforeach   
                        </select>                     
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label>Code</label>
                        <input type="text" class="form-control" name="code" placeholder="Code">
                    </div>
                </div>
                
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection