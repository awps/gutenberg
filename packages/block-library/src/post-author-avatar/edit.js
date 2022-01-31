/**
 * External dependencies
 */
import classnames from 'classnames';

/**
 * WordPress dependencies
 */
import {
	InspectorControls,
	useBlockProps,
	__experimentalUseBorderProps as useBorderProps,
	__experimentalUseColorProps as useColorProps,
} from '@wordpress/block-editor';
import {
	PanelBody,
	ResizableBox,
	RangeControl,
	ToggleControl,
	SVG,
	Path,
} from '@wordpress/components';
import { useSelect } from '@wordpress/data';
import { __, _x, isRTL } from '@wordpress/i18n';
import { store as coreStore } from '@wordpress/core-data';

function PostAuthorAvatarEdit( {
	isSelected,
	context: { postType, postId },
	attributes,
	setAttributes,
} ) {
	const { height, width, isLink, linkTarget } = attributes;

	const { authorDetails } = useSelect(
		( select ) => {
			const { getEditedEntityRecord, getUser } = select( coreStore );
			const _authorId = getEditedEntityRecord(
				'postType',
				postType,
				postId
			)?.author;

			return {
				authorDetails: _authorId ? getUser( _authorId ) : null,
			};
		},
		[ postType, postId ]
	);

	const avatarUrls = authorDetails
		? Object.values( authorDetails.avatar_urls )
		: null;
	const sizes = authorDetails
		? Object.keys( authorDetails.avatar_urls )
		: null;
	const minSize = sizes ? sizes[ 0 ] : 24;
	const maxSize = sizes ? sizes[ sizes.length - 1 ] : 96;
	const maxSizeBuffer = Math.floor( maxSize * 2.5 );
	const blockProps = useBlockProps();
	const borderProps = useBorderProps( attributes );
	const colorProps = useColorProps( attributes );

	const inspectorControls = (
		<InspectorControls>
			<PanelBody title={ __( 'Avatar Settings' ) }>
				<RangeControl
					label={ __( 'Image size' ) }
					onChange={ ( newWidth ) =>
						setAttributes( {
							width: newWidth,
							height: newWidth,
						} )
					}
					min={ minSize }
					max={ maxSizeBuffer }
					initialPosition={ width }
					value={ width }
				/>
				<ToggleControl
					label={ __( 'Link to author archive' ) }
					onChange={ () => setAttributes( { isLink: ! isLink } ) }
					checked={ isLink }
				/>
				{ isLink && (
					<ToggleControl
						label={ __( 'Open in new tab' ) }
						onChange={ ( value ) =>
							setAttributes( {
								linkTarget: value ? '_blank' : '_self',
							} )
						}
						checked={ linkTarget === '_blank' }
					/>
				) }
			</PanelBody>
		</InspectorControls>
	);

	const avatarImage = avatarUrls ? (
		<img
			src={ avatarUrls[ avatarUrls.length - 1 ] }
			alt={ authorDetails.name }
			className={ classnames(
				'wp-post-author-avatar__image',
				colorProps.className,
				borderProps.className
			) }
			style={ {
				...borderProps.style, // Border radius, width and style.
			} }
		/>
	) : (
		// Placeholder that displays when there is no avatar URL.
		<SVG
			className={ classnames(
				'wp-block-post-author-avatar__placeholder',
				colorProps.className,
				borderProps.className
			) }
			style={ {
				...borderProps.style, // Border radius, width and style.
			} }
			fill="none"
			xmlns="http://www.w3.org/2000/svg"
			viewBox="0 0 60 60"
			preserveAspectRatio="none"
		>
			<Path vectorEffect="non-scaling-stroke" d="M60 60 0 0" />
		</SVG>
	);

	const resizableImage = (
		<ResizableBox
			size={ {
				width,
				height,
			} }
			showHandle={ isSelected }
			onResizeStop={ ( event, direction, elt, delta ) => {
				setAttributes( {
					height: parseInt( height + delta.height, 10 ),
					width: parseInt( width + delta.width, 10 ),
				} );
			} }
			lockAspectRatio
			enable={ {
				top: false,
				right: ! isRTL(),
				bottom: true,
				left: isRTL(),
			} }
			minWidth={ minSize }
			maxWidth={ maxSizeBuffer }
		>
			{ avatarImage }
		</ResizableBox>
	);

	const displayAvatar = isLink ? (
		<a
			href="#author-pseudo-link"
			className="wp-post-author-avatar__link"
			onClick={ ( event ) => event.preventDefault() }
		>
			{ resizableImage }
		</a>
	) : (
		resizableImage
	);

	return (
		<>
			{ inspectorControls }
			<figure { ...blockProps }>{ displayAvatar }</figure>
		</>
	);
}

export default PostAuthorAvatarEdit;
