<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update Car') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                @method('put')
                <form action="{{ route('cars.update', $car) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <x-text-input
                        type="text"
                        name="name"
                        field="name"
                        placeholder="Name"
                        class="w-full"
                        autocomplete="off"
                        :value="@old('name', $car->name)">
                    </x-text-input>

                    <x-text-input
                        type="text"
                        name="engine_Size"
                        field="engine_Size"
                        placeholder="Engine Size"
                        class="w-full mt-6"
                        :value="@old('engine_Size', $car->engine_Size)">
                    </x-text-input>

                    <x-text-input
                        type="text"
                        name="colour"
                        field="colour"
                        placeholder="Colour"
                        class="w-full"
                        autocomplete="off"
                        :value="@old('colour', $car->colour)">
                    </x-text-input>

                    <x-text-input
                        type="text"
                        name="price"
                        field="price"
                        placeholder="Price"
                        class="w-full mt-6"
                        :value="@old('price', $car->price)">
                    </x-text-input>
                    <!-- I created a new component called textarea, you will need to do the same to using the x-textarea component -->
                    {{-- <x-textarea
                        name="description"
                        rows="10"
                        field="description"
                        placeholder="Description..."
                        class="w-full mt-6"
                        :value="@old('description')">
                    </x-textarea> --}}
                  
                    <x-file-input
                        type="file"
                        name="car_Image"
                        placeholder="Car"
                        class="w-full mt-6"
                        field="car_Image"
                        :value="@old('car_Image', $car->car_Image)">>
                    </x-file-input>

                    <x-primary-button class="mt-6">Edit Car</x-primary-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>