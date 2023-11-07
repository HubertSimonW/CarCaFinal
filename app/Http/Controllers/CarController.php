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
            'name' => $request->name,
            'engine_Size' => "2",
            'car_Image' => "",
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
           Schema::create('cars', function (Blueprint $table) 
        {
            $table->id();
            $table->string('name');
            $table->string('engine_Size');
            $table->string('colour');
            $table->string('price');
            $table->string('car_Image');

             $table->timestamps();
        });
      
      

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        return view('cars.edit')->with('car', $car);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
      $request->validate([
        'name' => 'required',
        'engine_Size' => 'required',
        'colour' => 'required',
        'price' => 'required',
        'car_Image' => 'required|image',
      ]);

      if($request->hasFile('car_Image')) {
        $image = $request->file('car_Image');
        $imageName = time() . '.' . $image->extention();

        $image->storeAs('public/cars', $imageName);
        $car_Image = 'storage/cars/' . $imageName;
      }
        
        $car->update([
        'name' => $request->name,
        'engine_Size' => $request->engine_Size,
        'colour' => $request->colour,
        'price' => $request->price,
        'car_Image' => $request->car_image_name,
        ]);
    
        return to_route('cars.show', $car)->with('success','Car updated successfully');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        $car->delete();
        return to_route('cars.index')->with('success','Car deleted successfully');
    }
}
