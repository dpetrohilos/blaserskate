/**
* CLASS HELPERS
* Plain JavaScript functions to add, remove, toggle, and check for classes, no jQuery required
*/

// hasClass
function hasClass(elem, className) {
  return new RegExp(' ' + className + ' ').test(' ' + elem.className + ' ');
}

// addClass
function addClass(elem, className) {
  if (!hasClass(elem, className)) {
      elem.className += ' ' + className;
  }
}

// removeClass
function removeClass(elem, className) {
  var newClass = ' ' + elem.className.replace(/[\t\r\n]/g, ' ') + ' ';
  if (hasClass(elem, className)) {
      while (newClass.indexOf(' ' + className + ' ') >= 0) {
          newClass = newClass.replace(' ' + className + ' ', ' ');
      }
      elem.className = newClass.replace(/^\s+|\s+$/g, '');
  }
}

// toggleClass
function toggleClass(elem, className) {
  var newClass = ' ' + elem.className.replace(/[\t\r\n]/g, " ") + ' ';
  if (hasClass(elem, className)) {
      while (newClass.indexOf(" " + className + " ") >= 0) {
          newClass = newClass.replace(" " + className + " ", " ");
      }
      elem.className = newClass.replace(/^\s+|\s+$/g, '');
  } else {
      elem.className += ' ' + className;
  }
}


/**
* MOBILE NAVIGATION
* Plain JavaScript functions to toggle the mobile navigation, no jQuery required
* WAI-ARIA values are also added for accessibility 
*/

// Add toggles to menu items that have submenus and bind to click event
var subMenuItems = document.body.querySelectorAll('.page_item_has_children > a');
var index = 0;
for (index = 0; index < subMenuItems.length; index++) {
var dropdownArrow = document.createElement('span');
dropdownArrow.className = 'sub-nav-toggle';
dropdownArrow.innerHTML = 'More';
subMenuItems[index].parentNode.insertBefore(dropdownArrow, subMenuItems[index].nextSibling);
}

// Enables toggling all submenus individually
var subMenuToggle = document.querySelectorAll('.sub-nav-toggle');    
for(var i = 0; i < subMenuToggle.length; i++) {
if(subMenuToggle.hasOwnProperty(i)) {
  subMenuToggle[i].onclick = function() {
    this.parentElement.querySelector('.children').classList.toggle("active");
    this.parentElement.querySelector('.sub-nav-toggle').classList.toggle("active");
    this.parentElement.parentElement.querySelector('.page_item_has_children').classList.toggle("active");
  };
}
}



// Mobile navigation controls
// uses class helpers to enable jQuery-like controls over class manipulation
var menuToggle = document.querySelector('.menu-toggle');
  outsideMenu = document.querySelector('.site-content-wrap');
  menuContainer = document.querySelector('.main-navigation');
  navMenu = document.querySelector('.nav-menu');

// set WAI-ARIA values for nav and toggle button
menuToggle.setAttribute( 'aria-expanded', 'false' );
navMenu.setAttribute( 'aria-expanded', 'false' );

// Toggle main menu and set WAI-ARIA values when menu button is clicked
menuToggle.onclick = function() {
if (hasClass(menuContainer, 'toggled')) {
  removeClass(menuToggle, 'is-active');
  removeClass(menuContainer, 'toggled');
  menuToggle.setAttribute( 'aria-expanded', 'false' );
  navMenu.setAttribute( 'aria-expanded', 'false' );
} else {
  addClass(menuToggle, 'is-active');
  addClass(menuContainer, 'toggled');
  menuToggle.setAttribute( 'aria-expanded', 'true' );
  navMenu.setAttribute( 'aria-expanded', 'true' );
}
};

// Reset mobile nav for laptop and desktop
window.addEventListener('resize', disableMobileNav);
function disableMobileNav() {
if (window.innerWidth > 999) {
  removeClass(menuToggle, 'is-active');
  removeClass(menuContainer, 'toggled');
  menuToggle.setAttribute( 'aria-expanded', 'false' );
  navMenu.setAttribute( 'aria-expanded', 'true' );
} else {
  navMenu.setAttribute( 'aria-expanded', 'false' );
}
}