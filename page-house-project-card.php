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
				    	<li class="breadcrumb-item"><a href="index.php">Наши работы</a></li>
			    		<li class="breadcrumb-item active" aria-current="page">Проект Гамма</li>
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
							<h1>Двухэтажный дом по проекту Гамма 137 м<sup><small>2</small></sup></h1>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-8">
						<div class="house-project-card-slider slider">
							<div class="house-project-card-slider__slide slider-slide">
								<div>
									<a href="img/project-card.png" data-fancybox="images">
										<img src="img/project-card.png" alt="Фотография дома">
									</a>
								</div>
							</div>
							<div class="house-project-card-slider__slide slider-slide">
								<div>
									<a href="img/project-card.png" data-fancybox="images">
										<img src="img/project-card.png" alt="Фотография дома">
									</a>
								</div>
							</div>
						</div>
						<div class="row justify-content-between house-project-card-slider-arrows slider-arrows d-lg-flex d-none">
							<div class="col-auto">
								<img src="img/icons/arrow-left.png" class="house-project-card-slider-prev slider-arrow-left" alt="назад">
							</div>
							<div class="col-auto">
								<img src="img/icons/arrow-right.png" class="house-project-card-slider-next slider-arrow-right" alt="вперед">
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<p>
							Одноэтажный дом по проекту, разработанному индивидуально для заказчика в комплектации под ключ по канадской каркасной технологии в Солнечногорском районе. 
						</p>
						<p>
							Наружная и внутренняя отделка дома - имитация бруса класса А, наружный фасад выкрашен в нежный кремовый цвет. Кровля - металочерепмца 0,5 мм, свесы подшивы ПВХ софитами.
						</p>
						<div class="house-table">
							<div class="house-table__item">
								<div>
									<p class="house-table__count">125 М<sup><small>2</small></sup></p>
									<p>Площадь дома</p>
								</div>
							</div>
							<div class="house-table__item">
								<div>
									<p class="house-table__count">125 М<sup><small>2</small></sup></p>
									<p>Площадь дома</p>
								</div>
							</div>
							<div class="house-table__item">
								<div>
									<p class="house-table__count">125 М<sup><small>2</small></sup></p>
									<p>Площадь дома</p>
								</div>
							</div>
							<div class="house-table__item">
								<div>
									<p class="house-table__count">125 М<sup><small>2</small></sup></p>
									<p>Площадь дома</p>
								</div>
							</div>
						</div>
						<div class="link-btn">
							<a href="" class="orangeBtn mb-3">Перейти на страницу проекта</a>
							<a href="" class="greenBtn">Узнать цену</a>
						</div>
					</div>
				</div>
				<div class="row project-card-photos">
					<?php 
						for ($i = 1; $i <= 6; $i++) {
						    echo '<div class="col-lg-4">
									<div class="image-div">
										<a href="img/project-card2.png" data-fancybox="images">
											<img src="img/project-card2.png" alt="Фотография дома">
										</a>
									</div>
								</div>';
						};
					?>
					<!-- <div class="col-lg-4">
						<div class="image-div">
							<a href="img/project-card2.png" data-fancybox="images">
								<img src="img/project-card2.png">
							</a>
						</div>
					</div> -->
				</div>
				<div class="row">
					<div class="col-12">
						
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<h3>Другие объекты:</h3>
					</div>
				</div>
				<div class="project-card-portfolio-slider slider">
					<div class="slider-slide">
						<div class="portfolio__item">
							<div class="portfolio__img">
								<img src="img/portfolio.png" alt="Фотография">
							</div>
							<div class="portfolio__mask">
								<a href="">Подробнее</a>
							</div>
							<div class="portfolio__text">
								<p>Проект Дельта г. «Старый Чультем» 2016 год</p>
							</div>
						</div>
					</div>
					<div class="slider-slide">
						<div class="portfolio__item">
							<div class="portfolio__img">
								<img src="img/portfolio.png" alt="Фотография">
							</div>
							<div class="portfolio__mask">
								<a href="">Подробнее</a>
							</div>
							<div class="portfolio__text">
								<p>Проект Дельта г. «Старый Чультем» 2016 год</p>
							</div>
						</div>
					</div>
					<div class="slider-slide">
						<div class="portfolio__item">
							<div class="portfolio__img">
								<img src="img/portfolio.png" alt="Фотография">
							</div>
							<div class="portfolio__mask">
								<a href="">Подробнее</a>
							</div>
							<div class="portfolio__text">
								<p>Проект Дельта г. «Старый Чультем» 2016 год</p>
							</div>
						</div>
					</div>
					<div class="slider-slide">
						<div class="portfolio__item">
							<div class="portfolio__img">
								<img src="img/portfolio.png" alt="Фотография">
							</div>
							<div class="portfolio__mask">
								<a href="">Подробнее</a>
							</div>
							<div class="portfolio__text">
								<p>Проект Дельта г. «Старый Чультем» 2016 год</p>
							</div>
						</div>
					</div>
					<div class="slider-slide">
						<div class="portfolio__item">
							<div class="portfolio__img">
								<img src="img/portfolio.png" alt="Фотография">
							</div>
							<div class="portfolio__mask">
								<a href="">Подробнее</a>
							</div>
							<div class="portfolio__text">
								<p>Проект Дельта г. «Старый Чультем» 2016 год</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row justify-content-between project-card-portfolio-slider-arrows slider-arrows d-lg-flex d-none">
					<div class="col-auto">
						<img src="img/icons/arrow-left.png" class="project-card-portfolio-slider-prev slider-arrow-left" alt="назад">
					</div>
					<div class="col-auto">
						<img src="img/icons/arrow-right.png" class="project-card-portfolio-slider-next slider-arrow-right" alt="вперед">
					</div>
				</div>

			</div>
		</div>
	</div>
</div>





<?php
	include('html-end.php');
?>