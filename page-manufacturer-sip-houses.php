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
				    	<li class="breadcrumb-item"><a href="index.php">Строительство</a></li>
			    		<li class="breadcrumb-item active" aria-current="page">Дома от производителя</li>
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
			<div class="main-content-container manufacturer">
				<div class="row manufacturer-block">
					<div class="col-12">
						<div class="h2-block">
							<h1>Дома из СИП-панелей от производителя</h1>
						</div>
						<p>
							Одноэтажный дом по проекту, разработанному, индивидуально для заказчика в комплектации под ключ по канадской каркасной технологии в Солнечногорском районе. Наружная и внутренняя отделка дома - имитация бруса класса А, наружный фасад выкрашен в нежныйкремовый цвет. Кровля - металлочерепица 0,5 мм, свесы подшиты ПВХ софитами.
						</p>
						<p>
							Одноэтажный дом по проекту, разработанному, индивидуально для заказчика в комплектации под ключпо канадской каркасной технологии в Солнечногорском районе. Наружная и внутренняя отделка дома - имитация бруса класса А, 
						</p>
					</div>
				</div>
				<div class="row manufacturer-block houses-options-container">
					<div class="col-12">
						<h2>Варианты домов</h2>
					</div>
					<?php 
						for ($i = 1; $i <= 5; $i++) {
						    echo '<div class="col-lg-4">
									<a href="">
										<div class="houses-options">
											<div class="houses-options__img">
												<img src="img/houses-options.png">
											</div>
											<div class="houses-options__text">
												<p class="houses-options__value">Коттеджи</p>
												<p class="houses-options__count">135 - проектов</p>
											</div>
										</div>
									</a>
								</div>';
						}
					?>
					<!-- <div class="col-lg-4">
						<a href="">
							<div class="houses-options">
								<div class="houses-options__img">
									<img src="img/houses-options.png">
								</div>
								<div class="houses-options__text">
									<p class="houses-options__value">Коттеджи</p>
									<p class="houses-options__count">135 - проектов</p>
								</div>
							</div>
						</a>
					</div> -->
					
				</div>
				<div class="row manufacturer-block">
					<div class="col-12">
						<h2>Выбрать проект по площади</h2>
					</div>
					<?php 
						for ($i = 1; $i <= 4; $i++) {
						    echo '<div class="col-lg-3">
									<div class="project-square-type">
										<div>
											<img src="img/icons/project-icon.png" alt="иконка">
											<p>до 100 м<sup><small>2</small></sup></p>
										</div>
									</div>
								</div>';
						}
					?>
					<!-- <div class="col-lg-3">
						<div class="project-square-type">
							<div>
								<img src="img/icons/project-icon.png" alt="иконка">
								<p>до 100 м<sup><small>2</small></sup></p>
							</div>
						</div>
					</div> -->
					
				</div>
				<div class="row manufacturer-block ">
					<div class="col-12">
						<h2>Преимущества заказа напрямую с завода</h2>
						<p>
							Одноэтажный дом по проекту, разработанному, индивидуально для заказчика в комплектации под ключ по канадской каркасной технологии в Солнечногорском районе. Наружная и внутренняя отделка дома - имитация бруса класса А, наружный фасад выкрашен в нежный кремовый цвет. Кровля - металлочерепица 0,5 мм
						</p>
					</div>
				</div>
				<div class="row manufacturer-block manufacturer-advantage-container">
					<?php 
						for ($i = 1; $i <= 3; $i++) {
						    echo '<div class="col-lg-4 manufacturer-advantage">
									<div class="manufacturer-advantage__block">
										<img src="img/icons/manufacturer-advantage.svg">
										<div>
											<p>Преимущество 1</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 manufacturer-advantage">
									<div class="manufacturer-advantage__block">
										<img src="img/icons/manufacturer-advantage.svg">
										<div>
											<p>Преимущество 2 в две строчки</p>
										</div>
									</div>
								</div>';
						}
					?>
					<!-- <div class="col-lg-4 manufacturer-advantage">
						<div class="manufacturer-advantage__block">
							<img src="img/icons/manufacturer-advantage.svg">
							<div>
								<p>Преимущество 1</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 manufacturer-advantage">
						<div class="manufacturer-advantage__block">
							<img src="img/icons/manufacturer-advantage.svg">
							<div>
								<p>Преимущество 2 в две строчки</p>
							</div>
						</div>
					</div> -->
				</div>
				<div class="row manufacturer-block">
					<div class="col-12">
						<h2>Здесь можно добавить текст, если будет что писать</h2>
						<p>
							В первую очередь необходим проект, который вы можете выбрать на нашем на сайте в разделе "проекты домов из СИП панелей" или заказать по вашим размерам индивидуальную разработку.
						</p>
						<p>
							В первую очередь необходим проект, который вы можете выбрать на нашем на сайте в разделе "проекты домов из СИП панелей" или заказать по вашим размерам индивидуальную разработку.
						</p>
						<p>
							В первую очередь необходим проект, который вы можете выбрать на нашем на сайте в разделе "проекты домов из СИП панелей" или заказать по вашим размерам индивидуальную разработку.
						</p>
						<p>
							В первую очередь необходим проект, который вы можете выбрать на нашем на сайте в разделе "проекты домов из СИП панелей" или заказать по вашим размерам индивидуальную разработку. Далее по проекту на нашем производстве мы готовим домокомплект со всем необходимым строительным материалом. На странице раздела "Прайс-лист на строительство", вы можете ознакомиться с комплектаций. Если вы хотите построить дом своими силами, то при заказе домокомплекта у нас специалисты подготовят для вас подробную инструкцию по сборке и проведут консультации по строительству, чтобы во избежание ошибок.
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