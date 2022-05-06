<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta author="Duyebaev Damir">
	<title>Категории</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<?php 
	include('php/db.php');
	$id = $_GET['id'];
	if ($_SERVER["REQUEST_METHOD"] == "POST") 
		{
			header("Location: categories.php?id=$id");
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
			<!-- <div id="table-main" class="container boxShadow">
				<table>
					<tr>
						<th>
							<div class="img">
								<a href="">
									<img src="img/film_1.jpg" alt="">
								</a>					
							</div>
						</th>
						<th class="lin">
							<span></span>
						</th>
						<th>
							<div class="img">
								<a href="">
									<img src="img/film_2.jpg" alt="">
								</a>
							</div>
						</th>
						<th class="lin">
							<span></span>
						</th>
						<th>
							<div class="img">
								<a href="dity_pogidy.html">
									<img src="img/film_3.jpg" alt="">
								</a>
							</div>
						</th>
					</tr>
				</table>
			</div> -->
			<?php 
				$result = mysqli_query($connection, 'SELECT * FROM `advert`');
				$val = mysqli_fetch_row($result);
			?>
			<a href="<?php echo $val[3]; ?>" target="_blank">
				<div id="add" class="ad" style="
				background: url(<?php echo $val[2];?>)  no-repeat center;background-size: 100% 100%;">
				</div>
			</a>
			<?php 
			$result = mysqli_query($connection, 'SELECT * FROM `razdely`');
			$num = mysqli_num_rows($result);

			for ($i=0; $i < $num; $i++) 
			{ 
				$val = mysqli_fetch_row($result);
				if ($val[10] == $id) {
					echo "<div class='container'>";
					echo "<div class='poster'>";
					echo "<a href='o_filme.php?id=$val[0]'>";
					echo "<img src='$val[3]'>";
					echo "</a>";
					echo "</div>";
					echo "<div class='film_span'>";
					echo "<span></span>";
					echo "</div>";
					echo "<div class='opisanie'>";
					echo "<h1>";
					echo $val[1];
					echo "</h1>";
					echo "<p>";
					echo $val[2];
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