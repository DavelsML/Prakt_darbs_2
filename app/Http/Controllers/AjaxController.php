<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    /**
     * Handle the AJAX request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function handleAjaxRequest(Request $request)
    {
        // Validate incoming request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        // Example of additional server-side logic
        // You could save the data to the database, send an email, etc.
        // For demonstration purposes, we'll just return the data back.

        return response()->json([
            'success' => true,
            'message' => 'AJAX request handled successfully!',
            'data' => $validated,  // Sending back the validated data
        ]);
    }
}

