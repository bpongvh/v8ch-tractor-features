import CleanPlugin from 'clean-webpack-plugin';
import MiniCssExtractPlugin from 'mini-css-extract-plugin';
import path from 'path';

const webpackConfig = {
  context: path.join(process.cwd(), 'src'),
  entry: {
    'tractor-blocks': ['./styles/tractor-blocks.scss'],
    'block-v8ch-hero': ['./scripts/blocks/v8ch-hero.jsx'],
    'block-v8ch-projects': ['./scripts/blocks/v8ch-projects.jsx'],
    'block-v8ch-skills': ['./scripts/blocks/v8ch-skills.jsx'],
  },
  externals: {
    react: 'React',
    'react-dom': 'ReactDOM',
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
      filename: 'styles/[name].css',
      chunkFilename: 'styles/[id].css',
    }),
  ],
  resolve: { extensions: ['.js', '.jsx'] },
};

export default webpackConfig;
