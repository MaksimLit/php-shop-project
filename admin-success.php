<?php
	session_start(); 

	if ( !isset($_SESSION["login"]) || $_SESSION["login"] !== "on" ) {
		header("Location: index.php");
	}

	$pageTitle = "Товар добавлен";
	include("./templates/_head.php");
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
				<div class="col-12">
					<div class="title-1">Товар успешно добавлен</div>

                    <a href="admin.php" class="btn btn-success">Добавить ещё один товар</a>
                    <a href="index.php" class="btn btn-secondary">Перейти на главную</a>
				</div>

			</div>
			<!-- content block -->
		</div>
	</div>
	<!-- // white-plate -->

<?php include("./templates/_footer.php"); ?>