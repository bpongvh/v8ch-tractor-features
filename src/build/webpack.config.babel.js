import BrowserSyncPlugin from 'browser-sync-webpack-plugin';
import CleanPlugin from 'clean-webpack-plugin';
import ForkTsCheckerPlugin from 'fork-ts-checker-webpack-plugin';
import FriendlyErrorsPlugin from 'friendly-errors-webpack-plugin';
import MiniCssExtractPlugin from 'mini-css-extract-plugin';
import path from 'path';
import StyleLintPlugin from 'stylelint-webpack-plugin';
import VueLoaderPlugin from 'vue-loader/lib/plugin';
import webpack from 'webpack';
import config from './config';

const configBuilder = {
  context: process.cwd(),
  devServer: {
    contentBase: config.paths.dist,
    index: '',
    proxy: [{
      context: config.proxyContext,
      target: config.proxyTarget,
    }],
  },
  devtool: (config.enabled.sourceMaps ? '#source-map' : undefined),
  entry: config.entry,
  externals: config.externals,
  module: {
    rules: [
      {
        test: /\.(jpe?g|png|gif|svg)$/i,
        use: [
          'file-loader?name=images/[name].[ext]',
          'image-webpack-loader?bypassOnDebug',
        ],
      },
      {
        test: /\.jsx?$/,
        exclude: /node_modules/,
        loader: ['babel-loader'],
      },
      {
        test: /\.pug$/,
        loader: 'pug-plain-loader',
      },
      {
        test: /\.(sa|sc|c)ss$/,
        use: [
          config.enabled.styleLoader ? 'style-loader' : MiniCssExtractPlugin.loader,
          'css-loader',
          {
            loader: 'postcss-loader',
            options: {
              config: { path: __dirname, ctx: config },
              sourceMap: config.enabled.sourceMaps,
            },
          },
          'sass-loader',
        ],
      },
      {
        test: /\.ts$/,
        use: [
          { loader: 'cache-loader' },
          {
            loader: 'thread-loader',
            options: {
              workers: require('os').cpus().length - 1,
            },
          },
          {
            loader: 'ts-loader',
            options: {
              appendTsSuffixTo: [/\.vue$/],
              experimentalWatchApi: true,
              happyPackMode: true,
            },
          },
        ],
      },
      {
        test: /\.(ttf|eot|svg)(\?[\s\S]+)?$/,
        use: [
          {
            loader: 'file-loader',
            options: {
              outputPath: 'fonts',
              publicPath: '../fonts',
            },
          },
        ],
      },
      {
        test: /\.vue$/,
        loader: 'vue-loader',
      },
      {
        test: /\.woff2?(\?v=[0-9]\.[0-9]\.[0-9])?$/,
        use: [
          {
            loader: 'url-loader',
            options: {
              fallback: 'file-loader',
              limit: 10000,
              outputPath: 'fonts',
              publicPath: '../fonts',
            },
          },
        ],
      },
    ],
  },
  output: {
    path: config.paths.dist,
    filename: 'js/[name].js',
    publicPath: '/',
  },
  plugins: [
    new CleanPlugin(
      [path.join(process.cwd(), 'dist')],
      {
        root: process.cwd(),
        verbose: true,
      },
    ),
    new ForkTsCheckerPlugin({ checkSyntacticErrors: true }),
    new FriendlyErrorsPlugin(),
    new StyleLintPlugin({
      files: ['src/styles/**/*.scss'],
      syntax: 'scss',
    }),
    new MiniCssExtractPlugin({
      filename: 'css/[name].css',
      chunkFilename: 'css/[id].css',
    }),
    new VueLoaderPlugin(),
  ],
  resolve: {
    extensions: ['.js', '.jsx'],
    modules: [
      config.paths.assets,
      'node_modules',
    ],
  },
  stats: {
    assets: false,
    cachedAssets: false,
    colors: true,
    modules: false,
  },
};

if (config.env.production) {
  configBuilder.plugins.push(new webpack.NoEmitOnErrorsPlugin());
}

if (config.enabled.browserSync) {
  configBuilder.plugins.push(
    new BrowserSyncPlugin(
      {
        files: config.watch,
        proxy: 'http://localhost:8080/',
      },
      { injectCss: true },
    ),
  );
}

const webpackConfig = configBuilder;

export default webpackConfig;
