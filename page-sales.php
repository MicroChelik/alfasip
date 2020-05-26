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
		<div class="col-lg-9 pr-lg-0">
			<div class="main-content-container page-sales">
				<div class="row">
					<div class="col-12">
						<div class="h2-block">
							<h1>Акции</h1>
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
						<p class="subtitle">При заказе строительства или домокомлекта коммуникации в подарок</p>
						<ul>
							<li><p>Условие акции кратко 1</p></li>
							<li><p>Условие акции кратко 2</p></li>
							<li><p>Условие акции кратко 1</p></li>
							<li><p>Условие акции кратко 2</p></li>
							<li><p>Условие акции кратко 1</p></li>
							<li><p>Условие акции кратко 2</p></li>
						</ul>
						<button class="greenBtn page-sales-greenBtn">Детали акции</button>
					</div>
					<div class="col-12 sale sale-end">
						<div class="sale-card">
							<img src="img/saleEnd.png" alt="Акция завершена" class="sale-end__img">
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
						<p class="subtitle">При заказе строительства или домокомлекта коммуникации в подарок</p>
						<ul>
							<li><p>Условие акции кратко 1</p></li>
							<li><p>Условие акции кратко 2</p></li>
							<li><p>Условие акции кратко 1</p></li>
							<li><p>Условие акции кратко 2</p></li>
							<li><p>Условие акции кратко 1</p></li>
							<li><p>Условие акции кратко 2</p></li>
						</ul>
						<button class="greenBtn page-sales-greenBtn">Детали акции</button>
					</div>
					<div class="col-12 sale sale-end">
						<div class="sale-card">
							<img src="img/saleEnd.png" alt="Акция завершена" class="sale-end__img">
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
						<p class="subtitle">При заказе строительства или домокомлекта коммуникации в подарок</p>
						<ul>
							<li><p>Условие акции кратко 1</p></li>
							<li><p>Условие акции кратко 2</p></li>
							<li><p>Условие акции кратко 1</p></li>
							<li><p>Условие акции кратко 2</p></li>
							<li><p>Условие акции кратко 1</p></li>
							<li><p>Условие акции кратко 2</p></li>
						</ul>
						<button class="greenBtn page-sales-greenBtn">Детали акции</button>
					</div>
					<div class="col-12">
						<div class="show-more show-more__sales">
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