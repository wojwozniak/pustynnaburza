<?php
	/* Template Name: Aktualna edycja */
	get_header();
?>
<article class="site">
	<section class="wrapper">
		<div class="ce-toptext">
			<h2>PUSTYNNA BURZA 2023</h2>
			<div class="ce-desc">
				<p>Pustynna Burza to gra survivalowo-militarna z 25 letnią tradycją i historią, która testuje wytrzymałość uczestników podczas trzydniowych zmagań na terenie Jury Krakowsko-Częstochowskiej.</p>
				<p>Podczas gry uczestnicy będą realizować zajęcia survivalowe, obronne, czy takie z zakresu pierwszej pomocy lub terenoznawstwa.</p>
			</div> <!-- End of ce-desc -->
			<div class="ce-countdown-container">
				<h3>ODLICZAMY CZAS DO ROZPOCZĘCIA ZGŁOSZEŃ!</h3>
				<div class="ce-countdown">
				<?php get_template_part('template-parts/front-page', 'timer'); ?>
				<!--W zgloszenia pojawi się napis zgłoszenia kończą się i obliczona data -->
		<h4 class="h2 zgloszenia"></h4>
				</div> <!-- End of ce-countdown -->
			</div> <!-- End of ce-countdown-container -->
		</div> <!-- End of ce-toptext -->
	</section> <!-- End of ce-content -->
	<section class="ce-about">
		<div class="ce-about-content">
			<div class="ce-about-blank"></div>
			<div class="ce-about-text">
				<p>
					Pustynna Burza to gra dla każdego powyżej 16 roku życia, kto chce pokonać własne słabości, sprawdzić swoją kondycję fizyczną i umiejętności. Wznowiona edycja gwarantuje przeżycie niezapomnianej przygody i wspomnienia na długie lata. Szansę na pokonanie wszystkich wyzwań mają tylko Ci najwytrwalsi!
				</p>
			</div> <!-- End of ce-about-text -->
		</div> <!-- End of ce-about-content -->
	</section>  <!-- End of ce-about -->
	<section>
		<img class="ce-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/o-grze.png" alt="Grafika przedstawiająca elementy gry">
	</section>
	
</article>
<?php get_footer(); ?>