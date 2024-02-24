@extends('layouts.app')
@section('title', 'Comment Jet | Price')
@section('content')

    <section class="container mx-auto">
        <div class="grid grid-cols-12 gap-3 ">
            <div class="col-span-2">
                <div class="flex space-x-2 py-2">
                    <img src="{{asset('img/icon/copy-plus.png')}}" alt="">
                    <span class="text-base font-semibold">Categories</span>
                </div>
                <div class="space-y-3">
                    <a href="#" class="inline-block text-base font-semibold leading-[18px] bg-[#9FE870] text-black py-3 px-4 rounded-lg">
                        All Article
                    </a>
                    <a href="#" class="inline-block text-base font-semibold leading-[18px] bg-gray-200 text-black py-3 px-4 rounded-lg">
                        People First
                    </a>
                    <a href="#" class="inline-block text-base font-semibold leading-[18px] bg-gray-200 text-black py-3 px-4 rounded-lg">
                        All Article
                    </a>
                </div>
            </div>
          </div>
    </section>


    <section class="bg-[#565656] mt-40">
        <div class="container mx-auto">
            <div class=" text-center py-10">
                <h2 class="font-semibold text-[64px] leading-[82px] text-white">Start using commentjet for <span
                        class="text-[#9FE870]">free</span>
                </h2>
                <p class="text-[22px] leading-9 py-2 text-white">Discover the Alchemy Behind Our Seamless Process</p>
            </div>
            <div class="flex justify-center  ">
                <div>
                    <x-button.shadowbuttonlink title="Try it Now" route="#" classname="bg-[#9FE870]" />
                </div>
            </div>
        </div>
        <div class="flex gap-7 mt-16 ">
            <div> <img src="{{ asset('img/uplodesuccess2.png') }}" alt="uploded"></div>
            <div> <img src="{{ asset('img/uplodesuccess2.png') }}" alt="uploded"></div>
            <div> <img src="{{ asset('img/uplodesuccess2.png') }}" alt="uploded"></div>
            <div> <img src="{{ asset('img/uplodesuccess2.png') }}" alt="uploded"></div>

        </div>
    </section>

@endsection
