import PopperJs from './_popper';
import BootstrapPlugins from './_bootstrapPlugins';
import SwiperJS from './_swiperJs';
import Filters from './_filters';
import FancyBoxJs from './_fancybox';

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
		function initFancyBox() {
			return new FancyBoxJs();
		}
		initPopperJs();
		initBootstrapPlugins();
		initSwiperJS();
		initFilters();
		initFancyBox();
	}

};

document.addEventListener('DOMContentLoaded', () => {
	App.init();
});
