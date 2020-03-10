/**
 * WordPress dependencies
 */
import {
	createNewPost,
	getEditedPostContent,
	clickBlockToolbarButton,
	clickButton,
} from '@wordpress/e2e-test-utils';
import {
	insertRowBlock,
	selectRowBlock,
} from './row-helper';
import {
	clickElementByText,
} from '../helper';

describe( 'row block', () => {
	beforeEach( async () => {
		await createNewPost();
	} );

	it( 'Row block should be available', async () => {
		await insertRowBlock();

		// Check if row block was inserted
		expect( await page.$( '[data-type="wp-bootstrap-blocks/row"]' ) ).not.toBeNull();
		expect( await page.$$( '[data-type="wp-bootstrap-blocks/column"]' ) ).toHaveLength( 2 );

		expect( await getEditedPostContent() ).toMatchSnapshot();
	} );

	it( 'Should be possible to change alignment', async () => {
		await insertRowBlock();
		await selectRowBlock();

		// Change horizontal alignment
		await clickBlockToolbarButton( 'Change horizontal alignment of columns' );
		await clickButton( 'Align columns right' );
		expect( await page.$( '[data-type="wp-bootstrap-blocks/row"][data-alignment="right"]' ) ).not.toBeNull();
		expect( await getEditedPostContent() ).toMatchSnapshot();

		// Change vertical alignment
		await clickBlockToolbarButton( 'Change vertical alignment of columns' );
		await clickButton( 'Align columns bottom' );
		expect( await page.$( '[data-type="wp-bootstrap-blocks/row"][data-vertical-alignment="bottom"]' ) ).not.toBeNull();
		expect( await getEditedPostContent() ).toMatchSnapshot();
	} );

	it( 'Should be possible to change column layout', async () => {
		await insertRowBlock();
		await selectRowBlock();

		// Layout options should be visible
		expect( await page.$$( '.wp-bootstrap-blocks-template-selector-button' ) ).toHaveLength( 5 );
		expect( await page.$( '.wp-bootstrap-blocks-template-selector-button > button[aria-label="2 Columns (1:1)"].is-active' ) ).not.toBeNull();
		expect( await page.$$( '[data-type="wp-bootstrap-blocks/column"][data-size-md="6"]' ) ).toHaveLength( 2 );

		// Template should be applied
		await page.click( '.wp-bootstrap-blocks-template-selector-button > button[aria-label="3 Columns (1:1:1)"]' );
		await page.waitFor( 1000 );
		expect( await page.$$( '[data-type="wp-bootstrap-blocks/column"][data-size-md="4"]' ) ).toHaveLength( 3 );
		expect( await getEditedPostContent() ).toMatchSnapshot();
		await page.click( '.wp-bootstrap-blocks-template-selector-button > button[aria-label="2 Columns (2:1)"]' );
		expect( await getEditedPostContent() ).toMatchSnapshot();
	} );

	it( 'Should be possible to select custom template', async () => {
		await insertRowBlock();
		await selectRowBlock();

		// Custom template should add block list appender (shouldn't change current layout)
		await page.click( '.wp-bootstrap-blocks-template-selector-button > button[aria-label="Custom"]' );
		expect( await page.$( '.wp-block-wp-bootstrap-blocks-row > .block-editor-inner-blocks > .block-editor-block-list__layout > .block-list-appender' ) ).not.toBeNull();
		expect( await getEditedPostContent() ).toMatchSnapshot();
	} );

	it( 'Should only be possible to select column blocks in block inserter', async () => {
		await insertRowBlock();
		await selectRowBlock();

		// Select custom template
		await page.click( '.wp-bootstrap-blocks-template-selector-button > button[aria-label="Custom"]' );
		expect( await page.$( '.wp-block-wp-bootstrap-blocks-row > .block-editor-inner-blocks > .block-editor-block-list__layout > .block-list-appender' ) ).not.toBeNull();

		// Only wp-bootstrap-blocks/column should be available in block inserter
		await page.click( '.wp-block-wp-bootstrap-blocks-row > .block-editor-inner-blocks > .block-editor-block-list__layout > .block-list-appender' );
		const numberOfAvailableBlocks = ( await page.$$( '.block-editor-inserter__popover button.block-editor-block-types-list__item' ) ).length;
		const numberOfAvailableColumnBlocks = ( await page.$$( '.block-editor-inserter__popover button.block-editor-block-types-list__item.editor-block-list-item-wp-bootstrap-blocks-column' ) ).length;
		expect( numberOfAvailableColumnBlocks ).toBeGreaterThanOrEqual( 1 );
		expect( numberOfAvailableBlocks ).toEqual( numberOfAvailableColumnBlocks );
	} );

	it( 'Should be possible to apply row options', async () => {
		await insertRowBlock();
		await selectRowBlock();

		// Enable no gutters option
		await clickElementByText( 'label', 'No Gutters' );
		expect( await getEditedPostContent() ).toMatchSnapshot();
	} );
} );
