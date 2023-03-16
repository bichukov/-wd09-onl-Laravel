@extends('index')
@section('content')
    <div class="main">



        <section class="contacts-page flex margin-bottom-110 margin-top-210">
            <div class="container_main w-100 flex  ">
                <div class="padding-0-70 col-2 ">
                    <div class="flex">
                        <p class="title-contact">Контакты</p>
                    </div>
                    <div class="delivery__info">
                        <p class="delivery__info_title">Cвяжитесь с нами удобным для вас способом: </p>
                        <p class="text-normal">Ответим на ваши вопросы по телефону: <a class="green-link" href="tel:+79647802164">+7 (964) 780-21-64</a></p>
                        <p class="text-normal">По почте: <a class="green-link" href="mailto:dekoruna2020@gmail.com">dekoruna2020@gmail.com</a></p>
                        <p class="text-normal">В Instagram: @dekoruna2020</p>
                    </div>

                    <div class="col-2 contacts-img mobile">
                    </div>

                    <div class="contact__form">

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
                <div class="col-2 contacts-img">
                </div>
            </div>
        </section>


    </div>
@endsection

