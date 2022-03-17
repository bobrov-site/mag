import { Fancybox } from '@fancyapps/ui';

class FancyBoxJs {
	constructor() {
		this.fancyBoxInit();
	}

	// eslint-disable-next-line class-methods-use-this
	fancyBoxInit() {
		Fancybox.bind('[data-fancybox]', {
			dragToClose: false,
			closeButton: 'top',

			Image: {
				zoom: false,
			},
		});
	}
}

export default FancyBoxJs;
