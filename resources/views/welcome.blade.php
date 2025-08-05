<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Новгородовы</title>
        <link href="https://fonts.googleapis.com/css2?family=Forum&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/hystmodal.min.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    </head>
    <body>
        <main>
            <div class="music__wrap">
                <audio id="bgMusic" loop autoplay>
                    <source src="{{ asset('/audio/audio.mp3') }}">
                </audio>

                <input type="checkbox" id="toggleMusicBtn" />
                <label for="toggleMusicBtn" class="toggleSwitch">
                    <div class="speaker">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.0" viewBox="0 0 75 75">
                        <path
                            d="M39.389,13.769 L22.235,28.606 L6,28.606 L6,47.699 L21.989,47.699 L39.389,62.75 L39.389,13.769z"
                            style="stroke:#fff;stroke-width:5;stroke-linejoin:round;fill:#fff;"
                        ></path>
                        <path
                            d="M48,27.6a19.5,19.5 0 0 1 0,21.4M55.1,20.5a30,30 0 0 1 0,35.6M61.6,14a38.8,38.8 0 0 1 0,48.6"
                            style="fill:none;stroke:#fff;stroke-width:5;stroke-linecap:round"
                        ></path>
                        </svg>
                    </div>

                    <div class="mute-speaker">
                        <svg version="1.0" viewBox="0 0 75 75" stroke="#fff" stroke-width="5">
                        <path
                            d="m39,14-17,15H6V48H22l17,15z"
                            fill="#fff"
                            stroke-linejoin="round"
                        ></path>
                        <path
                            d="m49,26 20,24m0-24-20,24"
                            fill="#fff"
                            stroke-linecap="round"
                        ></path>
                        </svg>
                    </div>
                </label>
            </div>
            <div class="block_1">
                <img src="{{ asset('img/block1.webp') }}" alt="">
                <div class="block_1__after"></div>
                <div class="block_1__txt" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000" >
                    <div>
                        <span class="block_1__date">
                            20.09.2025
                        </span>
                        <span class="block_1__title">
                            АФАНАСИЙ
                            <br>
                            &
                            <br>
                            НЮРГУЯНА
                        </span>
                    </div>
                    <img class="block_1__txt__img_top" src="{{ asset('img/flowers-2.webp') }}" alt="">
                    <img class="block_1__txt__img_bottom" src="{{ asset('img/flowers.webp') }}" alt="">
                </div>
            </div>
            <div class="block_2">
                <div class="container">
                    <div class="block_2__wrap" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                        <div class="block_2__txt">
                            <span class="block_2__title">
                                ДОРОГИЕ ГОСТИ!
                            </span>
                            <span class="block_2__pre_txt">
                                Скоро наступит день, который будет для нас особенным - день нашей свадьбы. 
        Приглашаем наших родных и близких людей присоединиться к празднику и украсить его своим присутствием!
                            </span>
                        </div>
                        <div class="block_2__callendar">
                            <span class="block_2__callendar__title">СЕНТЯБРЬ 2025</span>
                            <div class="block_2__callendar__wrap">
                                <span>ПН</span>
                                <span>ВТ</span>
                                <span>СР</span>
                                <span>ЧТ</span>
                                <span>ПТ</span>
                                <span>СБ</span>
                                <span>ВС</span>
                                <span>01</span>
                                <span>02</span>
                                <span>03</span>
                                <span>04</span>
                                <span>05</span>
                                <span>06</span>
                                <span>07</span>
                                <span>08</span>
                                <span>09</span>
                                <span>10</span>
                                <span>11</span>
                                <span>12</span>
                                <span>13</span>
                                <span>14</span>
                                <span>15</span>
                                <span>16</span>
                                <span>17</span>
                                <span>18</span>
                                <span>19</span>
                                <span class="active">
                                    20
                                    <svg width="65" height="58" viewBox="0 0 65 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M50.5556 0C39 0 32.5 9.66788 32.5 14.5C32.5 9.66788 26 0 14.4444 0C2.88889 0 0 9.66788 0 14.5C0 39.875 32.5 58 32.5 58C32.5 58 65 39.875 65 14.5C65 9.66788 62.1111 0 50.5556 0Z" fill="#6B7337"/>
                                    </svg>
                                </span>
                                <span>21</span>
                                <span>22</span>
                                <span>23</span>
                                <span>24</span>
                                <span>25</span>
                                <span>26</span>
                                <span>27</span>
                                <span>28</span>
                                <span>29</span>
                                <span>30</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block_3">
                <div class="container">
                    <div class="block_3__wrap">
                        <div class="block_3__txt" data-aos="fade-right" data-aos-duration="1000">
                            <span class="block_3__txt__title">
                                ВРЕМЯ И МЕСТО ПРОВЕДЕНИЯ
                            </span>
                            <span class="block_3__txt__pre_text">
                                Торжество будет проходить в банкетном зале «Ланика» по адресу: г. Якутск, ул.Чернышевского, д.69
                            </span>
                            <a class="block_3__btn" href="https://go.2gis.com/UjNXY" target="_blank">
                                ПОСТРОИТЬ МАРШРУТ
                            </a>
                        </div>
                        <div class="block_3__map" data-aos="fade-left" data-aos-duration="1000">
                            <iframe id="map_527922269" frameborder="0" width="100%" height="100%" src="https://makemap.2gis.ru/widget?data=eJyFkV1vgjAARf9L9yhxpQgIbwYnHzKD02h08YGPDuoKJaVuIvG_r6h7tknT5J72pj3tAOMZ5jhzMSux4AQ3wP7sgGhrDGwww7E4cQwUUHNWYy5uvAMpo4xL_mIkpqaZkgsiaH9i7c5O8VYUMspwk3JSC8IqCSJvMojctzz2Aro_QhJ7HzD13o2wtaqkHbV7RC9hufhJVtYm_tZ325WfZ-5M5hsYrYKvXXkukrIhUc5y35k8nTB4XVbCKeA8XLKFg2FwXDLhNP7CSWEw7TMG53K1HOKQJ33T35_dejQOtclAPuziVxk-A1uF_-OqgPwusO31POxFjFRC7k-ZlEyqWNzkqsgamqoBVVUx0BBCBC39IAtIJhsRVK8HBZRxHbGG3NV1gMYC2I_NpoZUTUdjBA0F0J4_ClVd15EFEUK6vCJjpSRj2Ss_gVG6LTCm-1sq-Alf_wBDE5x-" sandbox="allow-modals allow-forms allow-scripts allow-same-origin allow-popups allow-top-navigation-by-user-activation"></iframe>

                        </div>
                        <a class="block_3__btn__mobile" href="https://go.2gis.com/UjNXY" target="_blank">
                            ПОСТРОИТЬ МАРШРУТ
                        </a>
                    </div>
                </div>
            </div>
            <div class="block_4">
                <div class="container">
                    <div class="block_4__wrap">
                        <div class="block_4__wrap__mobile">
                            <img src="{{ asset('img/2-photo.webp') }}" alt="">
                        </div>
                        <div class="block_4__wrap__desctop" style="position: relative;" data-aos="fade-right" data-aos-delay="500" data-aos-duration="1000">
                            <img class="block_4__wrap__img_1" src="{{ asset('img/photo-1.webp') }}" alt="">
                            <img class="block_4__wrap__img_2" src="{{ asset('img/photo-2.webp') }}" alt="">
                        </div>
                        <div class="block_4__date" data-aos="fade-left" data-aos-duration="1000">
                            <span class="block_4__date__time">16:00</span>
                            <span class="block_4__date__text">СБОР ГОСТЕЙ</span>
                            <span class="block_4__date__line"></span>
                            <span class="block_4__date__time">17:00</span>
                            <span class="block_4__date__text two">НАЧАЛО</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block_5">
                <div class="container">
                    <span class="block_5__title">ДРЕСС КОД</span>
                    <span class="block_5__pre_title">
                        Мы будем рады видеть милых дам и джентльменов в праздничных нарядах и костюмах, которые поддержат цветовую палитру нашей свадьбы.
                    </span>
                    <div class="block_5__colors">
                        <span data-aos="fade-up" data-aos-duration="1000" style="background-color: #9B9C74;"></span>
                        <span data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100" style="background-color: #6B7337;"></span>
                        <span data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200" style="background-color: #A2855D;"></span>
                        <span data-aos="fade-up" data-aos-duration="1000" data-aos-delay="350" style="background-color: #E2E1DD;"></span>
                    </div>
                    <div class="block_5__images">
                        <img class="block_5__images__left__img" data-aos-duration="1000" src="{{ asset('img/dress-cod-1.webp') }}" data-aos="fade-up" data-aos-delay="300" alt="">
                        <div class="block_5__images__wrap">
                            <img src="{{ asset('img/dress-cod-2.webp') }}" data-aos="fade-up" data-aos-delay="200" alt="">
                            <img style="object-position: bottom;" data-aos-duration="1000" src="{{ asset('img/dress-cod-5.webp') }}" data-aos="fade-up" data-aos-delay="400" alt="">
                        </div>
                        <div class="block_5__images__wrap">
                            <img src="{{ asset('img/dress-cod-3.webp') }}" data-aos-duration="1000" data-aos="fade-up" data-aos-delay="100" alt="">
                            <img style="object-position: top;" data-aos-duration="1000" src="{{ asset('img/dress-cod-6.webp') }}" data-aos="fade-up" data-aos-delay="500" alt="">
                        </div>
                        <div class="block_5__images__wrap">
                            <img src="{{ asset('img/dress-cod-4.webp') }}" data-aos-duration="1000" data-aos="fade-up" alt="">
                            <img src="{{ asset('img/dress-cod-7.webp') }}" data-aos-duration="1000" data-aos="fade-up" data-aos-delay="600" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="block_7">
                <div class="container">
                    <span class="block_7__title">
                        ДЕТАЛИ
                    </span>
                    <div class="block_7__wrap">
                        <div class="block_7__wrap__images">
                            <img src="{{ asset('img/detail-1.webp') }}" alt="">
                            <img src="{{ asset('img/detail-2.webp') }}" alt="">
                        </div>
                        <img src="{{ asset('img/detail-1.webp') }}" data-aos="fade-right" data-aos-duration="1000" alt="">
                        <div class="block_7__wrap__bless">
                            <span>
                                Нам бы хотелось, чтобы в этот день сердца были лёгкими, души - открытыми, настроение - праздничным, а подарки - упакованными в конверты.
                            </span>
                            <div class="block_7__wrap__stars">
                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.5 0C11.5292 5.03554 15.4645 8.97077 20.5 10C15.4645 11.0292 11.5292 14.9645 10.5 20C9.47077 14.9645 5.53554 11.0292 0.5 10C5.53554 8.97077 9.47077 5.03554 10.5 0Z" fill="#6B7337"/>
                                </svg>
                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.5 0C11.5292 5.03554 15.4645 8.97077 20.5 10C15.4645 11.0292 11.5292 14.9645 10.5 20C9.47077 14.9645 5.53554 11.0292 0.5 10C5.53554 8.97077 9.47077 5.03554 10.5 0Z" fill="#6B7337"/>
                                </svg>
                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.5 0C11.5292 5.03554 15.4645 8.97077 20.5 10C15.4645 11.0292 11.5292 14.9645 10.5 20C9.47077 14.9645 5.53554 11.0292 0.5 10C5.53554 8.97077 9.47077 5.03554 10.5 0Z" fill="#6B7337"/>
                                </svg>
                            </div>
                            <span>
                                К сожалению, банкетный зал не предполагает детской зоны и аниматоров, поэтому просим заранее позаботиться о том, с кем останутся наши племянники.
                            </span>
                            <div class="block_7__wrap__stars">
                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.5 0C11.5292 5.03554 15.4645 8.97077 20.5 10C15.4645 11.0292 11.5292 14.9645 10.5 20C9.47077 14.9645 5.53554 11.0292 0.5 10C5.53554 8.97077 9.47077 5.03554 10.5 0Z" fill="#6B7337"/>
                                </svg>
                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.5 0C11.5292 5.03554 15.4645 8.97077 20.5 10C15.4645 11.0292 11.5292 14.9645 10.5 20C9.47077 14.9645 5.53554 11.0292 0.5 10C5.53554 8.97077 9.47077 5.03554 10.5 0Z" fill="#6B7337"/>
                                </svg>
                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.5 0C11.5292 5.03554 15.4645 8.97077 20.5 10C15.4645 11.0292 11.5292 14.9645 10.5 20C9.47077 14.9645 5.53554 11.0292 0.5 10C5.53554 8.97077 9.47077 5.03554 10.5 0Z" fill="#6B7337"/>
                                </svg>
                            </div>
                            <span>
                                Спасибо!
                            </span>
                        </div>
                        <img src="{{ asset('img/detail-2.webp') }}" data-aos="fade-left" data-aos-duration="1000" alt="">
                    </div>
                </div>
            </div>
            <div class="block_6">
                <div class="container">
                    <span class="block_6__title" src="{{ asset('img/dress-cod-1.webp') }}" data-aos="zoom-out-up">
                        АНКЕТА ГОСТЯ
                    </span>
                    <span class="block_6__pre_txt" data-aos="zoom-out-up">
                        Пожалуйста, подтвердите ваше присутствие на нашем празднике, заполнив анкету гостя
                    </span>
                    <span class="block_6__pre_txt_info" data-aos="zoom-out-up">
                        (анкета заполняется на каждого гостя отдельно)
                    </span>
                    <form id="rsvp-form" class="block_6__form">
                        <span class="block_6__form__title">ВАШИ ИМЯ, ФАМИЛИЯ</span>
                        <input name="name" class="block_6__form__input" type="text" placeholder="ВВЕДИТЕ ИМЯ И ФАМИЛИЮ">
                        <span class="block_6__form__error" id="name-error">Введите имя и фамилию</span>
                        <span class="block_6__form__title two">ПОДТВЕРДИТЕ ВАШЕ ПРИСУТСТВИЕ</span>
                        <label class="radio-button first">
                            <input type="radio" name="come" value="true">
                            <span class="radio"></span>
                            ПРИДУ ОБЯЗАТЕЛЬНО!
                        </label>
                        <label class="radio-button">
                            <input type="radio" name="come" value="false">
                            <span class="radio"></span>
                            К СОЖАЛЕНИЮ, НЕ СМОГУ
                        </label>
                        <span class="block_6__form__error" id="come-error">Ввыберите поле</span>
                        <button type="submit" class="block_6__form__button">
                            ОТПРАВИТЬ АНКЕТУ
                        </button>
                        @if ($errors->any())
                            <div class="errors">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </form>
                </div>
            </div>
            <div class="block_8">
                <div class="container">
                    <span class="block_7__title">
                        КОНТАКТЫ МОЛОДОЖЁНОВ ДЛЯ СВЯЗИ
                    </span>
                    <span class="block_8__pre_txt">
                        Если у вас возникли вопросы по организации торжества, вы можете обратиться к нам
                    </span>
                </div>
                <div class="block_8__wrap">
                    <div data-aos="fade-right" data-aos-duration="1000" >
                        <span class="block_8__wrap__txt">
                            Афанасий
                        </span>
                        <a class="block_8__wrap__button" href="https://wa.me/79243689088" target="_blank">Написать в WhatsApp</a>
                    </div>
                    <div data-aos="fade-left" data-aos-duration="1000" >
                        <span class="block_8__wrap__txt">
                            Нюргуяна
                        </span>
                        <a class="block_8__wrap__button" href="https://wa.me/79142368054" target="_blank">Написать в WhatsApp</a>
                    </div>
                </div>
            </div>
            <div class="block_9">
                <div class="container">
                    <span class="block_9__title">
                        ДО ВСТРЕЧИ ЧЕРЕЗ...
                    </span>
                    <div class="block_9__timer">
                        <div class="block_9__timer__item" data-aos="zoom-out-up">
                            <span id="days" class="block_9__timer__item__number">
                                
                            </span>
                            <span class="block_9__timer__item__txt">
                                дней
                            </span>
                        </div>
                        <div class="block_9__timer__item" data-aos="zoom-out-up" data-aos-delay="100">
                            <span id="hours" class="block_9__timer__item__number">
                                
                            </span>
                            <span class="block_9__timer__item__txt">
                                часов
                            </span>
                        </div>
                        <div class="block_9__timer__item" data-aos="zoom-out-up" data-aos-delay="200">
                            <span id="minutes" class="block_9__timer__item__number">
                                
                            </span>
                            <span class="block_9__timer__item__txt">
                                минут
                            </span>
                        </div>
                        <div class="block_9__timer__item" data-aos="zoom-out-up" data-aos-delay="300">
                            <span id="seconds" class="block_9__timer__item__number">
                                
                            </span>
                            <span class="block_9__timer__item__txt">
                                секунд
                            </span>
                        </div>
                    </div>
                    <div>
                        <div class="pagination__slider"></div>
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img class="swiper-slide__filter" src="{{ asset('img/slider-1.webp') }}" alt="">
                                    <img src="{{ asset('img/slider-1.webp') }}" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="swiper-slide__filter" src="{{ asset('img/slider-2.webp') }}" alt="">
                                    <img src="{{ asset('img/slider-2.webp') }}" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="swiper-slide__filter" src="{{ asset('img/slider-3.webp') }}" alt="">
                                    <img src="{{ asset('img/slider-3.webp') }}" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="swiper-slide__filter" src="{{ asset('img/slider-4.webp') }}" alt="">
                                    <img src="{{ asset('img/slider-4.webp') }}" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="swiper-slide__filter" src="{{ asset('img/slider-5.webp') }}" alt="">
                                    <img src="{{ asset('img/slider-5.webp') }}" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="swiper-slide__filter" src="{{ asset('img/slider-6.webp') }}" alt="">
                                    <img src="{{ asset('img/slider-6.webp') }}" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="swiper-slide__filter" src="{{ asset('img/slider-7.webp') }}" alt="">
                                    <img src="{{ asset('img/slider-7.webp') }}" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="swiper-slide__filter" src="{{ asset('img/slider-8.webp') }}" alt="">
                                    <img src="{{ asset('img/slider-8.webp') }}" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="swiper-slide__filter" src="{{ asset('img/slider-9.webp') }}" alt="">
                                    <img src="{{ asset('img/slider-9.webp') }}" alt="">
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                    <span class="block_9__ent__txt">
                        С любовью, Афанасий & Нюргуяна!
                    </span>
                </div>
            </div>
            <div class="hystmodal" id="myModal" aria-hidden="true">
                <div class="hystmodal__wrap">
                    <div class="hystmodal__window" role="dialog" aria-modal="true">
                        <div class="modal">
                            <span class="modal__title">
                                Форма отправлена
                            </span>
                            <span class="modal__txt" id="modal-txt">
                                До встречи на мероприятии! Если будут какие-то изменения, просим сообщить нам🤍
                            </span>
                            <button class="modal__close__btn" data-hystclose>
                                ЗАКРЫТЬ
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hystmodal" id="loader" aria-hidden="true">
                <div class="hystmodal__wrap">
                    <div class="hystmodal__window load" role="dialog" aria-modal="true">
                        <span class="loader"></span>
                    </div>
                </div>
            </div>
        </main>

        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="{{ asset('css/hystmodal.min.js') }}"></script>
        <!-- Initialize Swiper -->
        <script>
            AOS.init({
                once: true
            });

            var swiper = new Swiper(".mySwiper", {
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: ".pagination__slider",
                    clickable: true,
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                loop: true,
            });
        </script>
    </body>
