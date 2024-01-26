(function (Drupal, once) {
  Drupal.behaviors.button = {
    attach: function attach(context) {
      const buttons = once(
        'component--my-button',
        '[data-component-id="sdc_examples:my-button"]',
        context,
      );
      if (buttons.length === 0) {
        return;
      }
      buttons.forEach(button => {
        let counter = 0;
        button.addEventListener(
          'click',
          function (event) {
            event.preventDefault();
            const element = event.target;
            counter++;
            element.innerHTML = `${element.innerHTML.replace(
              / \([0-9]*\)$/,
              '',
            )} (${counter})`;
          });
      });
    },
  };
})(Drupal, once);
