import { Dropdown, Collapse } from 'bootstrap';

require('bootstrap');

class BootstrapPlugins {
	constructor() {
		this.dropdownInit();
		this.collapseInit();
		this.collapseRequisites();
	}

	// eslint-disable-next-line class-methods-use-this
	dropdownInit() {
		return Dropdown;
	}

	// eslint-disable-next-line class-methods-use-this
	collapseInit() {
		return Collapse;
	}

	// eslint-disable-next-line class-methods-use-this
	collapseRequisites() {
		const collapse = document.getElementById('collapseRequisites');
		// eslint-disable-next-line no-undef
		const bscollapse = new Collapse(collapse, {
			toggle: false,
		});
		bscollapse.show();
	}
}

export default BootstrapPlugins;
