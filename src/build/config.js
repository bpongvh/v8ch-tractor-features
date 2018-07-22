import path from 'path';
import merge from 'webpack-merge';
import { argv } from 'yargs';

const userConfig = require(`${__dirname}/../config`);

const isProduction = !!((argv.env && argv.env.production) || argv.p);
const rootPath = (userConfig.paths && userConfig.paths.root)
  ? userConfig.paths.root
  : process.cwd();

const config = merge({
  enabled: {
    browserSync: !!argv.hot,
    styleLoader:  !!argv.hot,
    sourceMaps: !isProduction,
  },
  paths: {
    assets: path.join(rootPath, 'src'),
    root: rootPath,
    dist: path.join(rootPath, 'dist'),
  },
  watch: [],
}, userConfig);

export default merge(config, {
  env: Object.assign({ production: isProduction, development: !isProduction }, argv.env),
  manifest: {},
});

if (process.env.NODE_ENV === undefined) {
  process.env.NODE_ENV = isProduction ? 'production' : 'development';
}
