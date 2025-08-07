@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Dashboard
                    
                    <form action="{{ route('logout') }}" method="POST" class="float-end">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-danger">Logout</button>
                    </form>
                </div>

                <div class="card-body">
                    <p>Halo, <strong>{{ Auth::user()->nama_lengkap }}!</strong></p>
                    <p>Anda telah berhasil login.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection