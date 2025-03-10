<div>
  {{-- <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
      {{ __('My Cart') }}

    </h2>
  </x-slot> --}}
  @if(count($item) > 0)
    <div class="py-12">

    <style>
      @layer utilities {

      input[type="number"]::-webkit-inner-spin-button,
      input[type="number"]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
      }
      }
    </style>

    {{--

    <body> --}}
      <div class="h-screen bg-gray-100 pt-20">
      <h1 class="mb-10 text-center text-2xl font-bold">Cart Items</h1>
      <div class="mx-auto max-w-5xl justify-center px-6 md:flex-auto md:space-x-6 xl:px-0">
        @foreach($item as $items)
      {{-- <div wire:key="{{$items->id}}"> --}}

      <div class="rounded-lg md:w-2/3">
        <div
        class="justify-between mb-6 rounded-lg bg-white p-30 shadow-md sm:flex sm:justify-start p-1 h-[100px]">

        <img src="{{ asset('storage/' . $items->product->image) }}" alt="Product">

        <div class="sm:ml-4 sm:flex sm:w-full sm:justify-between">

        <div class="mt-5 sm:mt-0">
        <h2 class="text-lg font-bold text-gray-900">{{$items->product->title}}</h2>
        {{-- <p class="mt-1 text-xs text-gray-700">size optional</p> --}}
        </div>
        <div class="mt-4 flex justify-between sm:space-y-6 sm:mt-0 sm:block sm:space-x-6">
        <div class="flex items-center border-gray-100">
          <button wire:click="decrementQty({{$items->id}})">
          <span
          class="cursor-pointer rounded-l bg-gray-100 py-1 px-3.5 duration-100 hover:bg-blue-500 hover:text-blue-50">
          - </span>
          </button>
          {{-- <input class="h-8 w-8 border bg-white text-center text-xs outline-none" type="number"
          value="2" min="1" /> --}}
          <span class="h-7 w-8 border bg-white text-center text-xm"> {{$items->quantity}}</span>
          <button wire:click="incrementQty({{$items->id}})">
          <span
          class="cursor-pointer rounded-r bg-gray-100 py-1 px-3 duration-100 hover:bg-blue-500 hover:text-blue-50">
          + </span>
          </button>
        </div>
        <div class="flex items-center space-x-4">

          <p class="text-sm">{{number_format($items->product->price)}} IQD</p>
          <button wire:click="removeItem({{$items->id}})">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
          stroke="currentColor" class="h-5 w-5 cursor-pointer duration-150 hover:text-red-500">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
          </button>

        </div>

        </div>
        </div>
        </div>
      </div>
      {{--
      </div> --}}
    @endforeach 
      {{-- @foreach($item as $items) --}}
        <!-- Sub total -->
        <div class="mt-6 h-full rounded-lg border bg-white p-6 shadow-md md:mt-0 md:w-1/3">
        <div class="mb-2 flex justify-between">
          <p class="text-gray-700">Subtotal</p>


          <p class="text-gray-700">{{number_format($subTotal)}} IQD</p>
        </div>
        <div class="flex justify-between">
          <p class="text-gray-700">Shipping</p>
          <p class="text-gray-700">5,000 IQD</p>
        </div>
        <hr class="my-4" />
        <div class="flex justify-between">
          <p class="text-lg font-bold">Total</p>
          <div class="">
          <p class="mb-1 text-lg font-bold">{{number_format($subTotal + 5000)}} IQD</p>

          {{-- <p class="text-sm text-gray-700">including VAT</p> --}}
          </div>
        </div>
        <div>
          <button @click="$dispatch('open-modal')"
          class="mt-6 w-full rounded-md bg-blue-500 py-1.5 font-medium text-blue-50 hover:bg-blue-600">CHECK
          OUT</button>
          <!-- <button @click="$dispatch('open-paymentmodal')"
      class="mt-6 w-full rounded-md bg-blue-500 py-1.5 font-medium text-blue-50 hover:bg-blue-600">PAY
      ONLINE</button> -->


        </div>
        </div>
        {{-- @endforeach --}}


      </div>
      </div>
      {{--
    </body> --}}
    </div>
  @else
    {{-- <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
      <div class="p-6 text-gray-900 dark:text-gray-100">
        Your Cart is empty!
      </div>
      </div>
    </div>
    </div> --}}
    <div class="py-12">
    <style>
      @layer utilities {

      input[type="number"]::-webkit-inner-spin-button,
      input[type="number"]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
      }
      }
    </style>

    {{--

    <body> --}}
      <div class="h-screen bg-gray-100 pt-20">
      {{-- <h1 class="mb-10 text-center text-2xl font-bold">Cart Items</h1> --}}
      <div class="mx-auto max-w-5xl justify-center px-6 md:flex md:space-x-6 xl:px-0">
        <h1 class="mb-10 text-center text-2xl font-bold">Your Cart is empty!</h1>
      </div>
      </div>
      {{--
    </body> --}}
    </div>
  @endif
  <livewire:checkout-modal>
    <livewire:checkout-modal-for-online-payment>

</div>