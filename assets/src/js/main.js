import PopperJs from './_popper';
// eslint-disable-next-line import/no-unresolved
import BootstrapPlugins from './_bootstrapplugins';

const App = {

	/**
	 * App.init
	 */
	init() {
		// Scripts
		function initPopperJs() {
			return new PopperJs();
		}
		function initBootstrapPlugins() {
			return new BootstrapPlugins();
		}
		initPopperJs();
		initBootstrapPlugins();
	}

};

document.addEventListener('DOMContentLoaded', () => {
	App.init();
});
