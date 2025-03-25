@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-300">
    <div class="w-full max-w-md bg-gray-200 border-4 border-blue-700 shadow-lg p-6">
        <h2 class="text-center text-2xl font-bold text-gray-800 font-mono">EMR System Registration</h2>

        <form method="POST" action="{{ route('register') }}" class="mt-4">
            @csrf

            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="block text-gray-800 font-bold font-mono">Email</label>
                <input type="email" name="email" id="email" required
                    class="w-full px-3 py-2 border-2 border-gray-400 bg-white text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Username -->
            <div class="mb-4">
                <label for="username" class="block text-gray-800 font-bold font-mono">Username</label>
                <input type="text" name="username" id="username" required
                    class="w-full px-3 py-2 border-2 border-gray-400 bg-white text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Password -->
            <div class="mb-4">
                <label for="password" class="block text-gray-800 font-bold font-mono">Password</label>
                <input type="password" name="password" id="password" required
                    class="w-full px-3 py-2 border-2 border-gray-400 bg-white text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Confirm Password -->
            <div class="mb-4">
                <label for="password_confirmation" class="block text-gray-800 font-bold font-mono">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" required
                    class="w-full px-3 py-2 border-2 border-gray-400 bg-white text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Submit Button -->
            <div class="mt-6">
                <button type="submit"
                    class="w-full bg-blue-500 hover:bg-blue-700 text-blue font-bold py-2 px-4 border border-gray-700 shadow-md">
                    Register
                </button>
            </div>

            <!-- Login Link -->
            <p class="mt-4 text-center text-gray-800 font-mono">
                Already have an account?
                <a href="{{ route('login') }}" class="text-blue-700 font-bold hover:underline">Login here</a>.
            </p>
        </form>
    </div>
</div>
@endsection
