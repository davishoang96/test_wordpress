
<?php get_header(); ?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="container-fluid" id="intro" data-stellar-background-ratio="0.4">
      <div class="row">
        <div class="text-center">
          <div class="col-md-12">
            <div class="animatedParent">
              <h1 class="animated fadeIn">Interstellar</h1>
              <p class="animated fadeIn">
                This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.
              </p>
              <h4 class="animated fadeIn">This is a heading of 4</h4>
              <button type="button" class="btn btn-default animated bounceIn" name="button">Press here</button>
            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="container" id="all">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-2">
          <?php dynamic_sidebar('front-left-block'); ?>
        </div>


        <div class="col-md-8">
          <?php
							if(have_posts()){
								while(have_posts()){
									the_post();
									?>
									<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
									<label for=""><?php the_time( get_option( 'date_format g:i ' ) ); ?></label>
									<p>
										<?php the_excerpt(); ?>
									</p>
									<hr>
									<?php
								}
							} else {
								echo "<h1>No content found</h1>";
							}
					 ?>
       </div>


        <div class="col-md-2">
          <!-- <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p> -->
					<?php dynamic_sidebar('front-right-block'); ?>
        </div>
      </div>

      <hr>

			<?php get_footer(); ?>
