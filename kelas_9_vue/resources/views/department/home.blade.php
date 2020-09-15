@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            
            <department-component :data="{{json_encode($data)}}">
            </department-component>
        </div>
    </div>
</div>
@endsection