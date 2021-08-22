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


<section class="cover-photo">

</section>

<!-- / cover-photo -->
