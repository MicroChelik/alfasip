<?php
	include('html-start.php');
?>
<div class="container">
	<div class="row">
		<div class="col-lg-7 offset-lg-3">
			<div aria-label="breadcrumb" class="breadcrumbNav">
				<div class="">
					<ol class="breadcrumb p-0">
				    	<li class="breadcrumb-item"><a href="index.php"><img src="img/icons/home.svg" alt="Главная"></a></li>
			    		<li class="breadcrumb-item active" aria-current="page">Дома из Сип панелей</li>
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
		<div class="col-lg-9 pr-0">
			<div class="main-content-container">
				<div class="row">
					<div class="col-12">
						<div class="h2-block">
							<h1>Дома из СИП панелей 80 м<small><sup>2</sup></small></h1>
						</div>
					</div>
				</div>
				<div class="row mb-3">
					<?php 
						for ($i = 1; $i <= 6; $i++) {
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
														<p>от 683 200 ₽</p>
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
				<div class="filters-row">
					<div class="col-12">
						<h3>Проекты домов по бюджету</h3>
					</div>
					<div class="col-lg-4">
						<div class="green-link">
							<a href="">от 300 000 руб. до 600 000 руб.</a>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="green-link">
							<a href="">от 300 000 руб. до 600 000 руб.</a>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="green-link">
							<a href="">от 300 000 руб. до 600 000 руб.</a>
						</div>
					</div>
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
				<div class="main-content-banner-mask mb-60">
					<div class="main-content-banner">
						<div class="main-content-banner__title">
							<h2>Электрощит «под ключ» всего за 4000 рублей</h2>
						</div>
						<div class="main-content-banner__subtitles">
							<div>
								<p>Однофазовый 4000 р.</p>
							</div>
							<div>
								<p>Трёхфазный 6000 р.</p>
							</div>
							<div>
								<p>Комплект заземления 500 р.</p>
							</div>
						</div>
						<div class="main-content-banner__text">
							<p>Готовое решение для подведения электричества на участок</p>
						</div>
						<form>
							<div>
								<p>Телефон:</p>
								<input type="tel">
							</div>
							<button class="greenBtn" type="submit">Купить</button>
						</form>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<h1 class="mb-lg-4">Преимущества СИП-панелей нашего производства</h1>
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