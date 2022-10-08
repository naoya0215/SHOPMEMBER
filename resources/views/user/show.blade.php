<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('レンタル商品の詳細') }}
    </h2>
  </x-slot>
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6 bg-white border-b border-gray-200">
            
            <div class="md:flex md:justify-around">
              <div class="md:w-1/3">
                <x-thumbnail filename="{{$product->imageFirst->filename ?? ''}}" type="products" />
              </div>
              <div class="md:w-1/2 ml-4">
                <h1 class="mb-32 text-gray-900 text-3xl title-font font-medium">{{ $product->name }}</h1>
                <div class="LikesIcon">
                  <i class="far fa-heart LikesIcon-fa-heart"></i>
                </div>
                <p class="mb-32 leading-relaxed">{{ $product->information }}</p>
                <div class="flex justify-around items-center">
                  <div>
                    <span class="title-font font-medium text-2xl text-gray-900">{{ number_format($product->price) }}</span><span class="mr-5 text-sm text-gray-700">円(税込)</span>
                  </div>
                  <form method="post" action="{{ route('user.cart.add')}}">
                    @csrf
                    <div class="flex items-center mt-9">
                      <span class="mr-3">数量</span>
                        <div class="relative">
                          <select name="quantity" class="rounded border appearance-none border-gray-300 py-2 focus:outline-none focus:ring-2 focus:ring-green-200 focus:border-green-500 text-base pl-3 pr-10">
                            @for ($i = 1; $i <= $quantity; $i++)
                            <option value="{{$i}}">{{$i}}</option>  
                            @endfor
                          </select>
                        </div>
                    </div>
                  <button class="flex ml-auto mt-1 text-white bg-green-500 border-0 py-2 px-6 focus:outline-none hover:bg-green-600 rounded">カートに入れる</button>
                  <input type="hidden" name="product_id" value="{{ $product->id}}">
                  </form>
                </div>
              </div>
            </div>
            <div class="border-t border-gray-400 my-8"></div>
            <div>★この商品を販売しているショップ</div>
            <div>{{ $product->shop->name }}</div>
            <div>★ショップ住所</div>
            <div>{{ $product->shop->information }}</div>
            <div>
              @if ($product->shop->filename !== null)
                <img class="w-70 h-40" src="{{ asset('storage/shops/' . $product->shop->filename )}}">
              @else
                <img src="">
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
</x-app-layout>
<script src="/js/index.js"></script>