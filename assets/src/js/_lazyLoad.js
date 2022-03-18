import * as LazyLoadJs from 'lazyload/lazyload';

class LazyLoad {
	constructor() {
		this.lazyLoadInit();
	}

	// eslint-disable-next-line class-methods-use-this
	lazyLoadInit() {
		lazyload();
	}
}

export default LazyLoad;
