<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        @if (\Session::has('success'))
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-5">
                <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-gray-800 dark:text-green-400" role="alert">
                    <span class="font-medium">Success alert!</span> {{\Session::get('success') }} 
                </div>
            </div>
        @endif

         @if ( session('status') )
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-5">
                <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-gray-800 dark:text-green-400" role="alert">
                    <span class="font-medium">Success alert!</span> {{ session('status') }} 
                </div>
            </div>
        @endif
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{-- <h1>Welcome! Thank you for logging in {{Auth::user()->name}}!</h1> --}}
        
                    <h1 class="float-left">
                        {{$header}}
                    </h1>
                    <a href="{{ url('/users/add')}}">
                        <button class="float-right rounded-full bg-red-600 p-1 hover:bg-red-400">
                            Add Users
                        </button>
                    </a>
                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                        @foreach ($users as $user)

                            <tr>
                                <td>{{$user->name}}</td>
                                <td class="text-center">{{$user->email}}</td>
                                <td class='text-center'>
                                    <a href="{{ url('/users/update/' . $user->id) }}">
                                        <button class="rounded-full bg-red-600 p-1 hover:bg-red-400">Update</button>
                                    <a href="{{ url('/users/update/' . $user->id) }}">
                                    {{-- <a href="{{ url('/users/change_password/' . $user->id) }}">
                                        <button class="rounded-full bg-red-600 p-1 hover:bg-red-400">Password</button>
                                    </a> --}}
                                <td>
                                
                                    <form action ="{{ url('/users/delete/'. $user->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="rounded-full bg-red-600 p-1 hover:bg-red-400">Delete</button>
                                    </form>
                                {{-- </td>
                                    <a href="{{ url('/users/delete/' . $user->id) }}">
                                        <button class="rounded-full bg-red-600 p-1 hover:bg-red-400">Delete</button>
                                    </a> --}}

                                <td>
                            </tr>

                            @endforeach

                        </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
