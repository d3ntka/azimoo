<!-- cover-photo -->
<?php
$cover_img = get_sub_field( 'cover_img' );
if ( $cover_img ) : ?>
	<style>
        .cover-photo{
            background-image: url("<?=$cover_img['url']; ?>");
        }
    </style>

<?php endif; ?>

<div class="sections__shadow">

<section class="cover-photo indent__in">

</section>
    </div>
<!-- / cover-photo -->
