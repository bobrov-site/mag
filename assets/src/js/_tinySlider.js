import { tns } from 'tiny-slider/src/tiny-slider';

class TinySlider {
	constructor() {
		this.sliderInit();
	}

	// eslint-disable-next-line class-methods-use-this
	sliderInit() {
		// eslint-disable-next-line no-unused-expressions
		tns({
			container: '.slider-offer',
			items: 1,
			// viewportMax: true,
			slideBy: 1,
			controls: true,
			loop: false,
			// eslint-disable-next-line no-sequences
		});
	}
}

export default TinySlider;
