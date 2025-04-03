<?php

/**
 * Template Name: UI Homepage
 *
 * This is the template that displays all pages by default. Please note that
 * this is the WordPress construct of pages: specifically, posts with a post
 * type of `page`.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gorilabs
 */

get_header();
?>

<section id="primary">
	<main id="main" class="text-xl">

		<div class="w-full">

			<div class="swiper mySwiper2">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<img class="aspect-square md:aspect-auto min-h-[400px] object-cover object-center" src="https://wikilok.com/wp-content/uploads/2020/02/wiki-web-02.png" />
					</div>
					<div class="swiper-slide">
						<img class="aspect-square md:aspect-auto min-h-[400px] object-cover object-center" src="https://wikilok.com/wp-content/uploads/2020/02/wiki-web-01.png" />
					</div>
					<div class="swiper-slide">
						<img class="aspect-square md:aspect-auto min-h-[400px] object-cover object-center" src="https://wikilok.com/wp-content/uploads/2020/02/wiki-web-03.png" />
					</div>
				</div>
				<!-- <div class="swiper-button-next"></div>
				<div class="swiper-button-prev"></div> -->
			</div>
			<div class="h-full border-b-1">
			<div thumbsSlider="" class="swiper mySwiper  cursor-pointer border-b-1">
				<div class="swiper-wrapper flex justify-between items-center">
					<div class="swiper-slide flex justify-center items-center py-3">
						<img class="h-10 md:h-16.5" src="https://wikilok.com/wp-content/uploads/2020/02/title_cmc.svg" />
					</div>
					<div class="swiper-slide flex justify-center items-center py-3 border-l-1 border-r-1">
						<img class="h-10 md:h-16.5" src="https://wikilok.com/wp-content/uploads/2020/02/title_kubbees.svg" />
					</div>
					<div class="swiper-slide flex justify-center items-center py-3">
						<img class="h-10 md:h-16.5" src="https://wikilok.com/wp-content/uploads/2020/02/title_wikilok.svg" />
					</div>
				</div>
			</div>
			<h1 class="text-3xl md:text-5xl w-2/3 md:w-1/2 mx-auto text-center my-25">En Wikilok Enterprise creemos que trabajando en equipo se logran los sueños…</h1>
		</div>

			<div id="nosotros" class="w-full bg-amber-50">
				<div class="flex flex-wrap">
					<div class="w-full md:w-1/3">
						<img class="" src="https://wikilok.com/wp-content/uploads/2020/02/wikilok_3.jpg?id=11423" alt="">
					</div>
					<div class="w-full md:w-2/3 p-8 md:p-32">
						<h2 class="text-3xl mb-3">¿Quiénes somos?</h2>
						<hr class="my-5 opacity-15">
						<p>Somos una empresa familiar colombiana que contribuye al progreso de la región y del país, generando empleo, siendo conscientes de la responsabilidad social y el desarrollo sostenible.</p>

						<p>Nos enorgullece contar con procesos estandarizados y certificados que nos permite ofrecer productos innovadores y de alta calidad que se comparten alrededor del mundo permitiéndonos llegar cada vez a más y más personas.</p>

						<h2 class="text-3xl mb-3">Una mirada rápida a nuestro negocio</h2>
						<hr class="my-5 opacity-15">
						<p>Tenemos como objetivo que nuestra cadena de suministro esté comprometida con preservar el medioambiente y lograr transformar positivamente la vida de cada una de las personas que hacen parte de esta.</p>
						<p>En Wikilok Enterprise nos preocupamos día a día por innovar y diversificar nuestros productos y así ofrecer más y mejores opciones a nuestros clientes.</p>
						<p>Todo nuestro equipo trabaja por alcanzar los objetivos organizacionales y por el progreso personal con el fin de lograr un mejor futuro para todos.</p>

					</div>
				</div>
			</div>

			<div id="grupo" class="w-full bg-white text-white">
				<div class="flex flex-wrap h-screen">
					<div class="w-full md:w-1/3 flex justify-center items-center flex-col gap-4 p-8" style="background-color: #E16F34;">
						<img class="h-20" src="https://wikilok.com/wp-content/uploads/2020/02/logo-central.svg" alt="">
						<h3 class="text-3xl text-center">Cadena logística de productos derivados del café</h3>
						<button type="button" onclick="window.open('https://centralmountaincoffee.com/', '_blank')" class="cursor-pointer text-white hover:text-amber-500 border border-white hover:bg-amber-50 focus:ring-4 focus:outline-none focus:ring-amber-700 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2">Visita el sitio</button>
					</div>
					<div class="w-full md:w-1/3 flex justify-center items-center flex-col gap-4 p-8" style="background-color: #DD4635;">
						<img class="h-20" src="https://wikilok.com/wp-content/uploads/2020/02/logo-kubbees.svg" alt="">
						<h3 class="text-3xl text-center">I+d para productos del sector alimenticio</h3>
						<button type="button" onclick="window.open('https://facebook.com/Wikilok/', '_blank')" class="cursor-pointer text-white hover:text-amber-500 border border-white hover:bg-amber-50 focus:ring-4 focus:outline-none focus:ring-amber-700 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2">Visita el sitio</button>
					</div>
					<div class="w-full md:w-1/3 flex justify-center items-center flex-col gap-4 p-8" style="background-color: #9E1E3B;">
						<img class="h-20" src="https://wikilok.com/wp-content/uploads/2020/02/logo-wikilok.svg" alt="">
						<h3 class="text-3xl text-center">Comercialización de franquicias a nivel estratégico</h3>
						<button type="button" onclick="window.open('https://facebook.com/Wikilok/', '_blank')" class="cursor-pointer text-white hover:text-amber-500 border border-white hover:bg-amber-50 focus:ring-4 focus:outline-none focus:ring-amber-700 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2">Entérate ahora</button>
					</div>
				</div>
			</div>

			<div id="marco" class="w-full bg-amber-50">
				<div class="flex flex-wrap items-center">
					<div class="w-full md:w-1/2 p-8 md:p-32">
						<h2 class="text-3xl mb-3">Marco estratégico</h2>
						<hr class="my-5 opacity-15">
						<p>Wikilok Enterprise produce alimentos especializados para generar nuevas experiencias y satisfacer gustos diferentes, basándonos en el diseño e implementación de sabores mediante la innovación, estándares internacionales de calidad e inocuidad y asegurando así un crecimiento sostenible.</p>

						<h2 class="text-3xl mb-3">Nuestros objetivos de Calidad</h2>
						<hr class="my-5 opacity-15">
						<ul class="list-disc pl-5 space-y-2">
							<li>Brindar un producto inocuo y de calidad a través del cumplimiento de las normas internacionales.</li>
							<li>Desarrollar productos alimenticios especializados identificando fórmulas innovadoras que satisfagan las necesidades del mercado.</li>
							<li>Asegurar un crecimiento sostenible en el tiempo mediante la estandarización de procesos.</li>
						</ul>
					</div>
					<div class="w-full md:w-1/2 bg-white">
						<div class="bg-[url(https://wikilok.com/wp-content/uploads/2020/02/wikilok_7.jpg?id=11445)] bg-contain bg-no-repeat bg-right-bottom min-h-screen"></div>
					</div>
				</div>
			</div>


			<div id="filosofia" class="w-full bg-amber-50">
				<div class="flex flex-wrap items-center">
					<div class="w-full md:w-1/2 bg-white hidden md:block">
						<div class="bg-[url(https://wikilok.com/wp-content/uploads/2020/02/wikilok_8.jpg?id=11448)] bg-contain bg-no-repeat bg-left-top min-h-screen"></div>
					</div>
					<div class="w-full md:w-1/2 p-8 md:p-32">
						<h2 class="text-3xl mb-3">Filosofía corporativa</h2>
						<hr class="my-5 opacity-15">
						<p>En Wikilok Enterprise tenemos un compromiso inquebrantable con nuestro equipo de trabajo es por eso que generamos para ellos un entorno diverso, inclusivo, seguro, abierto y colaborativo para así lograr los mejores resultados que se verán reflejados en la satisfacción de nuestros clientes.</p>
						<h2 class="text-3xl mb-3">Nuestros objetivos de Calidad</h2>
						<hr class="my-5 opacity-15">
						<button type="button" onclick="window.open('https://api.whatsapp.com/send?phone=573168317691&text=Hola%2c%20requiero%20informaci%c3%b3n%20adicional&source=&data=', '_blank')" class="cursor-pointer text-amber-500 hover:text-white border border-amber-500 hover:bg-amber-500 focus:ring-4 focus:outline-none focus:ring-amber-700 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2">Entérate ahora</button>
					</div>

				</div>
			</div>

	</main><!-- #main -->
</section><!-- #primary -->

<script>
	var swiper = new Swiper(".mySwiper", {
		loop: true,
		spaceBetween: 0,
		slidesPerView: 3,
		freeMode: true,
		watchSlidesProgress: true,
	});
	var swiper2 = new Swiper(".mySwiper2", {
		loop: true,
		spaceBetween: 0,
		slidesPerView: 1,
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
		thumbs: {
			swiper: swiper,
		},
	});
</script>

<?php
get_footer();
