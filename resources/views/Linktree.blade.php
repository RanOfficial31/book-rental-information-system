<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Book's.com</title>
    <link rel="shortcut icon" href="{{asset('MyBooks.ico')}}" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
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
<!-- component -->
<body class="bg-[#ecf0f3] antialiased">
    <div class="container mx-auto my-40">
        <div>

    <div class="bg-white relative shadow rounded-lg w-5/6 md:w-5/6  lg:w-4/6 xl:w-3/6 mx-auto shadow-[13px_13px_20px_#cbced1]">
                <div class="flex justify-center animate__animated animate__fadeInDownBig animate__delay-1s">
                        <img src="https://thumbs.dreamstime.com/b/got-idea-book-mascot-character-cartoon-design-perfect-logo-web-print-illustration-103948676.jpg" alt="" class="animate-bounce rounded-full mx-auto absolute -top-20 w-32 h-32 shadow-md border-4 border-gray-300 transition duration-200 transform hover:scale-110">
                </div>
                
                <div class="mt-16">
                    <h1 class="font-bold text-center text-3xl text-gray-900" data-aos="zoom-in" data-aos-duration="3000">MyBook's<span class="text-blue-600">.com</span></h1>
                    <p class="text-center text-sm text-gray-400 font-medium" data-aos="zoom-out" data-aos-duration="3000">Sistem Informasi Peminjaman Buku</p>
                    
                    <div class="my-5 px-6" data-aos="flip-left" data-aos-duration="3000">
                        <a href="/login" class="text-gray-200 block rounded-lg text-center font-medium leading-6 px-6 py-3 bg-gray-900 hover:bg-black hover:text-white transition ease-in-out delay-0 hover:-translate-1 hover:scale-105 duration-300 shadow-[3px_3px_4px_#b1b1b1]">Sudah Punya Akun ?</a>
                    </div>
                    <div class="my-5 px-6" data-aos="flip-right" data-aos-duration="3000">
                        <a href="/register" class="text-gray-200 block rounded-lg text-center font-medium leading-6 px-6 py-3 bg-gray-900 hover:bg-black hover:text-white transition ease-in-out delay-0 hover:-translate-1 hover:scale-105 duration-300 shadow-[3px_3px_4px_#b1b1b1]">Belum Punya Akun ?</a>
                    </div>
                    <div class="my-5 px-6" data-aos="flip-left" data-aos-duration="3000">
                        <a href="/about" class="text-gray-200 block rounded-lg text-center font-medium leading-6 px-6 py-3 transition ease-in-out delay-0 bg-gray-900 hover:-translate-y-1 hover:scale-105 hover:bg-black duration-300  shadow-[5px_5px_6px_#b1b1b1]">Tentang Kami</a>
                    </div>
                    <div class="flex justify-between items-center my-5 px-6">
                        <a href="/home" class="text-gray-500 hover:text-gray-900 hover:bg-gray-300 rounded transition duration-150 ease-in font-medium text-sm text-center w-full py-3 animate__animated animate__zoomInDown animate__delay-2s">Home</a>
                        <a href="/books" class="text-gray-500 hover:text-gray-900 hover:bg-gray-300 rounded transition duration-150 ease-in font-medium text-sm text-center w-full py-3 animate__animated animate__zoomInDown animate__delay-2s">Book list</a>
                        <a href="/about" class="text-gray-500 hover:text-gray-900 hover:bg-gray-300 rounded transition duration-150 ease-in font-medium text-sm text-center w-full py-3 animate__animated animate__zoomInDown animate__delay-2s">About</a>
                        <a href="/contact" class="text-gray-500 hover:text-gray-900 hover:bg-gray-300 rounded transition duration-150 ease-in font-medium text-sm text-center w-full py-3 animate__animated animate__zoomInDown animate__delay-2s">Contact</a>
                    </div>

                    
                </div>
            </div>

        </div>
    </div>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
</body>
</html>