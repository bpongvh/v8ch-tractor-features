import React from 'react';
import GithubLogo from './GithubLogo';
import TwitterLogo from './TwitterLogo';
import V8chLogo from './V8chLogo';
import V8chLogotype from './V8chLogotype';

const Contact = () => (
  <div className="frame frame--light-background frame--padded type--v8ch">
    <div className="frame__container">
      <div className="header header--dark">
        <h3>Contact</h3>
      </div>
    </div>
    <div
      className="frame__form-container frame__container--margin-bottom"
    >
      <form noValidate>
        <div className="form-group">
          <label
            className="v8ch-dark-green"
            htmlFor="email"
          >
            Email address
            <input
              id="email"
              v-model="email"
              className="form-control"
              placeholder="Email address"
              type="email"
            />
          </label>
          <div className="invalid-feedback">
            Email is required.
          </div>
        </div>
        <div className="form-group">
          <label
            className="v8ch-dark-green"
            htmlFor="message"
          >
            Message
            <textarea
              id="message"
              v-model="message"
              className="form-control"
              rows="5"
              placeholder="Message"
            />
          </label>
          <div className="invalid-feedback">
            Message is required.
          </div>
        </div>
        <button
          className="btn btn-block btn-primary"
          type="submit"
        >
          Submit
        </button>
      </form>
    </div>
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
    <div className="frame__container frame__container--space-between">
      <div className="social-icons">
        <GithubLogo />
        <TwitterLogo />
      </div>
      <V8chLogotype />
    </div>
  </div>
);

export default Contact;
