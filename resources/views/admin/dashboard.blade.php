@extends('layouts.admin')


@section('content')

<div class="row">
    <div class="col-md-12 grid-margin">
        @if(session('success'))
        <div class="alert alert-info" role="alert">
                <h1>Welcome to Dashboard</h1>
        </div>
        @endif
        <div class="d-flex justify-content-between flex-wrap">
            <div class="d-flex align-items-end flex-wrap">
                <div class="me-md-3 me-xl-5">

                   <span>Your analytics dashboard is here.</span>
                </div>

            </div>
            <div class="d-flex justify-content-between align-items-end flex-wrap">
                <button type="button" class="btn btn-light bg-white btn-icon me-3 d-none d-md-block ">
                    <i class="mdi mdi-download text-muted"></i>
                </button>
                <button type="button" class="btn btn-light bg-white btn-icon me-3 mt-2 mt-xl-0">
                    <i class="mdi mdi-clock-outline text-muted"></i>
                </button>
                <button type="button" class="btn btn-light bg-white btn-icon me-3 mt-2 mt-xl-0">
                    <i class="mdi mdi-plus text-muted"></i>
                </button>
                <button class="btn btn-primary mt-2 mt-xl-0">Download report</button>
            </div>
        </div>
    </div>
</div>

@endsection
