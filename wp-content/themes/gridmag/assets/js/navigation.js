/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
( function() {
    var gridmag_secondary_container, gridmag_secondary_button, gridmag_secondary_menu, gridmag_secondary_links, gridmag_secondary_i, gridmag_secondary_len;

    gridmag_secondary_container = document.getElementById( 'gridmag-secondary-navigation' );
    if ( ! gridmag_secondary_container ) {
        return;
    }

    gridmag_secondary_button = gridmag_secondary_container.getElementsByTagName( 'button' )[0];
    if ( 'undefined' === typeof gridmag_secondary_button ) {
        return;
    }

    gridmag_secondary_menu = gridmag_secondary_container.getElementsByTagName( 'ul' )[0];

    // Hide menu toggle button if menu is empty and return early.
    if ( 'undefined' === typeof gridmag_secondary_menu ) {
        gridmag_secondary_button.style.display = 'none';
        return;
    }

    gridmag_secondary_menu.setAttribute( 'aria-expanded', 'false' );
    if ( -1 === gridmag_secondary_menu.className.indexOf( 'nav-menu' ) ) {
        gridmag_secondary_menu.className += ' nav-menu';
    }

    gridmag_secondary_button.onclick = function() {
        if ( -1 !== gridmag_secondary_container.className.indexOf( 'gridmag-toggled' ) ) {
            gridmag_secondary_container.className = gridmag_secondary_container.className.replace( ' gridmag-toggled', '' );
            gridmag_secondary_button.setAttribute( 'aria-expanded', 'false' );
            gridmag_secondary_menu.setAttribute( 'aria-expanded', 'false' );
        } else {
            gridmag_secondary_container.className += ' gridmag-toggled';
            gridmag_secondary_button.setAttribute( 'aria-expanded', 'true' );
            gridmag_secondary_menu.setAttribute( 'aria-expanded', 'true' );
        }
    };

    // Get all the link elements within the menu.
    gridmag_secondary_links    = gridmag_secondary_menu.getElementsByTagName( 'a' );

    // Each time a menu link is focused or blurred, toggle focus.
    for ( gridmag_secondary_i = 0, gridmag_secondary_len = gridmag_secondary_links.length; gridmag_secondary_i < gridmag_secondary_len; gridmag_secondary_i++ ) {
        gridmag_secondary_links[gridmag_secondary_i].addEventListener( 'focus', gridmag_secondary_toggleFocus, true );
        gridmag_secondary_links[gridmag_secondary_i].addEventListener( 'blur', gridmag_secondary_toggleFocus, true );
    }

    /**
     * Sets or removes .focus class on an element.
     */
    function gridmag_secondary_toggleFocus() {
        var self = this;

        // Move up through the ancestors of the current link until we hit .nav-menu.
        while ( -1 === self.className.indexOf( 'nav-menu' ) ) {

            // On li elements toggle the class .focus.
            if ( 'li' === self.tagName.toLowerCase() ) {
                if ( -1 !== self.className.indexOf( 'gridmag-focus' ) ) {
                    self.className = self.className.replace( ' gridmag-focus', '' );
                } else {
                    self.className += ' gridmag-focus';
                }
            }

            self = self.parentElement;
        }
    }

    /**
     * Toggles `focus` class to allow submenu access on tablets.
     */
    ( function( gridmag_secondary_container ) {
        var touchStartFn, gridmag_secondary_i,
            parentLink = gridmag_secondary_container.querySelectorAll( '.menu-item-has-children > a, .page_item_has_children > a' );

        if ( 'ontouchstart' in window ) {
            touchStartFn = function( e ) {
                var menuItem = this.parentNode, gridmag_secondary_i;

                if ( ! menuItem.classList.contains( 'gridmag-focus' ) ) {
                    e.preventDefault();
                    for ( gridmag_secondary_i = 0; gridmag_secondary_i < menuItem.parentNode.children.length; ++gridmag_secondary_i ) {
                        if ( menuItem === menuItem.parentNode.children[gridmag_secondary_i] ) {
                            continue;
                        }
                        menuItem.parentNode.children[gridmag_secondary_i].classList.remove( 'gridmag-focus' );
                    }
                    menuItem.classList.add( 'gridmag-focus' );
                } else {
                    menuItem.classList.remove( 'gridmag-focus' );
                }
            };

            for ( gridmag_secondary_i = 0; gridmag_secondary_i < parentLink.length; ++gridmag_secondary_i ) {
                parentLink[gridmag_secondary_i].addEventListener( 'touchstart', touchStartFn, false );
            }
        }
    }( gridmag_secondary_container ) );
} )();


