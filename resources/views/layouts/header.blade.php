<header class="flex justify-between container mx-auto  py-9 px-5 lg:px-0">
    <div class="flex items-center">
        <div class="mr-10">
            <a href="{{ route('homepage') }}">
                <img src="{{ asset('img/logo.png') }}" class="h-11" alt="">
            </a>
        </div>
        <nav class="hidden lg:block">
            <div class="max-w-screen-xl px-4 py-3 mx-auto">
                <div class="flex items-center">
                    <ul class="flex flex-row font-medium mt-0 space-x-10">
                        <li>
                            <a href="{{ route('homepage') }}"
                                class="text-gray-900 dark:text-white hover:underline font-semibold text-base leading-[18px]">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('aboutpage') }}"
                                class="text-gray-900 dark:text-white hover:underline font-semibold text-base leading-[18px]">About</a>
                        </li>
                        <li>
                            <a href="{{ route('pricepage') }}"
                                class="text-gray-900 dark:text-white hover:underline font-semibold text-base leading-[18px]">Price</a>
                        </li>
                        <li>
                            <a href="{{ route('articlespage') }}"
                                class="text-gray-900 dark:text-white hover:underline font-semibold text-base leading-[18px]">Article</a>
                        </li>
                        <li>
                            <a href="{{ route('faqpage') }}"
                                class="text-gray-900 dark:text-white hover:underline font-semibold text-base leading-[18px]">FAQ</a>
                        </li>
                        <li>
                            <a href="{{ route('contactpage') }}"
                                class="text-gray-900 dark:text-white hover:underline font-semibold text-base leading-[18px]">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div>
        <nav class="hidden lg:flex space-x-2">
            <a href="#"
                class="text-black rounded-lg border-black border-2 bg-white py-[14px] px-6 text-base leading-[18px] font-semibold">Log
                In</a>
            <a href="#"
                class="text-white rounded-lg bg-green-600 py-[14px] px-6 text-base leading-[18px] font-semibold">Sign
                Up</a>
        </nav>
        <div class="lg:hidden">
            <button type="button" data-drawer-target="drawer-top-example" data-drawer-show="drawer-top-example"
                data-drawer-placement="top" aria-controls="drawer-top-example"
                class="text-white bg-brand hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-brand dark:focus:ring-blue-800">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
                </svg>
                <span class="sr-only">Icon description</span>
            </button>
        </div>
    </div>
</header>

{{-- Top Drawer --}}

<div id="drawer-top-example"
    class="fixed top-0 left-0 right-0 z-40 w-full p-4 transition-transform -translate-y-full bg-white dark:bg-gray-800"
    tabindex="-1" aria-labelledby="drawer-top-label">

    <button type="button" data-drawer-hide="drawer-top-example" aria-controls="drawer-top-example"
        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white">
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
        </svg>
        <span class="sr-only">Close menu</span>
    </button>

    <ul class="flex flex-col font-medium mt-4 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-transparent dark:border-gray-700">
        <li>
          <a href="#" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Login</a>
        </li>
        <li>
          <a href="#" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Sign Up</a>
        </li>

      </ul>

</div>
