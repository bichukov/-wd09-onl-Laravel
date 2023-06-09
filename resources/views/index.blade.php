<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset("/vendor/fancybox/jquery.fancybox.min.css")}}"/>
    <link rel="stylesheet" href="{{asset("/vendor/custom-select/itc-custom-select.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("/vendor/swiper/swiper.min.css")}}"/>
    <link rel="stylesheet" href="{{asset("/css/style.css")}}">
    <title></title>
</head>

<body>
    <main>


        <header>

            <div class="inpt-search">

                <form class="header-search12">
                    <button class="header-search__btn12"></button>
                    <input class="header-search__input12" type="text" placeholder="Поиск товаров">
                    <div class="t985__close-icon t-search-widget__close-icon"> <svg role="presentation" width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M0.754014 27.4806L27.0009 1.32294" stroke="black"></path> <path d="M26.9688 27.5665L0.757956 1.39984" stroke="black"></path> </svg> </div>
                </form>
            </div>
            <div class="header-title">

                <div class="header-menu__nav-list">
                    <div class="flex w-100 justify-content-sb burg">
                        <div class="header-logo-mob">

                        </div>
                        <div class="burger">
                            <input type="checkbox" id="as1">
                            <label for="as1" class="sdsdsd1">&#9587;</label>
                        </div>
                    </div>
                    <div class="dropdown header-maine-menu">
                        <button onclick="myFunction()" class="dropbtn">Каталог</button>
                        <div class="dropdown-content header-maine-menu__nav-list align-items-center">
                            @foreach($items as $item)
                                <div class="header-maine-list__item"><a href="#" class="header-maine-menu-link">{{ $item->name }}</a></div>
                                {{--                        <li><a href="{{ $item->url }}">{{ $item->name }}</a></li>--}}
                            @endforeach


                        </div>
                    </div>
                    <div class="header-nav-list__item"><a href="{{route('promotions')}}" class="{{ request()->routeIs('promotions') ? 'active' : '' }} header-item-link">Акции</a></div>
                    <div class="header-nav-list__item"><a href="{{route('about')}}" class="{{ request()->routeIs('about') ? 'active' : '' }} header-item-link">О нас</a></div>
                    <div class="dropdown header-maine-menu header-nav-list__item">
                        <button onclick="myFunction()" class="dropbtn">Доставка и оплата</button>
                        <div class="dropdown-content header-maine-menu__nav-list align-items-center">
                            <div class="header-maine-list__item"><a href="{{route('delivery-moscow')}}" class="{{ request()->routeIs('delivery-moscow') ? 'active' : '' }} header-maine-menu-link">Доставка по Москва и МО</a></div>
                            <div class="header-maine-list__item"><a href="{{route('delivery-regions')}}" class="{{ request()->routeIs('delivery-regions') ? 'active' : '' }} header-maine-menu-link">Доставка по Регионам РФ</a></div>
                        </div>
                    </div>
                    <div class="header-nav-list__item"><a href="{{route('return')}}" class="{{ request()->routeIs('return') ? 'active' : '' }} header-item-link">Возврат и обмен товара</a></div>
                    <div class="header-nav-list__item"><a href="{{route('designers')}}" class="{{ request()->routeIs('designers') ? 'active' : '' }} header-item-link">Дизайнерам</a></div>
                    <div class="header-nav-list__item"><a href="{{route('contacts')}}" class="{{ request()->routeIs('contacts') ? 'active' : '' }} header-item-link">Контакты</a></div>
                    <button class="mob-button-phone" onClick='location.href="tel:+79647802164"'>Связаться с нами</button>
                    <button class="sdsdsd2 mob-button-search ">Поиск по каталогу</button>

                </div>

            </div>

            <div class="justify-content-center flex header-menu">
                <div class="burger">
                    <input type="checkbox" id="as">
                    <label for="as" class="sdsdsd">&#9776;</label>
                </div>
                <div class="header-contact">
                    <div class="zxc">

                        <div class="header-phone-block">
                            <a class=header-phone href="tel:+79647802164">+7 (964) 780-21-64</a></div>
                    </div>

                    <div class="bl w-100 flex justify-content-sb align-items-end">

                        <div>
                            <input type="button" class="header-button" value="Заказать консультацию">
                        </div>

                        <a  <?php if($_SERVER['REQUEST_URI'] != '/') { ?> href="/"<?php } ?> class="header-logo">  </a>




                        <div>

                            <form class="header-search flex">
                                <input class="header-search__input" type="text" placeholder="Поиск по каталогу">
                                <button class="header-search__btn"><i class="header-fa"></i></button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>



            <div class="header-maine-menu header-maine-menu-hid">
                <div class="header-maine-menu__nav-list align-items-center">
                    @foreach($items as $item)

                        <div class="header-maine-list__item @if ($product->category->id == $item->id) active @endif"><a href="{{route('products.category', $item->id )}}" class="header-maine-menu-link ">{{ $item->name }}</a></div>
                    @endforeach

                </div>
            </div>

            <ul>

            </ul>
        </header>

        @yield('content')

        <footer class="footer flex">
            <div class=" cont flex container_main justify-content-sb">
                <div class="t977__col t977__col_left">
                    <img class="t977__logo t-img loaded" src="https://thumb.tildacdn.com/tild3330-6336-4430-b261-346162386164/-/format/webp/photo.png"
                            data-original="https://static.tildacdn.com/tild3330-6336-4430-b261-346162386164/photo.png" imgfield="img" alt="" role="presentation">
                    <div class="footer-mob-logo"><a href="#" class="footer-maine-menu-link">DEKORUNA</a></div>
                    <div class="t977__text" style=" margin: 30px 0;" field="text">Дизайнерская мебель <br>по выгодным ценам
                    </div>
                    <div class="t-sociallinks__item t-sociallinks__item_instagram"><a href="https://instagram.com/dekoruna2020?igshid=YmMyMTA2M2Y=" target="_blank" rel="nofollow noopener" style="width: 25px; height: 25px;"><svg class="t-sociallinks__svg" width="25px" height="25px" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" clip-rule="evenodd" d="M50 100C77.6142 100 100 77.6142 100 50C100 22.3858 77.6142 0 50 0C22.3858 0 0 22.3858 0 50C0 77.6142 22.3858 100 50 100ZM25 39.3918C25 31.4558 31.4566 25 39.3918 25H60.6082C68.5442 25 75 31.4566 75 39.3918V60.8028C75 68.738 68.5442 75.1946 60.6082 75.1946H39.3918C31.4558 75.1946 25 68.738 25 60.8028V39.3918ZM36.9883 50.0054C36.9883 42.8847 42.8438 37.0922 50.0397 37.0922C57.2356 37.0922 63.0911 42.8847 63.0911 50.0054C63.0911 57.1252 57.2356 62.9177 50.0397 62.9177C42.843 62.9177 36.9883 57.1252 36.9883 50.0054ZM41.7422 50.0054C41.7422 54.5033 45.4641 58.1638 50.0397 58.1638C54.6153 58.1638 58.3372 54.5041 58.3372 50.0054C58.3372 45.5066 54.6145 41.8469 50.0397 41.8469C45.4641 41.8469 41.7422 45.5066 41.7422 50.0054ZM63.3248 39.6355C65.0208 39.6355 66.3956 38.2606 66.3956 36.5646C66.3956 34.8687 65.0208 33.4938 63.3248 33.4938C61.6288 33.4938 60.2539 34.8687 60.2539 36.5646C60.2539 38.2606 61.6288 39.6355 63.3248 39.6355Z" fill="#ffffff"></path></svg></a></div>
                </div>
                <div class="footer-menu__nav-list align-items-center flex-direction-colum ">

                    <div class="footer-menu-list__item"><a class="footer-maine-menu-link">DEKORUNA</a></div>
                    <div class="footer-menu-list__item"><a href="{{route('about')}}" class="{{ request()->routeIs('about') ? 'active' : '' }} footer-menu-link">О нас</a></div>
                    <div class="footer-menu-list__item"><a href="{{route('promotions')}}" class="{{ request()->routeIs('promotions') ? 'active' : '' }} footer-menu-link">Акции</a></div>
                    <div class="dropdown header-maine-menu header-nav-list__item1 footer-menu-list__item">
                        <button onclick="myFunction()" class="dropbtn">Доставка и оплата</button>
                        <div class="dropdown-content header-maine-menu__nav-list align-items-center">
                            <div class="header-maine-list__item"><a href="{{route('delivery-moscow')}}" class="{{ request()->routeIs('delivery-moscow') ? 'active' : '' }} header-maine-menu-link">Доставка по Москва и МО</a></div>
                            <div class="header-maine-list__item"><a href="{{route('delivery-regions')}}" class="{{ request()->routeIs('delivery-regions') ? 'active' : '' }} header-maine-menu-link">Доставка по Регионам РФ</a></div>
                        </div>
                    </div>
                    <div class="footer-menu-list__item"><a href="{{route('return')}}" class="{{ request()->routeIs('return') ? 'active' : '' }} footer-menu-link">Возврат и обмен товара</a></div>
                    <div class="footer-menu-list__item"><a href="{{route('designers')}}" class="{{ request()->routeIs('designers') ? 'active' : '' }} footer-menu-link">Дизайнерам</a></div>
                </div>
                <div class="footer-menu__nav-list align-items-center flex-direction-colum ">
                    <div class="footer-menu-list__item"><a class="footer-maine-menu-link">КАТАЛОГ</a></div>
                    <div class="footer-menu-list__item"><a href="#" class="footer-menu-link">Все товары</a></div>
                    @foreach($items1 as $item2)
                        <div class="footer-menu-list__item"><a href="#" class="footer-menu-link">{{ $item2->name }}</a></div>
                    @endforeach

                </div>
                <div class="footer-menu__nav-list align-items-center flex-direction-colum ">
                    <div class="footer-menu-list__item"><a class="footer-maine-menu-link">КАТАЛОГ</a></div>
                    @foreach($items2 as $item2)
                        <div class="footer-menu-list__item"><a href="#" class="footer-menu-link">{{ $item2->name }}</a></div>
                    @endforeach

                </div>
                <div class="footer-menu__nav-list align-items-center flex-direction-colum ">
                    <div class="footer-menu-list__item"><a class="footer-maine-menu-link">КОНТАКТЫ</a></div>
                    <div class="footer-menu-list__item">
                        <a class=footer-menu-link href="tel:+79647802164">+7 (964) 780-21-64</a></div>

                    <div class="footer-menu-list__item"><a class="footer-menu-link">dekoruna2020gmail.com</a></div>
                    <div class="footer-menu-list__item"><a href="#" class="footer-menu-link">Instagram</a></div>

                </div>
            </div>
        </footer>



    </main>

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="{{asset("/vendor/custom-select/itc-custom-select.js")}}"></script>
    <script src="{{asset("/vendor/fancybox/jquery.fancybox.min.js")}}"></script>
    <script src="{{asset("/vendor/swiper/swiper.min.js")}}"></script>
    <script src="{{asset("/js/app.js")}}"></script>


</body>
</html>
