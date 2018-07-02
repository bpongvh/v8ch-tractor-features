import React from 'react';
import ProjectsList from '../components/ProjectsList';

const { registerBlockType } = wp.blocks;
const { __ } = wp.i18n;

const editFn = () => (
  [
    <ProjectsList key="editor" />,
  ]
);

const saveFn = () => (<div id="v8ch-projects-mount" />);

/**
 * Register the block
 *
 * @link https://wordpress.org/gutenberg/handbook/block-api/
 * @param  {string} name
 * @param  {Object} settings
 * @return {?WPBlock}
 */
registerBlockType('v8ch/v8ch-projects', {
  category: 'common',
  icon: 'editor-ul',
  keywords: [__('projects'), __('V8CH')],
  title: __('V8CH Projects'),

  edit: editFn,

  save: saveFn,
});
