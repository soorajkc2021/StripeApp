<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Redirect;
use Stripe\Stripe;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    public function buy(Request $request, $id)
    {

        // Find the product by ID
        $product = Product::findOrFail($id);
     
        // Retrieve card details from the request
        
        // Set the Stripe API key
        \Stripe\Stripe::setApiKey("sk_test_51PLJq8SJ4FxbxwlxDBpauVKmQPl6AqDcRK7UjjkITu8EGtkOiogvv8sbAQmGmh2E7IgrwgxxF6bbsy5pYPWgePtr00YDOu7is8");
    
        try {
    
            $source = \Stripe\Source::create([
                'type' => 'card',
                'token' => $request->input('stripeToken'),
            ]);
            // Create a charge using the new token
            $charge = \Stripe\PaymentIntent::create([
                'amount' => $product->price * 100, // Stripe expects the amount in cents
                'currency' => 'inr',
                'description' => $product->name,
                'source' =>  $source->id,
            ]);
   
            // Redirect to a thank you page
            return redirect()->route('thankyou',compact($charge));
        } catch (\Stripe\Exception\InvalidRequestException $e) {
            // Handle the exception (e.g., display an error message to the user)
            return back()->with('error', $e->getMessage());
        }
    }
    
}

