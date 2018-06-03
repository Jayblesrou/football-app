<?php
/**
 * Template Name: Team
 */

get_header();
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2">
            Sidebar content
        </div>
        <div class="col-sm-10">
            Body content
        </div>
    </div>
</div>


<div class="containter-fluid" style="background-color: red">
  <div class="row">
    <div class="col-sm-12">

        
        <!-- Team List -->
        <div class="container border border-light rounded">
            <?php 
                $args = array(
                    'posts_per_page' => -1,
                    'post_type'=> 'player',
                    'meta_key' => 'goals',
                    'orderby' => 'meta_value_num',
                    'order' => 'DESC'
                );   
                $players = get_posts($args); 

                $args = array(
                    'posts_per_page' => -1,
                    'post_type'=> 'fixture',
                    'order' => 'DESC'
                );   
                $fixtures = get_posts($args); 

                //foreach ($fixtures as $fixture):
                	// get the 3 mvp points scorer
                	$mvp_3 = get_field('mvp_3pts', 151);
                	var_dump( $mvp_3[0]['player'][0]->post_title );

                	//var_dump( get_the_title() );

                	// get the 2 mvp points scorer

                	// get the 1 mvp point scorer


             //    	$mvp_points += 
             //    	if( = get_field('mvp_3pts', $fixture->ID) ):

            	// 	endif;
            	//endforeach;
            ?>

            <h2>Napier City Rovers</h2>
            <h4>Mens Division 2 - 2018</h4>            
            <table class="table table-hover table-bordered table-light">
                <thead>
                    <tr>
                        <th>Player Name</th>
                        <th class='text-center'>Goals</th>
                        <th class='text-center'>Assists</th>
                        <th class='text-center'>MVP Points</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($players as $player): ?>
                        <tr>
                            <td><strong><a href="/football_app/wp-admin/post.php?post=<?php echo $player->ID; ?>&action=edit"><?php echo $player->post_title; ?></a></strong></td>
                            <td class='text-center'><?php echo get_field('goals', $player->ID); ?></td>
                            <td class='text-center'><?php echo get_field('assists', $player->ID); ?></td>
                            <td class='text-center'><?php echo get_field('matches_played', $player->ID); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

</div>
<div class="col-sm">
        <?php get_template_part('module-goals', get_post_format()); ?>


        <?php get_template_part('module-assists', get_post_format()); ?>
</div>

</div>
</div>


<?php
get_footer();
?>
