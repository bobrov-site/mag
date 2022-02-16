import { popper } from '@popperjs/core';

class PopperJs {
	constructor() {
		this.popperInit();
	}

	// eslint-disable-next-line class-methods-use-this
	popperInit() {
		return popper;
	}
}

export default PopperJs;
