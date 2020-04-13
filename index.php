<?php
	$pageTitle = "Главная страница";
	include("./templates/_head.php");
	require("./config.php");
?>

	<!-- white-plate -->
	<div class="white-plate">
		<div class="container-fluid">
			<!-- header -->
				<?php include("./templates/_header.php"); ?>
			<!-- // header -->
			<div class="line-between"></div>
			<!-- content block -->
			<div class="row">
				<!-- Left aside -->
				<?php include("./templates/_aside.php"); ?>
				<!-- // Left aside -->
				<!-- Center Part -->
				<div class="col-md-9 col-lg-10">
					<div class="row">

						<?php 
							// Описываем запрос к базе данных
							$sql = "SELECT * FROM products";

							// Выполняем запрос, результат сохраняем в переменну
							$result = $db->query($sql);

							// Преобразовываем ответ в ассоциативный массив и записываем его в переменную
							$products = $result->fetchAll(PDO::FETCH_ASSOC);

							foreach ($products as $product) {
								include("./templates/_product-item.php");
							}
						?>
						
					</div>
				</div>
				<!-- // Center Part -->
			</div>
			<!-- content block -->
		</div>
	</div>
	<!-- // white-plate -->

<?php include("./templates/_footer.php"); ?>
