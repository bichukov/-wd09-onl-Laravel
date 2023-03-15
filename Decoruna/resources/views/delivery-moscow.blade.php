@extends('index')
@section('content')
    <div class="main delivery">
        <div class="flex justify-content-center margin-100-0-65">
            <p class="title">Доставка по Москве и МО</p>
        </div>
        <section class="flex justify-content-center ">
            <div class="tag-wrapper w-100 flex padding-0-0-75-0 container_main">
                <button class="tag">
                    <a href="#cooperation" class="tag-button">Сроки доставки</a>
                </button>
                <button class="tag">
                    <a class="tag-button" href="#sentence">Время доставки</a>
                </button>
                <button class="tag">
                    <a class="tag-button" href="#Contactus">Стоимость доставки по Москве и МО до подьезда</a>
                </button>
                <button class="tag">
                    <a class="tag-button" href="#Contactus">Стоимость подьема изделия на этаж</a>
                </button>

            </div>
        </section>

        <section class="flex flex-direction-colum">

            <div class="align-items-baseline flex-direction-colum w-100 flex align-items-center container_main flex-wrap w-55 ">

                <div class="flex w-100 margin-bottom-90 t-decorate-none margin-bottom-90">
                    <a class="href-icon" href="">
                        <span class="icon-text">Подробнее про условия доставки по регионам России</span></a>
                </div>

                <p class="delivery-text ">Сроки доставки</p>
                <p class="delivery-name ">От 3 рабочих дней</p>
                <p class="about-name-desc ">Доставка товара с артикулами "DG" осуществляется со склада и в среднем
                    составляет 5 рабочих дней после подтверждения заказа у менеджера.</p>
                <p class="delivery-name ">14 рабочих дней</p>
                <p class="about-name-desc ">Доставка товаров с другими артикулами осуществляется в течение 14 рабочих дней
                    после подтверждения заказа у менеджера.</p>
                <p class="delivery-name ">От 30 календарных дней</p>
                <p class="about-name-desc ">В случае поставки товара индивидуального изготовления, доставка осуществляется
                    от 30 календарных дней* с момента внесения предоплаты и подписания спецификации</p>
                <p class="delivery-name1 ">Доставка осуществляется с понедельника по субботу с 10:00 до 22:00.
                    Если Вам удобно, чтобы заказ был доставлен в воскресенье, пожалуйста, сообщите об этом нашему менеджеру
                    или в комментариях к заказу.
                    * Срок доставки зависит от особенностей производства и поставки и поэтому может быть разным для разных
                    заказов (ожидание специально выбранной ткани для вашего заказа, поставка товаров из стран Европы и
                    т.д.). В случае индивидуального изготовления, окончательный срок изготовления товара будет указан в
                    вашем договоре.</p>
                </p>
                <p class="about-contacts-name">Время доставки</p>
                <table class="t431__table w-860px">
                    <thead class="t431__thead">
                    <tr>
                        <th class="t431__th t-title" style=""></th>
                        <th class="t431__th t-title">МКАД</th>
                        <th class="t431__th t-title">За МКАД</th>
                        <th class="t431__th t-title">Тариф</th>
                    </tr>
                    </thead>
                    <tbody class="t431__tbody">
                    <tr class="t431__oddrow">
                        <td class="t431__td t-text">В течение дня</td>
                        <td class="t431__td t-text">с 09:00 до 19:00</td>
                        <td class="t431__td"></td>
                        <td class="t431__td"></td>
                    </tr>
                    <tr class="t431__evenrow">
                        <td class="t431__td t-text">Первая половина дня</td>
                        <td class="t431__td t-text">с 09:00 до 15:00</td>
                        <td class="t431__td t-text">не тарифицируется</td>
                        <td class="t431__td t-text">бесплатно</td>
                    </tr>
                    <tr class="t431__oddrow">
                        <td class="t431__td t-text">Середина дня</td>
                        <td class="t431__td t-text">с 10:00 до 17:00</td>
                        <td class="t431__td t-text">не тарифицируется</td>
                        <td class="t431__td t-text">бесплатно</td>
                    </tr>
                    <tr class="t431__evenrow">
                        <td class="t431__td t-text">Вторая половина дня</td>
                        <td class="t431__td t-text">с 14:00 до 20:00</td>
                        <td class="t431__td t-text">не тарифицируется</td>
                        <td class="t431__td t-text">бесплатно</td>
                    </tr>
                    <tr class="t431__oddrow">
                        <td class="t431__td t-text">Вечерняя доставка</td>
                        <td class="t431__td t-text">с 19:00 до 22:00</td>
                        <td class="t431__td t-text">не тарифицируется</td>
                        <td class="t431__td t-text">+500 руб. к стоимости доставки</td>
                    </tr>
                    <tr class="t431__evenrow">
                        <td class="t431__td t-text">Точно ко времени</td>
                        <td class="t431__td t-text">1 час +/- 30 минут</td>
                        <td class="t431__td t-text">не тарифицируется</td>
                        <td class="t431__td t-text">+2000 руб. к стоимости доставки</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="gray-block flex-direction-colum flex ">
                <div class="padding-70">
                    <p class="ticket-note">Примечание</p>

                    <ol class="margin-bottom-90">
                        <li class="about-name-desc">Обращаем ваше внимание, что мы доставляем заказанный товар в интервале времени, а не к определенному часу.</li>
                        <li class="about-name-desc">Водитель свяжется с вами за час до приезда.</li>
                        <li class="about-name-desc"> Доставка к точному времени увеличивает стоимость на 2 000 ₽.</li>
                        <li class="about-name-desc red">После согласования даты доставки временной интервал изменению не подлежит.</li>
                    </ol>
                </div>
            </div>
            <div class="align-items-baseline flex-direction-colum w-100 flex align-items-center container_main flex-wrap w-55 ">
                <p class="about-contacts-name">Стоимость доставки по Москве и МО до подъезда</p>
                <p class="about-name-desc1 pb-20">
                    Стоимость доставки рассчитывается по весу заказа и местоположению:
                </p>
                <table class="t431__table w-860px contacts-desc">
                    <thead class="t431__thead">
                    <tr>
                        <th class="t431__th t-title">Вес заказа</th>
                        <th class="t431__th t-title">МКАД</th>
                        <th class="t431__th t-title">За МКАД - до 30 КМ</th>

                    </tr>
                    </thead>
                    <tbody class="t431__tbody">
                    <tr class="t431__oddrow">
                        <td class="t431__td t-text">до 5 кг</td>
                        <td class="t431__td t-text">500 руб.</td>
                        <td class="t431__td t-text">600 руб.</td>

                    </tr>
                    <tr class="t431__evenrow">
                        <td class="t431__td t-text">от 5.1 кг до 15 кг</td>
                        <td class="t431__td t-text">500 руб.</td>
                        <td class="t431__td t-text">990 руб.</td>

                    </tr>
                    <tr class="t431__oddrow">
                        <td class="t431__td t-text">от 15.1 кг до 50 кг</td>
                        <td class="t431__td t-text">1 100 руб.</td>
                        <td class="t431__td t-text">1 500 руб.</td>

                    </tr>
                    <tr class="t431__evenrow">
                        <td class="t431__td t-text">от 50.1 кг до 100 кг</td>
                        <td class="t431__td t-text">1 500 руб.</td>
                        <td class="t431__td t-text">2 000 руб.</td>

                    </tr>
                    <tr class="t431__oddrow">
                        <td class="t431__td t-text">свыше 100 кг</td>
                        <td class="t431__td t-text">Индивидуальное согласование</td>
                        <td class="t431__td t-text" style="width:15%">Индивидуальное согласование</td>

                    </tr>

                    </tbody>
                </table>
                <p class="about-name-desc tb-text">
                    Пронос груза до подъезда (в случае невозможности разгрузки автомобиля доставки непосредственно возле подъезда):
                </p>
                <table class="t431__table w-860px contacts-desc">
                    <thead class="t431__thead">
                    <tr>
                        <th class="t431__th t-title">Вес груза</th>
                        <th class="t431__th t-title">Стоимость проноса</th>


                    </tr>
                    </thead>
                    <tbody class="t431__tbody">
                    <tr class="t431__oddrow">
                        <td class="t431__td t-text">15-50кг</td>
                        <td class="t431__td t-text">200 руб / за каждые 25 м</td>


                    </tr>
                    <tr class="t431__evenrow">
                        <td class="t431__td t-text">50-100кг</td>
                        <td class="t431__td t-text">300 руб / за каждые 25 м</td>


                    </tr>
                    <tr class="t431__oddrow">
                        <td class="t431__td t-text">От 100кг</td>
                        <td class="t431__td t-text">Ииндивидуально</td>


                    </tr>

                    </tbody>
                </table>

            </div>
            <div class="gray-block flex-direction-colum flex ">
                <div class="padding-70">
                    <p class="ticket-note">Примечание</p>

                    <ol>
                        <li class="about-name-desc">При покупке свыше 50 000 руб, доставка в города Москва, Химки, Красногорск, Одинцово бесплатно</li>
                        <li class="about-name-desc">Стоимость доставки не включает в себя выгрузку и подъем товара на этаж.</li>
                        <li class="about-name-desc"> В случае отказа от товара клиент оплачивает доставку и подъем.</li>
                        <li class="about-name-desc"> При отсутствии покупателя по адресу доставки товар возвращается на склад.</li>
                        <li class="about-name-desc"> Ожидание покупателя по адресу доставки – не более 20 минут. Повторная доставка, произошедшая по вине покупателя, осуществляется платно.
                            При этом стоимость ранее оплаченных услуг по доставке товара не возвращается.</li>
                        <li class="about-name-desc"> Чтобы все клиенты получили свои заказы вовремя время на осмотр товара составляет:</li>
                    </ol>
                    <ul class="pb-60">


                        <li class="about-name-desc">5 минут для 1 единицы товара до 15 кг</li>
                        <li class="about-name-desc"> 10 минут для 1 единицы товара до 50кг</li>
                        <li class="about-name-desc"> 15 минут для 1 единицы товара от 50кг</li>
                    </ul>
                </div>
            </div>
            <div class="container_main flex w-100 t-decorate-none margin-bottom-130">
                <a class="href-icon" href="">
                    <span class="icon-text">Подробнее про условия и стоимость сборки </span></a>
            </div>
            <div class="align-items-baseline flex-direction-colum w-100 flex align-items-center container_main flex-wrap w-55 ">
                <p class="about-contacts-name">Стоимость подьема изделия на этаж</p>
                <table class="t431__table w-860px">
                    <thead class="t431__thead">
                    <tr>
                        <th class="t431__th t-title" style="">Вес </th>
                        <th class="t431__th t-title">0-15кг</th>
                        <th class="t431__th t-title">15-50 кг</th>
                        <th class="t431__th t-title">50-100 кг</th>
                    </tr>
                    </thead>
                    <tbody class="t431__tbody">
                    <tr class="t431__oddrow">
                        <td class="t431__td t-text">Подьем заказа на лифте </td>
                        <td class="t431__td t-text">0 руб</td>
                        <td class="t431__td t-text">500 руб.</td>
                        <td class="t431__td t-text">1000 руб.</td>
                    </tr>
                    <tr class="t431__evenrow">
                        <td class="t431__td t-text">Подьема заказа без лифта ( за этаж) </td>
                        <td class="t431__td t-text">150 руб.</td>
                        <td class="t431__td t-text">500 руб. +200 руб. за каждый этаж</td>
                        <td class="t431__td t-text">1 000 руб. +300 руб. за каждый этаж</td>
                    </tr>

                    </tbody>
                </table>
            </div>
            <div class="gray-block flex-direction-colum flex ">
                <div class="padding-70 margin-bottom-90">
                    <p class="ticket-note">Примечание</p>
                    <p class="gray-block__subtitle">Покупатель должен:</p>
                    <br>
                    <ol><li  class="about-name-desc">Обеспечить беспрепятственный пронос доставленного товара. Ширина дверного проема не менее 80 см;</li>
                        <li class="about-name-desc">Подъем крупногабаритного товара через узкие проходы (коридоры, дверные проемы, лестничные пролеты и т. д.),
                            которые могут причинить механические повреждения доставляемому товару, осуществляется с согласия и под ответственность покупателя;</li>
                        <li class="about-name-desc">Принять меры, обеспечивающие сохранность своего имущества от возможных повреждений на время осуществления доставки товара
                            (застелить полы, накрыть/убрать мебель и другие предметы, расположенные на пути проноса товара и т.п.).</li>
                    </ol>
                    <br><br>
                    <p class="gray-block__subtitle">Продавец обязан:</p>
                    <br>
                    <ol class="about-name-desc">
                        <li class="about-name-desc">При передаче товара покупателю (представителю) сотрудники доставки обязаны обеспечить его осмотр;</li>
                        <li class="about-name-desc">В случае обнаружения каких-либо недостатков, недокомплекта, указать их в документах;</li>
                        <li class="about-name-desc">Сотрудники службы доставки обязаны соблюдать правила техники безопасности.</li>
                    </ol>
                    <br><br>
                </div>
            </div>

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
        </section>



    </div>
@endsection

