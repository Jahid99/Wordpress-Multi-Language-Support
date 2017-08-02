<!DOCTYPE html>
<html>
<head>
	<title>Multi language support</title>
</head>
<body>



<?php if(!dynamic_sidebar('languae_switcher')) : ?>

						 <h3> Sidebar not found </h3>
						<?php endif ?>

<div class="header-in">
								<?php
								wp_nav_menu( array( 'menu' => 'menu_basic',
								'container_id' => 'templatemo_menu'
								 ) );
								 ?>
								</div>

<?php if(!dynamic_sidebar('all_post')) : ?>

						 <h3> No post found </h3>
						<?php endif ?>

</body>
</html>