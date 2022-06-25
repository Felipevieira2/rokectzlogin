@extends('layouts.app')

@section('content')
<div id="#bg-color-login" class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card border-0 bg-transparent">
                <div class="card-body bg-transparent ">
                    <form method="POST" class="form-sign w-[410px]  text-white font-['Montserrat']   " action="{{ route('login') }}">
                        <div class="m-4">
                            <img src="{{ asset('img/foguete.png') }}" class="w-[150px] mx-auto duration-[2.5s] scale-90 hover:scale-100 opacity-1" alt="Astronauta no foguete">
                            <img src="{{ asset('img/logo.png') }}" class=" duration-[1.5s] opacity-1" alt="logo">
                        </div>
                        @csrf
                        <div class="rounded-lg p-2 border-1 flex items-center gap-3 m-4 ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="white" class="bi bi-person-check-fill" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"></path><path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path></svg>
                            <input id="email" type="email" placeholder="E-mail" class=" focus:outline-none  bg-transparent border-0  " name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        </div>

                        <div class="rounded-lg p-2 border-1 flex items-center gap-3 m-4 ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="white" class="bi bi-person-check-fill" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"></path><path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path></svg>
                            <input id="password" type="password" placeholder="Senha" class="  focus:outline-none bg-transparent border-0 @error('password')  is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="m-4">
                            <label class="text-red-500  @error('email') is-invalid @enderror"></label>
                            @error('email')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <button type="submit" class="bg-[#46FF27] border-[#46FF27] hover:bg-[#1f9114] w-full h-8 font-weight-bold  font-extrabold  rounded-lg  uppercase duration-500">
                                {{ __('ENTRAR') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
