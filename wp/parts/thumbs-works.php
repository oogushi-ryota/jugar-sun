<li class="p-works-archive__item">
	<a href="<?php the_permalink(); ?>" class="p-works-archive__link">
		<figure class="p-works-archive__thumb">
			<?php if ( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail('full', [
					'alt'   => get_the_title(),
					'width' => 360,
					'height' => 188,
				]); ?>
			<?php else : ?>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/default-thumb.jpg" alt="サムネイル" width="360" height="188">
			<?php endif; ?>
		</figure>
		<p class="p-works-archive__ttl"><?php the_title(); ?></p>
	</a>
</li>