<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Books | login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" 
    integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<style>
    /* Importing fonts from Google */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

/* Reseting */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    background: #ecf0f3;
    padding: 5px;
}

.wrapper {
    justify-content: center;
    align-items: center;
    max-width: 350px;
    min-height: 450px;
    margin: 80px auto;
    padding: 30px 30px 30px 30px;
    background-color: #ecf0f3;
    border-radius: 15px;
    box-shadow: 13px 13px 20px #cbced1, -13px -13px 20px #fff;
}


.logo {
    width: 80px;
    margin: auto;
}

.logo img {
    width: 100%;
    height: 80px;
    object-fit: cover;
    border-radius: 50%;
    box-shadow: 0px 0px 3px #5f5f5f,
        0px 0px 0px 5px #ecf0f3,
        8px 8px 15px #a7aaa7,
        -8px -8px 15px #fff;
}

.wrapper .name {
    font-weight: 600;
    font-size: 1.4rem;
    letter-spacing: 1.3px;
    padding-left: 10px;
    color: #555;
}

.wrapper .form-field input {
    width: 100%;
    display: block;
    border: none;
    outline: none;
    background: none;
    font-size: 1.2rem;
    color: #666;
    padding: 10px 15px 10px 10px;
}

.wrapper .form-field {
    padding-left: 10px;
    margin-bottom: 20px;
    border-radius: 20px;
    box-shadow: inset 8px 8px 8px #cbced1, inset -8px -8px 8px #fff;
}

.wrapper .form-field .fas {
    color: #555;
}

.wrapper .btn {
    box-shadow: none;
    width: 100%;
    height: 40px;
    background-color: #0138ff;
    color: #fff;
    border-radius: 25px;
    box-shadow: 4px 4px 4px #b1b1b1,
        -3px -3px 3px #fff;
    letter-spacing: 1.3px;
    
}

.wrapper .btn:hover {
    background-color:#0064cf;
}

.wrapper a {
    text-decoration: none;
    font-size: 0.8rem;
    color: #0138ff;
}

.wrapper a:hover {
    color: #0064cf;
    text-decoration: underline;
}

@media(max-width: 380px) {
    .wrapper {
        margin: 30px 20px;
        padding: 40px 15px 15px 15px;
    }
}
</style>

<body>
    @if (session('status'))
        <script>
        swal("error","{{ session('massage') }}", 'error',{
            buttons:true,
            buttons:false,
            buttons:"OK",
        });
        </script>
    @endif


    <div class="wrapper"
        data-aos="flip-right"
        data-aos-duration="3000">
        <div class="text-center mt-4 name">
            Login
        </div>
        <form class="p-3 mt-3" action="" method="post">
            @csrf
            <div class="form-field d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" height="1.255em" viewBox="0 0 448 512">
                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License -
                https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                <style>svg{fill:#545454}</style><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 
                48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2
                304 269.7 304H178.3z"/></svg>

                    <input type="text" name="username" id="username" placeholder="Username" required>
            </div>
            <div class="form-field d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" height="1.25em" viewBox="0 0 512 512">
                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - 
                https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                <style>svg{fill:#525252}</style><path d="M336 352c97.2 0 176-78.8 176-176S433.2 0 336 0S160
                78.8 160 176c0 18.7 2.9 36.8 8.3 53.7L7 391c-4.5 4.5-7 10.6-7 17v80c0 13.3 10.7 24 24 24h80c13.
                3 0 24-10.7 24-24V448h40c13.3 0 24-10.7 24-24V384h40c6.4 0 12.5-2.5 17-7l33.3-33.3c16.9 
                5.4 35 8.3 53.7 8.3zM376 96a40 40 0 1 1 0 80 40 40 0 1 1 0-80z"/></svg>

                    <input type="password" name="password" id="password" placeholder="Password" required>
            </div>
            <button type="submit" class="btn mt-3 form-control">Login</button>
        </form>
        <div class="text-center fs-6">
            <a href="/">Lupa Password ?</a> atau <a href="/register">Daftar</a>
        </div>
    </div>

{{-- FOR JAVASCRIPT --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>AOS.init();</script>
</body>

</html>
