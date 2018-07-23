import { __ } from '@wordpress/i18n';
import { TextControl, TextareaControl } from '@wordpress/components';
import PropTypes from 'prop-types';
import React, { Component, Fragment } from 'react';
import { updateValue } from '../store/utils/subscription';

const { subscribe, withSelect } = wp.data;

class FeaturedLinkForm extends Component {
  constructor(props) {
    super(props);
    this.state = {
      placeholders: {
        description: __('Enter description'),
        href: __('Enter link URL'),
        linkText: __('Enter link text'),
      },
    };
  }

  render() {
    const {
      description, href, isSelected, linkText, onSetAttribute,
    } = this.props;

    /* eslint-disable react/destructuring-assignment */
    return !isSelected ? (
      <div className="frame frame--dark-background type--v8ch">
        <div className="featured-link featured-link--light">
          <h5>
            <a href={href}>
              {linkText || __(this.state.placeholders.linkText)}
            </a>
          </h5>
          <p>
            {description || __(this.state.placeholders.description)}
          </p>
        </div>
      </div>
    ) : (
      <Fragment>
        <TextControl
          label={__('Link URL')}
          onChange={value => onSetAttribute({ href: value })}
          rows={5}
          value={href}
        />
        <TextareaControl
          label={__('Link description')}
          onChange={value => onSetAttribute({ description: value })}
          value={description}
        />
      </Fragment>
    );
    /* eslint-enable react/destructuring-assignment */
  }
}

export default withSelect((select) => {
  const { getEditedPostAttribute } = select('core/editor');
  let linkText = getEditedPostAttribute('title');
  subscribe(() => {
    linkText = updateValue(
      linkText,
      getEditedPostAttribute('title'),
    );
  });
  return { linkText };
})(FeaturedLinkForm);

FeaturedLinkForm.propTypes = {
  description: PropTypes.string,
  href: PropTypes.string,
  isSelected: PropTypes.bool.isRequired,
  linkText: PropTypes.string,
  onSetAttribute: PropTypes.func.isRequired,
};

FeaturedLinkForm.defaultProps = {
  description: '',
  href: '',
  linkText: '',
};
