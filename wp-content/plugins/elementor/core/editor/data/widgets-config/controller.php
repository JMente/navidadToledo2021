<?php
namespace Elementor\Core\Editor\Data\WidgetsConfig;

use Elementor\Core\Utils\Collection;
use Elementor\Data\V2\Base\Controller as Controller_Base;
use Elementor\Plugin;

class Controller extends Controller_Base {
	public function get_name() {
		return 'widgets-config';
	}

	public function register_endpoints() {
		$this->index_endpoint->register_item_route(
			\WP_REST_Server::READABLE,
			[
				'id_arg_type_regex' => '[\w]+',
				'exclude' => [
					'description' => 'ids of widgets that should be excluded',
					'type' => 'array',
					'default' => [],
					'items' => [
						'type' => 'string',
					],
				],
			]
		);
	}

	public function get_items_args( $methods ) {
		return [
			'exclude' => [
				'description' => 'ids of widgets that should be excluded',
				'type' => 'array',
				'default' => [],
				'items' => [
					'type' => 'string',
				],
			],
		];
	}

	public function get_items( $request ) {
		$config = ( new Collection( Plugin::$instance->widgets_manager->get_widget_types() ) );

		$exclude = $request->get_param( 'exclude' );

		if ( ! empty( $exclude ) ) {
			$config = $config->filter( function ( $widget, $widget_key ) use ( $exclude ) {
				return ! in_array( $widget_key, $exclude, true );
			} );
		}

		return (object) $config
			->map( function ( $widget ) {
				return $this->prepare_for_response( $widget );
			} )
			->all();
	}

	public function get_item( $request ) {
		$widget = Plugin::$instance->widgets_manager->get_widget_types( $request->get_param( 'id' ) );

		return (object) $this->prepare_for_response( $widget );
	}

	public function get_permission_callback( $request ) {
		return current_user_can( 'edit_posts' );
	}

	/**
	 * @param $widget
	 *
	 * @return array
	 */
	private function prepare_for_response( $widget ) {
		return [
			'controls' => $widget->get_stack( false )['controls'],
			'tabs_controls' => $widget->get_tabs_controls(),
		];
	}
}
