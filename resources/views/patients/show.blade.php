<!-- filepath: resources/views/patients/show.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $patient->name }}</h1>
        <p>Allergies: {{ $allergies }}</p>
        <p>Medications:</p>
        <ul>
            @foreach ($medications as $medication)
                <li>{{ $medication->name }} prescribed by {{ $medication->prescriber->name }}</li>
            @endforeach
        </ul>
        <p>Lab Results:</p>
        <ul>
            @foreach ($labResults as $labResult)
                <li>{{ $labResult->test_date }}: {{ $labResult->result }}</li>
            @endforeach
        </ul>
    </div>
@endsection