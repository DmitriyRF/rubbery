<div class="container">
	<div class="row">
		<div class="col-12 col-md-6">
			<?php if ( is_active_sidebar( 'left-sidebar' ) ) : ?>
				<ul id="sidebar">
					<?php dynamic_sidebar( 'left-sidebar' ); ?>
				</ul>
			<?php endif; ?>
		</div>
		<div class="col-12 col-md-6">
			<?php if ( is_active_sidebar( 'right-sidebar' ) ) : ?>
				<ul id="sidebar">
					<?php dynamic_sidebar( 'right-sidebar' ); ?>
				</ul>
			<?php endif; ?>
			
		</div>
	</div>
</div>