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
				    	<li class="breadcrumb-item"><a href="index.php">Строительство</a></li>
			    		<li class="breadcrumb-item active" aria-current="page">Этапы строительства СИП дома</li>
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
						<h1 class="mb-4">Этапы строительства СИП дома</h1>
						<p>
							Одноэтажный дом по проекту, разработанному индивидуально для заказчика в комплектации под ключ по канадской каркасной технологии в Солнечногорском районе. 
						</p>
						<p>
							Наружная и внутренняя отделка дома - имитация бруса класса А, наружный фасад выкрашен в нежный кремовый цвет. Кровля - металочерепмца 0,5 мм, свесы подшивы ПВХ софитами.
						</p>
					</div>
				</div>
				<div class="row stage-row">
					<div class="col-12">
						<h2 class="greenH2">Этапы строительства дома из СИП панелей</h2>
					</div>
					<?php 
						for ($i = 1; $i <= 6; $i++) {
						    echo '<div class="col-lg-4">
									<div class="stage">
										<div class="stage__img">
											<img src="img/stage.png" alt="Фотография">
										</div>
										<div class="stage__text">
											<p>Проектирование</p>
											<div class="h2-link">
												<a href="">Подробнее <img class="staticImg" src="img/icons/greenH2Arrow.svg" alt="Перейти"><img src="img/icons/arrowWhiteRight.svg" alt="Перейти" class="hoverImg"></a>
											</div>
										</div>
									</div>
								</div>';
						};
					?>
					<!-- <div class="col-lg-4">
						<div class="stage">
							<div class="stage__img">
								<img src="img/stage.png" alt="Фотография">
							</div>
							<div class="stage__text">
								<p>Проектирование</p>
								<div class="h2-link">
									<a href="">Подробнее <img class="staticImg" src="img/icons/greenH2Arrow.svg" alt="Перейти"><img src="img/icons/arrowWhiteRight.svg" alt="Перейти" class="hoverImg"></a>
								</div>
							</div>
						</div>
					</div> -->
				</div>
				
				
			</div>
		</div>
	</div>
</div>





<?php
	include('html-end.php');
?>