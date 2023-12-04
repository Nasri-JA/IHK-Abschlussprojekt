import './bootstrap';

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
window.Alpine = Alpine;

Alpine.plugin(focus);

Alpine.start();

import * as bootstrap from 'bootstrap';
import "~fontawesome/fontawesome-free/js/all.min.js";

// For Toasts
const toastTriggers = document.querySelectorAll('[id$="ToastBtn"]');

function showToast(element) {
  const toast = new bootstrap.Toast(element, {
    delay: 5000,
  });
  toast.show();
}

if (toastTriggers) {
  toastTriggers.forEach((trigger) => {
    trigger.addEventListener('click', () => {
      const id = trigger.getAttribute('id');
      switch (id) {
        case 'updateToastBtn':
          showToast(document.getElementById('updateToast'));
          break;
        case 'deleteToastBtn':
          showToast(document.getElementById('deleteToast'));
          break;
      }
    });
  });
}


