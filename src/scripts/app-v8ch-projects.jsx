import React from 'react';
import ReactDOM from 'react-dom';
import ProjectsList from './components/ProjectsList';

const mount = document.getElementById('v8ch-projects-mount');

ReactDOM.render(
  <ProjectsList projects={JSON.parse(mount.dataset.projects)} />,
  mount,
);
