const path = require( 'path' ),
	webpack = require( 'webpack' );

module.exports = {
	context: path.resolve( __dirname, 'assets/src/js' ),
	entry: {
		main: [ './main.js' ],
		header: ['./header.js']
	},
	output: {
		path: path.resolve( __dirname, 'assets/js' ),
		filename: '[name].bundle.js',
	},
	externals: {
		jquery: 'jQuery'
	},
	plugins: [
		new webpack.ProvidePlugin( {
			$: 'jquery',
			jQuery: 'jquery',
			'window.jQuery': 'jquery',
		} ),
	],
	devtool: 'source-map',
	watch: true,
};