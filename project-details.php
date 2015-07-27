<?php
	//Template Name: Project / Details
?>

<?php get_header(); ?>

<div id="body">
	
	<div class="project-details">
		
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
			
			<div class="b1">
				<div class="info">
					<h3>De vraag</h3>
					<h2>Portal internationalisering creatieve industrie</h2>
					<div class="text">
						<p>DDA en de Federatie Dutch Creative Industries (FDCI) schreven een pitch uit voor de ontwikkeling van een portal voor de internationalisering van de creatieve industrie. De website moest toegesneden en actuele informatie bieden aan Nederlandse creatieve ondernemers met grensoverschrijdende ambities en tegelijkertijd een laagdrempelige toegang bieden tot de Nederlandse creatieve industrie aan potentiële buitenlandse opdrachtgevers. Het voorstel dat Flink hiervoor uitbracht kwam als beste uit de bus!</p>
					</div>
				</div>
				<div class="image"></div>
			</div>
			
			<div class="b1">
				<div class="info" id="info">
					<h3>De oplossing</h3>
					<h2>Focus op content en slimme templates</h2>
					<div class="text">
						<p>In een aantal sessies heeft Flink samen met de opdrachtgever de contentstructuur voor de website uitgedacht. Hoewel de content voor de buitenlands geïnteresseerden heel anders is dan de content voor de Nederlandse ondernemers, heeft Flink hiervoor toch één set unieke templates kunnen ontwikkelen. Daarnaast heeft Flink de creatieve stijl voor de website ontwikkeld; een krachtig logo, herkenbare kleurstelling en creatieve vormtaal met een digitale knipoog.</p>
					</div>
				</div>
				<div class="image" id="image"></div>
			</div>
			
			<div class="b1">
				<div class="info">
					<h3>Het resultaat</h3>
					<h2>Kwalitatieve content in responsive edgy design</h2>
					<div class="text">
						<p>Voor de Nederlandse creatieve ondernemer beantwoordt de website de meest belangrijke vragen en verwijst het waar nodig door naar de informatie op andere websites. Per sector is informatie te vinden over de kansen die het buitenland biedt en de succesverhalen inspireren ondernemers de stap naar het buitenland ook echt te wagen. Aan de buitenlandse bezoeker biedt de website onder ander de juiste contactpersoon voor ieder creatief vraagstuk. De responsive website is ontwikkeld op basis van het open source CMS Drupal.</p>
						<p>
							<a href="#" class="button">Bezoek de website</a>
						</p>
					</div>
				</div>
				<div class="image"></div>
			</div>
			
			<script type="text/javascript">
			jQuery(function() {
				jQuery(document).ready(function() {
					var win = jQuery(this); //this = window
				    if (win.height() >= 820) {
					    jQuery('#image').insertBefore('#info');
				    } 
				});
			});  
			</script> 
			
		</div>
		
		<div class="navigation">
			<ul>
				<li>
					<i class="fa fa-times"></i>
					<label>Naar overzicht</label>
				</li>
				<li>
					<i class="fa fa-angle-left"></i>
					<label>Vorige</label>
				</li>
				<li>
					<i class="fa fa-angle-right"></i>
					<label>Volgende</label>
				</li>
				<li>
					<i class="fa fa-retweet"></i>
					<label>Delen</label>
				</li>
			</ul>
		</div>
		
	</div>

</div>

<?php get_footer(); ?>