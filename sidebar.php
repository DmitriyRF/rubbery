

<?php echo __FUNCTION__ ? "<!- Start ".__FUNCTION__." -->" : "<!- Start ".__FILE__." -->"; ?>


<aside class="right-page-two-column-sidebr">

			<?php if ( is_active_sidebar( 'sidebar-1' ) ){ ?>
				<ul id="sidebar-page">
					<?php dynamic_sidebar( 'sidebar-1' ); ?>
				</ul>
			<?php } ?>
</aside>


<?php echo __FUNCTION__ ? "<!- End ".__FUNCTION__." -->" : "<!- End ".__FILE__." -->" ?>