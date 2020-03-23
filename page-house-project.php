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
			<div class="main-content-container">
				<div class="row">
					<div class="col-12">
						<div class="h2-block mb-lg-4">
							<h1>Проект дома «Альфа» 105 (91) м<sup><small>2</small></sup></h1>
						</div>
					</div>
				</div>
				<div class="row house-projects-row">
					<div class="col-lg-7">
						<div class="house-projects-slider slider">
							<div class="house-projects-slider__slide slider-slide">
								<div>
									<a href="img/house-projects-slider.png" data-fancybox="images">
										<img src="img/house-projects-slider.png" alt="Фото дома">
									</a>
								</div>
							</div>
							<div class="house-projects-slider__slide slider-slide">
								<div>
									<a href="img/house-projects-slider.png" data-fancybox="images">
										<img src="img/house-projects-slider.png" alt="Фото дома">
									</a>
								</div>
							</div>
						</div>
						<div class="house-plan">
							<div class="house-plan__photo">
								<a href="img/house-plan__photo1.png" data-fancybox="images">
									<img src="img/house-plan__photo1.png" alt="Фото дома">
								</a>
							</div>
							<div class="house-plan__photo">
								<a href="img/house-plan__photo2.png" data-fancybox="images">
									<img src="img/house-plan__photo2.png" alt="Фото дома">
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-5 house-project-description">
						<div class="house-table">
							<div class="house-table__item">
								<div>
									<p>Габаритная площадь</p>
									<p class="house-table__count">70 М<sup><small>2</small></sup></p>
								</div>
							</div>
							<div class="house-table__item">
								<div>
									<p>Габаритные размеры</p>
									<p class="house-table__count">7,25 х 9,4 м</p>
								</div>
							</div>
							<div class="house-table__item">
								<div>
									<p>Колличество этажей</p>
									<p class="house-table__count">1</p>
								</div>
							</div>
							<div class="house-table__item">
								<div>
									<p>Колличество комнат</p>
									<p class="house-table__count">3</p>
								</div>
							</div>
							<div class="house-table__item">
								<div>
									<p>Высота 1-го этажа </p>
									<p class="house-table__count">2,5 М</p>
								</div>
							</div>
							<div class="house-table__item">
								<div>
									<p>Высота 2-го этажа </p>
									<p class="house-table__count">-</p>
								</div>
							</div>
							<div class="house-table__item">
								<div>
									<p>Площадь помещений</p>
									<p class="house-table__count">60 М<sup><small>2</small></sup></p>
								</div>
							</div>
							<div class="house-table__item">
								<div>
									<p>Площадь застройки</p>
									<p class="house-table__count">70 М<sup><small>2</small></sup></p>
								</div>
							</div>
						</div>
						<div class="green-link">
						
								<span>Цена от 123 000 руб.</span>
							
						</div>
						<div class="greenWhiteTranspBtn">
							<button class="whiteTranspBtn"><img src="img/icons/calculatorGreen.svg" alt="Калькулятор">Конфигуратор строительства</button>
						</div>
						<div class="call-card">
							<form>
								<p>Заказать звонок менеджера</p>
								<input type="text" placeholder="Ваше имя:">
								<input type="tel" placeholder="Ваш телефон:">
								<button class="orangeBtn" type="submit">Записаться на консультацию</button>
							</form>
						</div>
					</div>
				</div>
				<div class="row house-projects-row">
					<div class="col-lg-4 house-project-advantage">
						<div class="house-project-advantage__img">
							<img src="img/icons/house-project-advantage__img1.svg">
						</div>
						<div class="house-project-advantage__text">
							<p>Корректировка проекта <br> Бесплатно!</p>
						</div>
					</div>
					<div class="col-lg-4 house-project-advantage">
						<div class="house-project-advantage__img">
							<img src="img/icons/house-project-advantage__img2.svg">
						</div>
						<div class="house-project-advantage__text">
							<p>Сроки строительства дома от 7 до 30 дней</p>
						</div>
					</div>
					<div class="col-lg-4 house-project-advantage">
						<div class="house-project-advantage__img">
							<img src="img/icons/house-project-advantage__img3.svg" alt="Преимущество">
						</div>
						<div class="house-project-advantage__text">
							<p>Возможность поэтапной оплаты строительства</p>
						</div>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-12 mob-px-0">
						<div class="estimate-title">
							<p class="mb-0">Состав материалов и работ</p>
						</div>
						<div class="estimate">
							<p class="estimate__title">Реальная стоимость может отличаться в большую или меньшую сторону.</p>
							<div class="estimate__item active">
								<div class="checkbox-div">
									<input type="checkbox" checked="checked" required="" class="checkbox" id="estimate-checkbox">
									<label for="estimate-checkbox"></label>
									<p>Фундамент. свайно-винтовой</p>
								</div>
							</div>
							<div class="estimate__item active">
								<div class="checkbox-div">
									<input type="checkbox" checked="checked"  required="" class="checkbox" id="estimate-checkbox2">
									<label for="estimate-checkbox2"></label>
									<p>Комплект СИП-панелей</p>
								</div>
							</div>
							<div class="estimate__item active">
								<div class="checkbox-div">
									<input type="checkbox" checked="checked"  required="" class="checkbox" id="estimate-checkbox3">
									<label for="estimate-checkbox3"></label>
									<p>Комплект пиломатериал</p>
								</div>
							</div>
							<div class="estimate__item active">
								<div class="checkbox-div">
									<input type="checkbox" checked="checked"  required="" class="checkbox" id="estimate-checkbox4">
									<label for="estimate-checkbox4"></label>
									<p>Комплект пены и метизов</p>
								</div>
							</div>
							<div class="estimate__item active">
								<div class="checkbox-div">
									<input type="checkbox" checked="checked"  required="" class="checkbox" id="estimate-checkbox5">
									<label for="estimate-checkbox5"></label>
									<p>Монтаж коробки дома</p>
								</div>
							</div>
							<div class="estimate__item active">
								<div class="checkbox-div">
									<input type="checkbox" checked="checked"  required="" class="checkbox" id="estimate-checkbox6">
									<label for="estimate-checkbox6"></label>
									<p>Стропильная система</p>
								</div>
							</div>
							<div class="estimate__item">
								<div class="checkbox-div">
									<input type="checkbox" required="" class="checkbox" id="estimate-checkbox7">
									<label for="estimate-checkbox7"></label>
									<p>Кровельное покрытие металлочерепица</p>
								</div>
							</div>
							<div class="estimate__item">
								<div class="checkbox-div">
									<input type="checkbox" required="" class="checkbox" id="estimate-checkbox8">
									<label for="estimate-checkbox8"></label>
									<p>Окна</p>
								</div>
							</div>
							<div class="estimate__item">
								<div class="checkbox-div">
									<input type="checkbox" required="" class="checkbox" id="estimate-checkbox9">
									<label for="estimate-checkbox9"></label>
									<p>Входная дверь</p>
								</div>
							</div>
							<div class="estimate__item">
								<div class="checkbox-div">
									<input type="checkbox" required="" class="checkbox" id="estimate-checkbox10">
									<label for="estimate-checkbox10"></label>
									<p>Наружная отделка стен</p>
								</div>
							</div>
							<div class="estimate__item">
								<div class="checkbox-div">
									<input type="checkbox" required="" class="checkbox" id="estimate-checkbox11">
									<label for="estimate-checkbox11"></label>
									<p>Отделка цоколя</p>
								</div>
							</div>
							<div class="estimate__item">
								<div class="checkbox-div">
									<input type="checkbox" required="" class="checkbox" id="estimate-checkbox12">
									<label for="estimate-checkbox12"></label>
									<p>Облицовка свесов кровли</p>
								</div>
							</div>
							<div class="estimate__item">
								<div class="checkbox-div">
									<input type="checkbox" required="" class="checkbox" id="estimate-checkbox13">
									<label for="estimate-checkbox13"></label>
									<p>Крыльцо</p>
								</div>
							</div>
							<div class="estimate-price">
								<p>Итого: 2 755 200‬ руб.</p>
							</div>
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