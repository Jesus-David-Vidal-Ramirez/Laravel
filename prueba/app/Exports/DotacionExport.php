<?php

namespace App\Exports;

use App\Models\Dotacion;
use Maatwebsite\Excel\Concerns\FromCollection;

class DotacionExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */

    private $year;

    public function __construct(int $year)
    {
        $this->year = $year;
    }
    public function collection()
    {
        return Dotacion::whereYear('created_at', $this->year)->get();
    }
}
