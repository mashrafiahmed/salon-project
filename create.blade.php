@extends('layouts.app')

@section('content')
<div class="card">
    <h2>Create Appointment</h2>
    <form action="{{ route('appointments.store') }}" method="POST" class="form">
        @csrf
        <label>Date
            <input type="date" name="date" value="{{ old('date') }}">
            @error('date')<div class="field-error">{{ $message }}</div>@enderror
        </label>
        <label>Time
            <input type="text" name="time" placeholder="e.g. 10:30 AM" value="{{ old('time') }}">
            @error('time')<div class="field-error">{{ $message }}</div>@enderror
        </label>
        <label>Stylist Name
            <input type="text" name="stylist_name" value="{{ old('stylist_name') }}">
            @error('stylist_name')<div class="field-error">{{ $message }}</div>@enderror
        </label>
        <label>Service Type
            <input type="text" name="service_type" value="{{ old('service_type') }}">
            @error('service_type')<div class="field-error">{{ $message }}</div>@enderror
        </label>
        <div class="form-actions">
            <button type="submit" class="btn">Save</button>
            <a href="{{ route('appointments.index') }}" class="btn alt">Cancel</a>
        </div>
    </form>
</div>
@endsection
