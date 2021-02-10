<?php

namespace App\Models;

use Kyslik\ColumnSortable\Sortable;
use Illuminate\Database\Eloquent\Model;

class Lens extends Model
{
    use Sortable;

    protected $table = 'lens';

    public $sortable = [
        'name',
        'color',
        'material',
        'company',
        'series',
        'life',
        'curve',
        'diameter'
    ];


    protected $fillable = [
        'name',
        'color',
        'material',
        'company',
        'series',
        'life',
        'curve',
        'diameter',
        'image'
    ];
}
