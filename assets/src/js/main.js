import PopperJs from './_popper';
// eslint-disable-next-line import/no-unresolved
import BootstrapPlugins from './_bootstrapplugins';
import SwiperJS from './_swiperJs';
// import TinySlider from './_tinySlider';

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
		// function initTinySlider() {
		// 	return new TinySlider();
		// }
		initPopperJs();
		initBootstrapPlugins();
		initSwiperJS();
		// initTinySlider();
	}

};

document.addEventListener('DOMContentLoaded', () => {
	App.init();
});
