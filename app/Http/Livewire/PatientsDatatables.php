<?php


namespace App\Http\Livewire;

use App\Models\Patient;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;

class PatientsDatatables extends LivewireDatatable
{
    public $model = Patient::class;

    function columns()
    {
        return [
            Column::name('first_name')->label('First Name'),
            Column::name('last_name')->label('Last Name'),
            DateColumn::name('created_at')->label('Creation Date'),
            Column::callback(['id'], function ($id) {
                return view('layouts/actions', ['id' => $id]);
            })->unsortable()->excludeFromExport()
        ];
    }
}
