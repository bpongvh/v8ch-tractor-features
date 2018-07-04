import React from 'react';
import Contact from '../components/Contact';

const { registerBlockType } = wp.blocks;
const { __ } = wp.i18n;

const editFn = () => (
  [
    <Contact key="editor" />,
  ]
);

const saveFn = () => null;

/**
 * Register the block
 *
 * @link https://wordpress.org/gutenberg/handbook/block-api/
 * @param  {string} name
 * @param  {Object} settings
 * @return {?WPBlock}
 */
registerBlockType('v8ch/v8ch-contact', {
  category: 'common',
  icon: 'editor-ul',
  keywords: [__('contact'), __('V8CH')],
  title: __('V8CH Contact'),

  edit: editFn,

  save: saveFn,
});
