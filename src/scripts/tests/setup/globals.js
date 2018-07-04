global.wp = {};

Object.defineProperty(global.wp, 'element', {
  get: () => require('gutenberg/packages/element'), // eslint-disable-line
});
