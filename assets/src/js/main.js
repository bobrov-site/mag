import PopperJs from './_popper';
// eslint-disable-next-line import/no-unresolved
import BootstrapPlugins from './_bootstrapplugins';
import SwiperJS from './_swiperJs';

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
		function initSwiperJS() {
			return new SwiperJS();
		}
		initPopperJs();
		initBootstrapPlugins();
		initSwiperJS();
	}

};

document.addEventListener('DOMContentLoaded', () => {
	App.init();
});
