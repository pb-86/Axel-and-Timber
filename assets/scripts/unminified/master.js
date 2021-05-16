/**
 * Wróc do góry strony
 */
function scrollToTop() {
	const root = document.documentElement;
	root.scrollTo(
		{
			top: 0,
		}
	);
	root.focus();
}

const scrollToTopButton = document.getElementById( 'scroll-to-top' );
scrollToTopButton.addEventListener( 'click', scrollToTop );

/**
 * Rozwijane menu
 */
const hasChildren = document.getElementsByClassName( 'axel-menu__has-children' );

Array.from(hasChildren).forEach(el => {
	el.addEventListener('mouseover', showSubMenu);
	el.addEventListener('mouseout', hideSubMenu);
})

function showSubMenu() {
	this.querySelector('.axel-submenu').classList.add('axel-submenu--show');
}

function hideSubMenu() {
	this.querySelector('.axel-submenu').classList.remove('axel-submenu--show');
}

