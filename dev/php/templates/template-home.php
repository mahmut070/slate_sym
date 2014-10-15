<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>
	<div class="slider">
		<div class="u-gridContainer">
      <div class="u-gridRow">
    		<div class="u-gridCol4">
    			<div class="box">
    				<p class="box-titel">Bereken pakket</p>
    				<hr class="box-lijn">
    				<table class="box-tabel">
  						<tr><td><img class="img-ok" src="<?php echo get_stylesheet_directory_uri();?>/img/svg/ok.svg"></td><td class="td-rechts">Vast schoonmaakprogramma</td></tr>
  						<tr><td><img class="img-ok" src="<?php echo get_stylesheet_directory_uri();?>/img/svg/ok.svg"></td><td class="td-rechts">Vast maandbedrag</td></tr>
  						<tr><td><img class="img-ok" src="<?php echo get_stylesheet_directory_uri();?>/img/svg/ok.svg"></td><td class="td-rechts">Direct opzegbaar</td></tr>
              <tr><td><img class="img-ok" src="<?php echo get_stylesheet_directory_uri();?>/img/svg/ok.svg"></td><td class="td-rechts">Prijsgarantie</td></tr>
          </table>
    			</div>
    			<a href="/bereken-pakket">
   					<div class="box-button">
    					Berekenen
    				</div>
    			</a>
			</div>
    		<div class="u-gridCol4">
				<div class="box">
    				<p class="box-titel">Bereken per uur</p>
    				<hr class="box-lijn">
    				<table class="box-tabel">
  						<tr><td><img class="img-ok" src="<?php echo get_stylesheet_directory_uri();?>/img/svg/ok.svg"></td><td class="td-rechts">Flexibel schoonmaakprogramma</td></tr>
  						<tr><td><img class="img-ok" src="<?php echo get_stylesheet_directory_uri();?>/img/svg/ok.svg"></td><td class="td-rechts">Vast aantal uren</td></tr>
  						<tr><td><img class="img-ok" src="<?php echo get_stylesheet_directory_uri();?>/img/svg/ok.svg"></td><td class="td-rechts">Direct opzegbaar</td></tr>
              <tr><td><img class="img-ok" src="<?php echo get_stylesheet_directory_uri();?>/img/svg/ok.svg"></td><td class="td-rechts">Prijsgarantie</td></tr>					
          </table>
    			</div>
    			<a href="/bereken-per-uur">
   					<div class="box-button">
    					Berekenen
    				</div>
    			</a>
			</div>	
    		<div class="u-gridCol4">
    			<div class="box">
    				<p class="box-titel">Onze diensten</p>
    				<hr class="box-lijn">
    				<table class="box-tabel">
              <tr><td><img class="img-ok" src="<?php echo get_stylesheet_directory_uri();?>/img/svg/ok.svg"></td><td class="td-rechts">Regulier Schoonmaakwerk</td></tr>
  						<tr><td><img class="img-ok" src="<?php echo get_stylesheet_directory_uri();?>/img/svg/ok.svg"></td><td class="td-rechts">Glasbewassing</td></tr>
  						<tr><td><img class="img-ok" src="<?php echo get_stylesheet_directory_uri();?>/img/svg/ok.svg"></td><td class="td-rechts">Interieurverzorging</td></tr>
  						<tr><td><img class="img-ok" src="<?php echo get_stylesheet_directory_uri();?>/img/svg/ok.svg"></td><td class="td-rechts">Sanitairverzorging</td></tr>
				      <tr><td><img class="img-ok" src="<?php echo get_stylesheet_directory_uri();?>/img/svg/ok.svg"></td><td class="td-rechts">Vloeronderhoud</td></tr>
              <tr><td><img class="img-ok" src="<?php echo get_stylesheet_directory_uri();?>/img/svg/ok.svg"></td><td class="td-rechts">Gevelreiniging</td></tr>
          </table>
    			</div>
    			<a href="/diensten">
   					<div class="box-button">
    					Alles bekijken
    				</div>
    			</a>
        </div>
			</div>	
		</div>	
	</div>



	<div class="u-gridContainer">

	<div class="offerte">
		<a href="/offerte/">
				<div class="offerte-aanvragen">Vraag vrijblijvend een offerte aan!</div>
		</a>
	</div>	


  <div class="u-gridRow">

    <div class="u-gridCol8">
                
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="Content Content--home" id="post-<?php the_ID(); ?>">
			<h2><?php the_title(); ?></h2>
			<div>
				<?php the_content(); ?>
				<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
			</div>
		</article>
	<?php endwhile; endif; ?>
	</div>

	<div class="u-gridCol4">
    <div class="youtube-videos">
      <?php get_sidebar(); ?>
    </div>
	</div>

    </div>

	</div>

<?php get_footer(); ?>
