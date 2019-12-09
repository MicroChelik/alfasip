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
			<div class="houses-hits-slider">
				<?php 
					for ($i = 1; $i <= 6; $i++) {
					    echo '<div class="houses-hits-slider__slide">
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
	
<?php
	include('html-end.php');
?>