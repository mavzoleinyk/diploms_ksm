<?php get_header()  ?>

<style>
	.buttonup {
width:88px; 
height:118px;
position:fixed;
bottom:20px;
right:50px;
}

.asat__icon {

    padding-right: 65px;
}
	
.woocommerce.columns-3 {
    width: 100%;
    /* display: flex; */
}
	.woocommerce ul.products {
		display: flex!important;
	}
.products.columns-3 {
    display: flex;
    width: 100%;
    justify-content: space-between;
}
	.woocommerce img, .woocommerce-page img {
    height: auto;
    max-width: 44%;
}

.acor-container {
    margin: 20px 0;
}
.acor-container .acor-body {
    width: calc(100% - 40px);
    margin: 0 auto;
    height: 0;
    color: rgba(0, 0, 0, 0);
    background-color: #BFE2FF;
    line-height: 18px;
    padding: 0 30px;
    box-sizing: border-box;
    transition: color 0.5s, padding 0.5s;
    overflow: hidden;
    font-family: Verdana, sans-serif; 
    font-size: 16px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.2), 0 10px 16px rgba(0,0,0,0.2);
}
.acor-container .acor-body p {
    margin: 0 0 10px;
}
.acor-container label {
    cursor: pointer;
    background-color: #337AB7;
    display: block;
    padding: 15px 20px;
    width: 100%;
    color: #BFE2FF;
    font-weight: 300;
    box-sizing: border-box;
    z-index: 100;
    font-family: Verdana, sans-serif;   
    font-size: 18px;
    margin: 0 0 5px;
    transition: color .35s;
}
.acor-container label:hover {
    color: #FFF;
}
.acor-container input{
    display: none;
}
.acor-container label:before {
    content: '\276F';
    float: right;
}
.acor-container input:checked + label {
    background-color: #285f8f;
    color: #FFF;
    box-shadow: 0 8px 26px rgba(0,0,0,0.4), 0 28px 30px rgba(0,0,0,0.3);
}
.acor-container input:checked + label:before {
    transition: transform .35s;
    transform: rotate(90deg);
}
.acor-container input:checked + label + .acor-body {
    height: auto;
    margin-top: -5px;
    color: #000;
    padding: 20px 30px 10px;
}
	
