<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{-- <h1>Welcome! Thank you for logging in {{Auth::user()->name}}!</h1> --}}
                    <h1 class='flot-left'>
                        {{$header}}
                    </h1>

                    <button class="float-right rounded-full bg-red-600 p-1 hover:bg-red-400">Update</button>
                    
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
                                    <button class="rounded-full bg-red-600 p-1 hover:bg-red-400">Update</button>
                                    <button class="rounded-full bg-red-600 p-1 hover:bg-red-400">Delete</button>
                                </td>
                            </tr>

                            @endforeach

                        </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>