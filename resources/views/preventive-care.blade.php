@foreach($patient->preventiveCare as $service)
<div class="bg-{{ $service->pivot->completed_date ? 'green' : 'yellow' }}-100 p-4 mb-2">
    <h4>{{ $service->name }}</h4>
    <p>Due: {{ $service->pivot->due_date->format('m/d/Y') }}</p>
    @if($service->pivot->completed_date)
        <p>Completed: {{ $service->pivot->completed_date->format('m/d/Y') }}</p>
    @endif
</div>
@endforeach