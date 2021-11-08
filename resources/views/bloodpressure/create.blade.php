@extends('layouts.master')

@section('content')

    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
        <p class="text-center text-gray-500 text-xs">
            <b>{{{$patient->first_name}}} {{{$patient->last_name}}}</b>
        </p>
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4"  method="POST" action="{{ route('bpr',$patient->id) }}" >
            @csrf
            <input type="hidden" name="patient_id" value="{{{$patient->id}}}">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="SBP">
                    SBP
                </label>
                <input required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="SBP" type="text" placeholder="SBP">
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="DBP">
                    DBP
                </label>
                <input required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="DBP" type="text" placeholder="DBP">
            </div>

            <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    ADD
                </button>
                <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="{{ route('patients.index') }}">
                    Cancel
                </a>
            </div>
        </form>
    </div>
@endsection
