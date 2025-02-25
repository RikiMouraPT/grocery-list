<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Http\Requests\StoreitemRequest;
use App\Http\Requests\UpdateitemRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Item::all();
        return view('welcome', compact('items'));
    }

    public function resetList()
    {
        DB::table('items')->truncate();
        return redirect('/')->with('list-reset', 'List has been reset.');
    }

    public function deleteItem($id)
    {
        $deleted = Item::destroy($id);

        if ($deleted) {
            return redirect('/')->with('item-deleted', 'Item has been deleted.');
        }

        return redirect('/')->with('item-deleted', 'Item has not been deleted.');
    }

    public function addItem(Request $request)
    {
        $request->validate([
            'itemName' => 'required|string|max:255',
            'itemQuantity' => 'required|integer|min:1|max:999',
        ]);

        $itemName = $request->input('itemName');
        $itemQuantity = (int)$request->input('itemQuantity');

        $item = new Item();
        $item->name = $itemName;
        $item->quantity = $itemQuantity;
        $item->save();

        return redirect('/')->with('item-added', 'Item has been added.');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreitemRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateitemRequest $request, item $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(item $item)
    {
        //
    }
}
