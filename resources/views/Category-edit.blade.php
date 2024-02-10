@extends('layouts.mainTemplate')
@section('title', 'Edit Category')
@section('content')


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
}

.wrapper {
    max-width: 450px;
    min-height: 450px;
    margin: 50px auto;
    padding: 30px 30px 30px 30px;
    background-color: #ecf0f3;
    border-radius: 15px;
    box-shadow: 13px 13px 20px #cbced1, -13px -13px 20px #fff;
}

.wrapper .name {
    font-weight: 600;
    font-size: 1.4rem;
    letter-spacing: 1.3px;
    padding-left: 10px;
    color: #555;
}

.wrapper .name p {
    font-weight: 500;
    font-size: 15px;
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

.wrapper .form-field .bi {
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

p {
    color: #B8B9BD;
}
</style>

<body>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <script>
                swal("error", "{{ $error }}", 'error', {
                    buttons: true,
                    buttons: false,
                    buttons: "OK",
                });
            </script>
        @endforeach
    @endif
<div class="dash-content">
    <div class="d-flex justify-content-end mt-4">
        <a href="/category" class="bg-blue-600 rounded-tl-full rounded-br-full text-white text-xl font-semibold text-center self-center px-4 py-2 m-2 hover:bg-blue-500 shadow-sm
        animate__animated animate__lightSpeedInLeft">
        <i class="bi bi-x-lg"></i></a>
    </div>
    <div class="wrapper"
        data-aos="flip-right"
        data-aos-duration="3000">
        <div class="text-center mt-4 name">
            <h2>Perbarui Kategori</h2>
            <p>"Ingin Mengubah Kategori Di Bawah ?"</p>
        </div>
        <form class="p-3 mt-3" action="/category-edit/{{$category->slug}}" method="post">
            @csrf
            @method('put')
            <div class="form-field d-flex align-items-center">
                <i class="bi bi-files"></i>
                    <input type="text" name="name" id="name" value="{{$category->name}}"  placeholder="Categories" required>
            </div>
            <button type="submit" class="btn mt-3">Perbarui</button>
        </form>
        <div class="text-center fs-7">
            <a href="/category">Cancel</a>
        </div>
    </div>
</div>

@endsection
