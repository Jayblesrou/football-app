<div class="container border border-light m-0 rounded mb-2">
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

    <h2 class="border border-light">Goals</h2>
    <h4>Mens Division 2 - 2018</h4>            
    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <th>Player Name</th>
                <th class='text-center'>Goals</th>
            </tr>
        </thead>
        <tbody>
            <?php $count = 1; ?>
            <?php foreach ($players as $player): ?>
                <?php if( get_field('goals', $player->ID) > 0 ): ?>
                    <?php if($count == 1): ?>
                        <td class="table-light h-25"><?php echo $count . '. '; ?><strong><a href="/football_app/wp-admin/post.php?post=<?php echo $player->ID; ?>&action=edit"><?php echo $player->post_title; ?></a></strong></td>
                        <td class='text-center table-secondary'><?php echo get_field('goals', $player->ID); ?></td>
                    <?php else: ?>
                    <tr>
                        <td><?php echo $count . '. '; ?><strong><a href="/football_app/wp-admin/post.php?post=<?php echo $player->ID; ?>&action=edit"><?php echo $player->post_title; ?></a></strong></td>
                        <td class='text-center'><?php echo get_field('goals', $player->ID); ?></td>
                    </tr>
                    <?php endif; ?>
                    <?php $count++; ?>
                <? endif; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>