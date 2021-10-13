@extends('layouts.app')
@section('title')Регистрация@endsection
@section('content')

    <div class="wrapper">
        @include('inc.header')
    <div class="register">
        <div class="container">
            <div class="register__content">
                @if($errors->any())
                    <div class="alert">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="register__logo">
                    <img src="img/icon/Logo Login.svg" alt="">
                </div>
                <div class="register__block">
                    <div class="register__title">
                        Регистрация
                        <a href="{{route('login')}}" class="linkAuth">Вход</a>
                    </div>
                    <div class="register__inputFields">
                        <form action="{{route('register-form')}}" method="post">
                            @csrf
                            <div class="register__inputField"><input name="first_name" id="first_name" type="text" placeholder="Имя"></div>
                            <div class="register__inputField"><input name="last_name" id="last_name" type="text" placeholder="Фамилия"></div>
                            <div class="register__inputField"><input name="patronymic" id="patronymic" type="text" placeholder="Отчество"></div>
                            <div class="register__inputField"><input name="passport_number" id="passport_number" type="text" placeholder="Номер паспорта"></div>
                            <div class="register__inputField"><input name="passport_series" id="passport_series" type="text" placeholder="Серия паспорта"></div>
                            <div class="register__inputField"><input name="phone" id="phone" type="tel" placeholder="Телефон"></div>
                            <div class="register__inputField"><input name="birth_date" id="birth_date" type="date" placeholder="Дата рождения"></div>
                            <div class="register__inputField"><input name='password' id="password" type="password" placeholder="Пароль"></div>
                            <input type="submit" id="submit" class="btnInput" value="Регистрация">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
