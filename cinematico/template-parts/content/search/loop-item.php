<div class="<?php cinematico_print_archive_entry_class('wp-block wp-block-kubio-query-loop-item  position-relative wp-block-kubio-query-loop-item__container cinematico-search__k__QtetVXHJ9I-container cinematico-local-581-container d-flex   '); ?>"" data-kubio="kubio/query-loop-item">
	<div class="position-relative wp-block-kubio-query-loop-item__inner cinematico-search__k__QtetVXHJ9I-inner cinematico-local-581-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-0 h-px-md-0 v-inner-md-0 h-px-0 v-inner-0">
		<div class="position-relative wp-block-kubio-query-loop-item__align cinematico-search__k__QtetVXHJ9I-align cinematico-local-581-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
			<figure class="wp-block wp-block-kubio-post-featured-image  position-relative wp-block-kubio-post-featured-image__container cinematico-search__k__iE82N7AEu-container cinematico-local-582-container h-aspect-ratio--4-3 <?php cinematico_post_missing_featured_image_class(); ?>" data-kubio="kubio/post-featured-image" data-kubio-settings="{{kubio_settings_value}}">
				<?php if(has_post_thumbnail()): ?>
				<img class='position-relative wp-block-kubio-post-featured-image__image cinematico-search__k__iE82N7AEu-image cinematico-local--image' src='<?php echo esc_url(get_the_post_thumbnail_url());?>' />
				<?php endif; ?>
				<div class="position-relative wp-block-kubio-post-featured-image__inner cinematico-search__k__iE82N7AEu-inner cinematico-local-582-inner">
					<div class="position-relative wp-block-kubio-post-featured-image__align cinematico-search__k__iE82N7AEu-align cinematico-local-582-align h-y-container align-self-lg-start align-self-md-start align-self-start"></div>
				</div>
			</figure>
			<a class="position-relative wp-block-kubio-post-title__link cinematico-search__k__tstzQ_uACq-link cinematico-local-583-link d-block" href="<?php echo esc_url(get_the_permalink()); ?>">
				<h4 class="wp-block wp-block-kubio-post-title  position-relative wp-block-kubio-post-title__container cinematico-search__k__tstzQ_uACq-container cinematico-local-583-container" data-kubio="kubio/post-title">
					<?php the_title(); ?>
				</h4>
			</a>
			<p class="wp-block wp-block-kubio-post-excerpt  position-relative wp-block-kubio-post-excerpt__text cinematico-search__k__-hWWlFyCEF-text cinematico-local-584-text" data-kubio="kubio/post-excerpt">
				<?php cinematico_post_excerpt(array (
  'max_length' => 16,
)); ?>
			</p>
			<div class="position-relative wp-block-kubio-read-more-button__spacing cinematico-search__k__7TrnS1SQ70-spacing cinematico-local-585-spacing">
				<span class="wp-block wp-block-kubio-read-more-button  position-relative wp-block-kubio-read-more-button__outer cinematico-search__k__7TrnS1SQ70-outer cinematico-local-585-outer kubio-button-container" data-kubio="kubio/read-more-button">
					<a class="position-relative wp-block-kubio-read-more-button__link cinematico-search__k__7TrnS1SQ70-link cinematico-local-585-link h-w-100 h-global-transition" href="<?php echo esc_url(get_the_permalink()); ?>">
						<span class="position-relative wp-block-kubio-read-more-button__text cinematico-search__k__7TrnS1SQ70-text cinematico-local-585-text kubio-inherit-typography">
							<?php esc_html_e('Read more', 'cinematico'); ?>
						</span>
					</a>
				</span>
			</div>
			<div class="wp-block wp-block-kubio-post-meta  position-relative wp-block-kubio-post-meta__metaDataContainer cinematico-search__k__in2mlwF4a-metaDataContainer cinematico-local-586-metaDataContainer h-blog-meta" data-kubio="kubio/post-meta">
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
		</div>
	</div>
</div>
