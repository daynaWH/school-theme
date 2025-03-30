import { __ } from '@wordpress/i18n';
import {
	useBlockProps,
	InnerBlocks,
	InspectorControls
} from '@wordpress/block-editor';
	import { PanelBody, SelectControl } from '@wordpress/components';

export default function Edit({ attributes, setAttributes }) {
	const { animationType } = attributes;

	return (
		<>
			<InspectorControls>
				<PanelBody title={__('Animation Settings', 'fwd-blocks')}>
				<SelectControl
					label={__('Select Animation', 'fwd-blocks')}
					value={animationType}
					onChange={(value) => setAttributes({ animationType: value })}
					options={[
					{ label: 'Fade Up', value: 'fade-up' },
					{ label: 'Fade Down', value: 'fade-down' },
					{ label: 'Fade Left', value: 'fade-left' },
					{ label: 'Fade Right', value: 'fade-right' }
					]}
				/>
				</PanelBody>
			</InspectorControls>
			<div {...useBlockProps({ 'data-aos': animationType })}>
				<InnerBlocks />
			</div>
		</>
	);
}
