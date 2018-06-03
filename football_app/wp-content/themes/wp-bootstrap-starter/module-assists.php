<div class="container border border-light m-0 rounded">
    <?php 
        $args = array(
            'posts_per_page' => -1,
            'post_type'=> 'player',
            'meta_key' => 'goals',
            'orderby' => 'meta_value_num',
            'order' => 'DESC'
        );   
        $players = get_posts($args); 
    ?>

    <h2>Assists</h2>
    <h4>Mens Division 2 - 2018</h4>            
    <table class="table table-hover table-light table-bordered">
        <thead>
            <tr>
                <th>Player Name</th>
                <th class='text-center'>Assists</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($players as $player): ?>
                <?php if( get_field('assists', $player->ID) > 0 ): ?>
                    <tr>
                        <td><strong><a href="/football_app/wp-admin/post.php?post=<?php echo $player->ID; ?>&action=edit"><?php echo $player->post_title; ?></a></strong></td>
                        <td class='text-center'><?php echo get_field('assists', $player->ID); ?></td>
                    </tr>
                <? endif; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>