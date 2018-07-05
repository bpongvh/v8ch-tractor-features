import React from 'react';
import ContactForm from './ContactForm';
// import ContactResponse from './ContactResponse';
import GithubLogo from './GithubLogo';
import TwitterLogo from './TwitterLogo';
import V8chLogotype from './V8chLogotype';

const Contact = () => (
  <div className="frame frame--light-background frame--padded type--v8ch">
    <div className="frame__container">
      <div className="header header--dark">
        <h3>Contact</h3>
      </div>
    </div>
    <ContactForm />
    {/*
      <ContactResponse />
    */}
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
