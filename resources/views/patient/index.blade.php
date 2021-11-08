@extends('layouts.master')

@section('content')

    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
    @if(session()->has('message'))
        <div class="{{Session::get('style')}} px-4 py-3 rounded relative"
             role="alert">
            <strong class="font-bold">Message!</strong>
            <span class="block sm:inline">{{Session::get('message')}}</span>
        </div>
    @endif
        <div class="flex space-x-3 mb-3 text-sm font-semibold uppercase items-end">
            <div class="flex-auto flex space-x-3">
                <a href="{{ route('patients.create') }}"
                   class="inline-flex items-center px-4 py-2 bg-gray-300 border border-transparent rounded-md font-semibold text-xs text-dark uppercase tracking-widest hover:bg-gray-200 active:bg-gray-400 focus:outline-none focus:border-gray-500  disabled:opacity-25 transition ease-in-out duration-150">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                         fill="currentColor">
                        <path fill-rule="evenodd"
                              d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                              clip-rule="evenodd"/>
                    </svg>
                    <span>Add a Patient</span>
                </a>
            </div>
        </div>
    <livewire:patients-datatables
        searchable="first_name, last_name"
        exportable="first_name, last_name"
    />
    </div>
@endsection
