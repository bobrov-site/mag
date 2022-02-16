import { Dropdown } from 'bootstrap';

require('bootstrap');

class BootstrapPlugins {
	constructor() {
		this.dropdownInit();
	}

	// eslint-disable-next-line class-methods-use-this
	dropdownInit() {
		return Dropdown;
	}
}

export default BootstrapPlugins;
