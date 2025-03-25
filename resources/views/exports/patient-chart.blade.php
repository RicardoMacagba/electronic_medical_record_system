<!-- filepath: c:\Users\Ricardo\Herd\Electronic_Medical_Record_System\resources\views\exports\patient-chart.blade.php -->
<div class="header">
    <h2>Continuity of Care Document</h2>
    <p>Patient: {{ $patient->full_name }}</p>
    <p>DOB: {{ $patient->dob->format('m/d/Y') }}</p>
</div>

@foreach($visits as $visit)
<div class="visit-section">
    <h3>{{ $visit->date->format('m/d/Y') }} - {{ $visit->reason }}</h3>
    <p>Provider: {{ $visit->provider->name }}</p>
    <div class="vitals">
        @foreach($visit->vitals as $vital)
        <p>{{ $vital->type }}: {{ $vital->value }}</p>
        @endforeach
    </div>
</div>
@endforeach