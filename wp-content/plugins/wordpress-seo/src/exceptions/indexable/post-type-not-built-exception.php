<?php

namespace Yoast\WP\SEO\Exceptions\Indexable;

/**
 * Exception that is thrown whenever a post type could not be built
 * in the context of the indexables.
 */
class Post_Type_Not_Built_Exception extends Not_Built_Exception {

	/**
	 * Throws an exception if the post is not indexable.
	 *
	 * @param string $post_type The post type.
	 *
	 * @throws Post_Type_Not_Built_Exception When the post type is not indexable.
	 */
	public static function because_not_indexable( $post_type ) {
		/* translators: %s: expands to the post type */
		return new Post_Type_Not_Built_Exception( \sprintf( \__( 'The post type %s could not be indexed because it does not meet indexing requirements.', 'wordpress-seo' ), $post_type ) );
	}
}
