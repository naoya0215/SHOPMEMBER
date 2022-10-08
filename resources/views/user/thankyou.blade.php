<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('レンタルショップ') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-green-200 mt-20">
        <div class="max-w-7xl mx-auto text-center">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 mx-auto bg-white border-b border-gray-200 text-3xl">
                    ★レンタルが完了しました
                </div>
                <div class="ml-80 mt-5 text-2xl text-blue-500">
                    <a href="{{ url('user.top.index') }}">ショップページへ</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
