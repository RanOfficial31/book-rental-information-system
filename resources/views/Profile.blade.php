@extends('layouts.mainUser')
@section('title', 'User Block')
@section('content')
<div class="dash-content justfy-center item-center">
    
<!-- component -->

<div class="my-10">
  <div class="bg-white rounded overflow-hidden shadow-md">
    <div class="text-center p-6  border-b">
      <img
        class="h-24 w-24 rounded-full mx-auto"
        src="https://www.kindpng.com/picc/m/235-2350682_new-svg-image-small-user-login-icon-hd.png"
        alt="Randy Robertson"
      />
      <p class="pt-2 text-lg font-semibold">{{$user->username}}</p>
      <p class="text-sm text-gray-600">{{$user->created_at}}</p>
      <div class="mt-5">
        <a
          href="#"
          class="border rounded-full py-2 px-4 text-xs font-semibold text-gray-700">
          Kelola Akun Anda
        </a>
      </div>
    </div>
    <div class="border-b">
      <a href="#" class="px-4 py-2 hover:bg-gray-100 flex">
        <div class="text-gray-800">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill-gear h-5 w-5" viewBox="0 0 16 16">
            <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-9 8c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Zm9.886-3.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382l.045-.148ZM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z"/>
          </svg>
        </div>
        <div class="pl-3">
          <p class="text-sm font-medium text-gray-800 leading-none">Status</p>
          <p class="text-xs text-gray-500">{{$user->status}}</p>
        </div>
      </a>
      <a href="#" class="px-4 py-2 hover:bg-gray-100 flex">
        <div class="text-gray-800">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill h-5 w-5" viewBox="0 0 16 16">
            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
          </svg>
        </div>
        <div class="pl-3">
          <p class="text-sm font-medium text-gray-800 leading-none">Alamat</p>
          <p class="text-xs text-gray-500">{{$user->addres}}</p>
        </div>
      </a>
      <a href="#" class="px-4 py-2 hover:bg-gray-100 flex">
        <div class="text-gray-800">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill h-5 w-5" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
          </svg>
        </div>
        <div class="pl-3">
          <p class="text-sm font-medium text-gray-800 leading-none">Nomer Telepon</p>
          <p class="text-xs text-gray-500">{{$user->phone}}</p>
        </div>
      </a>
      <a href="#" class="px-4 py-2 hover:bg-gray-100 flex">
        <div class="text-green-600">
          <svg
            fill="none"
            stroke="currentColor"
            strokeLinecap="round"
            strokeLinejoin="round"
            strokeWidth="1"
            viewBox="0 0 24 24"
            class="w-5 h-5"
          >
            <path d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
          </svg>
        </div>
        <div class="pl-3">
          <p class="text-sm font-medium text-gray-800 leading-none">
            Apps &amp; integrations
          </p>
          <p class="text-xs text-gray-500">Google, slack, mail</p>
        </div>
      </a>
    </div>

    <div class="mt-2">
      <a href="/logout" class="px-4 py-2 pb-4 hover:bg-gray-100 flex">
        <p class="text-sm font-medium text-gray-800 leading-none">Logout</p>
      </a>
    </div>
  </div>
</div>

</div>
@endsection