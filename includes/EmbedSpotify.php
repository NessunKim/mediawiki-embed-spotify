<?php
class EmbedSpotify {
	/**
	 * Bind the renderPoem function to the <spotify> tag
	 * @param Parser $parser
	 */
	public static function init( Parser $parser ) {
		$parser->setHook( 'spotify', [ self::class, 'renderSpotify' ] );
	}

	/**
	 * @param string $input The text inside the spotify tag. "(album|playlist|artist)/id"
	 * @param array $args
	 * @param Parser $parser
	 * @param PPFrame $frame
	 * @return string
	 */
	public static function renderSpotify( $input, array $args, Parser $parser, PPFrame $frame ) {
		$input = htmlspecialchars( $input );
		if ( empty( $args['width'] ) ) {
			$args['width'] = '300px';
		}
		if ( empty( $args['height'] ) ) {
			$args['height'] = '380px';
		}
		$args['width'] = htmlspecialchars( $args['width'] );
		$args['height'] = htmlspecialchars( $args['height'] );
		return Html::rawElement( 'iframe', [
			'src' => "https://open.spotify.com/embed/$input",
			'width' => $args['width'],
			'height' => $args['height'],
			'frameborder' => '0',
			'allowtransparency' => 'true',
			'allow' => 'encrypted-media'
		], '' );
	}
}
