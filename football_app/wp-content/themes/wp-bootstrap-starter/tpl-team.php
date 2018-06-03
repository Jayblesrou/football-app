<?php
/**
 * Template Name: Team
 */

get_header();
?>

	<div class="containter-fluid" style="background-color: #111111">

	  	<div class="row p-5">

	  		<div class="col-sm-2 m-5">
	  			<h3 class="display-5" style="color:white">Menu</h3>
  				<hr style="background-color:grey">
				<table class="table table-dark table-hover">
				  <tbody style="color:grey">
				    <tr>
				      <td>Competitions</td>
				    </tr>
				    <tr>
				      <td>Results</td>
				    </tr>
				    <tr>
				      <td>Statistics</td>
				    </tr>
				  </tbody>
				</table>
  			</div>

  			<!-- getting the top 5 goalscorers -->
  			<?php 
                $args = array(
                    'posts_per_page' => -1, // top 5 goalscorers
                    'post_type'=> 'player',
                    // 'meta_key' => 'goals',
                    // 'orderby' => 'meta_value_num',
                    'order' => 'DESC'
                );   
                $players = get_posts($args);
            ?>

            <div class="row">

				<div class="col-sm-12">
	  				<div class="col">
		  				<h4 style="color:grey">Napier City Rovers: Division 2</h4>
		  				<h1 class="display-4 " style="color:white">Goalscorers</h1>
		  			</div>
	  				<hr style="background-color:grey">
	  			</div>

	  			<!-- START of statistics columns -->

	  			<!-- Goals Column -->
		  		<div class="col-sm-12">
				<h2>Goalscorers</h2>

            	<?php foreach ($players as $player): ?>
					<?php $player_obj = get_post($player->ID); ?>

					<?php if( $player_obj->goals > 0 ): ?>
					    <div class="card m-2" style="opacity: 0.2">
					    	<div class="card-body"><?php echo $player_obj->post_title; ?></div>
					    </div>
				    <?php else: ?>
				    	<div class="card m-2">
					    	<div class="card-body"><?php echo $player_obj->post_title; ?></div>
					    </div>
				    <?php endif; ?>
			
			    <?php endforeach; ?>
				</div> <!-- END of goals column -->

				<!-- Assists Column -->

  			<!-- getting the top 5 assisters -->
  		


			</div>

		</div>
	</div>



<?php
get_footer();
?>
