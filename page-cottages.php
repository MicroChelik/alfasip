<?php
	include('html-start.php');
?>
<?php
	include('header.php');
?>
<div class="container">
	<div class="row">
		<div class="col-lg-7 offset-lg-3">
			<div aria-label="breadcrumb" class="breadcrumbNav">
				<div class="">
					<ol class="breadcrumb p-0">
				    	<li class="breadcrumb-item"><a href="index.php"><img src="img/icons/home.svg" alt="Главная"></a></li>
			    		<li class="breadcrumb-item active" aria-current="page">Проекты домов из СИП панелей</li>
				 	</ol>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<?php
			include('tape.php');
		?>
		<div class="col-lg-9 pr-lg-0">
			<div class="main-content-container cottage-container">
				<div class="row">
					<div class="col-12">
						<div class="h2-block">
							<h1>Коттеджи из СИП-панелей</h1>
						</div>
					</div>
				</div>
				<div class="row align-items-center mb-5">
					<div class="col-lg-6">
						<div class="cottage-img">
							<img src="img/cottage1.png" alt="Фотография">
						</div>
					</div>
					<div class="col-lg-6">
						<p>
							До недавнего времени коттедж был недопустимой мечтой и был прерогативой людей с высоким социальным статусом, могущих позволить финансирование. Каждый желающий может осуществить свои замыслы по доступной цене и специалисты “Службы строительных заказов” уже много лет оказывают услуги в строительстве коттеджей из СИП панелей, помогая претворить в жизнь задуманные мечты. Больше задуманное дело наинается с маленьких штрихов. а любое строительство зарождается с проекта.
						</p>
						<p>
							В реальности, сегодня дела обстоят иначе. Каждый желающий может осуществить свои замыслы по доступной цене и специалисты “Службы строительных заказов” уже много лет оказывают услуги в строительстве коттеджей из СИП панелей
						</p>
					</div>
				</div>
				<div class="row">
					<?php 
						for ($i = 1; $i <= 9; $i++) {
						    echo '<div class="col-lg-4">
							    	<div class="projects-slider__slide">
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
														<p>от 683 200 <span>&#8381;</span></p>
														<div class="h2-link">
															<a href="">Подробнее <img src="img/icons/greenH2Arrow.svg" alt="Перейти"></a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>';
						};
					?>
				</div>
				<div class="row cottage-advantages">
					<div class="col-lg-4 cottage-advantage">
						<div class="cottage-advantage__img">
							<img src="img/icons/advantage1.png" alt="Преимущество">
						</div>
						<div>
							<p>Преимущество 1</p>
						</div>
					</div>
					<div class="col-lg-4 cottage-advantage">
						<div class="cottage-advantage__img">
							<img src="img/icons/advantage1.png" alt="Преимущество">
						</div>
						<div>
							<p>Преимущество 2 <br> в две строчки</p>
						</div>
					</div>
					<div class="col-lg-4 cottage-advantage">
						<div class="cottage-advantage__img">
							<img src="img/icons/advantage1.png" alt="Преимущество">
						</div>
						<div>
							<p>Преимущество 1</p>
						</div>
					</div>
					<div class="col-lg-4 cottage-advantage">
						<div class="cottage-advantage__img">
							<img src="img/icons/advantage1.png" alt="Преимущество">
						</div>
						<div>
							<p>Преимущество 2 <br> в две строчки</p>
						</div>
					</div>
					<div class="col-lg-4 cottage-advantage">
						<div class="cottage-advantage__img">
							<img src="img/icons/advantage1.png" alt="Преимущество">
						</div>
						<div>
							<p>Преимущество 1</p>
						</div>
					</div>
					<div class="col-lg-4 cottage-advantage">
						<div class="cottage-advantage__img">
							<img src="img/icons/advantage1.png" alt="Преимущество">
						</div>
						<div>
							<p>Преимущество 2 <br> в две строчки</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12 mb-3">
						<h2 class="mob-text-center">Лид-магнит заголовок</h2>
					</div>
					<div class="col-lg-3">
						<div class="mockup">
							<img src="img/mockup.png" alt="Фотография">
						</div>
					</div>
					<div class="col-lg-10 offset-lg-2 mob-px-0">
						<div class="test-card">
							<p class="test-card__title">
								Пройдите тест из 7 вопросов за 1 минуту и получите предварительный расчет стоимости Вашего проектаПройдите тест из 7 вопросов за 1 минуту и получите предварительный расчет стоимости Вашего проекта
							</p>
							<div class="test-card__progress">
								<div class="count">
									<p class="mb-0">1<sup><small>/7</small></sup></p>
								</div>
								<div class="progressbar">
									<span style="width: 30%"></span>
								</div>
							</div>
							<form>
								<div class="test-card__questions">
									<div class="radio-group">
										<p>
										  <input type="radio" id="test1" name="radio-group" checked>
										  <label for="test1">Построить классный дом</label>
										</p>
										<p>
										  <input type="radio" id="test2" name="radio-group">
										  <label for="test2">Построить классный дом</label>
										</p>
										<p>
										  <input type="radio" id="test3" name="radio-group">
										  <label for="test3">Построить классный дом</label>
										</p>
										<p>
										  <input type="radio" id="test4" name="radio-group">
										  <label for="test4">Построить классный дом</label>
										</p>
										<p>
										  <input type="radio" id="test5" name="radio-group">
										  <label for="test5">Построить классный дом</label>
										</p>
										<p>
										  <input type="radio" id="test6" name="radio-group">
										  <label for="test6">Построить классный дом</label>
										</p>
									</div>
								</div>
								<div class="test-card__btn d-flex justify-content-center">
									<button class="greenBtn">К следующему вопросу <img src="img/icons/whiteBtnArrow.svg" alt="Иконка"></button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<h2 class="mb-lg-5 mb-3">Преимущества СИП-панелей<br>нашего производства</h2>
						<p>
							На нашем производстве обустроено несколько технологических участков - участок для материалов, рассчитаных на одну сменуж; участок для нанесения клея; пресс-станок для изготовления панелей шириной 400-650 мм (на основе плит GreenBoard и для панелей перекрытия); пресс-станок для изготовления панелей шириной более 650 мм; стол для проверки качества продукции и участок раскроя панелей. 
						</p>
						<p>
							На нашем складе всегда имеется запас плит GreenBoard и ОСП толщиной 12 мм. Пенополистирол заказывается после оформления договора купли-продажи, т.к некоторые заказы могут быть.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
	include('html-end.php');
?>