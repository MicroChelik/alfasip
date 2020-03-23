	<header>
		<div class="container desktop-header">
			<div class="row first-line">
				<div class="col-auto first-line__logo">
					<img src="img/logo.png" alt="Логотип">
					<p>Строительство домов <br> из SIP панелей в Удмуртии</p>
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
							<p class="contacts-card__phone"><a href="tel:+7(3412)90-79-61">+7 (3412) 90-79-61</a></p>
							<a class="contacts-card__modal a-modal" data-fancybox data-animation-duration="700" data-src="#callBackModal" href="javascript:;">
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
										<form action = "javascript: void(null);" method="post">
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
		<nav class="desktop-header">
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
		<div class="mobile-menu">
			<div class="mobile-menu__container">
				<div class="mobile-menu__column">
					<div class="mobile-menu__block">
						<button class="first-line__button">
							<img src="img/icons/calculator.svg" alt="Калькулятор">
							Калькулятор SIP дома
						</button>
					</div>
					<div class="mobile-menu__block">
						<h3>Проекты домов</h3>
						<ul class="ul-list ul-disc-hover">
							<li><a href="">Дома до 100 м<small><sup>2</sup></small> </a></li>
							<li><a href="">Дома 100-150 м<small><sup>2</sup></small> </a></li>
							<li><a href="">Дома 150-200 м<small><sup>2</sup></small> </a></li>
							<li><a href="">Дома от 200 м<small><sup>2</sup></small> </a></li>
						</ul>
					</div>
					<div class="mobile-menu__block mobile-menu__block_h3">
						<h3 class="mb-1"><a href="" class="hoverA">Акции</a></h3>
						<h3 class="mb-0"><a href="" class="hoverA">Спецпредложения</a></h3>
					</div>
					<div class="mobile-menu__block">
						<ul>
							<li><a href="">О компании</a></li>
							<li><a href="">Производство</a></li>
							<li>
								<div class="d-flex align-items-center justify-content-between">
									<a href="" class="hoverA">Строительство</a>
									<img src="img/icons/greenArrow.svg" class="mobile-menu__toggle" alt="раскрыть/скрыть">
								</div>
								<ul class="ul-list ul-disc-hover">
									<li><a href="">Этапы работ</a></li>
									<li><a href="">Видео</a></li>
									<li><a href="">Дома от производителя</a></li>
								</ul>
							</li>
							<li>
								<div class="d-flex align-items-center justify-content-between">
									<a href="" class="hoverA">Цены</a>
									<img src="img/icons/greenArrow.svg" class="mobile-menu__toggle" alt="раскрыть/скрыть">
								</div>
								<ul class="ul-list ul-disc-hover">
									<li><a href="">Цены на домокомплекты</a></li>
									<li><a href="">Цены на строительство</a></li>
								</ul>
							</li>
							<li><a href="">О SIP-панелях</a></li>
							<li><a href="">Сотрудничество</a></li>
							<li><a href="">Наши работы</a></li>
							<li><a href="">Статьи</a></li>
							<li><a href="">Контакты</a></li>
						</ul>
					</div>
				</div>
				<div>
					<img src="img/icons/close.svg" class="closeMenu">
				</div>
			</div>
		</div>
		<div class="container mobile-header">
			<div class="row mobile-header__top-line">
				<div class="col-auto">
					<div class="menuFive menuFiveMob">
	                     <span></span>
	                     <span></span>
	                     <span></span>
	                </div>
				</div>
				<div class="col-auto">
					<div class="d-flex align-items-center">
						<img src="img/logoMob.png">
						<p class="logo-text">
							Строительство домов<br>из SIP панелей в Удмуртии
						</p>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-auto mobile-call">
					<p>
						<a href="tel:8(800)600-01-28">8 (800) 600-01-28 <img src="img/icons/phoneMobile.svg"></a>
					</p>
				</div>
			</div>
		</div>
	</header>