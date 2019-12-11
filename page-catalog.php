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
						<h2>Проекты домов из СИП панелей</h2>
						<div class="h2-link">
							<a href="">Все проекты <img src="img/icons/greenH2Arrow.svg" alt="Перейти"></a>
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