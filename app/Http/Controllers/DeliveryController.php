<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Delivery;

class DeliveryController extends Controller
{
    public function index(){
        $deliveries = Delivery::with('products')->get();
        return view('deliveries.index', ['deliveries' => $deliveries]);
    }

    public function create(){
        return view('deliveries.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required|max:100|unique:deliery,name',
            'description' => 'nullable|max:200',
            'idnum' => 'required|numeric|unique:delivery,idnum|integer',
        ]);
    
        $newDelivery = Delivery::create($data); // Make sure this is executed correctly
    
        return redirect(route('delivery.index'));
    }

    public function edit(Delivery $delivery){
        return view('deliveries.edit', ['delivery' => $delivery]);
    }

    public function update(Delivery $delivery, Request $request){
        $data = $request->validate([
            'name' => 'required|max:100',
            'description' => 'nullable|max:200',
            'idnum' => 'required|numeric|integer',
        ]);

        $delivery->update($data);

        return redirect(route('delivery.index'))->with('success', 'Delivery updated successfully');
    }

    public function delete(Delivery $delivery){
        $delivery->delete();
        return redirect(route('delivery.index'))->with('success', 'Delivery deleted successfully');

    }
    
}