( function() {
    var gridmag_primary_container, gridmag_primary_button, gridmag_primary_menu, gridmag_primary_links, gridmag_primary_i, gridmag_primary_len;

    gridmag_primary_container = document.getElementById( 'gridmag-primary-navigation' );
    if ( ! gridmag_primary_container ) {
        return;
    }

    gridmag_primary_button = gridmag_primary_container.getElementsByTagName( 'button' )[0];
    if ( 'undefined' === typeof gridmag_primary_button ) {
        return;
    }

    gridmag_primary_menu = gridmag_primary_container.getElementsByTagName( 'ul' )[0];

    // Hide menu toggle button if menu is empty and return early.
    if ( 'undefined' === typeof gridmag_primary_menu ) {
        gridmag_primary_button.style.display = 'none';
        return;
    }

    gridmag_primary_menu.setAttribute( 'aria-expanded', 'false' );
    if ( -1 === gridmag_primary_menu.className.indexOf( 'nav-menu' ) ) {
        gridmag_primary_menu.className += ' nav-menu';
    }

    gridmag_primary_button.onclick = function() {
        if ( -1 !== gridmag_primary_container.className.indexOf( 'gridmag-toggled' ) ) {
            gridmag_primary_container.className = gridmag_primary_container.className.replace( ' gridmag-toggled', '' );
            gridmag_primary_button.setAttribute( 'aria-expanded', 'false' );
            gridmag_primary_menu.setAttribute( 'aria-expanded', 'false' );
        } else {
            gridmag_primary_container.className += ' gridmag-toggled';
            gridmag_primary_button.setAttribute( 'aria-expanded', 'true' );
            gridmag_primary_menu.setAttribute( 'aria-expanded', 'true' );
        }
    };

    // Get all the link elements within the menu.
    gridmag_primary_links    = gridmag_primary_menu.getElementsByTagName( 'a' );

    // Each time a menu link is focused or blurred, toggle focus.
    for ( gridmag_primary_i = 0, gridmag_primary_len = gridmag_primary_links.length; gridmag_primary_i < gridmag_primary_len; gridmag_primary_i++ ) {
        gridmag_primary_links[gridmag_primary_i].addEventListener( 'focus', gridmag_primary_toggleFocus, true );
        gridmag_primary_links[gridmag_primary_i].addEventListener( 'blur', gridmag_primary_toggleFocus, true );
    }

    /**
     * Sets or removes .focus class on an element.
     */
    function gridmag_primary_toggleFocus() {
        var self = this;

        // Move up through the ancestors of the current link until we hit .nav-menu.
        while ( -1 === self.className.indexOf( 'nav-menu' ) ) {

            // On li elements toggle the class .focus.
            if ( 'li' === self.tagName.toLowerCase() ) {
                if ( -1 !== self.className.indexOf( 'gridmag-focus' ) ) {
                    self.className = self.className.replace( ' gridmag-focus', '' );
                } else {
                    self.className += ' gridmag-focus';
                }
            }

            self = self.parentElement;
        }
    }

    /**
     * Toggles `focus` class to allow submenu access on tablets.
     */
    ( function( gridmag_primary_container ) {
        var touchStartFn, gridmag_primary_i,
            parentLink = gridmag_primary_container.querySelectorAll( '.menu-item-has-children > a, .page_item_has_children > a' );

        if ( 'ontouchstart' in window ) {
            touchStartFn = function( e ) {
                var menuItem = this.parentNode, gridmag_primary_i;

                if ( ! menuItem.classList.contains( 'gridmag-focus' ) ) {
                    e.preventDefault();
                    for ( gridmag_primary_i = 0; gridmag_primary_i < menuItem.parentNode.children.length; ++gridmag_primary_i ) {
                        if ( menuItem === menuItem.parentNode.children[gridmag_primary_i] ) {
                            continue;
                        }
                        menuItem.parentNode.children[gridmag_primary_i].classList.remove( 'gridmag-focus' );
                    }
                    menuItem.classList.add( 'gridmag-focus' );
                } else {
                    menuItem.classList.remove( 'gridmag-focus' );
                }
            };

            for ( gridmag_primary_i = 0; gridmag_primary_i < parentLink.length; ++gridmag_primary_i ) {
                parentLink[gridmag_primary_i].addEventListener( 'touchstart', touchStartFn, false );
            }
        }
    }( gridmag_primary_container ) );
} )();