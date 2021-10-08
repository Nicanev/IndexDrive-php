@extends('layouts.app')
@section('title')Бронирование@endsection
@section('content')


    <div class="wrapper">
        @include('inc.header')
    <main class="main">
        <div class="booking">
            <div class="container">
                <div class="booking__content">
                    <div class="booking__pictures">
                        <div class="pictures__main">
                            <div class="pictures__item">
                                <img src="img/picture/Toyota_Camry1.png" alt="" />
                            </div>
                        </div>
                        <div class="pictures__right">
                            <div class="pictures__item">
                                <img src="img/picture/Toyota_Camry2.png" alt="" />
                            </div>
                            <div class="pictures__item">
                                <img src="img/picture/Toyota_Camry3.png" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="booking__desc">
                        <div class="booking__specification">
                            <div class="booking__benefits">
                                <div class="booking__intelligence">
                                    <div class="intelligence__title">Сведения о машине</div>
                                    <div class="intelligence__item">
                                        <img src="img/icon/Gears.svg" alt="" />
                                        Атоматическая КПП
                                    </div>
                                    <div class="intelligence__item">
                                        <img src="img/icon/gaz.svg" alt="" />
                                        Дизель
                                    </div>
                                </div>
                            </div>
                            <div class="booking__addserv">
                                <div class="addserv__title">Дополнительные услуги</div>
                                <div class="addserv__item">
                                    <img src="img/icon/driver (1).svg" alt="" />
                                    С водителем
                                </div>
                                <div class="addserv__item">
                                    <img src="img/icon/plane (1).svg" alt="" />
                                    Подача в аэропорт
                                </div>
                            </div>
                            <div class="booking__description">
                                <div class="description__title">Описание</div>
                                <p>
                                    <b>Toyota Camry</b> - эталон комфорта, безопасности и
                                    надежности среди седанов бизнес-класса. Стильный дизайн с
                                    динамичными линиями кузова, эффектная форма переднего
                                    бампера, решетка радиатора с боковой серебристой
                                    окантовкой, новые цвета экстерьера и уникальный
                                    двухцветный окрас кузова для специальной серии GR SPORT —
                                    все это подчеркивает выразительный облик бизнес-седана.
                                </p>
                            </div>
                        </div>
                        <div class="booking__right">
                            <div class="booking__info">
                                <div class="info">
                                    <div class="info__titlecontent">
                                        <div class="info__title">Toyota Camry</div>
                                        <div class="info__price-per-day">4 000₽ в день</div>
                                    </div>
                                    <div class="info__car-info">
                                        <div class="car-info__item">
                                            <p>VIN номер</p>
                                            <p>Номер машины</p>
                                            <p>Филиал</p>
                                        </div>
                                        <div class="car-info__item">
                                            <p>1F2041</p>
                                            <p>К985КВ</p>
                                            <p>Index Drive</p>
                                        </div>
                                    </div>
                                    <div class="info__dates">
                                        <div class="dates__item">
                                            <p>Получение</p>
                                            <input type="date" name="" id="" />
                                        </div>
                                        <div class="dates__item">
                                            <p>Возврат</p>
                                            <input type="date" name="" id="" />
                                        </div>
                                    </div>
                                    <div class="info__count">
                                        <div class="count__title">Кол-во машин</div>
                                        <div class="count__number">1</div>
                                    </div>
                                    <div class="info__price">
                                        <div class="price__title">Итого</div>
                                        <div class="price__number">8 000₽</div>
                                    </div>
                                    <div class="info__btn">
                                        <button>Забронировать</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
