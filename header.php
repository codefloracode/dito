<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon.ico">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header id="header">
		<a href="/" class="logo">
			<svg width="auto" height="40px" viewBox="0 0 188 84" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M20.3508 83.7672C15.9159 83.7672 12.0983 82.6333 8.89818 80.3654C5.72321 78.0724 3.45537 74.7085 2.09467 70.2736C0.75917 65.8135 0.633179 60.3455 1.7167 53.8696C2.82542 47.2172 4.81608 41.6862 7.68867 37.2766C10.5613 32.8417 13.963 29.5281 17.8939 27.3359C21.8248 25.1184 25.9195 24.0097 30.178 24.0097C33.4034 24.0097 36.0114 24.5641 38.0021 25.6728C40.0179 26.7563 41.5676 28.117 42.6511 29.7549C43.7347 31.3676 44.4906 32.9551 44.919 34.5174H45.4103L50.2862 5.41347H66.35L53.499 82.8223H37.6241L39.1738 73.5241H38.4934C37.4855 75.1368 36.15 76.7369 34.4869 78.3244C32.849 79.8867 30.8584 81.1844 28.515 82.2175C26.1967 83.2506 23.4753 83.7672 20.3508 83.7672ZM27.4566 70.9539C30.0268 70.9539 32.3451 70.2484 34.4113 68.8373C36.4776 67.401 38.2163 65.3977 39.6274 62.8275C41.0385 60.2573 42.0212 57.2461 42.5755 53.794C43.1551 50.3418 43.1677 47.3432 42.6133 44.7982C42.059 42.2532 40.9755 40.2877 39.3628 38.9018C37.7753 37.5159 35.6712 36.823 33.0506 36.823C30.4048 36.823 28.0614 37.5411 26.0203 38.9774C24.0045 40.4137 22.3288 42.4044 20.9933 44.9494C19.683 47.4944 18.7507 50.4426 18.1963 53.794C17.6419 57.1705 17.6041 60.1565 18.0829 62.7519C18.5617 65.3221 19.5822 67.338 21.1445 68.7995C22.7068 70.2358 24.8108 70.9539 27.4566 70.9539ZM63.5065 82.8223L73.1826 24.7657H89.2843L79.6082 82.8223H63.5065ZM82.8965 17.2062C80.5027 17.2062 78.5246 16.4125 76.9624 14.825C75.4253 13.2123 74.7953 11.2972 75.0725 9.0798C75.3497 6.81197 76.4332 4.89691 78.3231 3.33462C80.2129 1.74714 82.3548 0.953392 84.7486 0.953392C87.1424 0.953392 89.0953 1.74714 90.6072 3.33462C92.1191 4.89691 92.749 6.81197 92.497 9.0798C92.245 11.2972 91.1741 13.2123 89.2843 14.825C87.4196 16.4125 85.2904 17.2062 82.8965 17.2062ZM129.87 24.7657L127.867 36.8608H92.8663L94.9074 24.7657H129.87ZM105.113 10.8563H121.214L112.219 64.982C111.967 66.4687 112.004 67.6278 112.332 68.4593C112.659 69.2656 113.201 69.8326 113.957 70.1602C114.738 70.4878 115.671 70.6515 116.754 70.6515C117.51 70.6515 118.279 70.5886 119.06 70.4626C119.841 70.3114 120.433 70.198 120.836 70.1224L121.441 82.1041C120.534 82.3813 119.312 82.6837 117.775 83.0113C116.263 83.3388 114.474 83.5404 112.407 83.616C108.477 83.7672 105.15 83.2506 102.429 82.0663C99.7076 80.8568 97.7548 79.0047 96.5704 76.5101C95.3861 74.0155 95.1341 70.8783 95.8145 67.0986L105.113 10.8563ZM153.173 83.9562C147.251 83.9562 142.35 82.6963 138.469 80.1765C134.589 77.6314 131.855 74.1037 130.267 69.5932C128.705 65.0576 128.415 59.7785 129.398 53.7562C130.356 47.8094 132.346 42.606 135.37 38.1459C138.394 33.6858 142.237 30.2211 146.898 27.7517C151.56 25.257 156.814 24.0097 162.66 24.0097C168.556 24.0097 173.445 25.2822 177.325 27.8272C181.206 30.3471 183.94 33.8748 185.527 38.4105C187.115 42.9462 187.417 48.2252 186.434 54.2475C185.451 60.1691 183.436 65.3599 180.387 69.82C177.338 74.2801 173.495 77.7574 168.858 80.2521C164.222 82.7215 158.993 83.9562 153.173 83.9562ZM154.76 71.4831C157.481 71.4831 159.888 70.7145 161.979 69.1775C164.096 67.6152 165.847 65.4985 167.233 62.8275C168.644 60.1313 169.627 57.0823 170.181 53.6806C170.736 50.3292 170.774 47.3558 170.295 44.7604C169.816 42.1398 168.808 40.0736 167.271 38.5617C165.759 37.0498 163.68 36.2938 161.034 36.2938C158.313 36.2938 155.894 37.075 153.777 38.6373C151.661 40.1744 149.909 42.291 148.524 44.9872C147.138 47.6834 146.168 50.745 145.613 54.1719C145.084 57.4981 145.046 60.4715 145.5 63.0921C145.953 65.6875 146.949 67.7412 148.486 69.253C150.023 70.7397 152.114 71.4831 154.76 71.4831Z" fill="#D70F0F"/>
			</svg>
		</a>
		<button class="openMenu">
			<span class="turnDown"></span>
			<span class="turnUp"></span>
		</button>
		<ul class="menu">
			<li><a href="#footer">Serviços</a></li>
			<li><a href="#footer">Contato</a></li>
			<div class="contact">
				<h2>Vamos Produzir!</h2>
				<a href="mailto:<?php echo get_field('e-mail, 26'); ?>"><?php echo get_field('e-mail', 26); ?></a>
				<a href="https://web.whatsapp.com/sent?phone=<?php echo get_field('phone, 26'); ?>"><?php echo get_field('phone', 26); ?></a>
			</div>
		</ul>
	</header>
