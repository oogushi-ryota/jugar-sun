<li class="p-creators-cont__item">
	<figure class="p-creators-cont__thumb">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail('full', [
				'alt'   => get_the_title(),
				'width' => 360,
				'height' => 360,
			]); ?>
		<?php else : ?>
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/default-thumb02.jpg" alt="サムネイル" width="360" height="360">
		<?php endif; ?>
	</figure>
	<ul class="p-creators-cont__sns-list">
		<?php if ($youtube = SCF::get('youtube-url')) : ?>
			<li class="p-creators-cont__sns-item">
				<a href="<?php echo esc_url($youtube); ?>" target="_blank" class="p-creators-cont__sns-link">
					<figure class="p-creators-cont__sns-icon">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/creators/sns_icon01.svg" alt="youtube" class="" width="48" height="48">
					</figure>
				</a>
			</li>
		<?php endif; ?>

		<?php if ($instagram = SCF::get('instagram-url')) : ?>
			<li class="p-creators-cont__sns-item">
				<a href="<?php echo esc_url($instagram); ?>" target="_blank" class="p-creators-cont__sns-link">
					<figure class="p-creators-cont__sns-icon">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/creators/sns_icon02.svg" alt="Instagram" class="" width="48" height="48">
					</figure>
				</a>
			</li>
		<?php endif; ?>

		<?php if ($tiktok = SCF::get('tiktok-url')) : ?>
			<li class="p-creators-cont__sns-item">
				<a href="<?php echo esc_url($tiktok); ?>" target="_blank" class="p-creators-cont__sns-link">
					<figure class="p-creators-cont__sns-icon">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/creators/sns_icon03.svg" alt="TikTok" class="" width="48" height="48">
					</figure>
				</a>
			</li>
		<?php endif; ?>

		<?php if ($x = SCF::get('x-url')) : ?>
			<li class="p-creators-cont__sns-item">
				<a href="<?php echo esc_url($x); ?>" target="_blank" class="p-creators-cont__sns-link">
					<figure class="p-creators-cont__sns-icon">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/creators/sns_icon04.svg" alt="X" class="" width="48" height="48">
					</figure>
				</a>
			</li>
		<?php endif; ?>
	</ul>
	<p class="p-creators-cont__name"><?php the_title(); ?></p>
</li>