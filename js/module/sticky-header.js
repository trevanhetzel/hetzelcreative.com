/**
 * Speed audit form
 */

export default {
	els: {
		header: document.querySelector('#header')
	},

	init () {
		window.addEventListener('scroll', this.fixedHeader);
	},

	fixedHeader () {
		let topOfNav = this.els.header.offsetTop;

		if (window.scrollY >= topOfNav) {
			document.body.classList.add('--fixed-nav');
		} else {
			document.body.classList.remove('--fixed-nav');
		}
	}
};
