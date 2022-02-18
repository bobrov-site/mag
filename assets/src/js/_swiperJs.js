import Swiper, { Navigation, Autoplay } from 'swiper';

class SwiperJS {
	constructor() {
		this.swiperFeedbackInit();
		this.swiperPartnersInit();
		this.swiperNewsSlider();
	}

	// eslint-disable-next-line class-methods-use-this
	swiperFeedbackInit() {
		Swiper.use([Navigation, Autoplay]);
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

	// eslint-disable-next-line class-methods-use-this
	swiperPartnersInit() {
		Swiper.use([Navigation, Autoplay]);
		// eslint-disable-next-line no-new
		new Swiper('.partners-swiper', {
			loop: true,
			autoplay: true,
			slidesPerView: 3,
			spaceBetween: 35,
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
		});
	}

	// eslint-disable-next-line class-methods-use-this
	swiperNewsSlider() {
		Swiper.use([Navigation, Autoplay]);
		// eslint-disable-next-line no-new
		new Swiper('.news-swiper', {
			loop: true,
			autoplay: true,
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
