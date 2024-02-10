@extends('layouts.mainPublic')
@section('title', '')
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
    <section class="text-gray-600 body-font" _msthidden="5">
        <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center" _msthidden="5">
            <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center"
                _msthidden="4" data-aos="fade-right" data-aos-duration="3000">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900" _msttexthash="1004770"
                    _msthidden="1" _msthash="2019">Sistem Informasi Peminjaman Buku
                </h1>
                <p class="mb-8 leading-relaxed" _msttexthash="26864591" _msthidden="1" _msthash="2020">
                    Situs ini merupakan situs peminjaman buku online yang dilengkapi dengan berbagai judul 
                    dan kategori buku, Mulai dari kategori dongeng, cerita, horor, cerita rakyat, sejarah 
                    dan masih banyak jenis katgori lainya.</p>
                <div class="flex justify-center" _msthidden="2">
                    <button
                        class="inline-flex text-white bg-blue-500 border-0 py-2 px-6 focus:outline-none hover:bg-blue-600 rounded text-lg shadow-[4px_4px_4px_#b1b1b1]"
                        _msttexthash="79859" _msthidden="1" _msthash="2021"><a href="/login">Get Started <i
                                class="bi bi-arrow-right"></i></a></button>
                </div>
            </div>
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6" _msthidden="1" data-aos="fade-left" data-aos-duration="3000">
                <img class="bg-cover bg-center rounded h-[400px]" alt="hero"
                    src="https://thumbs.dreamstime.com/b/got-idea-book-mascot-character-cartoon-design-perfect-logo-web-print-illustration-103948676.jpg"
                    _msthidden="A" _mstalt="47736" _msthash="2023">
            </div>
        </div>
    </section>
@endsection
