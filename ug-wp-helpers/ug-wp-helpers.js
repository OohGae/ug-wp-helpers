( function( wp ) {
	const { registerFormatType, toggleFormat } = wp.richText;
	const { createElement } = wp.element;
	const { RichTextToolbarButton } = wp.blockEditor;

	registerFormatType( 'gutenberg-cite-format/cite', {
		title: 'Cite (Title)',
		tagName: 'cite',
		className: null,
		// Assign a keyboard shortcut – "mod+t" (Ctrl+t / Cmd+t)
		shortcut: 'mod+t',
		edit( props ) {
			const { isActive, value, onChange } = props;

			return createElement( RichTextToolbarButton, {
				icon: 'editor-italic', // Use built-in icon
				title: 'Cite (Title)',
				onClick: () => {
					onChange( toggleFormat( value, {
						type: 'gutenberg-cite-format/cite',
					} ) );
				},
				isActive: isActive,
			} );
		},
	} );
} )( window.wp );
