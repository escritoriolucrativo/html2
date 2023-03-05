<?php

/**
 * Join.chat public html template
 *
 * @since      4.1.5
 * @package    JoinChat
 * @subpackage JoinChat/public
 * @author     Creame <hola@crea.me>
 */

defined( 'WPINC' ) || exit;
?>

<div class="joinchat <?php echo esc_attr( join( ' ', $joinchat_classes ) ); ?>" data-settings='<?php echo JoinChatUtil::to_json( $data ); ?>'>
	<div class="joinchat__button">
		<div class="joinchat__button__open"></div>
		<?php if ( $image ) : ?>
			<div class="joinchat__button__image"><?php echo $image; ?></div>
		<?php endif; ?>
		<?php if ( $box_content ) : ?>
			<?php if ( $settings['message_start'] ) : ?>
				<div class="joinchat__button__sendtext"><?php echo esc_html( $settings['message_start'] ); ?></div>
			<?php endif; ?>
			<svg class="joinchat__button__send" width="60" height="60" viewbox="0 0 400 400" stroke-linecap="round" stroke-width="33">
				<path class="joinchat_svg__plain" d="M168.83 200.504H79.218L33.04 44.284a1 1 0 0 1 1.386-1.188L365.083 199.04a1 1 0 0 1 .003 1.808L34.432 357.903a1 1 0 0 1-1.388-1.187l29.42-99.427"/>
				<path class="joinchat_svg__chat" d="M318.087 318.087c-52.982 52.982-132.708 62.922-195.725 29.82l-80.449 10.18 10.358-80.112C18.956 214.905 28.836 134.99 81.913 81.913c65.218-65.217 170.956-65.217 236.174 0 42.661 42.661 57.416 102.661 44.265 157.316"/>
			</svg>
			<?php if ( $settings['message_badge'] ) : ?>
				<div class="joinchat__badge">1</div>
			<?php endif; ?>
		<?php endif; ?>
		<?php if ( $settings['button_tip'] ) : ?>
			<div class="joinchat__tooltip"><div><?php echo esc_html( $settings['button_tip'] ); ?></div></div>
		<?php endif; ?>
		<?php if ( $settings['qr'] ) : ?>
			<div class="joinchat__qr"><div><?php _e( 'Scan the code', 'creame-whatsapp-me' ); ?></div></div>
		<?php endif; ?>
	</div>
	<?php if ( $box_content ) : ?>
		<div class="joinchat__box">
			<div class="joinchat__header">
				<?php if ( '__jc__' === $settings['header'] ) : ?>
					<a class="joinchat__powered" href="<?php echo esc_url( $powered_link ); ?>" rel="nofollow noopener" target="_blank">
						<?php _e( 'Powered by', 'creame-whatsapp-me' ); ?> <svg width="81" height="18" viewbox="0 0 1424 318"><title>Join.chat</title><path d="m171 7 6 2 3 3v5l-1 8a947 947 0 0 0-2 56v53l1 24v31c0 22-6 43-18 63-11 19-27 35-48 48s-44 18-69 18c-14 0-24-3-32-8-7-6-11-13-11-23a26 26 0 0 1 26-27c7 0 13 2 19 6l12 12 1 1a97 97 0 0 0 10 13c4 4 7 6 10 6 4 0 7-2 10-6l6-23v-1c2-12 3-28 3-48V76l-1-3-3-1h-1l-11-2c-2-1-3-3-3-7s1-6 3-7a434 434 0 0 0 90-49zm1205 43c4 0 6 1 6 3l3 36a1888 1888 0 0 0 34 0h1l3 2 1 8-1 8-3 1h-35v62c0 14 2 23 5 28 3 6 9 8 16 8l5-1 3-1c2 0 3 1 5 3s3 4 2 6c-4 10-11 19-22 27-10 8-22 12-36 12-16 0-28-5-37-15l-8-13v1h-1c-17 17-33 26-47 26-18 0-31-13-39-39-5 12-12 22-21 29s-19 10-31 10c-11 0-21-4-29-13-7-8-11-18-11-30 0-10 2-17 5-23s9-11 17-15c13-7 35-14 67-21h1v-11c0-11-2-19-5-26-4-6-8-9-14-9-3 0-5 1-5 4v1l-2 15c-2 11-6 19-11 24-6 6-14 8-23 8-5 0-9-1-13-4-3-3-5-8-5-13 0-11 9-22 26-33s38-17 60-17c41 0 62 15 62 46v58l1 11 2 8 2 3h4l5-3 1-1-1-13v-88l-3-2-12-1c-1 0-2-3-2-7s1-6 2-6c16-4 29-9 40-15 10-6 20-15 31-25 1-2 4-3 7-3zM290 88c28 0 50 7 67 22 17 14 25 34 25 58 0 26-9 46-27 61s-42 22-71 22c-28 0-50-7-67-22a73 73 0 0 1-25-58c0-26 9-46 27-61s42-22 71-22zm588 0c19 0 34 4 45 12 11 9 17 18 17 29 0 6-3 11-7 15s-10 6-17 6c-13 0-24-8-33-25-5-11-10-18-13-21s-6-5-9-5c-8 0-11 6-11 17a128 128 0 0 0 32 81c8 8 16 12 25 12 8 0 16-3 24-10 1-1 3 0 6 2 2 2 3 3 3 5-5 12-15 23-29 32s-30 13-48 13c-24 0-43-7-58-22a78 78 0 0 1-22-58c0-25 9-45 27-60s41-23 68-23zm-402-3 5 2 3 3-1 10a785 785 0 0 0-2 53v76c1 3 2 4 4 4l11 3 11-3c3 0 4-1 4-4v-82l-1-2-3-2-11-1-2-6c0-4 1-6 2-6a364 364 0 0 0 77-44l5 2 3 3v12a393 393 0 0 0-1 21c5-10 12-18 22-25 9-8 21-11 34-11 16 0 29 5 38 14 10 9 14 22 14 39v88c0 3 2 4 4 4l11 3c1 0 2 2 2 6 0 5-1 7-2 7h-1a932 932 0 0 1-49-2 462 462 0 0 0-48 2c-2 0-3-2-3-7 0-3 1-6 3-6l8-3 3-1 1-3v-62c0-14-2-24-6-29-4-6-12-9-22-9l-7 1v99l1 3 3 1 8 3h1l2 6c0 5-1 7-3 7a783 783 0 0 1-47-2 512 512 0 0 0-51 2h-1a895 895 0 0 1-49-2 500 500 0 0 0-50 2c-1 0-2-2-2-7 0-4 1-6 2-6l11-3c2 0 3-1 4-4v-82l-1-3-3-1-11-2c-1 0-2-2-2-6l2-6a380 380 0 0 0 80-44zm539-75 5 2 3 3-1 9a758 758 0 0 0-2 55v42h1c5-9 12-16 21-22 9-7 20-10 32-10 16 0 29 5 38 14 10 9 14 22 14 39v88c0 2 2 3 4 4l11 2c1 0 2 2 2 7 0 4-1 6-2 6h-1a937 937 0 0 1-49-2 466 466 0 0 0-48 2c-2 0-3-2-3-6s1-7 3-7l8-2 3-2 1-3v-61c0-14-2-24-6-29-4-6-12-9-22-9l-7 1v99l1 2 3 2 8 2h1c1 1 2 3 2 7s-1 6-3 6a788 788 0 0 1-47-2 517 517 0 0 0-51 2c-1 0-2-2-2-6 0-5 1-7 2-7l11-2c3-1 4-2 4-5V71l-1-3-3-1-11-2c-1 0-2-2-2-6l2-6a387 387 0 0 0 81-43zm-743 90c-8 0-12 7-12 20a266 266 0 0 0 33 116c3 3 6 4 9 4 8 0 12-6 12-20 0-17-4-38-11-65-8-27-15-44-22-50-3-4-6-5-9-5zm939 65c-6 0-9 4-9 13 0 8 2 16 7 22 5 7 10 10 15 10l6-2v-22c0-6-2-11-7-15-4-4-8-6-12-6zM451 0c10 0 18 3 25 10s10 16 10 26a35 35 0 0 1-35 36c-11 0-19-4-26-10-7-7-10-16-10-26s3-19 10-26 15-10 26-10zm297 249c9 0 16-3 22-8 6-6 9-12 9-20s-3-15-9-21-13-8-22-8-16 3-22 8-9 12-9 21 3 14 9 20 13 8 22 8z"/></svg>
					</a>
				<?php elseif ( '__wa__' === $settings['header'] ) : ?>
					<svg class="joinchat__wa" width="120" height="28" viewBox="0 0 120 28"><title>WhatsApp</title><path d="M117.2 17c0 .4-.2.7-.4 1-.1.3-.4.5-.7.7l-1 .2c-.5 0-.9 0-1.2-.2l-.7-.7a3 3 0 0 1-.4-1 5.4 5.4 0 0 1 0-2.3c0-.4.2-.7.4-1l.7-.7a2 2 0 0 1 1.1-.3 2 2 0 0 1 1.8 1l.4 1a5.3 5.3 0 0 1 0 2.3zm2.5-3c-.1-.7-.4-1.3-.8-1.7a4 4 0 0 0-1.3-1.2c-.6-.3-1.3-.4-2-.4-.6 0-1.2.1-1.7.4a3 3 0 0 0-1.2 1.1V11H110v13h2.7v-4.5c.4.4.8.8 1.3 1 .5.3 1 .4 1.6.4a4 4 0 0 0 3.2-1.5c.4-.5.7-1 .8-1.6.2-.6.3-1.2.3-1.9s0-1.3-.3-2zm-13.1 3c0 .4-.2.7-.4 1l-.7.7-1.1.2c-.4 0-.8 0-1-.2-.4-.2-.6-.4-.8-.7a3 3 0 0 1-.4-1 5.4 5.4 0 0 1 0-2.3c0-.4.2-.7.4-1 .1-.3.4-.5.7-.7a2 2 0 0 1 1-.3 2 2 0 0 1 1.9 1l.4 1a5.4 5.4 0 0 1 0 2.3zm1.7-4.7a4 4 0 0 0-3.3-1.6c-.6 0-1.2.1-1.7.4a3 3 0 0 0-1.2 1.1V11h-2.6v13h2.7v-4.5c.3.4.7.8 1.2 1 .6.3 1.1.4 1.7.4a4 4 0 0 0 3.2-1.5c.4-.5.6-1 .8-1.6.2-.6.3-1.2.3-1.9s-.1-1.3-.3-2c-.2-.6-.4-1.2-.8-1.6zm-17.5 3.2l1.7-5 1.7 5h-3.4zm.2-8.2l-5 13.4h3l1-3h5l1 3h3L94 7.3h-3zm-5.3 9.1l-.6-.8-1-.5a11.6 11.6 0 0 0-2.3-.5l-1-.3a2 2 0 0 1-.6-.3.7.7 0 0 1-.3-.6c0-.2 0-.4.2-.5l.3-.3h.5l.5-.1c.5 0 .9 0 1.2.3.4.1.6.5.6 1h2.5c0-.6-.2-1.1-.4-1.5a3 3 0 0 0-1-1 4 4 0 0 0-1.3-.5 7.7 7.7 0 0 0-3 0c-.6.1-1 .3-1.4.5l-1 1a3 3 0 0 0-.4 1.5 2 2 0 0 0 1 1.8l1 .5 1.1.3 2.2.6c.6.2.8.5.8 1l-.1.5-.4.4a2 2 0 0 1-.6.2 2.8 2.8 0 0 1-1.4 0 2 2 0 0 1-.6-.3l-.5-.5-.2-.8H77c0 .7.2 1.2.5 1.6.2.5.6.8 1 1 .4.3.9.5 1.4.6a8 8 0 0 0 3.3 0c.5 0 1-.2 1.4-.5a3 3 0 0 0 1-1c.3-.5.4-1 .4-1.6 0-.5 0-.9-.3-1.2zM74.7 8h-2.6v3h-1.7v1.7h1.7v5.8c0 .5 0 .9.2 1.2l.7.7 1 .3a7.8 7.8 0 0 0 2 0h.7v-2.1a3.4 3.4 0 0 1-.8 0l-1-.1-.2-1v-4.8h2V11h-2V8zm-7.6 9v.5l-.3.8-.7.6c-.2.2-.7.2-1.2.2h-.6l-.5-.2a1 1 0 0 1-.4-.4l-.1-.6.1-.6.4-.4.5-.3a4.8 4.8 0 0 1 1.2-.2 8.3 8.3 0 0 0 1.2-.2l.4-.3v1zm2.6 1.5v-5c0-.6 0-1.1-.3-1.5l-1-.8-1.4-.4a10.9 10.9 0 0 0-3.1 0l-1.5.6c-.4.2-.7.6-1 1a3 3 0 0 0-.5 1.5h2.7c0-.5.2-.9.5-1a2 2 0 0 1 1.3-.4h.6l.6.2.3.4.2.7c0 .3 0 .5-.3.6-.1.2-.4.3-.7.4l-1 .1a21.9 21.9 0 0 0-2.4.4l-1 .5c-.3.2-.6.5-.8.9-.2.3-.3.8-.3 1.3s.1 1 .3 1.3c.1.4.4.7.7 1l1 .4c.4.2.9.2 1.3.2a6 6 0 0 0 1.8-.2c.6-.2 1-.5 1.5-1a4 4 0 0 0 .2 1H70l-.3-1v-1.2zm-11-6.7c-.2-.4-.6-.6-1-.8-.5-.2-1-.3-1.8-.3-.5 0-1 .1-1.5.4a3 3 0 0 0-1.3 1.2v-5h-2.7v13.4H53v-5.1c0-1 .2-1.7.5-2.2.3-.4.9-.6 1.6-.6.6 0 1 .2 1.3.6.3.4.4 1 .4 1.8v5.5h2.7v-6c0-.6 0-1.2-.2-1.6 0-.5-.3-1-.5-1.3zm-14 4.7l-2.3-9.2h-2.8l-2.3 9-2.2-9h-3l3.6 13.4h3l2.2-9.2 2.3 9.2h3l3.6-13.4h-3l-2.1 9.2zm-24.5.2L18 15.6c-.3-.1-.6-.2-.8.2A20 20 0 0 1 16 17c-.2.2-.4.3-.7.1-.4-.2-1.5-.5-2.8-1.7-1-1-1.7-2-2-2.4-.1-.4 0-.5.2-.7l.5-.6.4-.6v-.6L10.4 8c-.3-.6-.6-.5-.8-.6H9c-.2 0-.6.1-.9.5C7.8 8.2 7 9 7 10.7c0 1.7 1.3 3.4 1.4 3.6.2.3 2.5 3.7 6 5.2l1.9.8c.8.2 1.6.2 2.2.1.6-.1 2-.8 2.3-1.6.3-.9.3-1.5.2-1.7l-.7-.4zM14 25.3c-2 0-4-.5-5.8-1.6l-.4-.2-4.4 1.1 1.2-4.2-.3-.5A11.5 11.5 0 0 1 22.1 5.7 11.5 11.5 0 0 1 14 25.3zM14 0A13.8 13.8 0 0 0 2 20.7L0 28l7.3-2A13.8 13.8 0 1 0 14 0z"/></svg>
				<?php elseif ( '' !== $settings['header'] ) : ?>
					<span class="joinchat__header__text"><?php echo esc_html( $settings['header'] ); ?></span>
				<?php endif; ?>
				<div class="joinchat__close" aria-label="<?php _e( 'Close', 'creame-whatsapp-me' ); ?>"></div>
			</div>
			<div class="joinchat__box__scroll">
				<div class="joinchat__box__content">
					<?php echo $box_content; ?>
				</div>
			</div>
		</div>
		<svg style="width:0;height:0;position:absolute"><defs><clipPath id="joinchat__message__peak"><path d="M17 25V0C17 12.877 6.082 14.9 1.031 15.91c-1.559.31-1.179 2.272.004 2.272C9.609 18.182 17 18.088 17 25z"/></clipPath></defs></svg>
	<?php endif; ?>
</div>
