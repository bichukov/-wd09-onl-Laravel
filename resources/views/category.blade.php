@extends('index')
@section('content')
    <div class="main">
        <div class="flex justify-content-center margin-100-0-40">
            <p class="title">Кресла</p>
        </div>

        <section class="container_main">
            <ul class="breadcrumbs">
                <li>
                    <a href="#">Каталог</a>
                </li>
                <li>
                    <a href="#">Кресла</a>
                </li>
            </ul>
        </section>

        <section class="container_main catalog">
            <div class="catalog__top">
                <form class="catalog__top_search">
                    <input type="text" placeholder="Поиск">
                    <button type="submit"></button>
                </form>
                <div class="itc-select">
                    <button type="button" class="itc-select__toggle" name="car" value="" data-select="toggle" data-index="-1">Порядок: по умолчанию</button>
                    <div class="itc-select__dropdown">
                        <ul class="itc-select__options">
                            <li class="itc-select__option" data-select="option" data-value="val1" data-index="0">Категория</li>
                            <li class="itc-select__option" data-select="option" data-value="val2" data-index="1">Категория</li>
                            <li class="itc-select__option" data-select="option" data-value="val3" data-index="2">Категория</li>
                            <li class="itc-select__option" data-select="option" data-value="val4" data-index="3">Категория</li>
                        </ul>
                    </div>
                </div>
            </div>
            <aside class="catalog__aside">
                <div class="catalog__aside_mob">
                    <a href="#" class="catalog__aside_toggle">
                        <svg viewBox="0 0 19 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.82314 8.61044C7.823 7.72867 7.55095 6.87048 7.04744 6.16342C6.54393 5.45636 5.83582 4.93817 5.02837 4.68588L5.02837 1.59185C5.02837 1.28161 4.91059 0.984074 4.70094 0.7647C4.49129 0.545326 4.20695 0.422085 3.91046 0.422085C3.61397 0.422085 3.32963 0.545326 3.11998 0.7647C2.91033 0.984074 2.79255 1.28161 2.79255 1.59185V4.68588C1.98551 4.93859 1.2779 5.45695 0.774811 6.16397C0.271723 6.87099 0 7.72896 0 8.61044C0 9.49192 0.271723 10.3499 0.774811 11.0569C1.2779 11.7639 1.98551 12.2823 2.79255 12.535L2.79255 22.6476C2.79255 22.9579 2.91033 23.2554 3.11998 23.4748C3.32963 23.6941 3.61397 23.8174 3.91046 23.8174C4.20695 23.8174 4.49129 23.6941 4.70094 23.4748C4.91059 23.2554 5.02837 22.9579 5.02837 22.6476L5.02837 12.535C5.83582 12.2827 6.54393 11.7645 7.04744 11.0575C7.55095 10.3504 7.823 9.49221 7.82314 8.61044ZM13.9716 22.6476C13.9716 22.9579 14.0894 23.2554 14.2991 23.4748C14.5087 23.6941 14.793 23.8174 15.0895 23.8174C15.386 23.8174 15.6704 23.6941 15.88 23.4748C16.0897 23.2554 16.2074 22.9579 16.2074 22.6476V20.1385C17.0145 19.8858 17.7221 19.3674 18.2252 18.6604C18.7283 17.9534 19 17.0954 19 16.2139C19 15.3324 18.7283 14.4745 18.2252 13.7674C17.7221 13.0604 17.0145 12.5421 16.2074 12.2894V1.59185C16.2074 1.28161 16.0897 0.984074 15.88 0.7647C15.6704 0.545326 15.386 0.422085 15.0895 0.422085C14.793 0.422085 14.5087 0.545326 14.2991 0.7647C14.0894 0.984074 13.9716 1.28161 13.9716 1.59185L13.9716 12.2894C13.1646 12.5421 12.457 13.0604 11.9539 13.7674C11.4508 14.4745 11.1791 15.3324 11.1791 16.2139C11.1791 17.0954 11.4508 17.9534 11.9539 18.6604C12.457 19.3674 13.1646 19.8858 13.9716 20.1385V22.6476Z" fill="#787878"/>
                        </svg>
                        <span>Фильтр</span>
                    </a>
                    <a href="#" class="catalog-mob-search"></a>
                </div>
                <div class="catalog__aside-wrap">
                    <div class="filter-sort">
                        <p class="filter__title">Сортировка</p>
                        <div class="filter-wrap">
                            <label class="filter-check">
                                <input type="radio" name="sort">
                                <span class="filter-check__text">Порядок: сперва старые</span>
                            </label>
                            <label class="filter-check">
                                <input type="radio" name="sort">
                                <span class="filter-check__text">Порядок: сперва новые</span>
                            </label>
                            <label class="filter-check">
                                <input type="radio" name="sort">
                                <span class="filter-check__text">Цена: по возрастанию</span>
                            </label>
                            <label class="filter-check">
                                <input type="radio" name="sort">
                                <span class="filter-check__text">Название: А-Я</span>
                            </label>
                            <label class="filter-check">
                                <input type="radio" name="sort">
                                <span class="filter-check__text">Названия: Я-А</span>
                            </label>
                        </div>
                    </div>

                    <div class="filter-price">
                        <p class="filter__title">Цена</p>
                        <div class="filter-wrap">
                            <div class="price-field">
                                <input type="range"  min="0" max="1500" value="0" id="lower">
                                <input type="range" min="0" max="1500" value="1500" id="upper">
                            </div>
                            <div class="price-wrap">
                                <div class="price-wrap-1">
                                    <input id="one">
                                </div>
                                <div class="price-wrap_line">&mdash;</div>
                                <div class="price-wrap-2">
                                    <input id="two">
                                </div>
                            </div>
                            <a href="#" class="range-ok">OK</a>
                        </div>
                    </div>
                    <div class="filter-brand">
                        <p class="filter__title">Бренд</p>
                        <div class="filter-brand__wrapper filter-wrap">
                            <a href="#" class="filter-brand__item _active">Eames</a>
                            <a href="#" class="filter-brand__item">Stool Group</a>
                        </div>
                    </div>
                    <div class="filter-category">
                        <p class="filter__title">Подкатегория</p>
                        <div class="filter-wrap">
                            <label class="filter-check">
                                <input type="checkbox" name="">
                                <span class="filter-check__checkbox"></span>
                                <span class="filter-check__text">Барные стулья</span>
                            </label>
                            <label class="filter-check">
                                <input type="checkbox" name="">
                                <span class="filter-check__checkbox"></span>
                                <span class="filter-check__text">Офисные стулья</span>
                            </label>
                            <label class="filter-check">
                                <input type="checkbox" name="">
                                <span class="filter-check__checkbox"></span>
                                <span class="filter-check__text">Стулья для кухни</span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="search-result">
                    <p class="search-result__text">Найдено: <span class="search-result__num">2</span></p>
                    <div class="search-result__tag-wrap">
                        <div class="search-result__tag">
                            <a href="#" class="search-result__tag_del"></a>
                            <span>Барные стулья</span>
                        </div>
                    </div>
                </div>
            </aside>
            <div class="catalog__main">
               @foreach($products as $product)
@dd($products);
                    <a href="{{ route('products.category', ['product' => $product->id]) }}" class="catalog__prod">
                        <span class="catalog__prod_img">
                            <img src="assets/images/catalog.jpg" alt="">
                        </span>
                        <p class="catalog__prod_title">{{$product->title}}</p>
                        @if($product->is_promotion)
                        <p class="catalog__prod_price">
                            <span class="catalog__prod_price-new">{{$product->price-(($product->price*$product->proc_promotion)/100)}} р./шт</span>
                            &nbsp;
                            <span class="catalog__prod_price-old">{{$product->price}} р./шт</span>
                        </p>
                        @else
                            <p class="catalog__prod_price">
                            <span class="catalog__prod_price-new"> {{ $product->price }} р./шт</span>
                            </p>

                        @endif
                    </a>

                @endforeach
            </div>
        </section>
    </div>
@endsection


