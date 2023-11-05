<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
 
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h1>Welcome! Thank you for logging in {{Auth::user()->name}}!</h1>
                        
                    {{-- <div class="col-md-12"> --}}
                        <div class="timeline-image"><img class="rounded-circle img-fluid" width="250px" src="assets/img/logo-pig.png" alt="..." /></div>
                        <h1 class="my-3"> <strong>Welcome to Samgyeopsalanz</strong></h1>
                        <p class="text-muted">Save Your Cravings Along Your Way.</p>
                    {{-- </div> --}}



                    {{-- <link rel="icon" type="image/x-icon" href="assets/img/final-logo.png"/> --}}
                    </div>
                </div>
            </div>
    </div>
</x-app-layout>
