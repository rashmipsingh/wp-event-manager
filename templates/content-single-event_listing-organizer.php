<?php/** * Single view organizer information box * * Hooked into single_event_listing_start priority 30 * * @since  2.5 */?><div class="wpem-single-event-footer" itemscope itemtype="http://data-vocabulary.org/Organization">	<div class="wpem-row">		<div class="wpem-col-md-12">        	<div class="wpem-organizer-profile-wrapper" id="wpem_organizer_profile">        		<div class="wpem-organizer-profile">            		<?php do_action('single_event_listing_organizer_start');?>            		<div class="wpem-organizer-logo-wrapper">            		<div class="wpem-organizer-logo"><a><?php display_organizer_logo();?></a></div>            		</div>            		<div class="wpem-organizer-name wpem-heading-text"><a href="#"><span><?php display_organizer_name(); ?></span></a></div>                  	<div class="wpem-organizer-short-info"><?php printf(__('%s','wp-event-manager'),get_organizer_description());  ?></div>                  <div class="wpem-organizer-social-links">                    <div class="wpem-organizer-social-lists">                      <?php do_action('single_event_listing_organizer_social_start');?>                      <?php                        $organizer_website  = get_organizer_website();                         $organizer_facebook = get_organizer_facebook();                         $organizer_twitter  = get_organizer_twitter();                         $organizer_youtube  = get_organizer_youtube();                       ?>                      <?php if(!empty($organizer_website) ){                        ?>                        <div class="wpem-social-icon wpem-weblink"><a href="<?php echo esc_url($organizer_website);?>" title="Get Connect on Website">Website</a></div>                        <?php                      }                        if(!empty($organizer_facebook) ){                       ?>                        <div class="wpem-social-icon wpem-facebook"><a href="<?php echo esc_url($organizer_facebook);?>" title="Get Connect on Facebook">Facebook</a></div>                    <?php }                       if(!empty($organizer_twitter) ){                    ?>                    <div class="wpem-social-icon wpem-twitter"><a href="<?php echo esc_url($organizer_twitter);?>" title="Get Connect on Twitter">Twitter</a></div>                  <?php }                        if(!empty($organizer_youtube) ){                    ?>                      <div class="wpem-social-icon wpem-youtube"><a href="<?php echo esc_url($organizer_youtube);?>" title="Get Connect on Whatsapp">Youtube</a></div>                    <?php } ?>                      <?php do_action('single_event_listing_organizer_single_social_end');?>                    </div>                  </div>                  <div class="wpem-organizer-contact-actions">                    <?php do_action('single_event_listing_organizer_action_start');?>               <!--<div class="wpem-organizer-page-url-button"><a href="#" class="wpem-theme-button"><span>View More</span></a></div> -->                    <?php do_action('single_event_listing_organizer_action_end');?>                  </div>            		            		<?php do_action('single_event_listing_organizer_end');?>        		</div>        	</div>		</div>	</div></div><script>jQuery(document).ready(function(){	console.log('added in the list');    jQuery('.wpem-single-event-slider').slick({      dots: true,      infinite: true,      speed: 500,      fade: true,      cssEase: 'linear'    });    });</script>    