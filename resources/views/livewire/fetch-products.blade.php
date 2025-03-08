<div class="py-12 ">
  <h1
    class="mb-8 text-4xl font-extrabold leading-none tracking-tight text-gray-100 md:text-5xl lg:text-3xl text-center">
    Products</h1>
  {{-- @if(session()->has('message'))
  <div class="p-4 mb-4 text-m text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
    {{session('message')}}
  </div>
  @endif --}}
  @persist('KeeptheState')
  <div class="max-w-7xl mx-auto sm:px-6 lg:px-7">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
      @foreach($product as $products)
      <a href="product/{{$products->id}}">
      {{-- <div wire:key="{{$products->id}}"> --}}
        <div class="bg-white shadow-md h-[434px] flex flex-col items-center">
        <div class="h-[250px]">
          <img class="h-[260px] w-[282px] object-cover" src="{{ asset('storage/' . $products->image) }}"
          alt="Product">
        </div>
        <div class="p-4 text-center flex flex-col justify-between flex-grow">
          <div>
          <h3 class="text-lg font-bold mt-2">{{$products->title}}</h3>
          <p class="text-gray-500 mt-2">{{number_format($products->price)}} IQD</p>
          </div>
          <button class="bg-yellow-500 text-white px-4 py-2 mt-4 rounded-md hover:bg-gray-600"
          wire:click.prevent="addtoCart({{$products->id}})">Add to Cart</button>
        </div>
        </div>
        {{--
      </div> --}}
  @endforeach 
    </div>
  </div>
  @endpersist
</div>