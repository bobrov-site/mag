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
			loop: true,
			slidesPerView: 1,
			// navigation: {
			// 	nextEl: '.swiper-button-next',
			// 	prevEl: '.swiper-button-prev',
			// },
		});
	}
}

export default SwiperJS;
