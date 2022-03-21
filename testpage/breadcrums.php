<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Test</title>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">
		<link rel='stylesheet' href='/engine/styles/main.css'>
		<script src='https://code.jquery.com/jquery-3.4.1.min.js' integrity='sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=' crossorigin='anonymous'></script>
   		<script src ='/engine/scripts/main.js'></script>
  		<script type="text/javascript" src="/engine/scripts/js.cookie.min.js"></script>
		<title></title>
	</head>
	<?php
		session_start();
		$uname = $_SESSION['uid'];
	?>
	<body class='new_body' style="overflow: auto;">
		<div class='wrapper'>
			<header class='_header'>
				<div class='_header__container'>
					<a href='/' class='header__logo header__logo_p2'>ЛОГО</a>
					<div class='header__menu menu'>
						<nav class='menu__body'>
							<ul class='menu__list'>
								<li class='menu__item'><a href='/' class='menu__link'>Задание 1</a></li>
								<li class='menu__item'><a href='auth.php' class='menu__link'>Задание 2</a></li>
								<li class='menu__item'><a href='quest.php' class='menu__link'>Задание 3</a></li>
								<li class='menu__item'><a href='rand.php' class='menu__link'>Задание 4</a></li>
								<li class='menu__item'><a href='breadcrums.php' class='menu__link'>Задание 5</a></li>
								<li class='menu__item'><a href='ajax.php' class='menu__link'>Задание 6</a></li>
							</ul>
						</nav>	
					</div>
					<a type='button' class='menu__icon icon-menu'><span></span></a>
					<div class='header__auth'>
						<img src='../images/user_test.png' alt='картинка аватара'>
						<?php
							if(!empty($uname)){
								echo "<div class='auth__text'>Привет ".$uname."!</div>";
							}else{
								echo "<div class='auth__text'>Привет Аноним!</div>";
							}
						
						?>
					</div>
				</div>
			</header>
			<main class='_main _main_auth'>
				<section class='_auth_block'>
					<div class='_auth_block__container'> 
						<div class='_auth_block__content'>
							<h2 class='_auth_block__htwotitle'>Крошки</h2>
							<?php 



								$structure = array(
									'1'=> 'Главная',
									'2'=> 'Каталог', array(
										'3' => 'Телефоны', array(
											'4' => 'iPhone 6',
											'5' => 'iPhone 5',
											'6' => 'iPhone 4',
											'7' => 'Аксессуары'
										),
										'8' => 'Планшеты', array(
											'9' => 'iPad Air',
											'10' => 'iPad Mini',
											'11' => 'Аксессуары'
										),
										'12' => 'Ноутбуки', array(
											'13' => 'Macbook Air',
											'14' => 'Macbook Pro',
											'15' => 'Аксессуары'
										)
									),
									'16' => 'О компании'

								);
								


								$cheks_num = "15";
								function get_breadcrumbs($structure, $cheks_num) {

									$iterator = new \RecursiveIteratorIterator(new \RecursiveArrayIterator($structure));

									$names = [];
									foreach ($iterator as $key => $name) {
									    $depth = floor($iterator->getDepth()/1);

									    $keys[$depth] = $key;
									    $names[$depth] = $name;
									    $ck =  array_slice($keys, 0, $depth + 1);
									    $cn =  array_slice($names, 0, $depth + 1);

									    if (in_array($cheks_num, $ck)) {

										    echo implode(' > ', array_slice($ck, 0, $depth + 1)), '<br>', PHP_EOL;
										    echo implode(' > ', array_slice($cn, 0, $depth + 1)), '<br>', PHP_EOL;
										    break;
										}

									}

								}
								get_breadcrumbs($structure, $cheks_num);
							?>
						</div>
					</div>
				</section>
			</main>
			<footer class='_footer'>
				<div class='_footer__container'>
					<div class='_footer__content'>
						<a href='/' class='_footer__logo header__logo_p2'>ЛОГО</a>
						<div class='_footer_user_data-block'>
							<div class='_footer_fio__usersdate'>Выполнил Климов А.И.</div>
							<div class='_footer_phone__usersdate'>Тел. +7 987 677 33 45</div>
						</div>
					</div>
					<div class='_footer_gray_line'></div>
				</div>
			</footer>

		</div>
	</body>
</html>