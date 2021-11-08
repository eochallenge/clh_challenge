@extends('layouts.master')

@section('content')

    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
        <p class="text-center text-gray-500 text-xs">
            <b>{{{$patient->first_name}}} {{{$patient->last_name}}}</b>
        </p>

            <table class="table-auto">
                <thead>
                <tr>
                    <th>SBP</th>
                    <th>DBP</th>
                    <th>Created At</th>
                </tr>
                </thead>
                <tbody>
                @foreach($patient->bloodPressure as $record)
                <tr>
                    <td class="py-2">{{{$record->SBP}}}</td>
                    <td class="py-2">{{{$record->DBP}}}</td>
                    <td class="py-2">{{\Carbon\Carbon::createFromTimeStamp(strtotime($record->created_at))->diffForHumans()}}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
    </div>
@endsection
