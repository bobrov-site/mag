import { Collapse } from 'bootstrap';

require('bootstrap');

class Filters {
	constructor() {
		this.filtersInit();
		this.filtersShow();
	}

	// eslint-disable-next-line class-methods-use-this
	filtersInit() {
		// eslint-disable-next-line func-names
		(function ($) {
			$(document).ready(() => {
				// eslint-disable-next-line func-names
				$(document).on('submit', '[data-js-form=filter]', function (e) {
					e.preventDefault();
					const form = $(this).serializeArray();

					$.ajax({
						// eslint-disable-next-line no-undef
						url: ajaxFilter.ajaxurl,
						data: form,
						type: 'post',
						success(result) {
							// eslint-disable-next-line no-console
							$('[data-js-filter="target"]').html(result);
						},
						error(result) {
							// eslint-disable-next-line no-console
							console.log(result);
						}
					});
				});
			});
		}(jQuery));
	}

	// eslint-disable-next-line class-methods-use-this
	filtersShow() {
		const filter = document.querySelector('#collapseFilter');
		if (filter) {
			const screen = window.matchMedia('(min-width: 768px)').matches;
			if (screen) {
				// eslint-disable-next-line no-undef
				const collapse = new Collapse(filter, {});
				collapse.toggle();
			}
		}
	}
}

export default Filters;
