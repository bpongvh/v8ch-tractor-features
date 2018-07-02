import React from 'react';
import LandingHero from '../components/LandingHero';

const { registerBlockType } = wp.blocks;
const { __ } = wp.i18n;

const editFn = () => (
  [
    <LandingHero key="editor" />,
  ]
);

const saveFn = () => (<div id="v8ch-hero-mount" />);

/**
 * Register the block
 * @param  {string} name
 * @param  {Object} settings
 * @return {?WPBlock}
 */
registerBlockType('v8ch/v8ch-hero', {
  category: 'common',
  icon: 'category',
  keywords: [__('hero'), __('V8CH')],
  title: __('V8CH Hero'),

  edit: editFn,

  save: saveFn,
});
