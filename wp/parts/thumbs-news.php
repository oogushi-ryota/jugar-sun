<li class="p-news-archive__item">
	<a href="<?php the_permalink(); ?>" class="p-news-archive__link">
		<figure class="p-news-archive__thumb">
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
		<time datetime="<?php echo get_the_date('c'); ?>" class="p-news-archive__time"><?php echo get_the_date('Y.m.d'); ?></time>
		<p class="p-news-archive__ttl"><?php the_title(); ?></p>
	</a>
</li>