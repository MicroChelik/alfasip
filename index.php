<?php
	include('html-start.php');
?>

	<section class="banner">
		<div class="banner__gradient">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<div class="banner__info">
							<h1>Дома из СИП панелей под ключ в Ижевске</h1>
							<ul>
								<li>Готовый дом от 450 тыс. рублей</li>
								<li>Собственное производство SIP панелей и еще несколько слов примерно в три строки, вот так достаточно</li>
							</ul>
							<div class="banner__buttons">
								<button class="orangeBtn mr-3">Посмотреть проекты</button>
								<button class="whiteTranspBtn">Заказать консультацию</button>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="banner__video">
							<iframe width="560" height="315" src="https://www.youtube.com/embed/1WiI0J8r1Y8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="h2-block">
						<h2>Хиты домов 2018 года</h2>
						<div class="h2-link">
							<a href="">Смотреть все проекты <img src="img/icons/greenH2Arrow.svg" alt="Перейти"></a>
						</div>
					</div>
				</div>
			</div>
			<div class="houses-hits-slider slider">
				<?php 
					for ($i = 1; $i <= 6; $i++) {
					    echo '<div class="houses-hits-slider__slide slider-slide">
								<div class="houses-hits-slider__content">
									<div class="houses-hits-slider__img">
										<img src="img/house-hit.png" alt="Фото дома">
									</div>
									<div class="houses-hits-slide__block">
										<p class="houses-hits-slide__name">Старый Чультем Кси-2</p>
										<p>Описание данного проекта в пару строчек примерно вот так...</p>
										<button class="greenTranpBtn">Смотреть проект</button>
									</div>
								</div>
							</div>';
					}
				?>
				<!-- <div class="houses-hits-slider__slide">
					<div class="houses-hits-slider__content">
						<div class="houses-hits-slider__img">
							<img src="img/house-hit.png" alt="Фото дома">
						</div>
						<div class="houses-hits-slide__block">
							<p class="houses-hits-slide__name">Старый Чультем Кси-2</p>
							<p>Описание данного проекта в пару строчек примерно вот так...</p>
							<button class="greenTranpBtn">Смотреть проект</button>
						</div>
					</div>
				</div> -->
			</div>
		</div>
	</section>

	<section class="section-small greenBg">
		<div class="container">
			<div class="row special-blocks">
				<div class="col-lg-4">
					<div class="special-blocks__offers special-blocks__block">
						<div>
							<p class="special-blocks__title">Спецпредложения</p>
							<p>Выгодные спецпредложения, <br> только этой осенью!</p>
							<div class="h2-link">
								<a href="">Смотреть<img src="img/icons/greenH2Arrow.svg" alt="Перейти"></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="special-blocks__discount special-blocks__block">
						<div>
							<p class="special-blocks__title">акции</p>
							<p>Самые выгодные <br>предложения,<br>только этой осенью!</p>
							<div class="h2-link">
								<a href="">Смотреть<img src="img/icons/greenH2Arrow.svg" alt="Перейти"></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="special-blocks__projects special-blocks__block">
						<div>
							<p class="special-blocks__title">Все наши проекты</p>
							<div class="h2-link">
								<a href="">Смотреть<img src="img/icons/greenH2Arrow.svg" alt="Перейти"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="h2-block">
						<h2>Готовые проекты для вашего дома</h2>
						<div class="h2-link">
							<a href="">Смотреть все проекты <img src="img/icons/greenH2Arrow.svg" alt="Перейти"></a>
						</div>
					</div>
				</div>
			</div>
			<div class="projects-slider slider">
				<?php 
					for ($i = 1; $i <= 6; $i++) {
					    echo '<div class="projects-slider__slide slider-slide">
									<div class="projects-slider__content">
										<div class="projects-slider__img">
											<img src="img/project.png" alt="Фотография проекта">
										</div>
										<div class="projects-slider__block">
											<div class="projects-slider__name">
												<p>Дельта</p>
												<div class="projects-slider__square">
													<p>298 м<sup><small>2</small></sup></p>
												</div>
											</div>
											<div class="projects-slider__price">
												<p>от 683 200 ₽</p>
												<div class="h2-link">
													<a href="">Подробнее <img src="img/icons/greenH2Arrow.svg" alt="Перейти"></a>
												</div>
											</div>
										</div>
									</div>
								</div>';
					}
				?>
				<!-- <div class="projects-slider__slide">
					<div class="projects-slider__content">
						<div class="projects-slider__img">
							<img src="img/project.png" alt="Фотография проекта">
						</div>
						<div class="projects-slider__block">
							<div class="projects-slider__name">
								<p>Дельта</p>
								<div class="projects-slider__square">
									<p>298 м<sup><small>2</small></sup></p>
								</div>
							</div>
							<div class="projects-slider__price">
								<p>от 683 200 ₽</p>
								<div class="h2-link">
									<a href="">Подробнее <img src="img/icons/greenH2Arrow.svg" alt="Перейти"></a>
								</div>
							</div>
						</div>
					</div>
				</div> -->
			</div>
		</div>
	</section>

	<section class="section-calculation">
		<div class="section container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<h2 class="text-center title">Расчет стоимости будущего дома</h2>
					<p class="text-center subTitle">Выберите площадь дома:</p>
					<form class="calc-form">
						<input type="text" placeholder="200" value="">
						<div class="calc-form__values">
							<p>80</p>
							<p>100</p>
							<p>80</p>
							<p>100</p>
							<p>80</p>
							<p class="selected">200</p>
							<p>80</p>
							<p>100</p>
							<p>100</p>
						</div>
						<p class="calc-form__sum">Сумма составит:<b>990 000</b><span>рублей</span></p>
						<p>В стоимость входит: стены, ВСЕ перегородки, перекрытия 1-го этажа, 
							межэтажные перекрытия 2-го этажа, устройства кровли из СИП-панелей 
							(для мансардных этажей) — 1-я комплектация
						</p>
						<div class="calc-form__buttons">
							<button class="orangeBtn"><img src="img/icons/phoneImg.png" alt="Звонок">Оставить заявку</button>
							<button class="whiteTranspBtn"><img src="img/icons/calculator.svg" alt="Калькулятор">Подробный расчет</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

	<section class="section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="h2-block">
						<h2>Подбор дома по размерам</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-auto house-sizes-container">
					<p class="title">Дома с шириной <b>5 метров</b></p>
					<div class="house-sizes">
						<?php 
							for ($i = 1; $i <= 3; $i++) {
							    echo '<div class="house-sizes__size">
											<p>5 на 5</p>
										</div>';
							}
						?>
					</div>
				</div>
				<div class="col-lg-auto house-sizes-container">
					<p class="title">Дома с шириной <b>5 метров</b></p>
					<div class="house-sizes">
						<?php 
							for ($i = 1; $i <= 6; $i++) {
							    echo '<div class="house-sizes__size">
											<p>5 на 5</p>
										</div>';
							}
						?>
					</div>
				</div>
				<div class="col-lg-auto house-sizes-container">
					<p class="title">Дома с шириной <b>5 метров</b></p>
					<div class="house-sizes">
						<?php 
							for ($i = 1; $i <= 3; $i++) {
							    echo '<div class="house-sizes__size">
											<p>5 на 5</p>
										</div>';
							}
						?>
					</div>
				</div>
				<div class="col-lg-auto house-sizes-container">
					<p class="title">Дома с шириной <b>5 метров</b></p>
					<div class="house-sizes">
						<?php 
							for ($i = 1; $i <= 2; $i++) {
							    echo '<div class="house-sizes__size">
											<p>5 на 5</p>
										</div>';
							}
						?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section greyBg">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">

					<div class="house-view-slider slider slider-slide">
						<div class="house-main-slider__slide">
							<div class="house-main-slider__content">
								<img src="img/view1.png" alt="Фото дома">
							</div>
						</div>
						<div class="house-main-slider__slide">
							<div class="house-main-slider__content">
								<img src="img/view2.png" alt="Фото дома">
							</div>
						</div>
						<div class="house-main-slider__slide">
							<div class="house-main-slider__content">
								<img src="img/view1.png" alt="Фото дома">
							</div>
						</div>
						<div class="house-main-slider__slide">
							<div class="house-main-slider__content">
								<img src="img/view2.png" alt="Фото дома">
							</div>
						</div>
						<div class="house-main-slider__slide">
							<div class="house-main-slider__content">
								<img src="img/view1.png" alt="Фото дома">
							</div>
						</div>
						<div class="house-main-slider__slide">
							<div class="house-main-slider__content">
								<img src="img/view2.png" alt="Фото дома">
							</div>
						</div>
					</div>

					<div class="for-house-view-slider slider slider-slide">
						<div class="for-house-main-slider__slide">
							<div class="for-house-main-slider__content">
								<img src="img/view1.png" alt="Фото дома">
							</div>
						</div>
						<div class="for-house-main-slider__slide">
							<div class="for-house-main-slider__content">
								<img src="img/view2.png" alt="Фото дома">
							</div>
						</div>
						<div class="for-house-main-slider__slide">
							<div class="for-house-main-slider__content">
								<img src="img/view1.png" alt="Фото дома">
							</div>
						</div>
						<div class="for-house-main-slider__slide">
							<div class="for-house-main-slider__content">
								<img src="img/view2.png" alt="Фото дома">
							</div>
						</div>
						<div class="for-house-main-slider__slide">
							<div class="for-house-main-slider__content">
								<img src="img/view1.png" alt="Фото дома">
							</div>
						</div>
						<div class="for-house-main-slider__slide">
							<div class="for-house-main-slider__content">
								<img src="img/view2.png" alt="Фото дома">
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 house-slider-description">
					<h2 class="mb-3">Подбор дома по размерам</h2>
					<p class="subTitle">Подзаголовок в несколько слов</p>
					<p>
						Итак, вы доверили воплощение своей мечты - возведение дома под ключ - компании «Дачный сезон». Теперь, вероятно, вас больше всего интересует ход строительства:
					</p>
					<p>
						когда и кем будут производиться работы и как за этим можно будет дистанционно наблюдать. Благодаря нашей схеме, дом любой архитектурной сложности возводится больше всего 
					</p>
					<p>
						Итак, вы доверили воплощение своей мечты - возведение дома под ключ - компании «Дачный сезон». Теперь, вероятно, вас больше всего интересует ход 
					</p>
					<button class="greenBtn">Подробнее</button>
				</div>
			</div>
		</div>
	</section>

	<section class="bg-section1">
		<div class="section">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 offset-lg-1">
						<h2 class="mb-3">Дом за миллион</h2>
						<p>
							Итак, вы доверили воплощение своей мечты - возведение дома под ключ - компании «Дачный сезон». Теперь, вероятно, вас больше всего интересует ход строительства:
						</p>
						<p>
							когда и кем будут производиться работы и как за этим можно будет дистанционно наблюдать. Благодаря нашей схеме, дом любой архитектурной сложности возводится быстро и легко
						</p>
						<button class="greenBtn">Подробнее</button>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="h2-block">
						<h2>Для вас работают</h2>
						<div class="h2-link">
							<a href="">Все сотрудники (<span>54</span>) <img src="img/icons/greenH2Arrow.svg" alt="Перейти"></a>
						</div>
					</div>
				</div>
			</div>
			<div class="employee-slider slider">
				<?php 
					for ($i = 1; $i <= 6; $i++) {
					    echo '<div class="employee-slider__slide slider-slide">
								<div class="employee-slider__content">
									<div class="employee-slider__img">
										<img src="img/employee.png" alt="Фото сотрудника">
									</div>
									<div class="employee-slider__text">
										<p class="employee-slider__name">Иванов Иван</p>
										<p class="employee-slider__position">Название должности</p>
									</div>
								</div>
							</div>';
					}
				?>
				<!-- <div class="employee-slider__slide slider-slide">
					<div class="employee-slider__content">
						<div class="employee-slider__img">
							<img src="img/employee.png" alt="Фото сотрудника">
						</div>
						<div class="employee-slider__text">
							<p class="employee-slider__name">Иванов Иван</p>
							<p class="employee-slider__position">Название должности</p>
						</div>
					</div>
				</div> -->
			</div>
		</div>
	</section>

	<section class="greyBg section pb-0">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="h2-block">
						<h2>Почему выбирают именно нас</h2>
					</div>
				</div>
				<?php 
					for ($i = 1; $i <= 6; $i++) {
						echo '<div class="col-lg-3 advantage">
								<div class="advantage__title">
									<img src="img/icons/advantage1.png" alt="Преимущество">
									<p class="title">Собственное производство SIP панелей</p>
								</div>
								<p>Мы производим панели с 2010 года. Имеем свою производственную площадку, качественное, высокоточное, высоко-производительное оборудование</p>
							</div>';
					}
				?>
				<!-- <div class="col-lg-3 advantage">
					<div class="advantage__title">
						<img src="img/icons/advantage1.png" alt="Преимущество">
						<p class="title">Собственное производство SIP панелей</p>
					</div>
					<p>Мы производим панели с 2010 года. Имеем свою производственную площадку, качественное, высокоточное, высоко-производительное оборудование</p>
				</div> -->

				<div class="col-12 section-footer">
					<div class="section-footer__block">
						<div class="section-footer__item">
							<img src="img/icons/check.png" alt="Иконка">
							<p>Лучшая цена в Удмуртии</p>
						</div>
						<div class="section-footer__item">
							<img src="img/icons/check.png" alt="Иконка">
							<p>Заводское качество</p>
						</div>
						<div class="section-footer__item">
							<img src="img/icons/check.png" alt="Иконка">
							<p>Готовый дом за 35 дней</p>
						</div>
						<div class="section-footer__item">
							<img src="img/icons/check.png" alt="Иконка">
							<p>Гарантия по договору</p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<section class="bg-section2">
		<div class="section">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="h2-block justify-content-center">
							<h2 class="text-center">Чем мы отличаемся от других компаний</h2>
						</div>
					</div>

					<?php 
					for ($i = 1; $i <= 3; $i++) {
							echo '<div class="col-lg-4">
										<div class="difference-card">
											<div class="difference-card__title">
												<img src="img/icons/difference1.png" alt="Иконка">
												<p>Собственное производство древесины</p>
											</div>
											<div class="difference-card__text">
												<p>
													Заготавливаем пиломатериалы с 2011 г. Сами выполняем и контролируем весь процесс заготовки:
												</p>
												<ul>
													<li>рубка леса;</li>
													<li>распилка леса на собственной пилораме;</li>
													<li>сушка материала в собственных сушильных камерах</li>
												</ul>
												<p>
													Благодаря этому вы получаете качественный пиломатериал по привлекательной цене и всегда вовремя
												</p>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="difference-card">
											<div class="difference-card__title">
												<img src="img/icons/difference1.png" alt="Иконка">
												<p>Собственное производство древесины</p>
											</div>
											<div class="difference-card__text">
												<p>
													Заготавливаем пиломатериалы с 2011 г. Сами выполняем и контролируем весь процесс заготовки:
												</p>
												<ol>
													<li>рубка леса;</li>
													<li>распилка леса на собственной пилораме;</li>
													<li>сушка материала в собственных сушильных камерах</li>
												</ol>
												<p>
													Благодаря этому вы получаете качественный пиломатериал по привлекательной цене и всегда вовремя
												</p>
											</div>
										</div>
									</div>
							';
						}
					?>

					<!-- <div class="col-lg-4">
						<div class="difference-card">
							<div class="difference-card__title">
								<img src="img/icons/difference1.png" alt="Иконка">
								<p>Собственное производство древесины</p>
							</div>
							<div class="difference-card__text">
								<p>
									Заготавливаем пиломатериалы с 2011 г. Сами выполняем и контролируем весь процесс заготовки:
								</p>
								<ul>
									<li>рубка леса;</li>
									<li>распилка леса на собственной пилораме;</li>
									<li>сушка материала в собственных сушильных камерах</li>
								</ul>
								<p>
									Благодаря этому вы получаете качественный пиломатериал по привлекательной цене и всегда вовремя
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="difference-card">
							<div class="difference-card__title">
								<img src="img/icons/difference1.png" alt="Иконка">
								<p>Собственное производство древесины</p>
							</div>
							<div class="difference-card__text">
								<p>
									Заготавливаем пиломатериалы с 2011 г. Сами выполняем и контролируем весь процесс заготовки:
								</p>
								<ol>
									<li>рубка леса;</li>
									<li>распилка леса на собственной пилораме;</li>
									<li>сушка материала в собственных сушильных камерах</li>
								</ol>
								<p>
									Благодаря этому вы получаете качественный пиломатериал по привлекательной цене и всегда вовремя
								</p>
							</div>
						</div>
					</div> -->


				</div>
			</div>
		</div>
	</section>

	<section class="greyBg section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="h2-block">
						<h2>Хиты домов 2018 года</h2>
						<div class="h2-link">
							<a href="">Смотреть все проекты <img src="img/icons/greenH2Arrow.svg" alt="Перейти"></a>
						</div>
					</div>
				</div>
			</div>
			<div class="slider house-reviews-slider row">
				<div class="slider-slide col-3">
					<div class="house-reviews-slider__content">
						<div class="house-reviews-slider__img">
							<img src="img/review1.png" alt="Фотография Дома">
						</div>
						<div class="house-reviews-slider-text">
							<div class="house-reviews-slider__info">
								<div>
									<div class="house-reviews-slider__name">
										<p>Дельта</p>
										<p class="square">298 м<sup><small>2</small></sup></p>
									</div>
									<div class="house-reviews-slider__price">
										<p>от 683 200 ₽</p>
									</div>
								</div>
							</div>
							<div class="house-reviews-slider__review">
								<div class="house-reviews-slider__reviewer">
									<div class="house-reviews-slider__photo">
										<img src="img/client1.png" alt="Фото Покупателя">
									</div>
									<div>
										<p>Александр Александров</p>
										<p>Хозяин дома</p>
									</div>
								</div>
								<div>
									<p>
										Мы довольно продолжительное время рассуждали о личном домике в пригородной зоне. После покупки участка земли стал вопрос о постройке жилья. Мы предпочли... 
									</p>
									<p><a href="">Читать весь отзыв</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
<?php
	include('html-end.php');
?>