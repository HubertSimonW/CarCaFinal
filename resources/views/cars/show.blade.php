<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <!-- Page Content -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                    <table class="table table-hover">
                        <tbody>
                          <tr>
                            <td rowspan="6">
                                <!-- use the asset function, access the file $book->book_image in the folder storage/images -->
                                <img src="{{asset('storage/images/' . $car->car_Image) }}" width="150" />
                            </td>
                            </tr>
                            <tr>
                                <td class="font-bold ">Name </td>
                                <td>{{ $car->name }}</td>
                            </tr>
                           
                            <tr>
                                <td class="font-bold">Engine Size</td>
                                <td>{{ $car->engine_Size }}</td>
                            </tr>
                            <tr>
                                <td class="font-bold ">Colour</td>
                                <td>{{ $car->colour }}</td>
                            </tr>

                            <tr>
                                <td class="font-bold ">Price</td>
                                <td>{{ $car->price }}</td>
                            </tr>
                        
                        
                        </tbody>
                    </table>
                      <x-primary-button><a href="{{ route('cars.edit', $car) }}">Edit</a> </x-primary-button>
                        <form action="{{ route('cars.destroy', $car) }}" method="post">
                          @method('delete')
                          @csrf
                           <x-primary-button onclick="return confirm('You sure you want to delete?')">Delete </x-primary-button>
                        </form>
                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>
