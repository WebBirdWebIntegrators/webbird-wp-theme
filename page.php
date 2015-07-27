<?php get_header(); ?>

<div id="body">
	<div class="b1">		
		<div class="billboard">
			<div class="image">
				<img src="<?php echo get_template_directory_uri(); ?>/img/tmp/watwedoen.jpg">
			</div>
			<div class="content">
				<div class="container-table">
					<div class="container-table-cell">
						<h5>Wat we doen</h5>
						<h2>Online doelstellingen realiseren voor onze klanten</h2>
					</div>
				</div>
			</div>
			<div class="color-mask">
				Color Mask
			</div>
		</div>
		
		<div class="content">
			<div class="container">
				<p class="intro">
					We helpen onze klanten bij het uitzetten van een online strategie. Op basis hiervan bedenken we online concepten, sterke websites en uitdagende campagnes die we tot in perfectie ontwerpen en realiseren.
				</p>
				<blockquote>
					Je kunt je budget maar één keer uitgeven. Met een goede strategie is je investering spot-on!
				</blockquote>
				<p>Als klant ken je je eigen business het best, maar verwoorden wat je online wil bereiken kan knap lastig zijn. WebBird kan je daarbij helpen. Heb je de online doelstellingen van je merk of organisatie al scherp of heb je alleen de algemene doelen van jouw merk of organisatie op een rijtje? In beide gevallen zetten wij met onze ervaring en expertise een online strategie neer die de online kansen voor jouw organisatie blootlegt.</p>
			</div>
		</div>
	</div>
	<div class="b1">		
		<div class="billboard">
			<div class="image">
				<img src="<?php echo get_template_directory_uri(); ?>/img/tmp/watwedoen-ontwerp.jpg">
			</div>
			<div class="content">
				<div class="container-table">
					<div class="container-table-cell">
						<h5>Ontwerp</h5>
						<h2>Creativiteit met een strategie</h2>
					</div>
				</div>
			</div>
			<div class="color-mask">
				Color Mask
			</div>
		</div>
		
		<div class="content">
			<div class="container">
				<p class="intro">
					Steve Jobs zei het al: “alles is ontworpen, slechts enkele dingen echt goed". Een goed ontwerp komt niet uit de lucht vallen. Ontwerpen is echt een vak. Een ambacht. Bij WebBird maken we originele ontwerpen met een eigen karakter en optimale gebruiksvriendelijkheid. Hoe gebruikers een website ervaren, wordt voor een groot deel bepaald door hoe deze ontworpen is.
				</p>
				<blockquote>
					Goed interactieontwerp maakt complexiteit onzichtbaar
				</blockquote>
				<p>Alles wat we ontwikkelen willen we zo gebruiksvriendelijk mogelijk ontwerpen; een flinke klus die vaak onderschat wordt. Hoe complex de functionaliteit ook is, we streven altijd naar maximale eenvoud voor de bezoeker. En dat op alle devices. Bijna al onze projecten zijn responsive van opzet.  Vanuit één opbouw de optimale beleving creëren; dat is het doel.</p>

				<p>Ieder merk of organisatie heeft een eigen karakter, uitstraling en huisstijl. Onze creatieven duiken hier volledig in en vertalen deze eigenheid in een ontwerp dat spreekt. Is er nog geen stijl beschikbaar? Geen punt; dan maken wij die voor je!</p>

				<p>Omdat websites steeds meer via smartphone en tablet bezocht worden, werken wij onze designs voor alle devices uit. Op die manier zorgen we voor een eenduidige designbeleving. Adaptive design helpt ons waar nodig de beleving per device nog beter te maken.</p>
			</div>
		</div>
	</div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="post" id="post-<?php the_ID(); ?>">
		<?php the_content('<p>Read the rest of this page &raquo;</p>'); ?>
		<?php wp_link_pages(array('before' => '<p>Pages: ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
		
	</div>
	<?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>