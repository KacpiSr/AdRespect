// WEBPACK CREATED BY KACPER S. @2022

const path = require("path");
// const HtmlWebpackPlugin = require("html-webpack-plugin");
const BrowserSyncPlugin = require("browser-sync-webpack-plugin");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
// const cssnano = require("cssnano");
// const autoprefixer = require("autoprefixer");

module.exports = {
  resolve: {
    extensions: ['.css', '.scss', '.js'],
    alias: {
      // Provides ability to include node_modules with ~
      '~': path.resolve(process.cwd(), 'src'),
    },
  },

  entry: ['./src/js/index.js', './src/scss/main.scss'],

  output: {
    path: path.resolve(__dirname, "./dist"),
    filename: "./js/[name].js",
  },
  
  // plugins: [
  //   new HtmlWebpackPlugin({
  //     title: "webpack plate",
  //     template: path.resolve(__dirname, "./index.html"), //nazwa templatki
  //     filename: "index.html", // plik wyjscowy
  //   }),
  // ],
  module: {
    rules: [
      // JavaScript
      {
        test: /\.js$/,
        exclude: /node_modules/,
        use: ["babel-loader"],
      },
      //Reguła zwiazana ze zdjęciami
      {
        test: /\.(?:ico|gif|png|jpg|jpeg)$/i,
        type: "asset/resource",
      },
      // Reguła związana z czcionkami i svg
      {
        test: /\.(woff(2)?|eot|ttf|otf|svg|)$/,
        type: "asset/inline",
      },
    ],
  },

  // css config
  module: {
    rules: [
      {
        test: /\.(scss|css)$/,
        use: [MiniCssExtractPlugin.loader, 'css-loader', "postcss-loader", 'sass-loader'],
      },
    ],
  },

 
  plugins: [
    // Define the filename pattern for CSS.
    new MiniCssExtractPlugin({
      filename: "./css/[name].css",
      // chunkFilename: "[id].css",
    }),
    //dev server config
    // new BrowserSyncPlugin(
    //   // BrowserSync options
    //   {
    //     // browse to http://localhost:3000/ during development
    //     host: 'localhost',
    //     port: 3000,
    //     // proxy the Webpack Dev Server endpoint
    //     // (which should be serving on http://localhost:3100/)
    //     // through BrowserSync
    //     proxy: 'http://localhost:3000'
    //   },
    //   // plugin options
    //   {
    //     // prevent BrowserSync from reloading the page
    //     // and let Webpack Dev Server take care of this
    //     reload: false
    //   }
    // ),
    new BrowserSyncPlugin({
      host: "localhost",
      port: 3000,
      proxy: "http://localhost/AdRespect",
      files: ["*.php"],
      injectChanges: true,
      notify: true,
  }),
  ],
};
