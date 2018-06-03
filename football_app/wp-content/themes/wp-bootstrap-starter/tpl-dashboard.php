<?php
/**
 * Template Name: Dashboard
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
                    'posts_per_page' => 5, // top 5 goalscorers
                    'post_type'=> 'player',
                    'meta_key' => 'goals',
                    'orderby' => 'meta_value_num',
                    'order' => 'DESC'
                );   
                $players = get_posts($args);
            ?>

            <div class="row">

   				<div class="col-sm-12">
	  				<div class="col">
		  				<h4 style="color:grey">Napier City Rovers</h4>
		  				<h1 class="display-4 " style="color:white">Division 2</h1>
		  			</div>
	  				<hr style="background-color:grey">
	  			</div>

	  			<!-- START of statistics columns -->

	  			<!-- Goals Column -->
		  		<div class="col">
	  				<h3 class="display-5" style="color:white">Goals</h3>
	  				<hr style="background-color:grey">

			  			<div id="goals-table">
				  			<?php $i = 1; ?>
							<?php foreach ($players as $player): ?>
								<?php $player_obj = get_post($player->ID); ?>

								<table class="table table-dark table-hover">
								    <tbody style="color:grey">
									    <tr id="heading<?php echo $i; ?>">
									        <th data-toggle="collapse" data-target="#collapse<?php echo $i; ?>" aria-expanded="true" aria-controls="collapse<?php echo $i; ?>" style="color: white">
								       			<?php echo $i . '  |          '; ?>
								        		<?php echo $player_obj->post_title; ?>
								        		<td><?php echo $player_obj->goals; ?></td>
								            </th>

									    </tr>
									    <?php
									    	$class = ""; 
									    	if( $i == 1 ) {
									    		$class = "show"; 
									    	}
									     ?>
									    <tr id="collapse<?php echo $i; ?>" class="collapse <?php echo $class; ?>" aria-labelledby="heading<?php echo $i; ?>" data-parent="#goals-table">
									        <td>Content</td>
									    </tr>
								    </tbody>
								</table>

								<?php $i++; ?>
							<?php endforeach; ?>
						</div>						
				</div> <!-- END of goals column -->

				<!-- Assists Column -->

  			<!-- getting the top 5 assisters -->
  			<?php 
                $args = array(
                    'posts_per_page' => 5, // top 5 goalscorers
                    'post_type'=> 'player',
                    'meta_key' => 'assists',
                    'orderby' => 'meta_value_num',
                    'order' => 'DESC'
                );   
                $players = get_posts($args);
            ?>

		  		<div class="col">
	  				<h3 class="display-5" style="color:white">Assists</h3>
	  				<hr style="background-color:grey">

			  			<div id="assists-table">
				  			<?php $i = 1; ?>
							<?php foreach ($players as $player): ?>
								<?php $player_obj = get_post($player->ID); ?>

								<table class="table table-dark table-hover">
								    <tbody style="color:grey">
									    <tr id="heading-assists<?php echo $i; ?>">
									        <th data-toggle="collapse" data-target="#collapse-assists<?php echo $i; ?>" aria-expanded="true" aria-controls="collapse-assists<?php echo $i; ?>" style="color: white">
								       			<?php echo $i . '  |          '; ?>
								        		<?php echo $player_obj->post_title; ?>
								        		<td><?php echo $player_obj->assists; ?></td>
								            </th>

									    </tr>
									    <?php
									    	$class = ""; 
									    	if( $i == 1 ) {
									    		$class = "show"; 
									    	}
									     ?>
									    <tr id="collapse-assists<?php echo $i; ?>" class="collapse <?php echo $class; ?>" aria-labelledby="heading-assists<?php echo $i; ?>" data-parent="#assists-table">
									        <td>Content</td>
									    </tr>
								    </tbody>
								</table>

								<?php $i++; ?>
							<?php endforeach; ?>
						</div>						
				</div> <!-- END of goals column -->

				<!-- MVP Points Column -->

	  			<!-- getting the top 5 MVP points scorers -->
	  			<?php 
	                $args = array(
	                    'posts_per_page' => 5, // top 5 goalscorers
	                    'post_type'=> 'player',
	                    'meta_key' => 'mvp_points',
	                    'orderby' => 'meta_value_num',
	                    'order' => 'DESC'
	                );   
	                $players = get_posts($args);
	            ?>

		  		<div class="col">
	  				<h3 class="display-5" style="color:white">MVP</h3>
	  				<hr style="background-color:grey">

			  			<div id="mvp-points-table">
				  			<?php $i = 1; ?>
							<?php foreach ($players as $player): ?>
								<?php $player_obj = get_post($player->ID); ?>

								<table class="table table-dark table-hover">
								    <tbody style="color:grey">
									    <tr id="heading-mvp-points<?php echo $i; ?>">
									        <th data-toggle="collapse" data-target="#collapse-mvp-points<?php echo $i; ?>" aria-expanded="true" aria-controls="collapse-mvp-points<?php echo $i; ?>" style="color: white">
								       			<?php echo $i . '  |          '; ?>
								        		<?php echo $player_obj->post_title; ?>
								        		<td><?php echo $player_obj->mvp_points; ?></td>
								            </th>

									    </tr>
									    <?php
									    	$class = ""; 
									    	if( $i == 1 ) {
									    		$class = "show"; 
									    	}
									     ?>
									    <tr id="collapse-mvp-points<?php echo $i; ?>" class="collapse <?php echo $class; ?>" aria-labelledby="heading-mvp-points<?php echo $i; ?>" data-parent="#mvp-points-table">
									        <td>Content</td>
									    </tr>
								    </tbody>
								</table>

								<?php $i++; ?>
							<?php endforeach; ?>
						</div>						
				</div> <!-- END of goals column -->


			</div>

		</div>
	</div>



<?php
get_footer();
?>
