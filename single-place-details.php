<?php  if(get_post_meta($post->ID, 'et_event_link', true)){ ?>
                <li class="event-place">
                    <span class="event-place limit-display" title="<?php _e("Event", ET_DOMAIN); ?>">
                        <i class="fa fa-link"></i>
                        <?php 
                            echo (get_post_meta($post->ID, 'et_event_link', true)) ? '<a rel="nofollow" target="_blank" href="http://'.str_replace(array('http://', 'https://'), '',get_post_meta($post->ID, 'et_event_link', true)) .'" >'.get_post_meta($post->ID, 'et_event_link', true).'</a>' : __( 'No specify event' , ET_DOMAIN );;
                        ?>
                    </span>                
                 </li>         
  <?php  } ?>
