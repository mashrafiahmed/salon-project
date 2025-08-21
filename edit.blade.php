@extends('layouts.app')

@section('content')
<div class="card">
    <h2>Edit Appointment</h2>
    <form action="{{ route('appointments.update', $appointment) }}" method="POST" class="form">
        @csrf
        @method('PUT')
        <label>Date
            <input type="date" name="date" value="{{ old('date', $appointment->date->format('Y-m-d')) }}">
            @error('date')<div class="field-error">{{ $message }}</div>@enderror
        </label>
        <label>Time
            <input type="text" name="time" value="{{ old('time', $appointment->time) }}">
            @error('time')<div class="field-error">{{ $message }}</div>@enderror
        </label>
        <label>Stylist Name
            <input type="text" name="stylist_name" value="{{ old('stylist_name', $appointment->stylist_name) }}">
            @error('stylist_name')<div class="field-error">{{ $message }}</div>@enderror
        </label>
        <label>Service Type
            <input type="text" name="service_type" value="{{ old('service_type', $appointment->service_type) }}">
            @error('service_type')<div class="field-error">{{ $message }}</div>@enderror
        </label>
        <div class="form-actions">
            <button type="submit" class="btn">Update</button>
            <a href="{{ route('appointments.index') }}" class="btn alt">Cancel</a>
        </div>
    </form>
</div>
@endsection
