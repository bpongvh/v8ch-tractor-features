import React from 'react';
import PropTypes from 'prop-types';

const FeaturedLink = ({ description, href, linkText }) => (
  <div className="featured-link featured-link--light featured-link--margin-bottom">
    <h5>
      <a href={href}>{linkText}</a>
    </h5>
    <p>{description}</p>
  </div>
);

export default FeaturedLink;

FeaturedLink.propTypes = {
  description: PropTypes.string.isRequired,
  href: PropTypes.string.isRequired,
  linkText: PropTypes.string.isRequired,
};
