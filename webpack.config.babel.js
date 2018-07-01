import CleanPlugin from 'clean-webpack-plugin';
import MiniCssExtractPlugin from 'mini-css-extract-plugin';
import path from 'path';

const webpackConfig = {
  context: path.join(process.cwd(), 'src'),
  entry: {
    'v8ch-hero': ['./scripts/v8ch-hero.js'],
    'v8ch-skills': ['./scripts/v8ch-skills.js'],
  },
  module: {
    rules: [
      {
        test: /\.jsx?$/,
        exclude: /node_modules/,
        loader: ['babel-loader'],
      },
      {
        test: /\.(sa|sc|c)ss$/,
        use: [
          MiniCssExtractPlugin.loader,
          'css-loader',
          'sass-loader',
        ],
      },
    ],
  },
  output: {
    path: path.join(process.cwd(), 'dist'),
    filename: 'scripts/[name].js',
  },
  plugins: [
    new CleanPlugin(['dist']),
    new MiniCssExtractPlugin({
      filename: '[name].css',
      chunkFilename: '[id].css',
    }),
  ],
  resolve: { extensions: ['.js', '.jsx'] },
};

export default webpackConfig;
