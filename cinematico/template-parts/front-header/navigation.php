<?php $component = \ColibriWP\Theme\View::getData( 'component' ); ?>
<div class="wp-block wp-block-kubio-navigation  position-relative wp-block-kubio-navigation__outer <?php echo $component->printNavigationClasses(); ?> cinematico-front-header__k__Gp3qTlxXlu-outer cinematico-local-89-outer h-navigation_overlap" data-kubio="kubio/navigation" data-kubio-component="overlap" data-kubio-settings="true" id="navigation">
	<?php cinematico_theme()->get('front-top-bar')->render(); ?>
	<div class="wp-block wp-block-kubio-navigation-section  position-relative wp-block-kubio-navigation-section__nav cinematico-front-header__k__xLwdIMLPC_l-nav cinematico-local-106-nav h-section h-navigation" data-kubio="kubio/navigation-section" data-kubio-component="navigation" data-kubio-settings="{&quot;sticky&quot;:{&quot;startAfterNode&quot;:{&quot;enabled&quot;:false},&quot;animations&quot;:{&quot;enabled&quot;:false,&quot;duration&quot;:0,&quot;name&quot;:&quot;slideDown&quot;}},&quot;overlap&quot;:true}">
		<div class="position-relative wp-block-kubio-navigation-section__nav-section cinematico-front-header__k__xLwdIMLPC_l-nav-section cinematico-local-106-nav-section    <?php echo $component->printContainerClasses(); ?>">
			<div class="wp-block wp-block-kubio-navigation-items  position-relative wp-block-kubio-navigation-items__outer cinematico-front-header__k__DqcL_YF9LKJ-outer cinematico-local-107-outer" data-kubio="kubio/navigation-items" data-nav-normal="true">
				<div class="wp-block wp-block-kubio-row  position-relative wp-block-kubio-row__container cinematico-front-header__k__MqErEXZ17Jm-container cinematico-local-108-container gutters-row-lg-2 gutters-row-v-lg-2 gutters-row-md-2 gutters-row-v-md-2 gutters-row-3 gutters-row-v-0" data-kubio="kubio/row">
					<div class="position-relative wp-block-kubio-row__inner cinematico-front-header__k__MqErEXZ17Jm-inner cinematico-local-108-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-2 gutters-col-v-lg-2 gutters-col-md-2 gutters-col-v-md-2 gutters-col-3 gutters-col-v-0">
						<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container cinematico-front-header__k__SFXC9Ze09eu-container cinematico-local-109-container d-flex h-col-lg-auto h-col-md-auto h-col" data-kubio="kubio/column">
							<div class="position-relative wp-block-kubio-column__inner cinematico-front-header__k__SFXC9Ze09eu-inner cinematico-local-109-inner d-flex h-flex-basis h-px-lg-3 v-inner-lg-0 h-px-md-0 v-inner-md-0 h-px-2 v-inner-3">
								<div class="position-relative wp-block-kubio-column__align cinematico-front-header__k__SFXC9Ze09eu-align cinematico-local-109-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-center align-self-md-center align-self-center">
									<?php cinematico_theme()->get('logo')->render(array (
  'wrapper_class' => 'wp-block wp-block-kubio-logo position-relative wp-block-kubio-logo__container  kubio-logo-direction-row cinematico-front-header__k__YpuDHFCdd-container cinematico-local--container',
  'logo_image_class' => 'position-relative wp-block-kubio-logo__image  kubio-logo-image  cinematico-front-header__k__YpuDHFCdd-image cinematico-local--image',
  'alt_logo_image_class' => 'position-relative wp-block-kubio-logo__alternateImage kubio-logo-image kubio-alternate-logo-image   cinematico-front-header__k__YpuDHFCdd-alternateImage cinematico-local--alternateImage',
  'logo_text_class' => 'position-relative wp-block-kubio-logo__text  cinematico-front-header__k__YpuDHFCdd-text cinematico-local--text',
)); ?>
								</div>
							</div>
						</div>
						<div class="wp-block wp-block-kubio-column  kubio-hide-on-mobile position-relative wp-block-kubio-column__container cinematico-front-header__k__Cu9zji0X5O-container cinematico-local-111-container d-flex h-col-lg h-col-md h-col-auto" data-kubio="kubio/column">
							<div class="position-relative wp-block-kubio-column__inner cinematico-front-header__k__Cu9zji0X5O-inner cinematico-local-111-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-0 h-px-md-0 v-inner-md-0 h-px-0 v-inner-0">
								<div class="position-relative wp-block-kubio-column__align cinematico-front-header__k__Cu9zji0X5O-align cinematico-local-111-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-center align-self-md-center align-self-center">
									<div class="wp-block wp-block-kubio-spacer  position-relative wp-block-kubio-spacer__container cinematico-front-header__k__uj2bfOyqkL-container cinematico-local-112-container" data-kubio="kubio/spacer"></div>
								</div>
							</div>
						</div>
						<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container cinematico-front-header__k__ZEkYpBrx7RA-container cinematico-local-113-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
							<div class="position-relative wp-block-kubio-column__inner cinematico-front-header__k__ZEkYpBrx7RA-inner cinematico-local-113-inner d-flex h-flex-basis h-px-lg-3 v-inner-lg-0 h-px-md-0 v-inner-md-0 h-px-2 v-inner-0">
								<div class="position-relative wp-block-kubio-column__align cinematico-front-header__k__ZEkYpBrx7RA-align cinematico-local-113-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-center align-self-md-center align-self-center">
									<?php cinematico_theme()->get('header-menu')->render(); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>