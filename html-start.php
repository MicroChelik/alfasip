<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css">
	<link rel="stylesheet" type="text/css" href="css/slick.css"/>
	<script src="js/jquery-3.3.1.min.js"></script>
	<title>АльфаСип</title>
</head>
<body>
	<header>
		<div class="container">
			<div class="row first-line">
				<div class="col-3 first-line__logo">
					<img src="img/logo.png" alt="Логотип">
					<p>Строительство домов из SIP панелей в Удмуртии</p>
				</div>
				<div class="col-2">
					<button class="first-line__button">
						<img src="img/icons/calculator.svg" alt="Калькулятор">
						Калькулятор SIP дома
					</button>
				</div>
				<div class="col-3 first-line__actions">
					<div>
						<a href="" class="a-block">
							<img src="img/icons/sale.svg" alt="Акции">
							<p>Акции</p>
						</a>
					</div>
					<div>
					 	<a href="" class="a-block">
					 		<img src="img/icons/like.png" alt="Спецпредложения">
							<p>Спецпредложения</p>
					 	</a>
					</div>
				</div>
				<div class="col-3 d-flex justify-content-end">
					<div class="contacts-card">
						<div class="contacts-card__info">
							<p class="contacts-card__city">Ижевск</p>
							<p class="contacts-card__phone"><a href="tel:+7 (3412) 90-79-61">+7 (3412) 90-79-61</a></p>
							<a class="contacts-card__modal" data-fancybox data-animation-duration="700" data-src="#callBackModal" href="javascript:;">
								<p>Заказать звонок</p>
							</a>
							<div style="display: none;" id="callBackModal" class="animated-modal">
								<div class="card">
									<div class="card-body">
										<div class="modal-title">
											<p>Цена от 123 000 руб.</p>
										</div>
										<div class="modal-subtitle">
											<p>Заказать звонок менеджера</p>
										</div>
										<form action = "javascript: void(null);" method="post" id="">
											<p>Ваше имя:</p>
											<input type="text">
											<p>Email или телефон:</p>
											<input type="text">
											<div>
												<button class="greenBtn">Отправить</button>
											</div>
										</form>
									</div>
								</div>
							</div>
							<div class="contacts-phones">
								<div class="contacts-phones__title">
									<p class="mb-0">Наши телефоны</p>
								</div>
								<div class="contacts-phones__numbers">
									<p><a href="tel:+7(3412)90-72-62">+7 (3412) 90-72-62</a></p>
									<p><a href="tel:+7(919)912-14-14">+7 (919) 912-14-14</a></p>
									<p><a href="tel:+7(3412)915-16-16">+7 (3412) 915-16-16</a></p>
									<p class="mb-0"><a href="tel:+8(800)777-55-33">+8 (800) 777-55-33</a></p>
								</div>
								<p class="contacts-phones__subtitle">Звонок бесплатный</p>
							</div>
						</div>
						<div class="contacts-card__img">
							<img src="img/icons/arrowDown.svg" alt="Раскрыть/Скрыть" class="open-phones">
						</div>
					</div>
				</div>
			</div>
		</div>
		<nav>
			<div class="container">
				<ul>
					<li>
						<a href="" class="active">Главная</a>
					</li>
					<li>
						<a href="">О компании</a>
					</li>
					<li>
						<a href="">Проекты</a>
					</li>
					<li>
						<a href="">Цены</a>
					</li>
					<li>
						<a href="">Строительство</a>
					</li>
					<li>
						<a href="">О SIP-панелях</a>
					</li>
					<li>
						<a href="">Наши работы</a>
					</li>
					<li>
						<a href="">Статьи</a>
					</li>
					<li>
						<a href="">Контакты</a>
					</li>
				</ul>
			</div>
		</nav>
	</header>
	