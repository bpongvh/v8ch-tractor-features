import React from 'react'; // eslint-disable-line import/no-unresolved
import SkillsList from '../components/SkillsList';

const { registerBlockType } = wp.blocks;
const { __ } = wp.i18n;

const editFn = () => (
  [
    <SkillsList key="editor" />,
  ]
);

const saveFn = () => (<SkillsList />);

/**
 * Register the block
 *
 * @link https://wordpress.org/gutenberg/handbook/block-api/
 * @param  {string} name
 * @param  {Object} settings
 * @return {?WPBlock}
 */
registerBlockType('v8ch/v8ch-skills', {
  category: 'common',
  icon: 'editor-ul',
  keywords: [__('skills'), __('V8CH')],
  title: __('V8CH Skills'),

  edit: editFn,

  save: saveFn,
});
