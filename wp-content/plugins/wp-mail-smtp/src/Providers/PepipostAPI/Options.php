<?php

namespace WPMailSMTP\Providers\PepipostAPI;

use WPMailSMTP\Providers\OptionsAbstract;
use WPMailSMTP\Options as PluginOptions;

/**
 * Class Options.
 *
 * @since 1.8.0
 */
class Options extends OptionsAbstract {

	/**
	 * Mailer slug.
	 *
	 * @since 1.8.0
	 */
	const SLUG = 'pepipostapi';

	/**
	 * Options constructor.
	 *
	 * @since 1.8.0
	 */
	public function __construct() {

		$description = sprintf(
			wp_kses( /* translators: %1$s - URL to pepipost.com site. */
				__( '<strong><a href="%1$s" target="_blank" rel="noopener noreferrer">Pepipost</a> is a recommended transactional email service.</strong> Every month Pepipost delivers over 8 billion emails from 20,000+ customers. Their mission is to reliably send emails in the most efficient way and at the most disruptive pricing ever.  Pepipost provides users 30,000 free emails the first 30 days, then 100 emails per day.', 'wp-mail-smtp' ) .
				'<br><br>' .
				/* translators: %1$s - URL to wpmailsmtp.com doc. */
				__( 'Read our <a href="%2$s" target="_blank" rel="noopener noreferrer">Pepipost documentation</a> to learn how to configure Pepipost and improve your email deliverability.', 'wp-mail-smtp' ),
				array(
					'br'     => true,
					'strong' => true,
					'a'      => array(
						'href'   => true,
						'rel'    => true,
						'target' => true,
					),
				)
			),
			'https://wpmailsmtp.com/go/pepipost/',
			'https://wpmailsmtp.com/docs/how-to-set-up-the-pepipost-mailer-in-wp-mail-smtp'
		);

		$api_key = PluginOptions::init()->get( self::SLUG, 'api_key' );

		if ( empty( $api_key ) ) {
			$description .= '</p><p class="buttonned"><a href="https://wpmailsmtp.com/go/pepipost/" target="_blank" rel="noopener noreferrer" class="wp-mail-smtp-btn wp-mail-smtp-btn-md wp-mail-smtp-btn-blueish">' .
								esc_html__( 'Get Pepipost Now (Free)', 'wp-mail-smtp' ) .
							'</a></p>';
		}

		parent::__construct(
			array(
				'logo_url'    => wp_mail_smtp()->assets_url . '/images/providers/pepipost.png',
				'slug'        => self::SLUG,
				'title'       => esc_html__( 'Pepipost', 'wp-mail-smtp' ),
				'description' => $description,
				'recommended' => true,
				'php'         => '5.3',
			)
		);
	}

	/**
	 * Output the mailer provider options.
	 *
	 * @since 1.8.0
	 */
	public function display_options() {

		// Do not display options if PHP version is not correct.
		if ( ! $this->is_php_correct() ) {
			$this->display_php_warning();

			return;
		}
		?>

		<!-- API Key -->
		<div id="wp-mail-smtp-setting-row-<?php echo esc_attr( $this->get_slug() ); ?>-client_id"
			class="wp-mail-smtp-setting-row wp-mail-smtp-setting-row-text wp-mail-smtp-clear">
			<div class="wp-mail-smtp-setting-label">
				<label for="wp-mail-smtp-setting-<?php echo esc_attr( $this->get_slug() ); ?>-api_key"><?php esc_html_e( 'API Key', 'wp-mail-smtp' ); ?></label>
			</div>
			<div class="wp-mail-smtp-setting-field">
				<?php if ( $this->options->is_const_defined( $this->get_slug(), 'api_key' ) ) : ?>
					<input type="text" disabled value="****************************************"
						id="wp-mail-smtp-setting-<?php echo esc_attr( $this->get_slug() ); ?>-api_key"
					/>
					<?php $this->display_const_set_message( 'WPMS_PEPIPOST_API_KEY' ); ?>
				<?php else : ?>
					<input type="password" spellcheck="false"
						name="wp-mail-smtp[<?php echo esc_attr( $this->get_slug() ); ?>][api_key]"
						value="<?php echo esc_attr( $this->options->get( $this->get_slug(), 'api_key' ) ); ?>"
						id="wp-mail-smtp-setting-<?php echo esc_attr( $this->get_slug() ); ?>-api_key"
					/>
				<?php endif; ?>

				<p class="desc">
					<?php
					printf( /* translators: %s - pepipost.com link to get an API Key. */
						esc_html__( 'Follow this link to get an API Key: %s.', 'wp-mail-smtp' ),
						'<a href="https://app.pepipost.com/app/settings/integration" target="_blank" rel="noopener noreferrer">' .
						esc_html__( 'Get the API Key', 'wp-mail-smtp' ) .
						'</a>'
					);
					?>
				</p>
			</div>
		</div>

		<?php
	}
}
