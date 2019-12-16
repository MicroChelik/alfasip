<?php
	include('html-start.php');
?>
<div class="container">
	<div class="row">
		<div class="col-lg-7 offset-lg-3">
			<div aria-label="breadcrumb" class="breadcrumbNav">
				<div class="">
					<ol class="breadcrumb p-0">
				    	<li class="breadcrumb-item"><a href="index.php"><img src="img/icons/home.svg"></a></li>
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
		<div class="col-lg-9 main-content-container">
			<div class="row">
				<div class="col-12">
					<div class="h2-block">
						<h1>Проекты домов из СИП панелей</h1>
						<div class="h2-link">
							<a href="">Все проекты <img src="img/icons/greenH2Arrow.svg" alt="Перейти"></a>
						</div>
					</div>
				</div>
				<div class="col-12">
					<div class="house-selection">
						<h3>Подбор проекта</h3>
						<form class="main-filters">
							<div class="main-filters__range">
								<p class="title">Общая площадь <span lass="help-icon" data-toggle="tooltip" data-placement="top" title="полезная информация"><img src="img/icons/question.svg" alt="подсказка"></span></p>
								<input type="text" id="dd">
								<div class="form-group">
								    <label for="formControlRange">Example Range input</label>
								    <input type="range" min="100" max="200" step="10" class="form-control-range" id="formControlRange">
								  </div>
							</div>
							<div class="main-filters__checkboxes">
								<p class="title">Планировка дома</p>
								<div class="checkbox-div">
									<input type="checkbox" required="" class="checkbox" id="checkbox">
									<label for="checkbox"></label>
									<p>Одноэтажный дом</p>
									<p class="help-icon" data-toggle="tooltip" data-placement="top" title="полезная информация"><img src="img/icons/question.svg" alt="подсказка"></p>
								</div>
								<div class="checkbox-div">
									<input type="checkbox" required="" class="checkbox" id="checkbox2">
									<label for="checkbox2"></label>
									<p>Одноэтажный дом</p>
									<p class="help-icon" data-toggle="tooltip" data-placement="top" title="полезная информация"><img src="img/icons/question.svg" alt="подсказка"></p>
								</div>
								<div class="checkbox-div">
									<input type="checkbox" required="" class="checkbox" id="checkbox3">
									<label for="checkbox3"></label>
									<p>Дом с мансардным этажом</p>
									<p class="help-icon" data-toggle="tooltip" data-placement="top" title="полезная информация"><img src="img/icons/question.svg" alt="подсказка"></p>
								</div>
								<div class="checkbox-div">
									<input type="checkbox" required="" class="checkbox" id="checkbox4">
									<label for="checkbox4"></label>
									<p>Одноэтажный дом</p>
									<p class="help-icon" data-toggle="tooltip" data-placement="top" title="полезная информация"><img src="img/icons/question.svg" alt="подсказка"></p>
								</div>
								<div class="checkbox-div">
									<input type="checkbox" required="" class="checkbox" id="checkbox5">
									<label for="checkbox5"></label>
									<p>Одноэтажный дом</p>
									<p class="help-icon" data-toggle="tooltip" data-placement="top" title="полезная информация"><img src="img/icons/question.svg" alt="подсказка"></p>
								</div>
								<div class="checkbox-div">
									<input type="checkbox" required="" class="checkbox" id="checkbox6">
									<label for="checkbox6"></label>
									<p>Одноэтажный дом</p>
									<p class="help-icon" data-toggle="tooltip" data-placement="top" title="полезная информация"><img src="img/icons/question.svg" alt="подсказка"></p>
								</div>
								<div class="checkbox-div">
									<input type="checkbox" required="" class="checkbox" id="checkbox7">
									<label for="checkbox7"></label>
									<p>Одноэтажный дом</p>
									<p class="help-icon" data-toggle="tooltip" data-placement="top" title="полезная информация"><img src="img/icons/question.svg" alt="подсказка"></p>
								</div>
							</div>
							<div>
								<button class="orangeBtn">Применить фильтр (<span>62</span>)</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<h3>Выбрать проект по площади</h3>
				</div>
				<div class="col-lg-3">
					<div class="project-square-type">
						<div>
							<img src="img/icons/project-icon.png" alt="иконка">
							<p>до 100 м</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="project-square-type">
						<div>
							<img src="img/icons/project-icon.png" alt="иконка">
							<p>до 100 м</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="project-square-type">
						<div>
							<img src="img/icons/project-icon.png" alt="иконка">
							<p>до 100 м</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="project-square-type">
						<div>
							<img src="img/icons/project-icon.png" alt="иконка">
							<p>до 100 м</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row catalog-filters">
				<div class="col-12">
					<p class="catalog-filters__button hide-visible">
						<img src="img/icons/filterArrow.svg" alt="иконка">
						<span class="hide visible">Свернуть фильтры</span>
						<span class="show">Развернуть фильтры</span>
					</p>
				</div>
				<div class="filters show-filters">
					<div class="filters-row">
						<div class="col-lg-6">
							<div class="filter-image-block filter-image-block1">
								<div>
									<img src="img/icons/house-icon.svg" alt="иконка">
									<h3>Дома за миллион</h3>
									<div class="h2-link">
										<a href="">Подробнее<img src="img/icons/greenH2Arrow.svg" alt="Перейти"></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="filter-image-block filter-image-block1">
								<div>
									<img src="img/icons/house-icon.svg" alt="иконка">
									<h3>Дома за миллион</h3>
									<div class="h2-link">
										<a href="">Подробнее<img src="img/icons/greenH2Arrow.svg" alt="Перейти"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="filters-row">
						<div class="col-12">
							<div class="filter-sizes-block">
								<h3>Подбор дома по размерам</h3>
								<div class="filter-sizes-block__line">
									<p class="title">Дома с шириной 5 метров:</p>
									<div><a href="">5 на 5</a></div>
									<div><a href="">5 на 5</a></div>
									<div><a href="">5 на 5</a></div>
								</div>
								<div class="filter-sizes-block__line">
									<p class="title">Дома с шириной 5 метров:</p>
									<div><a href="">5 на 5</a></div>
									<div><a href="">5 на 5</a></div>
									<div><a href="">5 на 5</a></div>
								</div>
								<div class="filter-sizes-block__line">
									<p class="title">Дома с шириной 5 метров:</p>
									<div><a href="">5 на 5</a></div>
									<div><a href="">5 на 5</a></div>
									<div><a href="">5 на 5</a></div>
								</div>
								<div class="filter-sizes-block__line">
									<p class="title">Дома с шириной 5 метров:</p>
									<div><a href="">5 на 5</a></div>
									<div><a href="">5 на 5</a></div>
									<div><a href="">5 на 5</a></div>
								</div>
							</div>
						</div>
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
				</div>
			</div>
			<div class="row catalog-items">
				<div class="col-12">
					<h3>Популярные проекты</h3>
				</div>
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
					for ($i = 1; $i <= 6; $i++) {
					    echo '<div class="col-lg-4">
						    	<div class="projects-slider__slide hide">
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
					}
				?>
				<div class="col-12">
					<div class="show-more">
						<img src="img/icons/refresh.svg" alt="иконка">
						<p>Показать еще (<span>1</span> из <span>9</span>)</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="catalog-banner">
						<div class="catalog-banner__content">
							<h3>Топ 5 ошибок при строительстве</h3>
							<div class="catalog-banner__buttons">
								<button class="orangeBtn"><img src="img/icons/vkWhite.svg" alt="иконка">Получить вконтакте</button>
								<button class="whiteTranspBtn"><img src="img/icons/mailWhite.svg" alt="иконка">Получить через email</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row catalog-text">
				<div class="col-12">
					<h4>Проекты домов от компании</h4>
					<p>
						Стандартные проекты домов из сэндвич-панелей являются неотъемлемой частью каждого строения. Ведь именно от точно выполненного проекта зависит качество и долговечность будущей конструкции. По большей части проектные бюро составляют готовые планы зданий на заказ исходя из требований и пожеланий заказчика. Чаще всего их применяют при строительстве небольших отелей, торговых центров, коттеджей.
					</p>
					<p>
						Первое, что понадобится в этом деле так это проект будущего здания. Следует уделить особое внимание к его построению, не забывая о требованиях и пожеланиях. Если нет возможности построить его самостоятельно исходя из сложности расчётов, то существует масса компанийготовых помочь в этом вопросе. Мы постараемся вам показать все этапы строительства в фотоотчете, с пошаговой инструкцией. Но, все дома индивидуальны, наше фото можно рассматривать только как информационный справочник.
					</p>
					<p>
						Заказчик обязуется предоставить геологическое исследование грунта, либо пре его отсутствии заказать данные работы у специализирующейся организации, ориентировочная стоимость 8000-14000 руб., если по их результатам потребуется увеличение количества, длины, сечения свай и т.п., то данное удорожаниео плачивается заказчиком дополнительно.
					</p>
				</div>
			</div>
			<div class="row catalog-text">
				<div class="col-12">
					<h4>Проекты домов от компании</h4>
					<p>
						Стандартные проекты домов из сэндвич-панелей являются неотъемлемой частью каждого строения. Ведь именно от точно выполненного проекта зависит качество и долговечность будущей конструкции. По большей части проектные бюро составляют готовые планы зданий на заказ исходя из требований и пожеланий заказчика. Чаще всего их применяют при строительстве небольших отелей, торговых центров, коттеджей.
					</p>
					<p>
						Первое, что понадобится в этом деле так это проект будущего здания. Следует уделить особое внимание к его построению, не забывая о требованиях и пожеланиях. Если нет возможности построить его самостоятельно исходя из сложности расчётов, то существует масса компанийготовых помочь в этом вопросе. Мы постараемся вам показать все этапы строительства в фотоотчете, с пошаговой инструкцией. Но, все дома индивидуальны, наше фото можно рассматривать только как информационный справочник.
					</p>
					<p>
						Заказчик обязуется предоставить геологическое исследование грунта, либо пре его отсутствии заказать данные работы у специализирующейся организации, ориентировочная стоимость 8000-14000 руб., если по их результатам потребуется увеличение количества, длины, сечения свай и т.п., то данное удорожаниео плачивается заказчиком дополнительно.
					</p>
				</div>
			</div>
			<div class="row catalog-text">
				<div class="col-12">
					<h4>Проекты домов от компании</h4>
					<p>
						Стандартные проекты домов из сэндвич-панелей являются неотъемлемой частью каждого строения. Ведь именно от точно выполненного проекта зависит качество и долговечность будущей конструкции. По большей части проектные бюро составляют готовые планы зданий на заказ исходя из требований и пожеланий заказчика. Чаще всего их применяют при строительстве небольших отелей, торговых центров, коттеджей.
					</p>
					<p>
						Первое, что понадобится в этом деле так это проект будущего здания. Следует уделить особое внимание к его построению, не забывая о требованиях и пожеланиях. Если нет возможности построить его самостоятельно исходя из сложности расчётов, то существует масса компанийготовых помочь в этом вопросе. Мы постараемся вам показать все этапы строительства в фотоотчете, с пошаговой инструкцией. Но, все дома индивидуальны, наше фото можно рассматривать только как информационный справочник.
					</p>
					<p>
						Заказчик обязуется предоставить геологическое исследование грунта, либо пре его отсутствии заказать данные работы у специализирующейся организации, ориентировочная стоимость 8000-14000 руб., если по их результатам потребуется увеличение количества, длины, сечения свай и т.п., то данное удорожаниео плачивается заказчиком дополнительно.
					</p>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
	include('html-end.php');
?>