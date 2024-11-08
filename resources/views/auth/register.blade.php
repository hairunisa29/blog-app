@extends('layouts.main')
@section('content')

<div class="container-fluid p-12">
    <div class="w-full bg-white rounded-lg shadow mx-auto md:mt-0 sm:max-w-md xl:p-0">
        <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
            <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
               Register
            </h1>
            <form class="space-y-4 md:space-y-6" action="" method="post">
                @csrf
                <div>
                    <label for="fullname" class="block mb-2 text-sm font-medium text-gray-900">Full Name</label>
                    <input type="text" name="fullname" id="fullname" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="full name" required="">
                    @error('fullname')
                    <div class="text-red-400 text-sm">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email Address</label>
                    <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="name@mail.com" required="">
                    @error('email')
                    <div class="text-red-400 text-sm">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div>
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                    <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required="">
                    @error('password')
                    <div class="text-red-400 text-sm">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div>
                    <label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-900">Password Confirmation</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required="">
                    @error('password_confirmation')
                    <div class="text-red-400 text-sm">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Create Account</button>
            </form>
        </div>
    </div>
</div>
@endsection