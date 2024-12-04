<div id="post-<?php the_ID(); ?>" class=" <?php get_post_class() ?> wp-block wp-block-kubio-query-layout  position-relative wp-block-kubio-query-layout__outer cinematico-single__k__single-lAFSH8Xo9x-outer cinematico-local-705-outer d-flex h-section-global-spacing align-items-lg-center align-items-md-center align-items-center" data-kubio="kubio/query-layout" id="blog-layout">
	<div class="position-relative wp-block-kubio-query-layout__inner cinematico-single__k__single-lAFSH8Xo9x-inner cinematico-local-705-inner h-section-grid-container h-section-boxed-container">
		<div class="wp-block wp-block-kubio-row  position-relative wp-block-kubio-row__container cinematico-single__k__single-baLWB4dRKjp-container cinematico-local-706-container gutters-row-lg-2 gutters-row-v-lg-0 gutters-row-md-0 gutters-row-v-md-0 gutters-row-3 gutters-row-v-2" data-kubio="kubio/row">
			<div class="position-relative wp-block-kubio-row__inner cinematico-single__k__single-baLWB4dRKjp-inner cinematico-local-706-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-2 gutters-col-v-lg-0 gutters-col-md-0 gutters-col-v-md-0 gutters-col-3 gutters-col-v-2">
				<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container cinematico-single__k__single-kxeqsSpdy-n-container cinematico-local-707-container d-flex h-col-lg h-col-md h-col-auto" data-kubio="kubio/column">
					<div class="position-relative wp-block-kubio-column__inner cinematico-single__k__single-kxeqsSpdy-n-inner cinematico-local-707-inner d-flex h-flex-basis h-px-lg-3 v-inner-lg-2 h-px-md-3 v-inner-md-2 h-px-3 v-inner-2">
						<div class="position-relative wp-block-kubio-column__align cinematico-single__k__single-kxeqsSpdy-n-align cinematico-local-707-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
							<figure class="wp-block wp-block-kubio-post-featured-image  position-relative wp-block-kubio-post-featured-image__container cinematico-single__k__iE82N7AEu-container cinematico-local-708-container h-aspect-ratio--4-3 <?php cinematico_post_missing_featured_image_class(); ?>" data-kubio="kubio/post-featured-image" data-kubio-settings="{{kubio_settings_value}}">
								<?php if(has_post_thumbnail()): ?>
								<img class='position-relative wp-block-kubio-post-featured-image__image cinematico-single__k__iE82N7AEu-image cinematico-local--image' src='<?php echo esc_url(get_the_post_thumbnail_url());?>' />
								<?php endif; ?>
								<div class="position-relative wp-block-kubio-post-featured-image__inner cinematico-single__k__iE82N7AEu-inner cinematico-local-708-inner">
									<div class="position-relative wp-block-kubio-post-featured-image__align cinematico-single__k__iE82N7AEu-align cinematico-local-708-align h-y-container align-self-lg-end align-self-md-end align-self-end"></div>
								</div>
							</figure>
							<div class="wp-block wp-block-kubio-post-meta  position-relative wp-block-kubio-post-meta__metaDataContainer cinematico-single__k__in2mlwF4a-metaDataContainer cinematico-local-709-metaDataContainer h-blog-meta" data-kubio="kubio/post-meta" id="post-metadata">
								<span class="metadata-item">
									<span class="metadata-prefix">
										<?php esc_html_e('Written by', 'cinematico'); ?>
									</span>
									<a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta("ID"))); ?>">
										<?php echo esc_html(get_the_author_meta("display_name",get_post_field("post_author"))); ?>
									</a>
								</span>
								<span class="metadata-separator">
									|
								</span>
								<span class="metadata-item">
									<span class="metadata-prefix">
										<?php esc_html_e('on', 'cinematico'); ?>
									</span>
									<a href="<?php echo esc_url(get_day_link(get_post_time( 'Y' ),get_post_time( 'm' ),get_post_time( 'j' ))); ?>">
										<?php echo esc_html(get_the_date('F j, Y')); ?>
									</a>
								</span>
							</div>
							<div class="wp-block wp-block-kubio-row  position-relative wp-block-kubio-row__container cinematico-single__k__single-SbdKxHs2YI-container cinematico-local-710-container gutters-row-lg-0 gutters-row-v-lg-0 gutters-row-md-0 gutters-row-v-md-0 gutters-row-0 gutters-row-v-0" data-kubio="kubio/row">
								<div class="position-relative wp-block-kubio-row__inner cinematico-single__k__single-SbdKxHs2YI-inner cinematico-local-710-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-0 gutters-col-v-lg-0 gutters-col-md-0 gutters-col-v-md-0 gutters-col-0 gutters-col-v-0">
									<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container cinematico-single__k__single-3VGwAjm9cX-container cinematico-local-711-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
										<div class="position-relative wp-block-kubio-column__inner cinematico-single__k__single-3VGwAjm9cX-inner cinematico-local-711-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-0 h-px-md-0 v-inner-md-0 h-px-0 v-inner-0">
											<div class="position-relative wp-block-kubio-column__align cinematico-single__k__single-3VGwAjm9cX-align cinematico-local-711-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
												<?php the_content(); ?>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="wp-block wp-block-kubio-row  position-relative wp-block-kubio-row__container cinematico-single__k__single-1uGRU27HVz-container cinematico-local-712-container gutters-row-lg-0 gutters-row-v-lg-1 gutters-row-md-0 gutters-row-v-md-1 gutters-row-0 gutters-row-v-1" data-kubio="kubio/row">
								<div class="position-relative wp-block-kubio-row__inner cinematico-single__k__single-1uGRU27HVz-inner cinematico-local-712-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-start justify-content-md-start justify-content-start gutters-col-lg-0 gutters-col-v-lg-1 gutters-col-md-0 gutters-col-v-md-1 gutters-col-0 gutters-col-v-1">
									<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container cinematico-single__k__single-K4Akm2YNqS-container cinematico-local-713-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
										<div class="position-relative wp-block-kubio-column__inner cinematico-single__k__single-K4Akm2YNqS-inner cinematico-local-713-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-3 h-px-md-0 v-inner-md-3 h-px-0 v-inner-3">
											<div class="position-relative wp-block-kubio-column__align cinematico-single__k__single-K4Akm2YNqS-align cinematico-local-713-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
												<p class="wp-block wp-block-kubio-text  position-relative wp-block-kubio-text__text cinematico-single__k__single-1pwRcGAnh-text cinematico-local-714-text" data-kubio="kubio/text">
													<?php esc_html_e('TAGS', 'cinematico'); ?>
												</p>
												<div class="wp-block wp-block-kubio-post-tags  position-relative wp-block-kubio-post-tags__container cinematico-single__k__single-tlSt_AyBi-container cinematico-local-715-container kubio-post-tags-container" data-kubio="kubio/post-tags">
													<div class="position-relative wp-block-kubio-post-tags__placeholder cinematico-single__k__single-tlSt_AyBi-placeholder cinematico-local-715-placeholder kubio-post-tags-placeholder"></div>
													<div class="position-relative wp-block-kubio-post-tags__tags cinematico-single__k__single-tlSt_AyBi-tags cinematico-local-715-tags">
														<?php cinematico_tags_list(__('No tags', 'cinematico')); ?>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="wp-block wp-block-kubio-row  position-relative wp-block-kubio-row__container cinematico-single__k__oBH0ABWoeL-container cinematico-local-716-container gutters-row-lg-0 gutters-row-v-lg-0 gutters-row-md-0 gutters-row-v-md-0 gutters-row-0 gutters-row-v-0" data-kubio="kubio/row">
								<div class="position-relative wp-block-kubio-row__inner cinematico-single__k__oBH0ABWoeL-inner cinematico-local-716-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-0 gutters-col-v-lg-0 gutters-col-md-0 gutters-col-v-md-0 gutters-col-0 gutters-col-v-0">
									<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container cinematico-single__k__wETEbWZUNc-container cinematico-local-717-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
										<div class="position-relative wp-block-kubio-column__inner cinematico-single__k__wETEbWZUNc-inner cinematico-local-717-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-0 h-px-md-0 v-inner-md-0 h-px-0 v-inner-0">
											<div class="position-relative wp-block-kubio-column__align cinematico-single__k__wETEbWZUNc-align cinematico-local-717-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
												<p class="wp-block wp-block-kubio-text  position-relative wp-block-kubio-text__text cinematico-single__k__single-1pwRcGAnh-text cinematico-local-718-text" data-kubio="kubio/text">
													<?php esc_html_e('Categories', 'cinematico'); ?>
												</p>
												<div class="wp-block wp-block-kubio-post-categories  position-relative wp-block-kubio-post-categories__container cinematico-single__k__up5pQ_Cww-container cinematico-local-719-container kubio-post-categories-container" data-kubio="kubio/post-categories">
													<div class="position-relative wp-block-kubio-post-categories__placeholder cinematico-single__k__up5pQ_Cww-placeholder cinematico-local-719-placeholder kubio-post-categories-placeholder"></div>
													<div class="position-relative wp-block-kubio-post-categories__tags cinematico-single__k__up5pQ_Cww-tags cinematico-local-719-tags">
														<?php cinematico_categories_list(__('No category', 'cinematico')); ?>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<?php if(cinematico_has_pagination()): ?>
							<div class="wp-block wp-block-kubio-query-pagination  position-relative wp-block-kubio-query-pagination__container cinematico-single__k__single-nqLiVZCaYo-container cinematico-local-720-container gutters-row-lg-0 gutters-row-v-lg-3 gutters-row-md-0 gutters-row-v-md-3 gutters-row-0 gutters-row-v-3" data-kubio="kubio/query-pagination">
								<div class="position-relative wp-block-kubio-query-pagination__inner cinematico-single__k__single-nqLiVZCaYo-inner cinematico-local-720-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-0 gutters-col-v-lg-3 gutters-col-md-0 gutters-col-v-md-3 gutters-col-0 gutters-col-v-3">
									<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container cinematico-single__k__single-3ndM77FkZV-container cinematico-local-721-container d-flex h-col-lg h-col-md h-col-auto" data-kubio="kubio/column">
										<div class="position-relative wp-block-kubio-column__inner cinematico-single__k__single-3ndM77FkZV-inner cinematico-local-721-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-2 h-px-md-0 v-inner-md-2 h-px-0 v-inner-2">
											<div class="position-relative wp-block-kubio-column__align cinematico-single__k__single-3ndM77FkZV-align cinematico-local-721-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
												<?php if(cinematico_has_pagination_button(true)): ?>
												<div class="position-relative wp-block-kubio-pagination-nav-button__spacing cinematico-single__k__ELgmeRXRD--spacing cinematico-local-722-spacing">
													<span class="wp-block wp-block-kubio-pagination-nav-button  position-relative wp-block-kubio-pagination-nav-button__outer cinematico-single__k__ELgmeRXRD--outer cinematico-local-722-outer kubio-button-container" data-kubio="kubio/pagination-nav-button">
														<a class="position-relative wp-block-kubio-pagination-nav-button__link cinematico-single__k__ELgmeRXRD--link cinematico-local-722-link h-w-100 h-global-transition" href="<?php cinematico_get_navigation_button_link(true); ?>">
															<span class="position-relative wp-block-kubio-pagination-nav-button__text cinematico-single__k__ELgmeRXRD--text cinematico-local-722-text kubio-inherit-typography">
																<?php esc_html_e('Previous', 'cinematico'); ?>
															</span>
														</a>
													</span>
												</div>
												<?php endif; ?>
											</div>
										</div>
									</div>
									<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container cinematico-single__k__single-mMPMCQqWfs-container cinematico-local-723-container d-flex h-col-lg h-col-md h-col-auto" data-kubio="kubio/column">
										<div class="position-relative wp-block-kubio-column__inner cinematico-single__k__single-mMPMCQqWfs-inner cinematico-local-723-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-2 h-px-md-0 v-inner-md-2 h-px-0 v-inner-2">
											<div class="position-relative wp-block-kubio-column__align cinematico-single__k__single-mMPMCQqWfs-align cinematico-local-723-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
												<?php if(cinematico_has_pagination_button()): ?>
												<div class="position-relative wp-block-kubio-pagination-nav-button__spacing cinematico-single__k__ELgmeRXRD--spacing cinematico-local-724-spacing">
													<span class="wp-block wp-block-kubio-pagination-nav-button  position-relative wp-block-kubio-pagination-nav-button__outer cinematico-single__k__ELgmeRXRD--outer cinematico-local-724-outer kubio-button-container" data-kubio="kubio/pagination-nav-button">
														<a class="position-relative wp-block-kubio-pagination-nav-button__link cinematico-single__k__ELgmeRXRD--link cinematico-local-724-link h-w-100 h-global-transition" href="<?php cinematico_get_navigation_button_link(); ?>">
															<span class="position-relative wp-block-kubio-pagination-nav-button__text cinematico-single__k__ELgmeRXRD--text cinematico-local-724-text kubio-inherit-typography">
																<?php esc_html_e('Next', 'cinematico'); ?>
															</span>
														</a>
													</span>
												</div>
												<?php endif; ?>
											</div>
										</div>
									</div>
								</div>
							</div>
							<?php endif; ?>
							<div class="wp-block wp-block-kubio-post-comments kubio-migration--1 position-relative wp-block-kubio-post-comments__commentsContainer cinematico-single__k__single-s5UQRGEAN-commentsContainer cinematico-local-725-commentsContainer" data-kubio="kubio/post-comments">
								<?php cinematico_post_comments(array (
  'none' => __('No responses yet', 'cinematico'),
  'one' => __('One response', 'cinematico'),
  'multiple' => __('{COMMENTS-COUNT} Responses', 'cinematico'),
  'disabled' => __('Comments are closed', 'cinematico'),
  'avatar_size' => __('32', 'cinematico'),
)); ?>
							</div>
							<div class="wp-block wp-block-kubio-post-comments-form  position-relative wp-block-kubio-post-comments-form__container cinematico-single__k__single-oXoikmHxB-container cinematico-local-726-container" data-kubio="kubio/post-comments-form">
								<?php comment_form(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
