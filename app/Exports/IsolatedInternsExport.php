<?php

namespace App\Exports;

use App\User;
// use Maatwebsite\Excel\Concerns\FromCollection;
// use Maatwebsite\Excel\Concerns\FromArray;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class IsolatedInternsExport implements FromView
{
    public function view(): View
    {
        return view('exports.isolate', [
            'users' => User::where('stage', '!=', '110')->where('stage', '!=', '2')->where('role', 'intern')->get()
        ]);
    }
}