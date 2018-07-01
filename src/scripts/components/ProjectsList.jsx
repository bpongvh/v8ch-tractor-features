import React from 'react'; // eslint-disable-line import/no-unresolved

const ProjectsList = () => (
  <div className="frame frame--dark-background frame--padded type--v8ch">
    <div className="frame__container">
      <div className="header header--light">
        <h3>Projects</h3>
      </div>
    </div>
    <div className="frame__2col">
      <div className="featured-link featured-link--light featured-link--margin-bottom">
        <h5>
          <a href="https://github.com/V8CH">Code Repositories</a>
        </h5>
        <p>V8CH at GitHub</p>
      </div>
      <div className="featured-link featured-link--light featured-link--margin-bottom">
        <h5>
          <a href="https://www.departmentware.com">Departmentware</a>
        </h5>
        <p>SAAS platform for managing documentation of field training for new police officers</p>
      </div>
      <div className="featured-link featured-link--light featured-link--margin-bottom">
        <h5>
          <a href="https://combine.team/">Combine</a>
        </h5>
        <p>Team organization architecture built with Laravel, React and VueJS (demo on request)</p>
      </div>
      <div className="featured-link featured-link--light featured-link--margin-bottom">
        <h5>
          <a href="http://www.jeromegoldschmidt.com">jeromegoldschmidt.com</a>
        </h5>
        <p>Custom WordPress theme</p>
      </div>
      <div className="featured-link featured-link--light">
        <h5>
          <a href="http://www.bakerbrospr.com">bakerbrospr.com</a>
        </h5>
        <p>Custom WordPress theme</p>
      </div>
    </div>
  </div>
);

export default ProjectsList;
