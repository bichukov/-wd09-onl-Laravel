@extends('index')
@section('content')
        <div class="main">
            <div class="flex justify-content-center margin-100-0">
                <p class="title">О компании Dekoruna</p>
            </div>
            <section class="about-top flex justify-content-center margin-bottom-110">
                <div class="w-100 flex align-items-center container_main ">

                    <div class="w-100 col-2 flex-direction-colum">
                        <p class="about-name">Dekoruna</p>
                        <div class="flex-direction-colum">
                            <p class="about-name-name2">Дизайнерская мебель по лучшим ценам</p>
                            <p class="about-name-desc">
                                Мы – коллектив компании Dekoruna, которая помогает создать интерьер вашей мечты. Мы команда смелых и амбициозных людей, которые знают и любят свое дело.
                                <br><br>
                                Наши преимущества говорят сами за себя:
                                <br><br>
                                На наших складах – большой запас оригинальных предметов и товаров для интерьерных решений в разных дизайнах, современного света, стильного декора, созданных специально для тех, кто ценит комфорт и кого заботит уют и красота собственного дома.
                                <br><br>
                                Проверенные поставщики из России, Европы и Азиии.
                                <br>
                                Дизайнерские проекты «под ключ».<br>
                                Офис в Москве и производство в Подмосковье.<br>
                            </p>
                        </div>

                    </div>
                    <div class="w-100 col-2 h-700" >
                        <img src="assets/images/img_6.png" class="about-img-fluid">
                    </div>
                </div>
            </section>
            <section class="flex margin-bottom-190">
                <div class="w-100 flex align-items-center container_main-advantages justify-content-sb">

                    <div class="w-100  flex-direction-colum">
                        <p class="main-advantages-name">50+</p>
                        <p class="main-advantages-description">Товаров в каталоге на сайте</p>
                    </div>
                    <div class="w-100  flex-direction-colum">
                        <p class="main-advantages-name">1000+</p>
                        <p class="main-advantages-description">Товаров на складе </p>
                    </div>
                    <div class="w-100  flex-direction-colum">
                        <p class="main-advantages-name">100+</p>
                        <p class="main-advantages-description">Готовых дизайнерских решений</p>
                    </div>
                    <div class="w-100  flex-direction-colum">
                        <p class="main-advantages-name">2500+</p>
                        <p class="main-advantages-description">Довольных покупателей</p>
                    </div>

                </div>
            </section>
            <section class="about-imgs flex justify-content-center margin-bottom-160">
            <div class="container_main flex flex-wrap justify-content-center">
                <div class="about-box1 col-3 flex-1-2">
                    <img class="about-box-img" src="assets/images/img_7.png">
                </div>
                <div class="flex-direction-colum col-3 flex-1-2">
                <div class="about-box2">
                    <img class="about-box-img1" src="assets/images/img_8.png">
                </div>
                <div class="about-box2">
                    <img class="about-box-img1" src="assets/images/img_8.png">
                </div>
                </div>
            </div>
            </section>


            <div class="delivery__info container_main">
                <p class="delivery__info_title">Cвяжитесь с нами удобным для вас способом: </p>
                <p class="text-normal">Ответим на ваши вопросы по телефону: <a class="green-link" href="tel:+79647802164">+7 (964) 780-21-64</a></p>
                <p class="text-normal">По почте: <a class="green-link" href="mailto:dekoruna2020@gmail.com">dekoruna2020@gmail.com</a></p>
                <p class="text-normal">В Instagram: @dekoruna2020</p>
            </div>

            <div class="container_main contact__form">

                <p class="about-contacts-name">Остались вопросы?</p>
                <p class="about-contacts-name-title">Заполните заявку, и мы свяжемся с вами</p>
                <form action="" method="post" class="flex flex-direction-colum position-relative">
                    <input type="text" name="name" placeholder="Ваше Имя*">
                    <p class="about-contacts-label">Телефон*</p>
                    <input type="text" name="name" placeholder="+7 (999) 999-9999">
                    <button class="main-btn1" type="submit">Отправить</button>
                    <p class="agree-text"> Нажимая кнопку «Отправить», вы соглашаетесь с условиями обработки данных</p>

                </form>

            </div>


        </div>
@endsection
