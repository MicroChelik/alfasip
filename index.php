<?php
	include('html-start.php');
?>
<?php
	include('header-main.php');
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
					<div class="col-lg-5 offset-lg-1">
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
								<div class="houses-hits-slider__content slider-content">
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
					<div class="houses-hits-slider__content slider-content">
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
			<div class="row justify-content-between houses-hits-slider-arrows slider-arrows d-lg-flex d-none">
				<div class="col-auto">
					<img src="img/icons/arrow-left.png" class="houses-hits-slider-prev slider-arrow-left" alt="назад">
				</div>
				<div class="col-auto">
					<img src="img/icons/arrow-right.png" class="houses-hits-slider-next slider-arrow-right" alt="вперед">
				</div>
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
									<div class="projects-slider__content slider-content">
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
					<div class="projects-slider__content slider-content">
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
			<div class="row justify-content-between projects-slider-arrows slider-arrows d-lg-flex d-none">
				<div class="col-auto">
					<img src="img/icons/arrow-left.png" class="projects-slider-prev slider-arrow-left" alt="назад">
				</div>
				<div class="col-auto">
					<img src="img/icons/arrow-right.png" class="projects-slider-next slider-arrow-right" alt="вперед">
				</div>
			</div>
		</div>
	</section>

	<section class="section-calculation">
		<div class="section">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6">
						<h2 class="text-center title">Расчет стоимости будущего дома</h2>
						<p class="text-center subTitle">Выберите площадь дома:</p>
						<form class="calc-form">
							<div class="d-flex">
								<input type="number" placeholder="200">
								<p class="square"><span>м<sup><small>2</small></sup></span></p>
							</div>
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
				<div class="col-12 d-block d-lg-none">
					<div class="h2-block">
						<h2>Растущий дом</h2>
					</div>
				</div>
				<div class="col-lg-6">

					<div class="house-view-slider slider">
						<div class="house-main-slider__slide slider-slide">
							<div class="house-main-slider__content">
								<img src="img/view1.png" alt="Фото дома">
							</div>
						</div>
						<div class="house-main-slider__slide slider-slide">
							<div class="house-main-slider__content">
								<img src="img/view2.png" alt="Фото дома">
							</div>
						</div>
						<div class="house-main-slider__slide slider-slide">
							<div class="house-main-slider__content">
								<img src="img/view1.png" alt="Фото дома">
							</div>
						</div>
						<div class="house-main-slider__slide slider-slide">
							<div class="house-main-slider__content">
								<img src="img/view2.png" alt="Фото дома">
							</div>
						</div>
						<div class="house-main-slider__slide slider-slide">
							<div class="house-main-slider__content">
								<img src="img/view1.png" alt="Фото дома">
							</div>
						</div>
						<div class="house-main-slider__slide slider-slide">
							<div class="house-main-slider__content">
								<img src="img/view2.png" alt="Фото дома">
							</div>
						</div>
					</div>

					<div class="row justify-content-between house-view-slider-arrows slider-arrows d-flex">
						<div class="col-auto">
							<img src="img/icons/arrow-left.png" class="house-view-slider-prev" alt="назад">
						</div>
						<div class="col-auto">
							<img src="img/icons/arrow-right.png" class="house-view-slider-next" alt="вперед">
						</div>
					</div>

					<div class="for-house-view-slider slider">
						<div class="for-house-main-slider__slide slider-slide">
							<div class="for-house-main-slider__content">
								<img src="img/view1.png" alt="Фото дома">
							</div>
						</div>
						<div class="for-house-main-slider__slide slider-slide">
							<div class="for-house-main-slider__content">
								<img src="img/view2.png" alt="Фото дома">
							</div>
						</div>
						<div class="for-house-main-slider__slide slider-slide">
							<div class="for-house-main-slider__content">
								<img src="img/view1.png" alt="Фото дома">
							</div>
						</div>
						<div class="for-house-main-slider__slide slider-slide">
							<div class="for-house-main-slider__content">
								<img src="img/view2.png" alt="Фото дома">
							</div>
						</div>
						<div class="for-house-main-slider__slide slider-slide">
							<div class="for-house-main-slider__content">
								<img src="img/view1.png" alt="Фото дома">
							</div>
						</div>
						<div class="for-house-main-slider__slide slider-slide">
							<div class="for-house-main-slider__content">
								<img src="img/view2.png" alt="Фото дома">
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 house-slider-description">
					<h2 class="mb-3 d-none d-lg-block">Растущий дом</h2>
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
						<div class="bg-section1__text">
							<h2 class="mb-3">Дом за миллион</h2>
							<p>
								Итак, вы доверили воплощение своей мечты - возведение дома под ключ - компании «Дачный сезон». Теперь, вероятно, вас больше всего интересует ход строительства:
							</p>
							<p>
								когда и кем будут производиться работы и как за этим можно будет дистанционно наблюдать. Благодаря нашей схеме, дом любой архитектурной сложности возводится быстро и легко
							</p>
						</div>
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
								<div class="employee-slider__content slider-content">
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
					<div class="employee-slider__content slider-content">
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
			<div class="row justify-content-between employee-slider-arrows slider-arrows d-lg-flex d-none">
				<div class="col-auto">
					<img src="img/icons/arrow-left.png" class="employee-slider-prev slider-arrow-left" alt="назад">
				</div>
				<div class="col-auto">
					<img src="img/icons/arrow-right.png" class="employee-slider-next slider-arrow-right" alt="вперед">
				</div>
			</div>
			<div class="row justify-content-center d-flex d-lg-none">
				<div class="col-10">
					<a href="" class="lightGreenBtn">Все сотрудники (54) <img src="img/icons/whiteBtnArrow.svg"></a>
				</div>
			</div>
		</div>
	</section>

	<section class="greyBg section pb-0">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="h2-block">
						<h2>Почему выбирают <br class="d-block d-lg-none"> именно нас</h2>
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
						<h2>Дома построенные нашей компанией</h2>
						<div class="h2-link">
							<a href="">Смотреть все проекты <img src="img/icons/greenH2Arrow.svg" alt="Перейти"></a>
						</div>
					</div>
				</div>
			</div>
			<div class="slider house-reviews-slider">

				<?php 
					for ($i = 1; $i <= 6; $i++) {
						echo '<div class="slider-slide">
									<div class="house-reviews-slider__content slider-content">
										<div class="house-reviews-slider__img">
											<a href="">
												<img src="img/reviews1.png" alt="Фотография Дома">
											</a>
										</div>
										<div class="house-reviews-slider__text">
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
													<p class="house-reviews-slider__review-text">
														Мы довольно продолжительное время рассуждали о личном домике в пригородной зоне. После покупки участка земли стал вопрос о постройке жилья. Мы предпочли... 
													</p>
													<p class="mb-0"><a href="">Читать весь отзыв</a></p>
												</div>
											</div>
										</div>
									</div>
								</div>';
					}
				?>

				<!-- <div class="slider-slide">
					<div class="house-reviews-slider__content slider-content">
						<div class="house-reviews-slider__img">
							<img src="img/reviews1.png" alt="Фотография Дома">
						</div>
						<div class="house-reviews-slider__text">
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
									<p class="house-reviews-slider__review-text">
										Мы довольно продолжительное время рассуждали о личном домике в пригородной зоне. После покупки участка земли стал вопрос о постройке жилья. Мы предпочли... 
									</p>
									<p class="mb-0"><a href="">Читать весь отзыв</a></p>
								</div>
							</div>
						</div>
					</div>
				</div> -->


			</div>
			<div class="row justify-content-between house-reviews-arrows slider-arrows d-lg-flex d-none">
				<div class="col-auto">
					<img src="img/icons/arrow-left.png" class="house-reviews-slider-prev slider-arrow-left" alt="назад">
				</div>
				<div class="col-auto">
					<img src="img/icons/arrow-right.png" class="house-reviews-slider-next slider-arrow-right" alt="вперед">
				</div>
			</div>
			<div class="row justify-content-center d-flex d-lg-none">
				<div class="col-10">
					<a href="" class="lightGreenBtn">Смотреть все проекты <img src="img/icons/whiteBtnArrow.svg"></a>
				</div>
			</div>
		</div>
	</section>

	<section class="section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="h2-block d-block text-center">
						<h2 class="mb-3">Сертификаты</h2>
						<p>
							В 2005г. Мы прошли добровольную сертификацию, чтобы подтвердить соответствие качества нашей продукции современным нормам и законам Российской федерации. Теперь наши панели имеют гигиенический сертификат и сертификат требований пожарной безопасности.
						</p>
					</div>
				</div>
			</div>
			<div class="slider sertificates-slider">
				<?php 
					for ($i = 1; $i <= 6; $i++) {
						echo '<div class="slider-slide">
									<div class="sertificates-slider__content slider-content">
										<div class="sertificates-slider__img">
											<img src="img/sertificate1.png" alt="Сертификат">
										</div>
										<p>Название сертификата</p>
									</div>
								</div>';
					}
				?>
				<!-- <div class="slider-slide">
					<div class="sertificates-slider__content slider-content">
						<div class="sertificates-slider__img">
							<img src="img/sertificates1.png" alt="Сертификат">
						</div>
						<p>Название сертификата</p>
					</div>
				</div> -->

			</div>
			<div class="row justify-content-between sertificates-slider-arrows slider-arrows d-lg-flex d-none">
				<div class="col-auto">
					<img src="img/icons/arrow-left.png" class="sertificates-slider-prev slider-arrow-left" alt="назад">
				</div>
				<div class="col-auto">
					<img src="img/icons/arrow-right.png" class="sertificates-slider-next slider-arrow-right" alt="вперед">
				</div>
			</div>
			<div class="row justify-content-center mt-lg-5">
				<div class="col-auto">
					<button class="orangeBtn">Скачать</button>
				</div>
			</div>
		</div>
	</section>

	<section class="greyBg section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="h2-block">
						<h2>Почему с нами удобно и выгодно работать</h2>
					</div>
				</div>
			</div>
			<div class="row convenience-container">
				<?php 
					for ($i = 1; $i <= 6; $i++) {
						echo '<div class="col-lg-4 convenience">
									<div class="convenience__img">
										<img src="img/convenience1.png" alt="Иконка">
									</div>
									<div class="convenience__description">
										<p class="convenience__title">Короткие сроки строительства</p>
										<p class="convenience__text">
											Раскрой панелей и пиломатериалана производстве, позволили сократить сроки строительства, а введенная в 2018 г. Программа «ПРЕДСБОРКА» позволяетнам собирать дом от 2 до 5 дней.
										</p>
									</div>
								</div>';
					}
				?>
				<!-- <div class="col-lg-4 convenience">
					<div class="convenience__img">
						<img src="img/convenience1.png" alt="Иконка">
					</div>
					<div class="convenience__description">
						<p class="convenience__title">Короткие сроки строительства</p>
						<p class="convenience__text">
							Раскрой панелей и пиломатериалана производстве, позволили сократить сроки строительства, а введенная в 2018 г. Программа «ПРЕДСБОРКА» позволяетнам собирать дом от 2 до 5 дней.
						</p>
					</div>
				</div> -->
			</div>
		</div>
	</section>

	<section class="bg-section3">
		<div class="section">
			<div class="container">
				<div class="row">
					<div class="col-lg-5">
						<div class="banner__video">
							<iframe width="560" height="315" src="https://www.youtube.com/embed/1WiI0J8r1Y8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
					</div>
					<div class="col-lg-5 d-flex align-items-center">
						<div class="banner__text-margin">
							<h2>Экскурсия на стройку</h2>
							<p>
								Экологичность СИП-панелей, выпускаемых Альфа-СИП, чрезвычайно высока не только в сравнении с другими видами аналогичных стройматериалов, но и сама по себе, удовлетворяя самым высоким требованиям экологической безопасности.
							</p>
							<p>
								Экологичность СИП-панелей, выпускаемых Альфа-СИП, высока не только в сравнении с другими видами аналогичных стройматериалов, но и сама по себе, удовлетворяя самым 
							</p>
							<div class="d-flex justify-content-lg-between bg-section3__buttons">
								<button class="orangeBtn order-2 order-lg-0">Записаться на экскурсию</button>
								<div class="order-1 order-lg-0">
									<p class="mb-0 d-none d-lg-block">или позвоните</p>
									<div class="phonecall-div">
										<p><a href="tel:+7(3412)907961"><img src="img/icons/phoneImg.png" alt="Звонок" class="mr-1">+7 (3412) 90-79-61</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section-small">
		<div class="container">
			<div class="row justify-content-around">
				<div class="col-lg-3">
					<div class="block-link">
						<div>
							<img src="img/linkImg1.png" alt="Иконка">
							<p>Этапы работ</p>
							<div class="h2-link">
								<a href="">Смотреть все проекты <img src="img/icons/greenH2Arrow.svg" alt="Перейти"></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="block-link">
						<div>
							<img src="img/linkImg1.png" alt="Иконка">
							<p>Этапы работ</p>
							<div class="h2-link">
								<a href="">Смотреть все проекты <img src="img/icons/greenH2Arrow.svg" alt="Перейти"></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="block-link">
						<div>
							<img src="img/linkImg1.png" alt="Иконка">
							<p>Этапы работ</p>
							<div class="h2-link">
								<a href="">Смотреть все проекты <img src="img/icons/greenH2Arrow.svg" alt="Перейти"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="greyBg section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="h2-block justify-content-center">
						<h2>Наш офис</h2>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="office-card-container">
						<div class="office-card">
							<div>
								<img src="img/office1.png" alt="Фотография офиса">
							</div>
						</div>
						<div class="office-card">
							<div>
								<img src="img/office1.png" alt="Фотография офиса">
							</div>
						</div>
						<div class="office-card">
							<div>
								<img src="img/office1.png" alt="Фотография офиса">
							</div>
						</div>
						<div class="office-card">
							<div>
								<img src="img/office1.png" alt="Фотография офиса">
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="map">
						<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Acff558cfba0866ac62fa11fa329655a91f237504760b4ebc39d4311428a2fcc5&amp;width=100%25&amp;height=100%&amp;lang=ru_RU&amp;scroll=true"></script>
					</div>
				</div>
			</div>
		</div>
	</section>
	
<?php
	include('html-end.php');
?>