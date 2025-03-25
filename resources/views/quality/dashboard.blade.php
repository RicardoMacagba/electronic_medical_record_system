<div class="grid grid-cols-2 gap-4">
    @foreach($preventiveCompliance as $service)
    <div class="bg-white p-4 shadow">
        <h4>{{ $service->name }}</h4>
        <div class="flex">
            <div class="w-1/2 bg-green-100 p-2">
                Completed: {{ $service->completed }}
            </div>
            <div class="w-1/2 bg-yellow-100 p-2">
                Due: {{ $service->due }}
            </div>
        </div>
    </div>
    @endforeach
</div>