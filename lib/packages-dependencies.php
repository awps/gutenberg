<?php
/**
 * Returns array with the list of WordPress packages and their dependencies.
 *
 * @package gutenberg
 */

return array(
	'wp-a11y'                               => array(
		'wp-dom-ready',
	),
	'wp-annotations'                        => array(
		'wp-data',
		'wp-hooks',
		'wp-i18n',
		'wp-rich-text',
	),
	'wp-api-fetch'                          => array(
		'wp-hooks',
		'wp-i18n',
		'wp-url',
	),
	'wp-autop'                              => array(),
	'wp-blob'                               => array(),
	'wp-block-library'                      => array(
		'editor',
		'lodash',
		'wp-api-fetch',
		'wp-autop',
		'wp-blob',
		'wp-blocks',
		'wp-components',
		'wp-compose',
		'wp-core-data',
		'wp-data',
		'wp-date',
		'wp-editor',
		'wp-element',
		'wp-html-entities',
		'wp-i18n',
		'wp-keycodes',
		'wp-rich-text',
		'wp-url',
		'wp-viewport',
	),
	'wp-block-serialization-default-parser' => array(),
	'wp-block-serialization-spec-parser'    => array(),
	'wp-blocks'                             => array(
		'lodash',
		'wp-autop',
		'wp-blob',
		'wp-block-serialization-default-parser',
		'wp-data',
		'wp-dom',
		'wp-element',
		'wp-hooks',
		'wp-html-entities',
		'wp-i18n',
		'wp-is-shallow-equal',
		'wp-shortcode',
	),
	'wp-components'                         => array(
		'lodash',
		'moment',
		'wp-a11y',
		'wp-api-fetch',
		'wp-compose',
		'wp-dom',
		'wp-element',
		'wp-hooks',
		'wp-html-entities',
		'wp-i18n',
		'wp-is-shallow-equal',
		'wp-keycodes',
		'wp-rich-text',
		'wp-url',
	),
	'wp-compose'                            => array(
		'lodash',
		'wp-element',
		'wp-is-shallow-equal',
	),
	'wp-core-data'                          => array(
		'lodash',
		'wp-api-fetch',
		'wp-data',
		'wp-url',
	),
	'wp-data'                               => array(
		'lodash',
		'wp-compose',
		'wp-element',
		'wp-is-shallow-equal',
		'wp-priority-queue',
		'wp-redux-routine',
	),
	'wp-date'                               => array(
		'moment',
	),
	'wp-deprecated'                         => array(
		'wp-hooks',
	),
	'wp-dom'                                => array(
		'lodash',
		'wp-tinymce',
	),
	'wp-dom-ready'                          => array(),
	'wp-edit-post'                          => array(
		'jquery',
		'lodash',
		'postbox',
		'media-models',
		'media-views',
		'wp-a11y',
		'wp-api-fetch',
		'wp-block-library',
		'wp-blocks',
		'wp-components',
		'wp-compose',
		'wp-core-data',
		'wp-data',
		'wp-dom-ready',
		'wp-editor',
		'wp-element',
		'wp-embed',
		'wp-i18n',
		'wp-keycodes',
		'wp-notices',
		'wp-nux',
		'wp-plugins',
		'wp-url',
		'wp-viewport',
	),
	'wp-editor'                             => array(
		'lodash',
		'wp-a11y',
		'wp-api-fetch',
		'wp-blob',
		'wp-blocks',
		'wp-components',
		'wp-compose',
		'wp-core-data',
		'wp-data',
		'wp-date',
		'wp-deprecated',
		'wp-dom',
		'wp-element',
		'wp-hooks',
		'wp-html-entities',
		'wp-i18n',
		'wp-is-shallow-equal',
		'wp-keycodes',
		'wp-notices',
		'wp-nux',
		'wp-rich-text',
		'wp-tinymce',
		'wp-token-list',
		'wp-url',
		'wp-viewport',
		'wp-wordcount',
	),
	'wp-element'                            => array(
		'lodash',
		'react',
		'react-dom',
		'wp-escape-html',
	),
	'wp-escape-html'                        => array(),
	'wp-format-library'                     => array(
		'wp-components',
		'wp-dom',
		'wp-editor',
		'wp-element',
		'wp-i18n',
		'wp-keycodes',
		'wp-rich-text',
		'wp-url',
	),
	'wp-hooks'                              => array(),
	'wp-html-entities'                      => array(),
	'wp-i18n'                               => array(),
	'wp-is-shallow-equal'                   => array(),
	'wp-keycodes'                           => array(
		'lodash',
		'wp-i18n',
	),
	'wp-list-reusable-blocks'               => array(
		'lodash',
		'wp-api-fetch',
		'wp-components',
		'wp-compose',
		'wp-element',
		'wp-i18n',
	),
	'wp-notices'                            => array(
		'lodash',
		'wp-a11y',
		'wp-data',
	),
	'wp-nux'                                => array(
		'lodash',
		'wp-components',
		'wp-compose',
		'wp-data',
		'wp-element',
		'wp-i18n',
	),
	'wp-plugins'                            => array(
		'lodash',
		'wp-compose',
		'wp-element',
		'wp-hooks',
	),
	'wp-priority-queue'                     => array(),
	'wp-redux-routine'                      => array(),
	'wp-rich-text'                          => array(
		'lodash',
		'wp-data',
		'wp-escape-html',
	),
	'wp-shortcode'                          => array(
		'lodash',
	),
	'wp-token-list'                         => array(
		'lodash',
	),
	'wp-url'                                => array(),
	'wp-viewport'                           => array(
		'lodash',
		'wp-compose',
		'wp-data',
		'wp-element',
	),
	'wp-wordcount'                          => array(),
);
