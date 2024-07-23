import $ from "jquery";

const $headerSticky = $("[data-sticky]");
const $menu = $("[data-menu]");
const $buttonOpenMenu = $("[data-open-menu]");
const $buttonCloseMenu = $("[data-close-menu]");
const $botonToggleMenu = $("[data-toggle-menu]");

$(document).ready(function () {
  $buttonOpenMenu.click(openMenu);
  $buttonCloseMenu.click(closeMenu);

  $botonToggleMenu.click(function (event) {
    event.preventDefault();
  });

  $('.menu-menu-espanol-container .menu-item-has-children > a').click(function(e) {
    const $this = $(this);
    const $submenu = $this.next('.sub-menu');
    
    if ($submenu.length > 0) {
      e.preventDefault();
      $submenu.slideToggle();
      $this.parent().siblings().find('.sub-menu').slideUp();
      $this.parent().siblings().find('.menu-link').removeClass('active');
      $this.toggleClass('active');
      e.stopPropagation();
    }
  });
});

export function openMenu() {
  $menu.toggleClass("is-open");
}

export function closeMenu() {
  $menu.removeClass("is-open");
}

$(window).scroll(function () {
  if ($(this).scrollTop() > 20) {
    $headerSticky.addClass("is-scroll");
  } else {
    $headerSticky.removeClass("is-scroll");
  }
});
