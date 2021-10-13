@extends('layouts.app')
@section('title')Профиль@endsection

@section('content')


    <div class="wrapper">
        @include('inc.header')
        <main class="main">
            <div class="profile">
                <div class="container">
                    <a href="{{route('logout')}}"><input type="button" class="exitBtn" value="Выйти"></a>
                    <div class="profile__content">
                        <div class="profile__left">
                            <div class="profile__title">
                                Личный кабинет
                            </div>
                            <div class="profile__avatar">
                                <img src="img/picture/avatar.png" alt="">
                            </div>
                        </div>
                        <div class="profile__right">
                            <div class="profile__name">
                                <p>{{ auth()->user()->first_name }} {{ auth()->user()->last_name }} {{ auth()->user()->patronymic }}</p>
                                <div class="profile__scores">{{$rate}}</div>
                            </div>

                            <div class="profile__countbooking">
                                Количество бронирований: {{$bookings}}
                            </div>
                        </div>
                        <div class="compbooking">
                            <div class="compbooking__title">Выполенные бронирования</div>
                            <div class="compbooking__items">
                                <div class="compbooking__item">Индентификатор авто</div>
                                <div class="compbooking__item">Марка</div>
                                <div class="compbooking__item">Название</div>
                                <div class="compbooking__item">Картинка машины</div>
                                <div class="compbooking__item">Описание машины</div>
                                <div class="compbooking__item">Дата бронирования</div>
                                <div class="compbooking__item">Дата возврата</div>
                                <div class="compbooking__item">Выбранный филиал</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
</div>
