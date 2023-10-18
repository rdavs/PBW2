@extends('layouts.app')

@section('content')
<div class="container mt-4">
        <div class="card">
            <!-- 6706223008 Riffqi Dava Sundara -->
            <div class="card-header">Manage Users</div>
            <div class="card-body">
                {{ $dataTable->table() }}
            </div>
        </div>
    </div>
@endsection


@push('scripts')
    {{ $dataTable->scripts() }}
@endpush