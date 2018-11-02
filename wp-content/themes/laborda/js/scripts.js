'use strict';

const el = document.querySelector('.js-cards');

if (el) {
  window.shuffleInstance = new window.Shuffle(el, {
    itemSelector: '.js-card',
  });
}