</html>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    const myModal = new HystModal({
        linkAttributeName: "data-hystmodal",
        // настройки (не обязательно), см. API
    });

    let domen = window.location.hostname

    document.getElementById('rsvp-form').addEventListener('submit', function(e) {
        let valid = true

        e.preventDefault();

        const form = this;
        const name = form.elements['name'].value;
        const come = form.elements['come'].value;

        const nameError = document.querySelector('#name-error')
        const comeError = document.querySelector('#come-error')

        if (name == '' || name == null) {
            valid = false
            nameError.className = 'block_6__form__error active'
        } else {
            nameError.className = 'block_6__form__error'
        }

        if (come == '' || name == null) {
            valid = false
            comeError.className = 'block_6__form__error active'
        } else {
            comeError.className = 'block_6__form__error'
        }

        if (valid == false) {
            return
        }

        myModal.open('#loader')
        axios.post(`/api/rsvp-submit`, {
            name: name,
            come: come
        })
        .then(response => {
            console.log('Успешно:', response.data);

            let comeBoolean = response.data.data.come
            myModal.close('#loader')
            myModal.open('#myModal')

            let modalTxt = document.querySelector('#modal-txt')
            if (comeBoolean == true) {
                modalTxt.innerHTML = 'До встречи на мероприятии! Если будут какие-то изменения, просим сообщить нам🤍'
            } else {
                modalTxt.innerHTML = 'Спасибо за ответ! Если будут какие-то изменения, просим сообщить нам🤍'
            }
        })
        .catch(error => {
            if (error.response) {
                console.error('Ошибка сервера:', error.response.data);
                alert('Ошибка: ' + JSON.stringify(error.response.data));
            } else {
                console.error('Ошибка сети:', error.message);
                alert('Ошибка сети: ' + error.message);
            }
        });
    });

    const targetDate = new Date('2025-09-20T16:00:00');

    function updateTimer() {
        const now = new Date();
        const diff = targetDate - now;

        if (diff <= 0) {
            document.getElementById('timer').innerText = 'Время вышло!';
            clearInterval(timerInterval);
            return;
        }

        const days = Math.floor(diff / (1000 * 60 * 60 * 24));
        const hours = Math.floor((diff / (1000 * 60 * 60)) % 24);
        const minutes = Math.floor((diff / (1000 * 60)) % 60);
        const seconds = Math.floor((diff / 1000) % 60);

        document.getElementById('days').innerText = days;
        document.getElementById('hours').innerText = hours;
        document.getElementById('minutes').innerText = minutes;
        document.getElementById('seconds').innerText = seconds;
    }

    updateTimer(); // обновить сразу
    const timerInterval = setInterval(updateTimer, 1000);

    
    const audio = document.getElementById('bgMusic');
    const toggleBtn = document.getElementById('toggleMusicBtn');

    // Автовоспроизведение при загрузке страницы
    window.addEventListener('DOMContentLoaded', () => {
        if (audio.paused) {
            audio.play();
            toggleBtn.checked = false
        } else {
            audio.pause();
            toggleBtn.checked = true
        }
    });

    // Переключение музыки
    toggleBtn.addEventListener('click', () => {
        if (audio.paused) {
            audio.play();
            toggleBtn.checked = false
        } else {
            audio.pause();
            toggleBtn.checked = true
        }
    });
</script>