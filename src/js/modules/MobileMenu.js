import $ from 'jquery';

class MobileMenu {
    constructor() {
        this.mainMenu = $('.main-menu');
        this.menuIcon = $('.icon');
        this.menuIconClose = $('.icon--close-x');
        this.menuLinks = $('.main-menu__item__link');
        this.body = $('body');
        this.events();
    }

    events() {
        this.menuIcon.click(
            this.toggleTheMenu.bind(this)
        )
        this.menuLinks.click(
            this.toggleTheMenu.bind(this)
        )
        this.menuLinks.on('tap',
        this.toggleTheMenu.bind(this)
        )
    }
    toggleTheMenu() {
        this.mainMenu.toggleClass('main-menu--shown');
        this.body.toggleClass('body');
        this.menuIcon.toggleClass('icon--close-x');
    }
}
export default MobileMenu;