<?php

namespace App\Http\Controllers;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::all();
        return view('cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required'
        ]);

        Car::create([
            'name' => $request->title,
            'engine_Size' => "2",
            'car_Image' => "public\images\Tess_the_TickTock_Dog.jpeg",
            'colour' => "Black",
            'price' => "25500",
            'created_at' => now(),
            'updated_at' => now(),

        ]);
        return to_route('cars.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $car = Car::find($id);
        return view ('cars.show')->with('car', $car);
    }
    
    // public function show(Car $car)
    // {
    //     return view('cars.show')->with('car', $car);
    // }
     Public function up(): void
     {
           Schema::create('books', function (Blueprint $table) 
        {
            $table->id();
            $table->string('name');
            $table->string('engine_Size');
            $table->string('colour');
            $table->string('price');
            $table->string('car_Image');

             $table->timestamps
        });
      
      

     }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
