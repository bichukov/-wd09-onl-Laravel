@extends('index')
@section('content')
    <div class="main">

        <section class="product container_main">
            <div class="product__slider">
                <div class="swiper-container swiperMain">
                    <div class="swiper-wrapper">
                        <a data-fancybox="gallery" href="assets/images/prod.jpg" class="swiper-slide">
                            <img src="assets/images/prod.jpg">
                        </a>
                        <a data-fancybox="gallery" href="assets/images/prod.jpg" class="swiper-slide">
                            <img src="assets/images/prod.jpg">
                        </a>
                        <a data-fancybox="gallery" href="assets/images/prod.jpg" class="swiper-slide">
                            <img src="assets/images/prod.jpg">
                        </a>
                        <a data-fancybox="gallery" href="assets/images/prod.jpg" class="swiper-slide">
                            <img src="assets/images/prod.jpg">
                        </a>
                        <a data-fancybox="gallery" href="assets/images/prod.jpg" class="swiper-slide">
                            <img src="assets/images/prod.jpg">
                        </a>
                        <a data-fancybox="gallery" href="assets/images/prod.jpg" class="swiper-slide">
                            <img src="assets/images/prod.jpg">
                        </a>
                        <a data-fancybox="gallery" href="assets/images/prod.jpg" class="swiper-slide">
                            <img src="assets/images/prod.jpg">
                        </a>
                        <a data-fancybox="gallery" href="assets/images/prod.jpg" class="swiper-slide">
                            <img src="assets/images/prod.jpg">
                        </a>
                    </div>
                </div>
                <div class="mini-gallery">
                    <div class="swiper-container swiperNav">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src="assets/images/prod.jpg"></div>
                            <div class="swiper-slide"><img src="assets/images/prod.jpg"></div>
                            <div class="swiper-slide"><img src="assets/images/prod.jpg"></div>
                            <div class="swiper-slide"><img src="assets/images/prod.jpg"></div>
                            <div class="swiper-slide"><img src="assets/images/prod.jpg"></div>
                            <div class="swiper-slide"><img src="assets/images/prod.jpg"></div>
                            <div class="swiper-slide"><img src="assets/images/prod.jpg"></div>
                            <div class="swiper-slide"><img src="assets/images/prod.jpg"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__main">
                <p class="product__title">
                    Кресло с мягкими подлокотниками мятное с деревянными ножками "Манго"
                </p>
                <p class="product__code">Артикул: 00-3946319</p>
                <p class="product__price">
                        <span class="product__price_current">
                            22 954
                        </span>
                    <span> р./шт</span>
                    <span class="product__price_old">
                            40 990
                        </span>
                    <span> р./шт</span>
                </p>
                <a href="#" class="product__add-to-cart">В корзину</a>
                <p class="product__text">
                    Кресло Манго с деревянными ножками - широко расставленные ножки из массива бука и практичный металлический каркас обеспечивают надежность и устойчивость конструкции. Удобная мягкая спинка, широкое сиденье. Обивка из мягкого велюра обеспечивает комфорт и уют.
                </p>
                <p class="product__text">
                    Общие условия хранения и эксплуатации:
                </p>
                <ul class="product__list">
                    <li>
                        - Мебель должна храниться и использоваться в сухих, проветриваемых помещениях (температура воздуха от +5°C до +25°C, влажность воздуха 45-70%).
                    </li>
                    <li>
                        - При изменении местоположения столов рекомендуется не толкать их, а аккуратно переносить.
                    </li>
                    <li>
                        - Не рекомендуется вставать ногами на столы, полностью облокачиваться.
                    </li>
                    <li>
                        - Не применяйте абразивные бытовые материалы, а также реактивы, растворители, ацетон.
                    </li>
                    <li>
                        - Беречь от попадания прямых солнечных лучей и не ставить рядом с отопительными приборами, также не допускать попадания воды на поверхность мебели.
                    </li>
                    <li>
                        - Рекомендуется после первоначальной сборки и эксплуатации изделия около недели произвести перетяжку всех резьбовых соединений.
                    </li>
                </ul>
            </div>
        </section>

        <section class="product-description container_main">
            <div class="product-description__title">
                <a href="#" class="product-description__title_btn _active" data-attr="description">Описание</a>
                <a href="#" class="product-description__title_btn" data-attr="characteristic">Характеристики</a>
                <span class="line"></span>
            </div>
            <div class="product-description__block">
                <div class="product-description__el description _active">
                    <p class="product__text">
                        Кресло Манго с деревянными ножками - широко расставленные ножки из массива бука и практичный металлический каркас обеспечивают надежность и устойчивость конструкции. Удобная мягкая спинка, широкое сиденье. Обивка из мягкого велюра обеспечивает комфорт и уют.
                    </p>
                    <p class="product__text">
                        Общие условия хранения и эксплуатации:
                    </p>
                    <ul class="product__list">
                        <li>
                            - Мебель должна храниться и использоваться в сухих, проветриваемых помещениях (температура воздуха от +5°C до +25°C, влажность воздуха 45-70%).
                        </li>
                        <li>
                            - При изменении местоположения столов рекомендуется не толкать их, а аккуратно переносить.
                        </li>
                        <li>
                            - Не рекомендуется вставать ногами на столы, полностью облокачиваться.
                        </li>
                        <li>
                            - Не применяйте абразивные бытовые материалы, а также реактивы, растворители, ацетон.
                        </li>
                        <li>
                            - Беречь от попадания прямых солнечных лучей и не ставить рядом с отопительными приборами, также не допускать попадания воды на поверхность мебели.
                        </li>
                        <li>
                            - Рекомендуется после первоначальной сборки и эксплуатации изделия около недели произвести перетяжку всех резьбовых соединений.
                        </li>
                    </ul>
                </div>
                <div class="product-description__el characteristic">

                    <ul class="product__list">
                        <li>
                            - Мебель должна храниться и использоваться в сухих, проветриваемых помещениях (температура воздуха от +5°C до +25°C, влажность воздуха 45-70%).
                        </li>
                        <li>
                            - При изменении местоположения столов рекомендуется не толкать их, а аккуратно переносить.
                        </li>
                        <li>
                            - Не рекомендуется вставать ногами на столы, полностью облокачиваться.
                        </li>
                        <li>
                            - Не применяйте абразивные бытовые материалы, а также реактивы, растворители, ацетон.
                        </li>
                        <li>
                            - Беречь от попадания прямых солнечных лучей и не ставить рядом с отопительными приборами, также не допускать попадания воды на поверхность мебели.
                        </li>
                        <li>
                            - Рекомендуется после первоначальной сборки и эксплуатации изделия около недели произвести перетяжку всех резьбовых соединений.
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="product-more container_main">
            <p class="product-more__title">Дополнительно</p>

            <div class="product-more__block">
                <div class="product-more__el">
                    <a href="#" class="product-more__trigger">Доставка</a>
                    <div class="product-more__dropdown">
                        <p class="product__text">
                            Кресло Манго с деревянными ножками - широко расставленные ножки из массива бука и практичный металлический каркас обеспечивают надежность и устойчивость конструкции. Удобная мягкая спинка, широкое сиденье. Обивка из мягкого велюра обеспечивает комфорт и уют.
                        </p>
                        <p class="product__text">
                            Общие условия хранения и эксплуатации:
                        </p>
                        <ul class="product__list">
                            <li>
                                - Мебель должна храниться и использоваться в сухих, проветриваемых помещениях (температура воздуха от +5°C до +25°C, влажность воздуха 45-70%).
                            </li>
                            <li>
                                - При изменении местоположения столов рекомендуется не толкать их, а аккуратно переносить.
                            </li>
                            <li>
                                - Не рекомендуется вставать ногами на столы, полностью облокачиваться.
                            </li>
                            <li>
                                - Не применяйте абразивные бытовые материалы, а также реактивы, растворители, ацетон.
                            </li>
                            <li>
                                - Беречь от попадания прямых солнечных лучей и не ставить рядом с отопительными приборами, также не допускать попадания воды на поверхность мебели.
                            </li>
                            <li>
                                - Рекомендуется после первоначальной сборки и эксплуатации изделия около недели произвести перетяжку всех резьбовых соединений.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="product-more__el">
                    <a href="#" class="product-more__trigger">Гарантия</a>
                    <div class="product-more__dropdown">
                        <p class="product__text">
                            Кресло Манго с деревянными ножками - широко расставленные ножки из массива бука и практичный металлический каркас обеспечивают надежность и устойчивость конструкции. Удобная мягкая спинка, широкое сиденье. Обивка из мягкого велюра обеспечивает комфорт и уют.
                        </p>
                        <p class="product__text">
                            Общие условия хранения и эксплуатации:
                        </p>
                        <ul class="product__list">
                            <li>
                                - Мебель должна храниться и использоваться в сухих, проветриваемых помещениях (температура воздуха от +5°C до +25°C, влажность воздуха 45-70%).
                            </li>
                            <li>
                                - При изменении местоположения столов рекомендуется не толкать их, а аккуратно переносить.
                            </li>
                            <li>
                                - Не рекомендуется вставать ногами на столы, полностью облокачиваться.
                            </li>
                            <li>
                                - Не применяйте абразивные бытовые материалы, а также реактивы, растворители, ацетон.
                            </li>
                            <li>
                                - Беречь от попадания прямых солнечных лучей и не ставить рядом с отопительными приборами, также не допускать попадания воды на поверхность мебели.
                            </li>
                            <li>
                                - Рекомендуется после первоначальной сборки и эксплуатации изделия около недели произвести перетяжку всех резьбовых соединений.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="product-more__el">
                    <a href="#" class="product-more__trigger">Возврат,обмен</a>
                    <div class="product-more__dropdown">
                        <p class="product__text">
                            Кресло Манго с деревянными ножками - широко расставленные ножки из массива бука и практичный металлический каркас обеспечивают надежность и устойчивость конструкции. Удобная мягкая спинка, широкое сиденье. Обивка из мягкого велюра обеспечивает комфорт и уют.
                        </p>
                        <p class="product__text">
                            Общие условия хранения и эксплуатации:
                        </p>
                        <ul class="product__list">
                            <li>
                                - Мебель должна храниться и использоваться в сухих, проветриваемых помещениях (температура воздуха от +5°C до +25°C, влажность воздуха 45-70%).
                            </li>
                            <li>
                                - При изменении местоположения столов рекомендуется не толкать их, а аккуратно переносить.
                            </li>
                            <li>
                                - Не рекомендуется вставать ногами на столы, полностью облокачиваться.
                            </li>
                            <li>
                                - Не применяйте абразивные бытовые материалы, а также реактивы, растворители, ацетон.
                            </li>
                            <li>
                                - Беречь от попадания прямых солнечных лучей и не ставить рядом с отопительными приборами, также не допускать попадания воды на поверхность мебели.
                            </li>
                            <li>
                                - Рекомендуется после первоначальной сборки и эксплуатации изделия около недели произвести перетяжку всех резьбовых соединений.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

