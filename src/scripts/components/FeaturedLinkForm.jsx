import { __ } from '@wordpress/i18n';
import PropTypes from 'prop-types';
import React, { Component, Fragment } from 'react';

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
      <div>
        <a href={href}>
          {linkText || __(this.state.placeholders.linkText)}
        </a>
        <p>
          {description || __(this.state.placeholders.description)}
        </p>
      </div>
    ) : (
      <Fragment>
        <div className="frame frame--light-background">
          <div className="frame__form-container">
            <form noValidate>
              <div className="form-group">
                <label htmlFor="linkText">
                  Link text
                  <input
                    className="form-control"
                    name="linkText"
                    onChange={value => onSetAttribute({ linkText: value })}
                    placeholder={this.state.placeholders.linkText}
                    value={linkText}
                  />
                </label>
              </div>
              <div className="form-group">
                <label htmlFor="href">
                  Link URL
                  <input
                    className="form-control"
                    name="href"
                    onChange={value => onSetAttribute({ href: value })}
                    placeholder={this.state.placeholders.href}
                    value={href}
                  />
                </label>
              </div>
              <div className="form-group">
                <label htmlFor="description">
                  Description
                  <input
                    className="form-control"
                    name="description"
                    onChange={value => onSetAttribute({ description: value })}
                    placeholder={this.state.placeholders.description}
                    value={description}
                  />
                </label>
              </div>
            </form>
          </div>
        </div>
      </Fragment>
    );
    /* eslint-enable react/destructuring-assignment */
  }
}

export default FeaturedLinkForm;

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
