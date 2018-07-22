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
        <div className="frame frame--dark-background type--v8ch">
          <div className="frame__form-container">
            <form noValidate>
              <div className="form-group">
                <label className="v8ch-green" htmlFor="linkText">
                  Link text
                  <input
                    className="form-control form-control--reverse"
                    id="linkText"
                    onChange={value => onSetAttribute({ linkText: value })}
                    placeholder={this.state.placeholders.linkText}
                    value={linkText}
                  />
                </label>
              </div>
              <div className="form-group">
                <label className="v8ch-green" htmlFor="href">
                  Link URL
                  <input
                    className="form-control form-control--reverse"
                    id="href"
                    onChange={value => onSetAttribute({ href: value })}
                    placeholder={this.state.placeholders.href}
                    value={href}
                  />
                </label>
              </div>
              <div className="form-group">
                {/* eslint-disable-next-line jsx-a11y/label-has-for */}
                <label className="v8ch-green" htmlFor="description">
                  Description
                  <textarea
                    className="form-control form-control--reverse"
                    id="description"
                    onChange={value => onSetAttribute({ description: value })}
                    placeholder={this.state.placeholders.description}
                    rows={5}
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
