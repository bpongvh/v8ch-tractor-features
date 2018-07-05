import React from 'react';

const ContactForm = () => { /* eslint-disable-line */
  return (
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
  );
};

export default ContactForm;
