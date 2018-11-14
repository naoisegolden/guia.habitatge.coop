'use strict';

(function($) {
  /*
   * Body class toggle
   */
  $('.toggle-body-js').on('click', function(event) {
    const $target = $(event.currentTarget);
    const value = $target.attr('data-toggle-value');

    $("body").toggleClass(value);

    if (window.shuffleInstance) {
      shuffleInstance.update();
    }
  });

  /*
   * Cards
   */
  const el = document.querySelector('.js-cards');
  if (el) {
    window.shuffleInstance = new Shuffle(el, {
      itemSelector: '.js-card',
      filterMode: Shuffle.FilterMode.ALL
    });
  }

  /*
   * Filters
   */
  var options = [];

  $('.dropdown-filter-js a').on('click', function(event) {
    const $target = $(event.currentTarget);
    const value = $target.attr('data-value');
    const $input = $target.find('input');
    let idx;

    if (value === 'reset') {
      $('.dropdown-filter-js input[type=checkbox]').prop('checked', false);
      options = [];
    } else {
      if ((idx = options.indexOf(value)) > -1) {
        options.splice(idx, 1);
        setTimeout(function() { $input.prop('checked', false) }, 0);
      } else {
        options.push(value);
        setTimeout(function() { $input.prop('checked', true) }, 0);
      }
    }


    $(event.target).blur();

    if (window.shuffleInstance) {
      shuffleInstance.filter(options);
    }

    return false;
  });


  /*
   * Sort
   */
  $('.dropdown-sort-js a').on('click', function(event) {
    const $target = $(event.currentTarget);
    const value = $target.attr('data-value');
    function sortByDate(element) {
      return element.getAttribute('data-date');
    }
    function sortByTitle(element) {
      return element.getAttribute('data-title').toLowerCase();
    }
    let options;

    if (value === 'date') {
      options = {
        reverse: true,
        by: sortByDate
      };
    } else if (value === 'title') {
      options = {
        by: sortByTitle
      };
    } else {
      options = {};
    }

    if (window.shuffleInstance) {
      shuffleInstance.sort(options);
    }

    return false;
  });


})(jQuery);
