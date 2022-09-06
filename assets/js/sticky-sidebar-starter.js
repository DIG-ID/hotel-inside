import stickySidebar from 'sticky-sidebar';

$(function() {
if( $('body.single-post').length ){
    var sidebarbyhans = new StickySidebar('.sidebar', {
        containerSelector: '.section > .custom-container > .row',
        innerWrapperSelector: '.sidebar__inner',
        topSpacing: 200,
        bottomSpacing: 20,
        minWidth: 992
    });
}
if( $('body.single-von_hans_r_amrein').length ){
    var sidebarbyhans = new StickySidebar('.sidebar-by-hans', {
        containerSelector: '.von_hans_r_amrein > .custom-container > .row',
        innerWrapperSelector: '.sidebar-by-hans__inner',
        topSpacing: 200,
        bottomSpacing: -315,
        minWidth: 992
    });
}
});