<?php
	include('html-start.php');
?>
<div class="container">
	<div class="row">
		<div class="col-lg-7 offset-lg-3">
			<div aria-label="breadcrumb" class="breadcrumbNav">
				<div class="">
					<ol class="breadcrumb p-0">
				    	<li class="breadcrumb-item"><a href="index.php"><img src="img/icons/home.svg" alt="Главная" alt="Главная"></a></li>
			    		<li class="breadcrumb-item active" aria-current="page">Акции</li>
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
				<div class="row sale-detail">
					<div class="col-12">
						<div class="h2-block d-block">
							<h1>Акции</h1>
							<p>При заказе строительства или домокомлекта коммуникации в подарок</p>
						</div>
					</div>
					<div class="col-12 sale">
						<div class="sale-card">
							<div class="sale-card__text">
								<p class="sale-card__title">Скидка <b>70%</b></p>
								<div class="top-lines">
									<div></div>
								</div>
								<p class="sale-card__description">на свайно-винтовой фундамент!</p>
								<div class="bottom-lines">
									<div class="bottom-lines__short"></div>
									<div class="bottom-lines__long"></div>
								</div>
								<p class="sale-card__date">акция действует до 31.10.2019</p>
							</div>
							<div class="sale-card__image">
								<img src="img/sale.png" alt="Фото акции">
								<div class="greenCircleBg"></div>
							</div>
						</div>
						<p class="subtitle">Условия акции</p>
						<p>
							До 31.10.2019г. при заключении договора на строительство дома из СИП-панелей, и внесении предоплаты вразмере 200 000 рублей предоставляется скидка на свайно-винтовой фундамент в размере 70% от стоимости.
						</p>
						<p>
							Акция распространяется: на все дома в виде скидки 70% от стоимости материалов и/или работ по устройству фундамента в стандартной комплектации (сваи диаметром 89 мм, длиной 3 метра, толщиной стенки 6,5 мм, диаметр лопасти 300 мм, толщина лопасти 5 мм и оголовков к ним толщиной 5 мм в количестве определенном в проектной документации), фундамент под дополнительные сооружения (крыльцо, терраса и т.д.) в акции не участвует
						</p>
						<p>
							Заказчик обязуется предоставить геологическое исследование грунта, либо пре его отсутствии заказать данные работы у специализирующейся организации, ориентировочная стоимость 8000-14000 руб., если по их результатам потребуется увеличение количества, длины, сечения свай и т.п., то данное удорожание оплачивается заказчиком дополнительно.
						</p>
						<p class="subtitle">Дополнительные выгодные предложения</p>
						<ul>
							<li><p>При оплате или предоплате строительства дома до 31 декабря 2018г. вы получаете дополнительно в подарок водонагревательный котел.</p></li>
							<li><p>При заказе и оплате (предоплате) домокомплекта с монтажом в срок проведения акции, вы получаете дополнительно в подарок ванну, раковину и унитаз.</p></li>
						</ul>
						<p>Подробности по условиям акции вы можете уточнить у наших специалистов по телефону:</p>
						<div class="sale__phone">
							<img src="img/icons/greenPhone.svg" alt="Телефон" class="mr-3">
							<p class="mr-3"><a href="tel:8(800)60-01-28">8 (800) 60-01-28</a></p>
							<p>Звонок бесплатный</p>
						</div>
						<div class="d-flex">
							<button class="orangeBtn mr-3"><img src="img/icons/phoneImg.png" alt="Звонок">Получить консультацию</button>
							<button class="greenTranpBtn">Выбрать проект</button>
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