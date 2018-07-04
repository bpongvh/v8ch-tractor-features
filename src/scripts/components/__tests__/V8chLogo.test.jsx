import React from 'react';
import renderer from 'react-test-renderer';
import V8chLogo from '../V8chLogo';

it('renders correctly', () => {
  const tree = renderer
    .create(<V8chLogo />)
    .toJSON();
  expect(tree).toMatchSnapshot();
});
