import { __ } from '@wordpress/i18n';
import React from 'react';
import FeaturedLinkForm from '../components/FeaturedLinkForm';

const { registerBlockType } = wp.blocks;

const editFn = (props) => {
  const { attributes, isSelected, setAttributes } = props;
  const { description, href, linkText } = attributes;

  const onSetAttribute = attribute => (setAttributes(attribute));

  return (
    [
      <FeaturedLinkForm
        description={description}
        href={href}
        isSelected={isSelected}
        key="editor"
        linkText={linkText}
        onSetAttribute={value => onSetAttribute(value)}
      />,
    ]
  );
};

const saveFn = () => null;

/**
 * Register the block
 * @param  {string} name
 * @param  {Object} settings
 * @return {?WPBlock}
 */
registerBlockType('v8ch/featured-link', {
  attributes: {
    description: {
      meta: 'v8ch-featured-link-description',
      type: 'string',
    },
    href: {
      meta: 'v8ch-featured-link-href',
      type: 'string',
    },
    linkText: {
      meta: 'v8ch-featured-link-link-text',
      type: 'string',
    },
  },
  category: 'common',
  icon: 'category',
  keywords: [__('featured'), __('link')],
  title: __('Featured Link'),

  edit: editFn,

  save: saveFn,
});
