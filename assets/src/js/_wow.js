const wow = require('wowjs');

class WowJs {
	constructor() {
		this.wowJsInit();
	}

	// eslint-disable-next-line class-methods-use-this
	wowJsInit() {
		return new wow.WOW().init();
	}
}

export default WowJs;
