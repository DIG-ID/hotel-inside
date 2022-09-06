import stickySidebar from 'sticky-sidebar';

$(function() {
if( $('body.single-post').length ){
    var sidebarbyhans = new StickySidebar('.sidebar', {
        containerSelector: '.section > .custom-container > .row',
        innerWrapperSelector: '.sidebar__inner',
        topSpacing: 200,
        bottomSpacing: 20
    });
}
if( $('body.single-kommentar_by_hans').length ){
    var sidebarbyhans = new StickySidebar('.sidebar-by-hans', {
        containerSelector: '.section > .custom-container > .row',
        innerWrapperSelector: '.sidebar-by-hans__inner',
        topSpacing: 200,
        bottomSpacing: 200
    });
}
});