<!-- slider -->
<?php
// $slider_imgs = get_sub_field( 'slider_imgs' );
if (get_sub_field( 'slider_imgs' )):
  $slider_imgs = get_sub_field( 'slider_imgs' );
else:
  $slider_imgs = get_field( 'options_slider_imgs', 'options');
endif;
$i=0;

if ( $slider_imgs ) : ?>

<section class="slider">
<div class="glide" id="hero-slider">
  <div class="glide__track" data-glide-el="track">
    <ul class="glide__slides">
    <?php foreach( $slider_imgs as $image ) : ?>
        <li class="glide__slide">
            <div class="slider__img" style="background-image: url('<?=$image['url']; ?>')">

            </div>
        </li>
	<?php endforeach; ?>
    </ul>
  </div>

  <div class="glide__bullets" data-glide-el="controls[nav]">
    <?php foreach( $slider_imgs as $image ) : ?>
        <button class="glide__bullet" data-glide-dir="=<?=$i;?>"></button>
        <?php $i++ ;?>
	<?php endforeach; ?>
  </div>
</div>

</section>
<?php endif; ?>
<script>
window.addEventListener('load', function () {
  new Glide('#hero-slider',{
    type: 'carousel',
    gap: 0,
    autoplay: 5000,
    hoverpause: true,
  }).mount();
});
</script>

<!-- / slider -->