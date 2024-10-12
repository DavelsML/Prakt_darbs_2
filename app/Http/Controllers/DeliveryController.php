<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Delivery;

class DeliveryController extends Controller
{
    public function index(){
        $deliveries = Delivery::all();
        return view('deliveries.index', ['deliveries' => $deliveries]);
    }

    public function create(){
        return view('deliveries.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'idnum' => 'required|numeric',
        ]);
    
        $newDelivery = Delivery::create($data); // Make sure this is executed correctly
    
        return redirect(route('delivery.index'));
    }

    public function edit(Delivery $delivery){
        return view('deliveries.edit', ['delivery' => $delivery]);
    }

    public function update(Delivery $delivery, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'idnum' => 'required|numeric',
        ]);

        $delivery->update($data);

        return redirect(route('delivery.index'))->with('success', 'Delivery updated successfully');
    }

    public function delete(Delivery $delivery){
        $delivery->delete();
        return redirect(route('delivery.index'))->with('success', 'Delivery deleted successfully');

    }
    
}
