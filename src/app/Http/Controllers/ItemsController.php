<?php

namespace App\Http\Controllers;

use App\Item;
use App\Type;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
     
class ItemsController extends Controller

{	
	protected $item, $type;
    function __construct(Item $item, Type $type)
    {
        $this->item = $item;
        $this->type = $type;
    }

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    // items view page
    public function index(Request $request)
    {
        $types = $this->type->getList();
    	return view('item.index',compact('types'));	
    }

    // items data table ajax
    public function processdt(Request $request)
    {
        $itemObj = new Item;
        $where = array();

        if ($request->has('name')) {
            $where['name'] = $request->input('name');
        }
        if ($request->has('type_id')) {
            $where['type_id'] = $request->input('type_id');
        }
        if ($request->has('price')) {
            $where['price'] = $request->input('price');
        }
        
        return $itemObj->itemsDT($where);
        exit;

    }


}