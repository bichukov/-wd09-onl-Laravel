@extends('index')
@section('content')

        <div class="main">


            <section class="swiper mySwiper">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        @foreach($banners as $banner)
                            <div class="img-fluid-block swiper-slide">
                                <img src="{{$banner->image}}" alt="slider" class="main-img-fluid">
                            </div>
                        @endforeach


                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </section>
            <section class="flex justify-content-center main-slider">
                <div class="w-100 flex flex-direction-colum align-items-center ">
                    <p class="main-name-search margin-100-0-40">Популярные категории</p>
                    <div class="w-100 height-68">
                        <form class="flex height-64 justify-content-center" style="
            position: relative;
        ">
                            <div class="block-inp main-search__inut">
                                <svg role="img" class="t838__search-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 88 88"> <path fill="#b6b6b6" d="M85 31.1c-.5-8.7-4.4-16.6-10.9-22.3C67.6 3 59.3 0 50.6.6c-8.7.5-16.7 4.4-22.5 11-11.2 12.7-10.7 31.7.6 43.9l-5.3 6.1-2.5-2.2-17.8 20 9 8.1 17.8-20.2-2.1-1.8 5.3-6.1c5.8 4.2 12.6 6.3 19.3 6.3 9 0 18-3.7 24.4-10.9 5.9-6.6 8.8-15 8.2-23.7zM72.4 50.8c-9.7 10.9-26.5 11.9-37.6 2.3-10.9-9.8-11.9-26.6-2.3-37.6 4.7-5.4 11.3-8.5 18.4-8.9h1.6c6.5 0 12.7 2.4 17.6 6.8 5.3 4.7 8.5 11.1 8.9 18.2.5 7-1.9 13.8-6.6 19.2z"></path> </svg>
                                <input class="main-search__input" type="text" placeholder="Поиск по каталогу">
                            </div>
                            <button class="main-search__btn">Поиск</button>
                        </form>
                    </div>
                </div>
            </section>
            <section class="main-imgs container_main">
                <div class="main-imgs__col">
                    <div class="main-imgs__wrap wrap1">
                        <img class="main-img" src="{{asset("/images/img_3.png")}}">
                        <p class="main-name-categor">Стулья</p>
                        <button class="main-btn-name-categor">Смотреть все</button>
                    </div>
                </div>
                <div class="main-imgs__col">
                    <div class="main-imgs__wrap wrap2">
                        <img class="main-img" src="{{asset("/images/img_3.png")}}">
                        <p class="main-name-categor">Кресла</p>
                        <button class="main-btn-name-categor">Смотреть все</button>
                    </div>
                    <div class="main-imgs__wrap wrap3">
                        <img class="main-img" src="{{asset("/images/img_3.png")}}">
                        <p class="main-name-categor">Кровати</p>
                        <button class="main-btn-name-categor">Смотреть все</button>
                    </div>
                </div>
                <div class="main-imgs__col">
                    <div class="main-imgs__wrap wrap4">
                        <img class="main-img" src="{{asset("/images/img_3.png")}}">
                        <p class="main-name-categor">Диваны</p>
                        <button class="main-btn-name-categor">Смотреть все</button>
                    </div>
                </div>
            </section>
            <section class="our-mission flex justify-content-center margin-bottom-110 margin-top-175 ">
                <div class="w-100 flex align-items-center container_main align-items-start">

                    <div class="w-100 col-2 flex-direction-colum">
                        <p class="main-name-m">Наша миссия</p>
                        <p class="main-name-m2">Широкий выбор и лучшие цены</p>
                    </div>
                    <div class="w-100 col-2">
                        <p class="main-desc-m">
                            Мы – коллектив компании Dekoruna, которая помогает создать интерьер вашей мечты. Мы команда смелых и амбициозных людей, которые знают и любят свое дело.
                        </p>
                        <p class="main-desc-m">
                            Наши преимущества говорят сами за себя:
                        </p>
                        <p class="main-desc-m">
                            На наших складах – большой запас оригинальных предметов и товаров для интерьерных решений в разных дизайнах, современного света, стильного декора, созданных специально для тех, кто ценит комфорт и кого заботит уют и красота собственного дома.
                        </p>
                        <p class="main-desc-m">
                            Проверенные поставщики из России, Европы и Азиии.
                        </p>
                        <p class="main-desc-m">
                            Дизайнерские проекты «под ключ».
                        </p>
                        <p class="main-desc-m">
                            Офис в Москве и производство в Подмосковье.
                        </p>
                    </div>
                </div>
            </section>
            <section class="flex advantages-sec  margin-bottom-110">
                <div class="w-100 flex align-items-center container_main-advantages justify-content-sb">

                    <div class="advantages w-100  flex-direction-colum">
                        <p class="main-advantages-name">50+</p>
                        <p class="main-advantages-description">Товаров в каталоге на сайте</p>
                    </div>
                    <div class="advantages w-100  flex-direction-colum">
                        <p class="main-advantages-name">1000+</p>
                        <p class="main-advantages-description">Товаров на складе </p>
                    </div>
                    <div class="advantages w-100  flex-direction-colum">
                        <p class="main-advantages-name">100+</p>
                        <p class="main-advantages-description">Готовых дизайнерских решений</p>
                    </div>
                    <div class="advantages w-100  flex-direction-colum">
                        <p class="main-advantages-name">2500+</p>
                        <p class="main-advantages-description">Довольных покупателей</p>
                    </div>

                </div>
            </section>
            <section class="main-contacts">
                <div class="w-100 flex align-items-center container_main contact-colum ">

                    <div class="w-100 col-2 flex-direction-colum">
                        <p class="main-name-we">Мы в Instagram</p>
                        <div class="flex-direction-colum">
                        <p class="main-name-we2">Следите  за нашими новостями и публикациями в Instagram</p>
                        <p class="main-name-we3">@dekoruna2020</p>
                        </div>
                        <button class="main-btn1">Подписаться</button>
                    </div>
                    <div class="w-100 col-2 h-795" >
                        <img src="{{asset("/images/img_5.png")}}" class="img-fluid">
                    </div>
                </div>
            </section>
        </div>
@endsection
