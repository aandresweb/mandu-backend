<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;

    protected $table = 'divisiones';

    protected $fillable = [
        'nombre',
        'division_superior',
        'subdivisiones',
        'colaboradores',
        'embajador'
    ];

    public function division_superior_data()
    {
        return $this->belongsTo(Division::class, 'division_superior');
    }
}