</style>
        <div class="container">
            <div class="intro__item">
                <div class="intro__icon">
                    <div class="intro__subtitle">
                        <div class="intro__title">Документы об образовании для всех</div>

                        <li class="intro__tab intro__list" >Наши дипломы подходят:</li>
                        <li class="intro__tab" >Для трудоустройства;</li>
                        <li class="intro__tab" >Для сохранения работы;</li>
                        <li class="intro__tab" >Для повышения в должности;</li>
                        <li class="intro__tab" >Для поступления в ВУЗы / техникумы;</li>
                        <li class="intro__tab" >Для решения прочих проблем;</li>
						<div style="margin-top:30px;">
							<a class="header__btn" style="background: #EC892D;color:#fff; margin:0!important;" href="/shop/">Каталог документов</a>
						</div>
                    </div>
                    <div class="intro__img"></div>
                </div>

                <div class="intro__group">
                    <div class="ingroup__icon">
                        <img class="ingroup__img" src="/wp-content/uploads/2022/08/vector__ingroup1.png" alt="">
                        <div class="ingroup__text">Оригинальные бланки ГОЗНАК</div>
                    </div>

                    <div class="ingroup__icon">
                        <img class="ingroup__img" src="/wp-content/uploads/2022/08/vector__ingroup2.png" alt="">
                        <div class="ingroup__text">Полное отсутствие предоплаты</div>
                    </div>

                    <div class="ingroup__icon">
                        <img class="ingroup__img" src="/wp-content/uploads/2022/08/vector__ingroup3.png" alt="">
                        <div class="ingroup__text">Бесплатная курьерская доставка</div>
                    </div>

                    <div class="ingroup__icon">
                        <img class="ingroup__img" src="/wp-content/uploads/2022/08/vector__ingroup4.png" alt="">
                        <div class="ingroup__text">Любой регион РФ</div>
                    </div>

                    <div class="ingroup__icon">
                        <img class="ingroup__img" src="/wp-content/uploads/2022/08/vector__ingroup5.png" alt="">
                        <div class="ingroup__text">Срок изготовления от 1 дня</div>
                    </div>

                </div>
            </div>
        </div>
    </div>
             
    <div class="calcul">
        
        <div class="container">
            <div id="calculate" class="calcul__title">Калькулятор стоимости</div>
            <div class="calcul__inner">
            <?php echo do_shortcode( '[contact-form-7 id="6799" title="Калькулятор"]' );?>
            <!--     <div class="calcul__icon">
                    <div class="calcul__left">

                        <div class="calcul__subtitle ">Категория документа</div>
                        <div class="calcul__form">
                            <div class="calcul__formtext">Выберите</div>    
                            <div class="calcul__vector"></div>         
                        </div>

                        <div class="calcul__subtitle ">Наименование</div>
                        <div class="calcul__form">
                            <div class="calcul__formtext">Выберите</div>
                            <div class="calcul__vector"></div>
                        </div>

                        <div class="calcul__subtitle ">Год выдачи</div>
                        <div class="calcul__form calcul__bottom">
                            <div class="calcul__formtext">Выберите</div>
                            <div class="calcul__vector"></div>
                        </div>

                        <div class="calcul__button">
                            <a href="#" class="calcul__btn">Рассчитать</a>
                        </div>
                    </div>

                    <div class="calcul__right">
                        <div class="calcul__rightdis">
                            <div class="calcul__formr">
                                <div class="calcul__block">

                                    <div class="calcul__subtitle ">Срок изготовления</div>
                                    <div class="calcul__form calcul__smoll">
                                        <div class="calcul__formtext">1-2 дня</div>
                                        <div class="calcul__vector"></div>
                                    </div>

                                </div>

                                <div class="calcul__block">

                                    <div class="calcul__subtitle ">Доставка</div>
                                    <div class="calcul__form calcul__smoll">
                                        <div class="calcul__formtext">Россия</div>
                                        <div class="calcul__vector"></div>
                                    </div>

                                </div>                                                        
                            </div>
                            <div class="calcul__input">
                                <div class="calcul__subtitle ">Город</div>
                                <input class="calcu__inputbac" type="text">
                            </div>
                        </div>
                    </div>--> 

                   <!-- <div class="pok">
                        <div class="pok__icon">
                            <div class="pok__align">
                                <div class="pok__titleblock">
                                    <div class="pok__title">Диплом колледжа</div>
                                    <span class="pok__span" >16000 руб</span>
                                </div>

                                <div class="pok__width">
                                    <div class="pok__table">

                                        <div class="pok__tabletex">
                                            <p>Год выдачи: </p>
                                            <span>2004-2008</span>
                                        </div>

                                        <div class="pok__tabletex">
                                            <p>Срок изготовления: </p>
                                            <span>1-2 дня</span>
                                        </div>

                                        <div class="pok__tabletex">
                                            <p>Доставка:: </p>
                                            <span>Россия</span>
                                        </div>

                                        <div class="pok__tabletex">
                                            <p>Город: </p>
                                            <span></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="pok__button">
                                    <a href="#" class="pok__btn">Оформить заказ</a>
                                </div>
                            </div>

                        </div>
                    </div>-->
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="section__title">Как мы работаем</div>
            <div class="section__inner">
                <div class="section__icon">
                    <div class="section__text">1. Выбираете нужный Вам документ. Звоните или оставляете заявку на сайте.</div>
                </div>
                <div class="section__icon">
                    <div class="section__text">2. Уточняем детали. Изготавливаем макет документа и предоставляем Вам для проверки.</div>
                </div>
                <div class="section__icon">
                    <div class="section__text">3. Подтверждаете изготовление документа. Согласовываете дату и время доставки.</div>
                </div>
                <div class="section__icon">
                    <div class="section__text">4. Встречаетесь с курьером, проверяете качество продукции. Производите оплату.</div>
                </div>
            </div>
        </div>
    </div>

    <div class="atec">
        <div class="container">
            <div class="ates__title">Популярные</div>
            <div class="atec__subtitle">дипломы, аттестаты, справки</div>

            <div class="atec__inner">
				
				<?php  echo do_shortcode( '[products limit="4"]' );
				 ?>
            
                
            </div>
            
        </div>
        <div class=" button__center">
            <a href="/shop/" class="pok__btn">В каталог</a>
        </div>
    </div>

    <div class="dip">
        <div class="container">
            <div class="dip__title">Дипломы по специальности</div>
            <div class="dip__inner">
                <div class="dip__images">
                    <a href="/vysshee-obrazovanie-diplom-povara/"><img src="/wp-content/uploads/2022/08/dip1.png" alt="" class="dip__img"></a>
					<a href="/vysshee-obrazovanie-diplom-povara/"><div class="dip__text">Повар</div></a>
                </div>

                <div class="dip__images">
					<a href="/diplom-yurista/"><img src="/wp-content/uploads/2022/08/dip2.png" alt="" class="dip__img"></a>
					<a href="/diplom-yurista/"><div class="dip__text">Юрист</div></a>
                </div>

                <div class="dip__images">
					<a href="/diplom-elektrika/"><img src="/wp-content/uploads/2022/08/dip3.png" alt="" class="dip__img"></a>
					<a href="/diplom-elektrika/"><div class="dip__text">Электрик</div></a>
                </div>

                <div class="dip__images">
					<a href="/diplom-ekonomista-v-msk/"><img src="/wp-content/uploads/2022/08/dip4.png" alt="" class="dip__img"></a>
					<a href="/diplom-ekonomista-v-msk/"><div class="dip__text">Экономист</div></a>
                </div>

                <div class="dip__images">
					<a href="/diplom-vizazhista/"><img src="/wp-content/uploads/2022/08/dip5.png" alt="" class="dip__img"></a>
					<a href="/diplom-vizazhista/"><div class="dip__text">Визажист</div></a>
                </div>
            </div>
            <div class=" button__center">
                <a href="/diplomy-po-speczialnosti/" class="pok__btn">Показать все специальности</a>
            </div>
        </div>
    </div>

    <div class="otzyv">
        <div class="container">
            <div class="otzyv__title">Отзывы наших клиентов</div>
			<?php echo do_shortcode( '[rt-testimonial id="9614" title="Testimonials"]' ) ?>

            <div class="star__sss" >
                <img src="images/star sss.png" alt="">
                <img src="images/star__sssser (1).png" alt="">
                <img src="images/star__sssser (1).png" alt="">
            </div>
        </div>
    </div>

    <div class="what">
        <div class="cotainer">
            <div class="otzyv__title">Часто задаваемые вопросы</div>
              <div id="accordion" class="accordion" style="width: 100%; max-width: 670px; margin: 0 auto 115px;">
				<div class="accordion__item">
				  <div class="accordion__header">
					Проверяют ли диплом при устройстве на работу работодатели?
				  </div>
				  <div class="accordion__body">
					<div class="accordion__content">
						Для того, чтобы точно установить, обучались ли вы в институте, 
						руководителю следует сделать письменный запрос в учреждение. 
						Чаще всего такие вопросы отпадают сами собой и игнорируются, 
						поскольку в Ваших знаниях не возникает сомнений. Поэтому, если Вы ценный сотрудник, 
						то не стоит беспокоиться относительно того проверяют ли диплом при устройстве на работу.
					</div>
				  </div>
				</div>
				<div class="accordion__item">
				  <div class="accordion__header">
					Смогу ли я выбрать специальность, учебное заведение и предпочитаемые оценки? 
					Можно ли исправить оценки в дипломе?
				  </div>
				  <div class="accordion__body">
					<div class="accordion__content">
						Для ответа на вопрос можно ли исправить оценки в дипломе важно понимать следующее. 
						При оформлении заявки в предлагаемой форме для заполнения Вы можете указать желаемые оценки, 
						специальность и название института или университета.
					</div>
				  </div>
				</div>
				<div class="accordion__item">
				  <div class="accordion__header">
					Возможно ли изготовление дипломов государственного образца?
				  </div>
				  <div class="accordion__body">
					<div class="accordion__content">
						Для наших специалистов изготовление дипломов государственного образца не является проблемой. 
						Для изготовления понадобится просто предоставление скан копии желаемого документа.
					</div>
				  </div>
				</div>
				<div class="accordion__item">
					<div class="accordion__header">
						Если в Вашей компании купить диплом, гарантии каких видов Вы предоставляете по вопросам оплаты и доставки?
					</div>
					<div class="accordion__body">
					  <div class="accordion__content">
						Если Вы решили у нас купить диплом, гарантии следующего вида будут предоставлены. 
						Мы наработали достаточную информационно — техническую базу и с удовольствием используем её для наших заказчиков, к тому же работаем без предоплаты, то есть Вы оплачиваете только по факту получения документа. По поводу доставки мы индивидуально 
						подходим к пожеланиям клиентов и стараемся найти решение даже в нестандартных вопросах.
					  </div>
					</div>
				  </div>
				  <div class="accordion__item">
					<div class="accordion__header">
						Какое время придется потратить на ожидание получения документа, если купить диплом с доставкой?
					</div>
					<div class="accordion__body">
					  <div class="accordion__content">
						Печать документа занимает примерно 2 дня, а в остальном все зависит от доставки. Естественно, 
						что чем дальше Вы находитесь, тем дольше будет доставка. Если купить диплом с доставкой, 
						то мы гарантируем доставку документа в максимально короткие сроки.
					  </div>
					</div>
				  </div>
				  <div class="accordion__item">
					<div class="accordion__header">
						Прикладывается ли вкладыш с оценками к диплому?
					</div>
					<div class="accordion__body">
					  <div class="accordion__content">
						Вкладыш с оценками к диплому прикладывается вместе с основным документом, так как это неотъемлемая часть подлинного документа.
					  </div>
					</div>
				  </div>
				  <div class="accordion__item">
					<div class="accordion__header">
						Сколько стоит заказать диплом на Вашем сайте?
					</div>
					<div class="accordion__body">
					  <div class="accordion__content">
						Вы можете узнать ответ на вопрос сколько стоит заказать диплом, 
						оставив заявку на нашем сайте. Наши менеджеры оперативно свяжутся с Вами.
					  </div>
					</div>
				  </div>
			  </div>
        </div>
    </div>

    <div class="hed">
        <div class="container">
            <div class="hed__inner">
                <div class="hed__title">Купить диплом в Москве с доставкой</div>
                <div class="hed__text">
                Документы об образовании могут понадобиться в любой момент. Но иногда возникают такие ситуации, из которых Приобретение
                дипломов в МСК гарантии и низкие ценыкажется, нет ни одного выхода. Хотя, как известно, вопросов без решений никогда не
                остаётся, в том числе, если, крайне быстро нужно купить диплом о высшем образовании в Москве.</div>

                <div class="hed__text">Добро пожаловать на наш сайт, тут мы помогаем с приобретением диплома любого ВУЗа государственного образца в МСК, самых
                разных категорий, всех учебных заведений страны и не только.</div>

                <div class="hed__text">Мы предоставляем сертификаты о получении дополнительного высшего образования. Все подробности, где приобрести диплом,
                как получить диплом (Москва), можете узнать по телефону, либо посетить страничку в Интернете.</div>

                <div class="hed__text">Компания будет рада предложить сделать самостоятельно выбор любого ВУЗа страны. Список таких учебных заведений просто
                велик. Чтобы его перечислить, уйдёт ни одна страница и не один час. Вы можете обзавестись документом с гарантией и
                доставкой. Дипломы на заказ (Москва).</div>
            </div>
        </div>
    </div>


                 <?php
//echo do_shortcode( '[contact-form-7 id="6799" title="Калькулятор"]' );
?>
<?php get_footer()  ?>