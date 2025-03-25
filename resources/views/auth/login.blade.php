@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-turquoise-500">
    <div class="w-full max-w-md bg-gray-200 border-4 border-blue-700 shadow-lg p-6">
        <h2 class="text-center text-2xl font-bold text-gray-800 font-mono">EMR System Login</h2>

        <form method="POST" action="{{ route('login') }}" class="mt-4">
            @csrf

            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="block text-gray-800 font-bold font-mono">Email</label>
                <input type="email" name="email" id="email" required
                    class="w-full px-3 py-2 border-2 border-gray-400 bg-white text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Password -->
            <div class="mb-4">
                <label for="password" class="block text-gray-800 font-bold font-mono">Password</label>
                <input type="password" name="password" id="password" required
                    class="w-full px-3 py-2 border-2 border-gray-400 bg-white text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Remember Me -->
            <div class="mb-4 flex items-center">
                <input type="checkbox" name="remember" id="remember" class="mr-2">
                <label for="remember" class="text-gray-800 font-mono">Remember Me</label>
            </div>

            <!-- Submit Button -->
            <div class="mt-6">
                <button type="submit"
                    class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-gray-700 shadow-md">
                    Login
                </button>
            </div>

            <!-- Forgot Password & Register Link -->
            <p class="mt-4 text-center text-gray-800 font-mono">
                Forgot your password? 
                <a href="{{ route('password.request') }}" class="text-blue-700 font-bold hover:underline">Reset here</a>.
            </p>
            <p class="mt-2 text-center text-gray-800 font-mono">
                Don't have an account? 
                <a href="{{ route('register') }}" class="text-blue-700 font-bold hover:underline">Register here</a>.
            </p>
        </form>
    </div>
</div>
@endsection
