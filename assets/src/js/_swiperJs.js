import Swiper, {
	Navigation, Autoplay, Pagination, EffectFade,
} from 'swiper';

class SwiperJS {
	constructor() {
		this.swiperFeedbackInit();
		this.swiperPartnersInit();
		this.swiperNewsSlider();
		this.swiperHeroSlider();
		this.swiperCertificatesSlider();
		this.swiperDealersInit();
		this.swiperProductSlider();
	}

	// eslint-disable-next-line class-methods-use-this
	swiperFeedbackInit() {
		Swiper.use([Navigation, Autoplay]);
		// eslint-disable-next-line no-new
		new Swiper('.feedback-swiper', {
			loop: true,
			autoplay: true,
			slidesPerView: 1,
			spaceBetween: 24,
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
			breakpoints: {
				320: {
					slidesPerView: 1,
				},
				768: {
					slidesPerView: 2,
				},
				992: {
					slidesPerView: 4,
				}
			}
		});
	}

	// eslint-disable-next-line class-methods-use-this
	swiperDealersInit() {
		Swiper.use([Navigation, Autoplay]);
		// eslint-disable-next-line no-new
		const slider = new Swiper('.dealers-swiper', {
			autoplay: true,
			slidesPerView: 2,
			spaceBetween: 24,
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
		});

		if (document.querySelector('.dealers-swiper')) {
			const screen = window.matchMedia('(min-width: 992px)').matches;
			if (!screen) {
				slider.init();
			} else {
				slider.destroy(true, true);
			}
		}
	}

	// eslint-disable-next-line class-methods-use-this
	swiperPartnersInit() {
		Swiper.use([Navigation, Autoplay]);
		// eslint-disable-next-line no-new
		new Swiper('.partners-swiper', {
			loop: true,
			autoplay: true,
			slidesPerView: 1,
			spaceBetween: 35,
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
			breakpoints: {
				320: {
					slidesPerView: 'auto',
					spaceBetween: 0,
					centeredSlides: true,
				},
				992: {
					slidesPerView: 3,
				}
			}
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
			breakpoints: {
				320: {
					slidesPerView: 1,
					spaceBetween: 0,
				},
				768: {
					slidesPerView: 2,
				},
				992: {
					slidesPerView: 3,
				}
			}
		});
	}

	// eslint-disable-next-line class-methods-use-this
	swiperHeroSlider() {
		Swiper.use([Pagination, Autoplay, EffectFade]);
		// eslint-disable-next-line no-new
		new Swiper(
			'.swiper-hero',
			{
				loop: false,
				autoplay: {
					delay: 6000
				},
				slidesPerView: 1,
				pagination: {
					el: '.swiper-pagination',
					clickable: true,
				},
				// fadeEffect: {
				// 	crossFade: true
				// },
			}
		);
	}

	// eslint-disable-next-line class-methods-use-this
	swiperCertificatesSlider() {
		Swiper.use([Navigation, Autoplay]);
		// eslint-disable-next-line no-new
		new Swiper('.certificates-swiper', {
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

	// eslint-disable-next-line class-methods-use-this
	swiperProductSlider() {
		Swiper.use([Navigation]);
		// eslint-disable-next-line no-new
		const swiper = new Swiper('.product-img-swiper', {
			slidesPerView: 3,
			spaceBetween: 24,
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
		});
		const count = swiper.slides.length;
		if (count <= 3) {
			const navNext = swiper.navigation.nextEl;
			const navPrev = swiper.navigation.prevEl;
			if (navNext !== null && navPrev !== null) {
				navNext.classList.add('d-none');
				navPrev.classList.add('d-none');
			}
		}
	}
}

export default SwiperJS;
