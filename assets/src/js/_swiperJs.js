import Swiper, { Navigation } from 'swiper';

class SwiperJS {
	constructor() {
		this.swiperInit();
	}

	// eslint-disable-next-line class-methods-use-this
	swiperInit() {
		Swiper.use([Navigation]);
		// eslint-disable-next-line no-new
		new Swiper('.swiper-hero', {
			loop: false,
			slidesPerView: 1,
			// navigation: {
			// 	nextEl: '.swiper-button-next',
			// 	prevEl: '.swiper-button-prev',
			// },
			// breakpoints: {
			// 	1: {
			// 		slidesPerView: 1
			// 	},
			// 	768: {
			// 		slidesPerView: 2
			// 	},
			// 	1200: {
			// 		slidesPerView: 3
			// 	},
			// },
		});
	}
}

export default SwiperJS;
