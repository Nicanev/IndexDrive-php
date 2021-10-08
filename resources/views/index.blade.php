@extends('layouts.app')
@section('title')Index Drive @endsection
@section('content')
<div class="wrapper">
    <header class="header">
        <div class="header__container">
            <div class="header__menu">
                <div class="header__logo">
                    <a href="/"
                    ><img src="img/icon/Logo_ID.svg" alt="" class="logo"
                        /></a>
                </div>
                <div class="header__nav">
                    <nav class="nav">
                        <ul class="nav__items">
                            <li class="nav__item">
                                <a href="#discount" class="nav__link">АКЦИИ</a>
                            </li>
                            <li class="nav__item">
                                <a href="/booking" class="nav__link">БРОНИРОВАНИЕ</a>
                            </li>
                            <li class="nav__item">
                                <a href="/login" class="nav__link">ЛИЧНЫЙ КАБИНЕТ</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="header__title">
                На любой случай,<br />
                любой автомобиль
            </div>
            <div class="header__arrow">
                <a href="#about"><img src="img/icon/arrow_down.svg" alt="" /></a>
            </div>
        </div>
    </header>
    <main class="main">
        <div class="about" id="about">
            <div class="container">
                <div class="about__content">
                    <div class="about__title">
                        <span>INDEX DRIVE.</span> Новая и энергичная <br />компания по
                        аренде автомобилей
                    </div>
                    <div class="about__image">
                        <img src="img/picture/about.png" alt="" />
                    </div>
                    <div class="about__columns">
                        <div class="about__column">
                            <p><span>Большой выбор автомобилей</span></p>

                            <p>Более 10 000 автомобилей</p>

                            <p>
                                В нашем парке множество различных автомобилей на любой вкус
                            </p>
                        </div>
                        <div class="about__column">
                            <p><span>Для любых целей</span></p>

                            <p>Перемещайтесь без ограничений</p>

                            <p>
                                Выбирайте любую модель авто, от компактных до внедорожников
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mark">
            <div class="container">
                <div class="mark__content">
                    Главная цель компании Index Drive - сделать любой автомобиль более
                    доступным и практичным.
                </div>
            </div>
        </div>
        <div class="rentauto">
            <div class="container">
                <div class="rentauto__content">
                    <div class="rentauto__title">Аренда автомобилей</div>
                    <div class="rentauto__subtitle">Арендуйте автомобиль онлайн</div>
                    <div class="rentauto__forms">
                        <form class="form" action="#" method="POST">
                            <div class="form__inputclass">
                                <select name="" id="">
                                    <option value="">Класс автомобиля</option>
                                    <option value="">Класс A</option>
                                    <option value="">Класс B</option>
                                    <option value="">Класс С</option>
                                </select>
                            </div>
                            <div class="form__inputmark">
                                <select name="" id="">
                                    <option value="">Марка автомобиля</option>
                                    <option value="">Audi</option>
                                    <option value="">BMW</option>
                                    <option value="">Ford</option>
                                </select>
                            </div>
                            <div class="form__inputmodel">
                                <select name="" id="">
                                    <option value="">Модель автомобиля</option>

                                </select>
                            </div>
                            <div class="form__btnsearch">
                                <input type="submit" value="" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="discounts" id="discount">
            <div class="container">
                <div class="discounts__content">
                    <div class="discounts__title">Акции</div>
                    <div class="discounts__card">
                        <div class="card__left">
                            <div class="card__title">Приведи друга</div>
                            <div class="card__about">
                                Получите скидку 10% за приглашенного друга. А если друг
                                оформит тариф на сумму более чем 5000 рублей, вы получите
                                скидку в 30%
                            </div>
                            <div class="card__btn">
                                <a href="#"><button>Подробнее</button></a>
                            </div>
                        </div>
                        <div class="card__right">
                            <div class="card__img">
                                <img src="img/picture/friends.png" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="discounts__card">
                        <div class="card__left">
                            <div class="card__title">Скидка на машины Toyota</div>
                            <div class="card__about">
                                C 23 сентября по 23 декабря на все машины Toyota действует
                                скидка до 30%
                            </div>
                            <div class="card__btn">
                                <a href="#"><button>Подробнее</button></a>
                            </div>
                        </div>
                        <div class="card__right">
                            <div class="card__img">
                                <img src="img/picture/toyota.png" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection
