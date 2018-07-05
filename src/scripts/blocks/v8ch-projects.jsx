import React from 'react';
import ProjectsList from '../components/ProjectsList';

const { registerBlockType } = wp.blocks;
const { __ } = wp.i18n;

const editFn = () => { /* eslint-disable-line arrow-body-style */
  // const projects = [
  //   {
  //     description: 'Code Repositories',
  //     linkText: 'V8CH at GitHub',
  //     href: 'https://github.com/V8CH',
  //   },
  //   {
  /* eslint-disable-next-line max-len */
  //     description: 'SAAS platform for managing documentation of field training for new police officers',
  //     linkText: 'Departmentware',
  //     href: 'https://www.departmentware.com',
  //   },
  //   {
  /* eslint-disable-next-line max-len */
  //     description: 'Team organization architecture built with Laravel, React and VueJS (demo on request)',
  //     linkText: 'Combine',
  //     href: 'https://combine.team/',
  //   },
  //   {
  //     description: 'Custom WordPress theme',
  //     linkText: 'jeromegoldschmidt.com',
  //     href: 'http://www.jeromegoldschmidt.com',
  //   },
  //   {
  //     description: 'Custom WordPress theme',
  //     linkText: 'bakerbrospr.com',
  //     href: 'http://www.bakerbrospr.com',
  //   },
  // ];
  return (
    [
      <ProjectsList key="editor" />,
    ]
  );
};

/* eslint-disable */
const saveFn = () => null;

/**
 * Register the block
 *
 * @link https://wordpress.org/gutenberg/handbook/block-api/
 * @param  {string} name
 * @param  {Object} settings
 * @return {?WPBlock}
 */
registerBlockType('v8ch/v8ch-projects', {
  attributes: {
    projects: {
      meta: 'v8ch-tractor-blocks-projects',
      type: 'string',
    },
  },
  category: 'common',
  icon: 'editor-ul',
  keywords: [__('projects'), __('V8CH')],
  title: __('V8CH Projects'),

  edit: editFn,

  save: saveFn,
});
