@extends('layouts.app')
@section('title')Вход@endsection
@section('content')

<div class="wrapper">
    @include('inc.header')
    <main class="main">
        <div class="login">
            <div class="container">
                <div class="login__content">
                    <div class="login__logo">
                        <img src="img/icon/Logo Login.svg" alt="" />
                    </div>
                    <div class="login__block">
                        <div class="login__blockcontent">
                            <div class="login__title">Войти</div>
                            <div class="login__registarion"><a href="{{route('register')}}">Регистрация</a></div>
                            <form>
                                <div class="login__tel">
                                    <input type="tel" name="" placeholder="Телефон" id="" />
                                </div>
                                <div class="login__password">
                                    <input
                                        type="password"
                                        name=""
                                        placeholder="Пароль"
                                        id=""
                                    />
                                </div>
                                <div class="login__btn">
                                    <input type="button" value="Войти" />
                                </div>
                            </form>
                            <div class="login__forgotpassword">Забыли пароль?</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
