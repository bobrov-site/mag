import PopperJs from './_popper';
import BootstrapPlugins from './_bootstrapPlugins';
import SwiperJS from './_swiperJs';
import Filters from './_filters';

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
		function initFilters() {
			return new Filters();
		}
		initPopperJs();
		initBootstrapPlugins();
		initSwiperJS();
		initFilters();
	}

};

document.addEventListener('DOMContentLoaded', () => {
	App.init();
});
