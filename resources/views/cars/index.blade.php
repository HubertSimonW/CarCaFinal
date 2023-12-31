<<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Cars') }}
        </h2>
        
               
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    
                    <x-alert-success>
                       {{session('success') }}
                    </x-alert-success>
                    <x-primary-button><a href="{{ route('cars.create')}}">Add a Car</a></x-primary-button>
            
            @forelse ($cars as $car)
                <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                    <h2 class="font-bold text-2xl">
                    <a href="{{ route('cars.show', $car) }}">{{ $car->name }}</a>
                    </h2>
                    <p class="mt-2">
                        {{ $car->name}}
                        {{$car->engine_Size}}
                         {{$car->colour}}
                          {{$car->price}}
                        @if ($car->car_Image)
                        <img src="{{ $car->car_Image }}" 
                        alt="{{ $car->title }}" width="100">
                    @else
                        No Image
                    @endif
                    </p>

                </div>
            @empty
            <p>No cars</p>
            @endforelse
            
        </div>
    </div>
</x-app-layout>