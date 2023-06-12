
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex items-center justify-between  mt-4 p-6 text-gray-900 " style="flex-wrap:wrap;">

        


@foreach ($data as $item)


<div class="card p-4" style="width: 15rem;">
  <img src="{{$item->image}}" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$item->name}}</h5>
    <p class="card-text"> {{$item->description}}</p>
   
              <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                <h5 class="mb-0">Rs.{{$item->price}}</h5>
              </div>
  
              <form method="POST" action="{{route('cart.add')}}">
                @csrf
                <input type="hidden" name="image" value="{{$item->image}}">
                <input type="hidden" name="name" value="{{$item->name}}">
                <label class="text-white">Quanity</label>
                <input type="number" name="quantity" value="1" min="1" class="w-20 h-5 my-2 text-black-300">
                <input type="hidden" name="description" value="{{$item->description}}">
                <input type="hidden" name="price" value="{{$item->price}}">
                <input type="hidden" name="productid" value="{{$item->id}}">
                <input type="hidden" name="userid" value="{{auth()->user()->id}}">
                <input type="submit" value="Add to cart" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            </form>
  </div>
</div> 




    
@endforeach


                </div>
            </div></div>





</x-app-layout>



