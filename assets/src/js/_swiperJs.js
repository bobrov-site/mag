import Swiper, { Navigation, Pagination, Autoplay } from 'swiper';

class SwiperJS {
	constructor() {
		this.swiperInit();
	}

	// eslint-disable-next-line class-methods-use-this
	swiperInit() {
		Swiper.use([Navigation, Pagination, Autoplay]);
		// eslint-disable-next-line no-new
		new Swiper('.feedback-swiper', {
			loop: true,
			autoplay: true,
			slidesPerView: 4,
			spaceBetween: 24,
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
		});
	}
}

export default SwiperJS;
