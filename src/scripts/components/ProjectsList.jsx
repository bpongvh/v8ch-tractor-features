import React from 'react';
import PropTypes from 'prop-types';
import FeaturedLink from './FeaturedLink';

const ProjectsList = ({ projects }) => (
  <div className="frame frame--dark-background frame--padded type--v8ch">
    <div className="frame__container">
      <div className="header header--light">
        <h3>Projects</h3>
      </div>
    </div>
    <div className="frame__2col">
      {projects && projects.map(project => (
        <FeaturedLink
          description={project.description}
          href={project.href}
          linkText={project.linkText}
        />
      ))}
    </div>
  </div>
);

export default ProjectsList;

ProjectsList.propTypes = { projects: PropTypes.array.isRequired };
