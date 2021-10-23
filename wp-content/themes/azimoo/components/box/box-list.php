<?php 
  $anchors = array();
  if (have_rows('layouts')) {
    while (have_rows('layouts')) {
      the_row();
      if (get_row_layout() == 'layouts_box') {
        $anchors[] = get_sub_field('box_title');
      } // end if anchor
    } // end while have rows
  } // end if have rows
  if (count($anchors)) {
    ?>
    <div class="box__list--wrap">
        <div class="box__list">
            <ul>
                <!-- <li class="box__list--title">
                    <?php _e('jednostka', 'azimoo'); ?>
                </li> -->
            <?php 
              foreach ($anchors as $anchor) {
                ?>
                <li>
                    <a href="#box-<?php echo sanitize_title($anchor); ?>">
                        BOX<br>
                        <?php echo $anchor; ?>
                    </a>
                </li>
                <?php
              } // end foreach anchor
            ?>
            </ul>
        </div>
    </div>
    <?php 
  } // end if anchors
?>