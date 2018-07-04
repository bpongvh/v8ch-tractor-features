import React from 'react';
import renderer from 'react-test-renderer';
import ProjectsList from '../ProjectsList';

it('renders correctly', () => {
  const tree = renderer
    .create(<ProjectsList />)
    .toJSON();
  expect(tree).toMatchSnapshot();
});
