import PopperJs from './_popper';
import BootstrapPlugins from './_bootstrapPlugins';
import SwiperJS from './_swiperJs';
import Filters from './_filters';
import FancyBoxJs from './_fancybox';
import LazyLoad from './_lazyLoad';
import WowJs from './_wow';

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
		function initLazyLoad() {
			return new LazyLoad();
		}
		function initWowJs() {
			return new WowJs();
		}
		initPopperJs();
		initBootstrapPlugins();
		initSwiperJS();
		initFilters();
		initFancyBox();
		initLazyLoad();
		initWowJs();
	}

};

document.addEventListener('DOMContentLoaded', () => {
	App.init();
});
