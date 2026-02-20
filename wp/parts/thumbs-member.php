<li class="p-member-cont__item">
	<a href="<?php the_permalink(); ?>" class="p-member-cont__link">
		<div class="p-member-cont__wrap">
			<figure class="p-member-cont__img">
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
			<?php if ($Illustration = SCF::get('Illustration')) : ?>
				<figure class="p-member-cont__hover-img">
					<?php echo wp_get_attachment_image(
						$Illustration,
						'full',
						false,
						[
							'class'   => '',
							'loading' => 'lazy',
							'alt'     => get_the_title()
						]
					); ?>
				</figure>
			<?php endif; ?>
		</div>
		<span class="p-member-cont__name"><?php the_title(); ?></span>
		<?php if ($position = SCF::get('position')) : ?>
			<span class="p-member-cont__role">
				<?php echo nl2br(esc_html($position)); ?>
			</span>
		<?php endif; ?>
	</a>
</li>