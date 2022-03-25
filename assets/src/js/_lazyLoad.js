import * as LazyLoadJs from 'lazyload/lazyload';

class LazyLoad {
	constructor() {
		this.lazyLoadInit();
	}

	// eslint-disable-next-line class-methods-use-this
	lazyLoadInit() {
		// eslint-disable-next-line no-undef
		lazyload();
	}
}

export default LazyLoad;
