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
			    		<li class="breadcrumb-item active" aria-current="page">Наши работы:</li>
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
			<div class="main-content-container">
				<div class="row">
					<div class="col-12">
						<div class="h2-block">
							<h1>Наши работы</h1>
						</div>
					</div>
				</div>
				<div class="row portfolio">
					<?php 
						for ($i = 1; $i <= 6; $i++) {
						    echo '<div class="col-lg-4">
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
								</div>';
						};
						for ($i = 1; $i <= 6; $i++) {
						    echo '<div class="col-lg-4">
									<div class="portfolio__item hide">
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
								</div>';
						};
					?>
					<div class="col-12">
						<div class="show-more show-more__portfolio">
							<img src="img/icons/refresh.svg" alt="иконка">
							<p>Показать еще (<span>1</span> из <span>9</span>)</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
	include('html-end.php');
?>