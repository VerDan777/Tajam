import $ from 'jquery';

class MobileMenu {
    constructor() {
        this.mainMenu = $('.main-menu');
        this.menuIcon = $('.icon');
        this.menuLinks = $('.main-menu__item a');
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
        this.body.setTimeout(function(){
            this.body.addClass('body')
        }, 1000);
        this.menuIcon.toggleClass('icon--close-x');
    }
}
export default MobileMenu;