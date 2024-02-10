@extends('layouts.mainPublic')
@section('title', 'About')
@section('content')
<style>
        ::-webkit-scrollbar {
    width: 8px;
}
::-webkit-scrollbar-track {
    background: #f1f1f1;
}
::-webkit-scrollbar-thumb {
    background: #0138ff;
    border-radius: 12px;
    transition: all 0.3s ease;
}

::-webkit-scrollbar-thumb:hover {
    background: #0b3cc1;
}
</style>
    <section class="text-gray-600 body-font" _msthidden="3">
        <div class="container px-5 py-24 mx-auto" _msthidden="3" data-aos="fade-up" data-aos-duration="3000">
            <div class="xl:w-1/2 lg:w-3/4 w-full mx-auto text-center" _msthidden="3" >
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-8 h-8 text-gray-400 mb-8"
                    viewBox="0 0 975.036 975.036">
                    <path
                        d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z">
                    </path>
                </svg>
                <p class="leading-relaxed text-lg" _msttexthash="161478694" _msthidden="1" _msthash="1815">
                    Buku online Situs Pinjaman adalah portal modern yang menghubungkan pembaca dengan beragam koleksi 
                    buku yang tersedia dalam digital atau format fisik. Dengan ribuan judul buku dari berbagai genre, 
                    pengguna dapat menelusuri dan meminjam buku favorit mereka mudah. Proses peminjaman sederhana dan efisien, 
                    termasuk pengiriman buku fisik dan akses instan ke buku digital. Situs ini juga dilengkapi ulasan, r
                    ekomendasi, dan sistem penilaian, membantu pengguna menemukan buku yang korek api minat mereka. Ini 
                    adalah alat yang ideal untuk penggemar sastra yang mencari kenyamanan dalam membaca dan berbagi 
                    buku Pengalaman.</p>
                <span class="inline-block h-1 w-40 rounded bg-blue-600 mt-8 mb-6"></span>
                <h2 class="text-gray-900 font-medium title-font tracking-wider text-xl font-semibold" _msttexthash="197990"
                    _msthidden="1" _msthash="1816">MyBook's<span class="text-blue-600">.com</span></h2>
                <p class="text-gray-500" _msttexthash="484198" _msthidden="1" _msthash="1817">© 2023 Copyright All Rights
                    Reserved.</p>
            </div>
        </div>
    </section>



            {{-- FOOTER --}}
            <div class="border-t" data-aos="fade-up" data-aos-duration="3000">
                <div class="max-w-screen-lg py-10 px-4 sm:px-6 text-gray-800 sm:flex justify-between mx-auto">
                    <div class="p-5 sm:w-2/12 border-r">
                        <div class="text-sm uppercase text-blue-600 font-bold">Menu :</div>
                        <ul>
                            <li class="my-4 {{ request()->is('/') ? 'underline underline-offset-8 decoration-4 decoration-blue-500' : '' }}">
                                <a class="font-semibold text-gray-400 hover:underline underline-offset-8 decoration-4 decoration-blue-500" href="/">Home</a>
                            </li>
                            <li class="my-4 {{ request()->is('books') ? 'underline underline-offset-8 decoration-4 decoration-blue-500' : '' }}">
                                <a class="font-semibold text-gray-400 hover:underline underline-offset-8 decoration-4 decoration-blue-500" href="/books">Buku</a>
                            </li>
                            <li class="my-4 {{ request()->is('about') ? 'underline underline-offset-8 decoration-4 decoration-blue-500' : '' }}">
                                <a class="font-semibold text-gray-400 hover:underline underline-offset-8 decoration-4 decoration-blue-500" href="/about">Tentang Kami</a>
                            </li>
                            <li class="my-4">
                                <a class="font-semibold text-gray-400 hover:underline underline-offset-8 decoration-4 decoration-blue-500" href="#">Hubungi</a>
                            </li>
                        </ul>
                    </div>
                    <div class="p-5 sm:w-7/12 border-r text-center">
                        <h3 class="font-bold text-2xl text-gray-900 mb-4">MyBook's<span class="text-blue-600">.com</span></h3>
                        <p class="text-gray-500 text-sm mb-10">Sistem Informasi Peminjaman Buku</p>
                    </div>
                    <div class="p-5 sm:w-3/12">
                        <div class="text-sm uppercase text-blue-600 font-bold">Hubungi Melalui :</div>
                        <ul class="mt-4">
                            <li class="my-3">
                                <a class="text-gray-400 hover:text-blue-600 flex text-center" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-2 text-blue-600">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                                    </svg>
                                    (+62) 123456789</a>
                            </li>
                            <li class="my-3">
                                <a class="text-gray-400 hover:text-blue-600 flex" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-2 text-blue-600">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 9v.906a2.25 2.25 0 01-1.183 1.981l-6.478 3.488M2.25 9v.906a2.25 2.25 0 001.183 1.981l6.478 3.488m8.839 2.51l-4.66-2.51m0 0l-1.023-.55a2.25 2.25 0 00-2.134 0l-1.022.55m0 0l-4.661 2.51m16.5 1.615a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V8.844a2.25 2.25 0 011.183-1.98l7.5-4.04a2.25 2.25 0 012.134 0l7.5 4.04a2.25 2.25 0 011.183 1.98V19.5z" />
                                    </svg>
                                    MyBooks@gmail.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="flex py-5 m-auto text-gray-800 text-sm flex-col items-center border-t max-w-screen-xl">
                    <div class="md:flex-auto md:flex-row-reverse mt-2 flex-row flex">
                        <a href="#" class="w-6 mx-1">
                            <svg class="fill-current cursor-pointer text-gray-500 hover:text-blue-600" width="100%"
                                height="100%" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve"
                                xmlns:serif="http://www.serif.com/"
                                style="fill-rule: evenodd; clip-rule: evenodd; stroke-linejoin: round; stroke-miterlimit: 2;">
                                <path id="Twitter" d="M24,12c0,6.627 -5.373,12 -12,12c-6.627,0 -12,-5.373 -12,-12c0,-6.627
                                5.373,-12 12,-12c6.627,0 12,5.373 12,12Zm-6.465,-3.192c-0.379,0.168
                                -0.786,0.281 -1.213,0.333c0.436,-0.262 0.771,-0.676
                                0.929,-1.169c-0.408,0.242 -0.86,0.418 -1.341,0.513c-0.385,-0.411
                                -0.934,-0.667 -1.541,-0.667c-1.167,0 -2.112,0.945 -2.112,2.111c0,0.166
                                0.018,0.327 0.054,0.482c-1.754,-0.088 -3.31,-0.929
                                -4.352,-2.206c-0.181,0.311 -0.286,0.674 -0.286,1.061c0,0.733 0.373,1.379
                                0.94,1.757c-0.346,-0.01 -0.672,-0.106 -0.956,-0.264c-0.001,0.009
                                -0.001,0.018 -0.001,0.027c0,1.023 0.728,1.877 1.694,2.07c-0.177,0.049
                                -0.364,0.075 -0.556,0.075c-0.137,0 -0.269,-0.014 -0.397,-0.038c0.268,0.838
                                1.048,1.449 1.972,1.466c-0.723,0.566 -1.633,0.904 -2.622,0.904c-0.171,0
                                -0.339,-0.01 -0.504,-0.03c0.934,0.599 2.044,0.949 3.237,0.949c3.883,0
                                6.007,-3.217 6.007,-6.008c0,-0.091 -0.002,-0.183 -0.006,-0.273c0.413,-0.298
                                0.771,-0.67 1.054,-1.093Z"></path>
                            </svg>
                        </a>
                        <a href="#" class="w-6 mx-1">
                            <svg class="fill-current cursor-pointer text-gray-500 hover:text-blue-600" width="100%"
                                height="100%" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve"
                                xmlns:serif="http://www.serif.com/"
                                style="fill-rule: evenodd; clip-rule: evenodd; stroke-linejoin: round; stroke-miterlimit: 2;">
                                <path id="Facebook" d="M24,12c0,6.627 -5.373,12 -12,12c-6.627,0 -12,-5.373 -12,-12c0,-6.627
                                5.373,-12 12,-12c6.627,0 12,5.373
                                12,12Zm-11.278,0l1.294,0l0.172,-1.617l-1.466,0l0.002,-0.808c0,-0.422
                                0.04,-0.648 0.646,-0.648l0.809,0l0,-1.616l-1.295,0c-1.555,0 -2.103,0.784
                                -2.103,2.102l0,0.97l-0.969,0l0,1.617l0.969,0l0,4.689l1.941,0l0,-4.689Z"></path>
                            </svg>
                        </a>
                        <a href="#" class="w-6 mx-1">
                            <svg class="fill-current cursor-pointer text-gray-500 hover:text-blue-600" width="100%"
                                height="100%" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve"
                                xmlns:serif="http://www.serif.com/"
                                style="fill-rule: evenodd; clip-rule: evenodd; stroke-linejoin: round; stroke-miterlimit: 2;">
                                <g id="Layer_1">
                                    <circle id="Oval" cx="12" cy="12" r="12"></circle>
                                    <path id="Shape" d="M19.05,8.362c0,-0.062 0,-0.125 -0.063,-0.187l0,-0.063c-0.187,-0.562
                                    -0.687,-0.937 -1.312,-0.937l0.125,0c0,0 -2.438,-0.375 -5.75,-0.375c-3.25,0
                                    -5.75,0.375 -5.75,0.375l0.125,0c-0.625,0 -1.125,0.375
                                    -1.313,0.937l0,0.063c0,0.062 0,0.125 -0.062,0.187c-0.063,0.625 -0.25,1.938
                                    -0.25,3.438c0,1.5 0.187,2.812 0.25,3.437c0,0.063 0,0.125
                                    0.062,0.188l0,0.062c0.188,0.563 0.688,0.938 1.313,0.938l-0.125,0c0,0
                                    2.437,0.375 5.75,0.375c3.25,0 5.75,-0.375 5.75,-0.375l-0.125,0c0.625,0
                                    1.125,-0.375 1.312,-0.938l0,-0.062c0,-0.063 0,-0.125
                                    0.063,-0.188c0.062,-0.625 0.25,-1.937 0.25,-3.437c0,-1.5 -0.125,-2.813
                                    -0.25,-3.438Zm-4.634,3.927l-3.201,2.315c-0.068,0.068 -0.137,0.068
                                    -0.205,0.068c-0.068,0 -0.136,0 -0.204,-0.068c-0.136,-0.068 -0.204,-0.204
                                    -0.204,-0.34l0,-4.631c0,-0.136 0.068,-0.273 0.204,-0.341c0.136,-0.068
                                    0.272,-0.068 0.409,0l3.201,2.316c0.068,0.068 0.136,0.204
                                    0.136,0.34c0.068,0.136 0,0.273 -0.136,0.341Z" style="fill: rgb(255, 255, 255);"></path>
                                </g>
                            </svg>
                        </a>
                        <a href="#" class="w-6 mx-1">
                            <svg class="fill-current cursor-pointer text-gray-500 hover:text-blue-600" width="100%"
                                height="100%" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve"
                                xmlns:serif="http://www.serif.com/"
                                style="fill-rule: evenodd; clip-rule: evenodd; stroke-linejoin: round; stroke-miterlimit: 2;">
                                <path id="Shape" d="M7.3,0.9c1.5,-0.6 3.1,-0.9 4.7,-0.9c1.6,0 3.2,0.3 4.7,0.9c1.5,0.6 2.8,1.5
                                3.8,2.6c1,1.1 1.9,2.3 2.6,3.8c0.7,1.5 0.9,3 0.9,4.7c0,1.7 -0.3,3.2
                                -0.9,4.7c-0.6,1.5 -1.5,2.8 -2.6,3.8c-1.1,1 -2.3,1.9 -3.8,2.6c-1.5,0.7
                                -3.1,0.9 -4.7,0.9c-1.6,0 -3.2,-0.3 -4.7,-0.9c-1.5,-0.6 -2.8,-1.5
                                -3.8,-2.6c-1,-1.1 -1.9,-2.3 -2.6,-3.8c-0.7,-1.5 -0.9,-3.1 -0.9,-4.7c0,-1.6
                                0.3,-3.2 0.9,-4.7c0.6,-1.5 1.5,-2.8 2.6,-3.8c1.1,-1 2.3,-1.9
                                3.8,-2.6Zm-0.3,7.1c0.6,0 1.1,-0.2 1.5,-0.5c0.4,-0.3 0.5,-0.8 0.5,-1.3c0,-0.5
                                -0.2,-0.9 -0.6,-1.2c-0.4,-0.3 -0.8,-0.5 -1.4,-0.5c-0.6,0 -1.1,0.2
                                -1.4,0.5c-0.3,0.3 -0.6,0.7 -0.6,1.2c0,0.5 0.2,0.9 0.5,1.3c0.3,0.4 0.9,0.5
                                1.5,0.5Zm1.5,10l0,-8.5l-3,0l0,8.5l3,0Zm11,0l0,-4.5c0,-1.4 -0.3,-2.5
                                -0.9,-3.3c-0.6,-0.8 -1.5,-1.2 -2.6,-1.2c-0.6,0 -1.1,0.2 -1.5,0.5c-0.4,0.3
                                -0.8,0.8 -0.9,1.3l-0.1,-1.3l-3,0l0.1,2l0,6.5l3,0l0,-4.5c0,-0.6 0.1,-1.1
                                0.4,-1.5c0.3,-0.4 0.6,-0.5 1.1,-0.5c0.5,0 0.9,0.2 1.1,0.5c0.2,0.3 0.4,0.8
                                0.4,1.5l0,4.5l2.9,0Z"></path>
                            </svg>
                        </a>
                        <a href="#" class="w-6 mx-1">
                            <svg class="fill-current cursor-pointer text-gray-500 hover:text-blue-600" width="100%"
                                height="100%" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve"
                                xmlns:serif="http://www.serif.com/"
                                style="fill-rule: evenodd; clip-rule: evenodd; stroke-linejoin: round; stroke-miterlimit: 2;">
                                <path id="Combined-Shape" d="M12,24c6.627,0 12,-5.373 12,-12c0,-6.627 -5.373,-12 -12,-12c-6.627,0
                                -12,5.373 -12,12c0,6.627 5.373,12 12,12Zm6.591,-15.556l-0.722,0c-0.189,0
                                -0.681,0.208 -0.681,0.385l0,6.422c0,0.178 0.492,0.323
                                0.681,0.323l0.722,0l0,1.426l-4.675,0l0,-1.426l0.935,0l0,-6.655l-0.163,0l-2.251,8.081l-1.742,0l-2.222,-8.081l-0.168,0l0,6.655l0.935,0l0,1.426l-3.74,0l0,-1.426l0.519,0c0.203,0
                                0.416,-0.145 0.416,-0.323l0,-6.422c0,-0.177 -0.213,-0.385
                                -0.416,-0.385l-0.519,0l0,-1.426l4.847,0l1.583,5.704l0.042,0l1.598,-5.704l5.021,0l0,1.426Z">
                                </path>
                            </svg>
                        </a>
                    </div>
                    <div class="my-5">© 2023 Copyright MyBook's.com. All Rights Reserved.</div>
                </div>
            </div>
@endsection
