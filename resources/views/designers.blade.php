@extends('index')
@section('content')
    <div class="main">
        <div class="flex justify-content-center margin-100-0-40">
            <p class="title">Сотрудничество с дизайнерами</p>
        </div>

        <section class="flex justify-content-center designers-top">

            <div class="w-100 flex container_main flex-wrap ">
                <div class="w-100 flex tags">
                    <button class="tag">
                        <a href="#cooperation" class="tag-button"  >Приглашаем к сотрудничеству</a>
                    </button>
                    <button class="tag">
                        <a class="tag-button" href="#sentence"  >Наше предложение</a>
                    </button>
                    <button class="tag">
                        <a class="tag-button" href="#Contactus"  >Свяжитесь с нами</a>
                    </button>
                </div>
                <div id="cooperation" class="cooperation w-100 col-4 flex-direction-colum">
                    <p class="about-name">Приглашаем к сотрудничеству</p>
                    <div class="flex-direction-colum">
                        <p class="about-name-name2">Дизайн-студии, дизайнеров интерьеров и архитекторов.</p>
                        <p class="about-name-desc">Мы &mdash; компания Dekoruna. Стильная дизайнерская мебель &mdash; наша стихия. Мы знаем о ней всё. Мы предлагаем широкий выбор дизайнерской мебели. Более подробно с ассортиментом, вы можете ознакомиться в <a href="#">каталоге</a>.</p>
                        <p class="about-name-desc margin-60-0">Мы любим творческих людей и поэтому активно сотрудничаем с дизайнерами интерьеров и архитекторами, как частными, так и с дизайн-студиями. Мы постоянно расширяем эту сферу и приглашаем к сотрудничеству дизайнеров всё чаще. Мы не просто предлагаем сотрудничество дизайнерам, мы становимся с ними одной командой, мы работаем вместе и вместе получаем прибыль. Благодаря всем лучшим сторонам нашей команды и индивидуальному подходу к человеку, с которым мы работаем, мы можем создавать лучшие проекты в своей сфере!</p>

                    </div>

                </div>
                <div class="w-100 col-2" >
                    <img src="assets/images/img_10.png" class="img-fluid">
                </div>
                <div class="w-70">
                    <p class="about-name-desc">Мы приглашаем к сотрудничеству дизайн-студии, дизайнеров интерьеров и архитекторов, готовых активно участвовать и грамотно реализовывать свои проекты. Мы даём эксклюзивные скидки, потому что мы уважаем и с большим теплом принимаем энергичных, талантливых творческих людей, чтобы воплощать их проекты совместными усилиями, потому что считаем, что в команде у нас может получиться намного больше и лучше, чем поодиночке. Поэтому наше постоянное плодотворное сотрудничество с дизайнерами интерьеров и архитекторами расширяет возможности обеих сторон</p>
                </div>
                <div id="sentence" class="w-70">
                    <p  class="designers-text">Наше предложение</p>
                    <p class="about-name-desc">Если вы &mdash; дизайнер интерьера, декоратор или архитектор, то компания Dekoruna предлагает вам программу сотрудничества, благодаря которой ваша работа станет более удобной и плодотворной.<br />Мы предлагаем:<br /><br />1. Если вам необходимо быстро решить вопрос декорирования интерьеров &mdash; в нашем магазине всегда широкий ассортимент мебели, света, посуды, предметов декора для полной комплектации гостиных, спален, ванных, кабинетов, столовых и детских, который позволит решить проблему индивидуального дизайна и легко найти нужное решение даже для самых сложных или нестандартных задач. Мы готовы предложить более 10 000 наименований товаров для декорирования интерьеров, большинство из которых постоянно есть в наличии на нашем складе.<br />2. Привлекательную гибкую систему скидок и бонусов для вас и ваших клиентов, а также уникальные предложения на новинки наших товаров.<br />3. Профессиональную помощь наших специалистов в выборе товаров.<br />4. Самые свежие новости компании, информацию о поступлении всех новых коллекций на наш склад.<br />5. Оперативное предоставление информации об интересующих коллекциях. Вы всегда сможете получить консультацию по ассортименту, наличию коллекций, зарезервировать необходимый вам товар и оформить заказ.<br />6. Обеспечение рекламной продукцией и каталогами как в печатном, так и в электронном виде.<br />7. Регулярные и надежные поставки до дверей клиента во все регионы РФ и страны СНГ.<br />8. Гарантийное и послегарантийное обслуживание.<br /><br />На самом деле, вы просто продолжаете делать свою работу, но выполнять её становится проще и при этом ещё получаете дополнительную прибыль. С нас &mdash; хорошее и выгодное предложение, с вас &mdash; то, что вы делали всегда. Итог &mdash; взаимовыгодные тёплые отношения, привлекательные скидки и многое другое.<br /><br />Делитесь своими достижениями &mdash; мы с удовольствием разместим на нашем сайте иллюстрации ваших проектов, выполненные с использованием наших товаров, с указанием ваших телефонов или ссылкой на ваш сайт.</p>
                </div>
            </div>
        </section>

        <div class="delivery__info container_main">
            <p class="delivery__info_title">Cвяжитесь с нами </p>
            <div class="w-70">
                <p class="about-name-desc">Свяжитесь с нами — просто позвоните по телефонам, указанным ниже или напишите нам на электронную почту — и мы сделаем вам такое предложение, от которого будет трудно отказаться.
                    <br><br>
                    Сотрудничая с нами, вы приобретаете надежного и компетентного партнера!<br>
                    Желаем вам творческих успехов и надеемся на долгое и взаимовыгодное сотрудничество!</p>
            </div>
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

