<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use yajra\Datatables\Datatables;

class Type extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    // Gets all types list
    public function getAll()
    {
        $event = Self::select('*');
        return $event->get();
    }

    // Gets all types list for dropdown
    public function getList()
    {
        return $list = Self::pluck('name', 'id')->toArray();
    }

}
