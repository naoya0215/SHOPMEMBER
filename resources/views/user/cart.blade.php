<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      カート
    </h2>
  </x-slot>
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          @if (count($products) > 0)
          @foreach ($products as $product )
          <div class="md:items-center mb-5">
            <div class="flex justify-around">
              <div class="md:w-3/12">
                @if ($product->imageFirst->filename !== null)
                <img src="{{ asset('storage/products/' . $product->imageFirst->filename )}}">
                @else
                <img src="">
                @endif
              </div>
              <div class="md:w-4/12 mt-32 text-gray-900 text-3xl" md:ml-2>
                {{ $product->name }}
              </div>
            </div>
            <div class="md:w-3/12 flex justify-around mx-auto mt-10">
              <div class="text-gray-900 text-3xl mr-20">
                {{ $product->pivot->quantity }}個
              </div>
              <div class="text-gray-900 text-3xl">
                {{ number_format($product->pivot->quantity * $product->price )}}<span class="text-sm text-gray-700">円(税込)</span>
              </div>
              <div class="md:w-2/12 mb-20">
                <form method="post" action="{{route('user.cart.delete', ['item' => $product->id ])}}">
                @csrf
                  <button class="ml-20 text-white bg-green-500 border-0 py-5 px-10 focus:outline-none hover:bg-green-600 rounded">
                    レンタル
                  </button>
                </form> 
              </div>
            </div>
            @endforeach
            @else
            カートに商品が入っていません
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
