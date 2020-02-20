<?php
	include('html-start.php');
?>
<div class="container">
	<div class="row">
		<div class="col-lg-7 offset-lg-3">
			<div aria-label="breadcrumb" class="breadcrumbNav">
				<div class="">
					<ol class="breadcrumb p-0">
				    	<li class="breadcrumb-item"><a href="index.php"><img src="img/icons/home.svg" alt="Главная"></a></li>
			    		<li class="breadcrumb-item active" aria-current="page">Калькулятор</li>
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
						<h1 class="mb-3">Результаты расчёта</h1>
						<h3 class="mb-1">Предварительная смета</h3>
						<p>На изготовление комплекта дома из SIP-панелей и сборкой домокомплекта</p>
					</div>
					<div class="col-12">
						<p class="calculation-title">Заголовок по расчету 1 блока</p>
						<div class="calculation-table">
							<div class="calculation-table__row">
								<div class="calculation-table__service">
									<p>Тип конструкции:</p>
								</div>
								<div class="calculation-table__count">
									<p>2 этажа + крыша</p>
								</div>
							</div>
							<div class="calculation-table__row">
								<div class="calculation-table__service">
									<p>Тип конструкции:</p>
								</div>
								<div class="calculation-table__count">
									<p>2 этажа + крыша</p>
								</div>
							</div>
							<div class="calculation-table__row">
								<div class="calculation-table__service">
									<p>Тип конструкции:</p>
								</div>
								<div class="calculation-table__count">
									<p>2 этажа + крыша</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12">
						<p class="calculation-title">Заголовок по расчету 2 блока</p>
						<div class="calculation-table">
							<div class="calculation-table__row">
								<div class="calculation-table__service">
									<p>Тип конструкции:</p>
								</div>
								<div class="calculation-table__count">
									<p>2 этажа + крыша</p>
								</div>
							</div>
							<div class="calculation-table__row">
								<div class="calculation-table__service">
									<p>Тип конструкции:</p>
								</div>
								<div class="calculation-table__count">
									<p>2 этажа + крыша</p>
								</div>
							</div>
							<div class="calculation-table__row">
								<div class="calculation-table__service">
									<p>Тип конструкции:</p>
								</div>
								<div class="calculation-table__count">
									<p>2 этажа + крыша</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12">
						<div class="final-price">
							<p>Итого: <span>1 980 622 рублей</span></p>
							<button class="print">Печать</button>
						</div>
						<p class="mb-4">
							Болеее точная смета составляется после разработки архитектурно-планировачного и конструктивного решения. Возможно изготовление SIP-панелей различной толщины по индивидуальному заказу.
						</p>
						<div class="calculation-buttons">
							<button class="greenBtn">Заказать подробный расчёт проекта</button>
							<button class="greenTranpBtn">Новый расчёт</button>
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