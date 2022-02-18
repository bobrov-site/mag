import Swiper, { Navigation, Pagination } from 'swiper';

class SwiperJS {
	constructor() {
		this.swiperInit();
	}

	// eslint-disable-next-line class-methods-use-this
	swiperInit() {
		Swiper.use([Navigation, Pagination]);
		// eslint-disable-next-line no-new
		new Swiper('.feedback-swiper', {
			loop: true,
			slidesPerView: 3,
			spaceBetween: 24,
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
		});
	}
}

export default SwiperJS;
