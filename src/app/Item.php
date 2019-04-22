<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use yajra\Datatables\Datatables;

class Item extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'type_id', 'price',
    ];

    // Items listing query using data table library 
    public function itemsDT($where = array())
    {
        $item = Self::select(array('items.name','types.name as type','price'))->leftJoin('types','types.id','=','items.type_id');

        if(isset($where['name']) && $where['name'] != ''){
            $item->where('items.name', 'like', '%'.$where['name'].'%');
        }
        if(isset($where['type_id']) && $where['type_id'] != ''){
            $item->where('items.type_id', $where['type_id']);
        }
        if(isset($where['price']) && $where['price'] != ''){
            $item->where(\DB::raw('CAST( price AS UNSIGNED)'), '<', $where['price']);
        }
        return Datatables::of( $item )
        ->editColumn('price', '${{ $price }}')
        ->make(true);
    }

}
