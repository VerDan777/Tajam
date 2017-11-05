import $ from 'jquery';

class ScrollHeader {
    constructor() {
        this.nav = $('.main-nav');
        this.events();
    }
    events() {
        $(window).scroll(()=> {
            if($(document).scrollTop() >540) {
                this.nav.addClass('main-nav__fixed');
            }else {
                this.nav.removeClass('main-nav__fixed');            }
        });
    };
};
export default ScrollHeader;