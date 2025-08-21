@extends('layouts.app')

@section('content')
<div class="card">
    <h2>Appointment Details</h2>
    <dl class="details">
        <dt>Date</dt><dd>{{ $appointment->date->format('Y-m-d') }}</dd>
        <dt>Time</dt><dd>{{ $appointment->time }}</dd>
        <dt>Stylist</dt><dd>{{ $appointment->stylist_name }}</dd>
        <dt>Service</dt><dd>{{ $appointment->service_type }}</dd>
    </dl>
    <div class="form-actions">
        <a href="{{ route('appointments.edit', $appointment) }}" class="btn">Edit</a>
        <a href="{{ route('appointments.index') }}" class="btn alt">Back</a>
    </div>
</div>
@endsection
