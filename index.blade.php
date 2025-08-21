@extends('layouts.app')

@section('content')
<div class="card">
    <h2>Appointment Slots</h2>
    <table class="striped">
        <thead>
            <tr>
                <th>Date</th>
                <th>Time</th>
                <th>Stylist</th>
                <th>Service</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @forelse($appointments as $a)
            <tr>
                <td>{{ $a->date->format('Y-m-d') }}</td>
                <td>{{ $a->time }}</td>
                <td>{{ $a->stylist_name }}</td>
                <td>{{ $a->service_type }}</td>
                <td class="actions">
                    <a href="{{ route('appointments.show', $a) }}">View</a>
                    <a href="{{ route('appointments.edit', $a) }}">Edit</a>
                    <form action="{{ route('appointments.destroy', $a) }}" method="POST" onsubmit="return confirm('Delete this appointment?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="link-delete">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="5">No appointments yet. <a href="{{ route('appointments.create') }}">Create one</a>.</td></tr>
        @endforelse
        </tbody>
    </table>

    <div class="pagination">
        {{ $appointments->links() }}
    </div>
</div>
@endsection
