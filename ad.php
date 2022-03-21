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
					<a href='/' class='header__logo'>ЛОГО</a>
					<div class='header__menu menu'>
						<nav class='menu__body'>
							<ul class='menu__list'>
								<li class='menu__item'><a href='/' class='menu__link'>Задание 1</a></li>
								<li class='menu__item'><a href='testpage/auth.php' class='menu__link'>Задание 2</a></li>
								<li class='menu__item'><a href='testpage/quest.php' class='menu__link'>Задание 3</a></li>
								<li class='menu__item'><a href='testpage/rand.php' class='menu__link'>Задание 4</a></li>
								<li class='menu__item'><a href='testpage/breadcrums.php' class='menu__link'>Задание 5</a></li>
								<li class='menu__item'><a href='testpage/ajax.php' class='menu__link'>Задание 6</a></li>
							</ul>
						</nav>	
					</div>
					<a type='button' class='menu__icon icon-menu'><span></span></a>
					<div class='header__auth'>
						<img src='images/user_test.png' alt='картинка аватара'>
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
			<main class='_main'>
				<section class='_main_block'>
					<div class='_main_block__container'> 
						<div class='_main_block__content'>
							<div class='block-text'>
								<h1 class='block-text__title'>Стажировка это круто!</h1>
								<div class='block-text__text'>
									<span>— работа в команде;</span><br>
									<span>— реальные проекты;</span><br>
									<span>— оплачиваемая стажировка;</span><br>
									<span>— перспективная отросль.</span><br>
								</div>
								<div class='block-text__safe_button'><a href='' class='block-text__button'>Подробнее</a></div>
							</div>
						</div>
						<div class='_main_block__image'>
							<img src='images/main_test.png' alt='картинка экранов'>
						</div>
					</div>
				</section>
				<section class='_info_block'>
					<div class='_info_block__container'>
						<div class='_info_block__content'>
							<h2 class='info_block__htwotitle'>Свободные вакансии</h2>
							<div class='info_block__list'>
								<div class='info_block__list_content'>
									<div class='info_block__list_content-title'>Программист</div>
									<img src='images/pc1.png' alt='иконки экранов'>
									<div class='infp_block__list_content-text'>Верстка макета, интеграция сайта, программирование</div>
									<button class='infp_block__list_content-button'>Оставить заявку</button>
								</div>
								<div class='info_block__list_content'>
									<div class='info_block__list_content-title'>Программист</div>
									<img src='images/pc2.png' alt='иконки экранов'>
									<div class='infp_block__list_content-text'>Верстка макета, интеграция сайта, программирование</div>
									<button class='infp_block__list_content-button'>Оставить заявку</button>
								</div>
								<div class='info_block__list_content'>
									<div class='info_block__list_content-title'>Программист</div>
									<img src='images/pc3.png' alt='иконки экранов'>
									<div class='infp_block__list_content-text'>Верстка макета, интеграция сайта, программирование</div>
									<button class='infp_block__list_content-button'>Оставить заявку</button>
								</div>
								<div class='info_block__list_content'>
									<div class='info_block__list_content-title'>Программист</div>
									<img src='images/pc4.png' alt='иконки экранов'>
									<div class='infp_block__list_content-text'>Верстка макета, интеграция сайта, программирование</div>
									<button class='infp_block__list_content-button'>Оставить заявку</button>
								</div>
							</div>
							<div class='requirement__list'>
								<div class='requirement__list-content'>
									<h3 class='requirement__list-content-title'>Мы готовы вам предложить</h3>
									<ul class='requirement__list-content-list'>
										<li class='requirement__list-content-list-items'>Обучение под руководством опытного наставника;</li>
										<li class='requirement__list-content-list-items'>Дружелюьный коллектив;</li>
										<li class='requirement__list-content-list-items'>Возможность профессионального и карьерного роста в ИТ-компании;</li>
										<li class='requirement__list-content-list-items'>Официальное трудоустройство.</li>
									</ul>
								</div>
								<div class='requirement__list-content'>
									<h3 class='requirement__list-content-title'>Мы ждем от вас</h3>
									<ul class='requirement__list-content-list'>
										<li class='requirement__list-content-list-items'>Желание и умение обучаться, упорство и целеустремленность;</li>
										<li class='requirement__list-content-list-items'>Базовые знания PHP, JavaScript, MySQL, HTML и CSS;</li>
										<li class='requirement__list-content-list-items'>Нацеленность на развитие и долгосрочное сотрудничество;</li>
										<li class='requirement__list-content-list-items'>Имеешь опыт веб-разработки.</li>
									</ul>
								</div>
							</div>
						</div>
					</div> 					
				</section>
			</main>
			<footer class='_footer'>
				<div class='_footer__container'>
					<div class='_footer__content'>
						<a href='/' class='_footer__logo'>ЛОГО</a>
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