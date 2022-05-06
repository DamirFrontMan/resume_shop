<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta author="Duyebaev Damir">
	<title></title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<?php 
	include('php/db.php');
	$id = $_GET['id'];
	if ($_SERVER["REQUEST_METHOD"] == "POST") 
		{
			header("Location: o_filme.php?id=$id");
		}
	?>
	<div class="main">
		<div class="main_1">
			<div class="head" onclick="pos()">
				<div id="tgg" class="toggle_btn">
					<div class="spn_1">
						<span></span>
						<span></span>
						<span></span>
					</div>
					<div class="spn">
						Меню
					</div>	
				</div>	
				<div id="sidebar">
					<?php 
					$result = mysqli_query($connection, 'SELECT * FROM `catergories`');
					$num = mysqli_num_rows($result);

					for ($i=0; $i < $num; $i++) 
					{ 
						$val = mysqli_fetch_row($result);
						echo "<a class='a_text' href='$val[2]'>";
						echo "<label>";
						echo "$val[1]";
						echo "</label>";
						echo "</a>";
					}
					?>
				</div>
				<div class="logo">
				</div>
				<img src="img_shop_kz/logo.png" alt="">
				<!-- <h1 id="text">
					Cinema
				</h1> -->
				<div id="scrollBtn">

				</div>
			</div>
		</div>
		<div class="main_2">
			<?php 
			$result = mysqli_query($connection, 'SELECT * FROM `razdely` WHERE `id` =' . (int) $id);
			$value = mysqli_fetch_row($result);

			 ?>
			<div id="con_" class="container">
				<div id="fon_Film" class="fon_filma" 
				style="background-image: url(<?php echo $value[4]; ?>);" 
				>
					<h1>
						<?php echo $value[1];?>
					</h1>
				</div>
				<div class="opis_filma">
					<table>
						<tr>
							<th>
								<h1>
									Характеристики
								</h1>
								<table class="o_filme">
									<tr>
										<th>
										<p class="lf">Производство</p>
										<p class="lf">Габариты</p>
										<p class="lf">Вес</p>
										<p class="lf">Сайт производителя</p>
										</th>
										<th>
										<p class="rg"><?php echo $value[5]; ?></p>	
										<p class="rg"><?php echo $value[6]; ?></p>
										<p class="rg"><?php echo $value[7]; ?></p>
										<a href="<?php echo $value[8]; ?>" target="_blank">
										<p class="rg">Ссылка</p>
										</a>
										</th>
									</tr>
								</table>
							</th>
							<th class="lin_film">
								<span></span>
							</th>
							<th>
								<h1>
									Описание товара
								</h1>
								<p class="lin_film info">
									<?php echo $value[2]; ?>
								</p>
							</th>
							<th class="lin_film">
								<span></span>
							</th>
							<th class="Vall">
								<h1>
									Стоимость
								</h1>
								<p>
									<?php echo $value[9]; ?>
								</p>
								<div class="BtnBuy">
									Оформить покупку
								</div>
							</th>
						</tr>
					</table>
				</div>
			</div>
			<?php 
			$id_zakaz = $psev = $phn = $valU = "";

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$valU = $value[9];
				$id_zakaz = $id;
				$psev = $_POST["Psev"];
				$phn = $_POST["Phn"];
				mysqli_query($connection,"INSERT INTO `zakaz` (`phone`, `name` ,`article`,`value`) VALUES('$phn', '$psev' ,'$id_zakaz','$valU')");	
			}
			?>
			<div class="Modal">
				<div class="ModalWindow">
					<H1>
						Заполните форму
					</H1>
					<form class="piska" action="" method="post">
						<input class="BtnZak" placeholder="Номер телефона" type="text" name="Phn" required>
			    		<input class="BtnZak" placeholder="Имя"type="text" name="Psev" required>
			    		<input type="submit" value="Отправить заказ" class="subZak">
					</form>
				</div>
			</div>	
			<?php 
					$id_film = $psevdonim = $comment = "";

					if ($_SERVER["REQUEST_METHOD"] == "POST") {
					  $id_film = $id;
					  $psevdonim = $_POST["Psevdonim"];
					  $comment = $_POST["Comment"];
					  mysqli_query($connection,"INSERT INTO `comments` (`id_film`, `name` ,`comment`) VALUES('$id_film', '$psevdonim' ,'$comment')");	
					}
			?>
			<div class="container">
				<div class="coments">
					<form action="" method="post">
						<div class="lef">
							<p>Псевдоним</p>
							<input placeholder="Псевдоним" type="text" class="sub_txt" name="Psevdonim" required>
						</div>
						<div class="rig">
							<p>Коментарий</p>
							<input placeholder="Комментарий" type="text" class="sub_txt" name="Comment" required>	
						</div>
						<input type="submit" value="Оставить коментарий" class="sub_Btn">
					</form>
				</div>
			</div>
			<?php 
			$result = mysqli_query($connection, 'SELECT * FROM `comments` WHERE `id_film` = ' . $id);
			$num = mysqli_num_rows($result);
			if (empty($val)) 
			{

			}
			else
			{
				for ($i=0; $i < $num; $i++) { 
					$val = mysqli_fetch_row($result);
					 echo "<div class='container'>";
					 echo "<div class='com'>";
					 echo "<h1>";
					 echo $val[2];
					 echo "</h1>";
					 echo "<p>";
					 echo $val[3];
					 echo "</p>";
					 echo "</div>";
					 echo "</div>";
				}
			
			}
			?>
			<div class="foot">
				<div>
					<h1>Центральный офис филиала</h1>
					<p>г. Алматы, ул. Макатаева, 117 (корпус "А"), уг. ул. Масанчи, Бизнес-центр "Lotos"</p>
				</div>
				<div class="foot_tm">
					<h1>
						© 2007—2022 ТОО «Белый Ветер KZ»
					</h1>
				</div>
				<div class="foot_cont">
					<h1>
						Контакты
					</h1>
					<h1>
						+7 (727) 356-53-10
					</h1>
					<h1>
						+7 (727) 356-53-09
					</h1>
				</div>
			</div>
		</div>		
	</div>
	<script src="js/script.js"></script>	
</body>
</html>