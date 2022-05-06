<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta author="Duyebaev Damir">
	<title>О нас</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/animate.css">
</head>
<body>
	<?php 
	include('php/db.php');
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
			<div id="table-main" class="container boxShadow">
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
								<a href="">
									<img src="img/film_3.jpg" alt="">
								</a>
							</div>
						</th>
					</tr>
				</table>
			</div>
			<!-- <a href="https://m.1xbet.kz/?whn=desctop" target="_blank">
				<div id="add" class="ad">
				</div>
			</a> -->
			<div class="container">
				<div class="container_2"> 
					<div id="pos_opis" class="wow fadeInLeft">
					<img src="img/imax.jpg" alt="">
				</div>
				<div id="pos_spn">
					<span></span>
				</div>
				<div class="opisanie wow fadeInRight">
					<p>
						Комплекс технологий, призванный обеспечить непревзойденное качество демонстрации фильмов — два проектора, лазерная система выравнивания звука и запатентованная геометрия зала. Кристально чистое изображение, простирающееся за область геометрического распознавания, вместе с совершенным цифровым звуком заставляет зрителей поверить в реальность происходящего на экране. 
					</p>
				</div>	
					<div style="margin:5%; position:relative;overflow:hidden;"><a href="https://yandex.kz/maps/org/almatinskiy_filial_sankt_peterburgskogo_gumanitarnogo_universiteta_profsoyuzov/1914283550/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Алматинский филиал Санкт-Петербургского Гуманитарного университета профсоюзов</a><a href="https://yandex.kz/maps/162/almaty/category/university_college/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:14px;">ВУЗ в Алматы</a><iframe src="https://yandex.kz/map-widget/v1/-/CSxWJKP6" width="100%" height="1000" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe></div>		
				<div id="dolby" class="wow fadeInUp">
					<span></span>
					<h1>
						Dolby Atmos
					</h1>
					<p>
						Ключевое решение в системе Dolby Atmos заключается в переносе акцента на аудиообъекты - «единицы» звука, которые имеют определенный источник на экране и могут перемещаться по ходу сюжета. Благодаря системе Dolby Atmos границы между зрителем и фильмом становятся весьма эфемерными. Человек оказывается уже не по ту сторону экрана, а в самой гуще событий, переживая, тем самым, невероятный кинотеатральный опыт. Ключевое решение в системе Dolby Atmos заключается в переносе акцента на аудиообъекты - «единицы» звука, которые имеют определенный источник на экране и могут перемещаться по ходу сюжета. Благодаря системе Dolby Atmos границы между зрителем и фильмом становятся весьма эфемерными. Человек оказывается уже не по ту сторону экрана, а в самой гуще событий, переживая, тем самым, невероятный кинотеатральный опыт. 
					</p>
				</div>
				<div id="laser" class="wow fadeInUp">
					<span></span>
					<h1>
						Laser
					</h1>
					<p>
						В кинотеатре представлена вся линейка последнего поколения лазерно-фосфорных и лазерных RB-проекторов. Среди преимуществ лазерного оборудования можно выделить:
					</p>
					<ul>
						<li>четкий контраст;</li>
						<li>расширенную цветовую гамму (более глубокие синий и черный цвета);</li>
						<li>стабильную яркость и равномерное ее распределение по экрану (до 90%);</li>
						<li>Срок службы лазерного источника более 20 тысяч часов, а это значит, что зрителя ожидает высокое качество изображения как на первых порах, так и через год после инсталляции. </li>
					</ul>
				</div>
				<div id="premium" class="wow fadeInUp">
					<span></span>
					<h1>
						Premium
					</h1>
					<p>
						Концепция залов данной категории строится на трех составляющих - прогрессивные технологии, повышенный комфорт и сервис от ресторана Fellini Grill Pasta Bar, также расположенного в VIP-зоне кинотеатра. Для удобства зрителей, разработано специальное меню от шеф-повара ресторана, блюда и напитки из которого доставляются прямо в зал. В качестве комплимента гостям залов First Class Laser предоставляется напиток (вода/сок или игристое вино), поп-корн и два вида канапе (фруктовое и сырное).
					</p>
				</div>	
				<div class="block_gal wow fadeInUp">
					<span></span>
					<div class="block_gal_sec">
						<div class="kino_1 wow fadeInLeft">
							
						</div>
						<div id="gal_spn">
							<span></span>
						</div>
						<div class="kino_2 wow fadeInRight">
							
						</div>
					</div>
					<div class="block_gal_sec">
						<div class="kino_3 wow fadeInLeft">
							
						</div>
						<div id="gal_spn">
							<span></span>
						</div>
						<div class="kino_4 wow fadeInRight">
							
						</div>
					</div>
					<span></span>
				</div>
				</div>				
			</div>
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
	<script src="js/wow.min.js"></script>
	<script>
              new WOW().init();
    </script>
</body>
</html>