<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ auth()->user()->name }} - {{ ucfirst(auth()->user()->role) }}
            </h2>
            <div class="text-sm text-gray-500">
                Last Login: {{ auth()->user()->last_login_at?->format('M j, Y H:i') ?? 'N/A' }}
            </div>
        </div>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Quick Stats -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
                <div class="bg-white p-4 rounded-lg shadow-sm border-l-4 border-blue-500">
                    <h3 class="text-gray-500 text-sm">Total Patients</h3>
                    <p class="text-2xl font-bold">1,234</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-sm border-l-4 border-green-500">
                    <h3 class="text-gray-500 text-sm">Today's Appointments</h3>
                    <p class="text-2xl font-bold">15</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-sm border-l-4 border-yellow-500">
                    <h3 class="text-gray-500 text-sm">Pending Lab Results</h3>
                    <p class="text-2xl font-bold">8</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-sm border-l-4 border-red-500">
                    <h3 class="text-gray-500 text-sm">Critical Alerts</h3>
                    <p class="text-2xl font-bold">2</p>
                </div>
            </div>

            <!-- Main Content -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <!-- Recent Patients Card -->
                <div class="lg:col-span-2 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold mb-4">Recent Patients</h3>
                        <div class="space-y-4">
                            @foreach($recentPatients as $patient)
                            <div class="flex items-center justify-between p-3 hover:bg-gray-50 rounded-lg">
                                <div>
                                    <div class="font-medium">{{ $patient->full_name }}</div>
                                    <div class="text-sm text-gray-500">{{ $patient->mrn }} • {{ $patient->age }}yo</div>
                                </div>
                                <a href="{{ route('patients.show', $patient) }}" class="text-blue-500 hover:text-blue-700">
                                    View →
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Quick Actions -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold mb-4">Quick Actions</h3>
                        <div class="space-y-3">
                            @can('create-patient')
                            <a href="{{ route('patients.create') }}" class="block p-3 bg-blue-50 text-blue-700 rounded-lg hover:bg-blue-100 transition">
                                + New Patient Registration
                            </a>
                            @endcan
                            
                            @can('create-appointment')
                            <a href="{{ route('appointments.create') }}" class="block p-3 bg-green-50 text-green-700 rounded-lg hover:bg-green-100 transition">
                                + Schedule Appointment
                            </a>
                            @endcan
                            
                            <a href="{{ route('lab-orders.index') }}" class="block p-3 bg-purple-50 text-purple-700 rounded-lg hover:bg-purple-100 transition">
                                View Lab Results
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Upcoming Appointments -->
            <div class="mt-6 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <h3 class="text-lg font-semibold mb-4">Today's Appointments</h3>
                    <div class="space-y-4">
                        @forelse($appointments as $appointment)
                        <div class="flex items-center justify-between p-3 border-b">
                            <div>
                                <div class="font-medium">{{ $appointment->patient->full_name }}</div>
                                <div class="text-sm text-gray-500">
                                    {{ $appointment->scheduled_at->format('h:i A') }} • 
                                    {{ $appointment->type }}
                                </div>
                            </div>
                            <div class="flex items-center space-x-2">
                                <a href="{{ route('appointments.edit', $appointment) }}" class="text-blue-500 hover:text-blue-700">
                                    Edit
                                </a>
                                <span class="text-gray-300">|</span>
                                <a href="{{ route('patients.show', $appointment->patient) }}" class="text-green-500 hover:text-green-700">
                                    Chart
                                </a>
                            </div>
                        </div>
                        @empty
                        <div class="text-center text-gray-500 py-4">
                            No appointments scheduled for today
                        </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>