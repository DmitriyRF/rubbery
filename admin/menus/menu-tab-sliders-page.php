<?php

	function rtrrubbery_theme_sliders_function(){


				$title 												= __( 'Sliders' );

				$new_slider_title									= __( 'Add New' );

						
						?>

							<div class="wrap sliders-list">

								<h1><?php echo esc_html( $title ); ?>
									<a href="<?php echo admin_url( 'admin.php?page=rtrrubbery_theme_add_slider_page' ); ?>" class="page-title-action">
										<?php echo esc_html( $new_slider_title ); ?>
									</a>
								</h1>

								<?php 

									if(  isset($_GET['status'])  ){

										switch( $_GET['status'] ) {

										    case 'added_new_slider':

										        $message = "New slider was added successful!";
										        break;

										    case 'deletted_slider':

										        $message = "The slider was deletted successful!";
										        break;

										    case 'editted_the_slider':

										        $message = "The slider was editted successful!";
										        break;

										}

										?>
												<div id="message" class="updated notice notice-success is-dismissible">
													<p> 
														<?php 
																echo $message;
														?> 
													</p>
													<button type="button" class="notice-dismiss">
														<span class="screen-reader-text">Dismiss this notice.</span>
													</button>
												</div>
										<?php

									}									
									?>

									<form id="events-filter" method="get">

										<input type="hidden" name="page" value="<?php echo $_REQUEST['page'] ?>" />

										<?php

											$sliderListTable = new RtrRubbery_Slider_List_Table();	
											$sliderListTable->prepare_items();
						  					$sliderListTable->display();

					  					?>

				  					</form>
				  					<?php
								?>
								
							</div>
						
						<?php

	}



