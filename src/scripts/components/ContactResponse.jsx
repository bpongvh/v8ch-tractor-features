import React, { Fragment } from 'react';
import V8chLogo from './V8chLogo';

const ContactResponse = () => { /* eslint-disable-line */
  return (
    <Fragment>
      <div
        className="frame__container frame__container--margin-bottom frame__container--vcenter"
      >
        <div className="feedback feedback-dark">
          <V8chLogo />
          <div className="feedback-content">
            <h5>Thank you!</h5>
            <p>I will respond as soon as I can.</p>
          </div>
        </div>
      </div>
    </Fragment>
  );
};

export default ContactResponse;
