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
			    		<li class="breadcrumb-item active" aria-current="page">О SIP-панелях</li>
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
							<h1>О SIP-панелях</h1>
						</div>
						<p class="h2-block">
							Собственный завод СИП панелей. Оборудование, на котором мы изготавливаем для Вас SIP- панели, признаю не только самым высокотехнологичным, но и самым производительным в России. В итоге ваша выгода не только лучшее качество но и лучшая цена!
						</p>
					</div>
				</div>
				<div class="row panel-link-container">
					<?php 
						for ($i = 1; $i <= 5; $i++) {
							 echo '<div class="col-lg-4">
									<div class="panel-link">
										<div class="panel-link__img">
											<img src="img/panel-link.png" alt="Фотография">
										</div>
										<div class="panel-link__description">
											<div class="panel-link__text">
												<p class="mb-0">
													История SIP-панелей (мировой опыт)
												</p>
											</div>
											<div class="panel-link__item">
												<a href="">Подробнее
													<img src="img/icons/arrowGreenRight.svg" alt="Перейти" class="staticImg">
													<img src="img/icons/arrowWhiteRight.svg" alt="Перейти" class="hoverImg">
												</a>
											</div>
										</div>
									</div>
								</div>';
						}
					?>
					<!-- <div class="col-lg-4">
						<div class="panel-link">
							<div class="panel-link__img">
								<img src="img/panel-link.png" alt="Фотография">
							</div>
							<div class="panel-link__description">
								<div class="panel-link__text">
									<p class="mb-0">
										История SIP-панелей (мировой опыт)
									</p>
								</div>
								<div class="panel-link__item">
									<a href="">Подробнее
										<img src="img/icons/arrowGreenRight.svg" alt="Перейти" class="staticImg">
										<img src="img/icons/arrowWhiteRight.svg" alt="Перейти" class="hoverImg">
									</a>
								</div>
							</div>
						</div>
					</div> -->
				</div>
				<div class="main-content-banner-mask">
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
			</div>
		</div>
	</div>
</div>





<?php
	include('html-end.php');
?>