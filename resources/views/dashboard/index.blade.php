@extends('template.layout')

@section('yield')
    Dashboard
@endsection

@section('content')
<div class="section-header">
    <h1>Dashboard</h1>
</div>

<div class="section-body">
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-microchip-ai"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Jurusan</h4>
                    </div>
                    <div class="card-body">
                        1
                    </div>
                </div>
            </div>
        </div>
@endsection