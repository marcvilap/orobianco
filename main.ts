document.querySelectorAll<HTMLButtonElement>('.toggle-menu').forEach(elem => {
	elem.addEventListener('click', () => {
		document.documentElement.classList.toggle('group-open-menu')
    document.documentElement.classList.toggle('overflow-hidden')
	})
})

document.querySelectorAll<HTMLDetailsElement>('footer details').forEach(elem => {
	elem.open = window.matchMedia('(min-width: 1024px)').matches
})

// Observador para la animación de revelado
const observer = new IntersectionObserver(entries => {
  entries.forEach(({ isIntersecting, target }) => {
    if (target instanceof HTMLElement) {
      if (isIntersecting) {
        target.classList.add('reveal-group-active');
        observer.unobserve(target);  // Dejar de observar después de la primera intersección
      }
    }
  });
});

// Observar todos los elementos con la clase .reveal-group
document.querySelectorAll('.reveal-group').forEach(element => observer.observe(element));

// Manejo de formularios
document.querySelectorAll<HTMLFormElement>('[data-form]').forEach(form => {
  form.addEventListener('submit', async event => {
    event.preventDefault();

    const alert = form.querySelector<HTMLDivElement>('[data-form-alert]');
    const button = form.querySelector<HTMLButtonElement>('[data-form-button]');
    const buttonInner = button?.innerHTML ?? '';

    if (alert) {
      alert.innerHTML = '';
      alert.className = '';
    }
    if (button) {
      button.innerHTML = '<i class="w-6 h-6 rounded-full border-2 border-l-current border-t-current border-r-transparent border-b-transparent animate-spin"></i>';
      button.disabled = true;
    }

    try {
      const response = await fetch(form.action, { method: 'POST', body: new FormData(form) });
      const data = await response.json();
      const message = data.data.message;

      if (!data.success) {
        throw new Error(message);
      }

      form.reset();

      if (alert) {
        alert.innerHTML = message;
        alert.className = 'px-4 py-3 rounded font-medium mt-4 bg-green-800 text-green-100';
      }
    } catch (error) {
      if (alert && error instanceof Error) {
        alert.innerHTML = error.message;
        alert.className = 'px-4 py-3 rounded font-medium mt-4 bg-red-900 text-red-200';
      }
    } finally {
      if (button) {
        button.innerHTML = buttonInner;
        button.disabled = false;
      }
    }
  });
});


document.addEventListener('DOMContentLoaded', () => {
  const closeButton = document.querySelector('.fixed.invisible') as HTMLElement;
  const iframe = document.getElementById('youtube-video') as HTMLIFrameElement;
  const popover = document.getElementById('video') as HTMLElement;

  if (closeButton && iframe && popover) {
    closeButton.addEventListener('click', () => {
      // Guardar la URL actual del iframe
      const src = iframe.src;
      // Ocultar el iframe y reiniciar su src para detener el video
      iframe.style.display = 'none';
      iframe.src = '';
      // Restablecer la URL original del iframe
      setTimeout(() => {
        iframe.src = src;
        iframe.style.display = 'block';
      }, 200); // 200ms debería ser suficiente
    });

    // Asegurar que el iframe esté visible cuando se abre el pop-up
    popover.addEventListener('popover-open', () => {
      iframe.style.display = 'block';
    });
  }
});





document.addEventListener('DOMContentLoaded', () => {
  const menuButton = document.querySelector('.toggle-menu'); // Ajusta el selector al botón de hamburguesa
  const menu = document.querySelector('nav.hover-links-black');
  const menuItems: NodeListOf<HTMLElement> = document.querySelectorAll('nav.hover-links-black .menu-item');

  if (menuButton && menu) {
    menuButton.addEventListener('click', () => {
      setTimeout(() => {
        
          menuItems.forEach((item: HTMLElement) => {
            const delay = item.getAttribute('data-delay');
            if (delay) {
              setTimeout(() => {
                item.classList.remove('opacity-0', 'translate-y-12');
                item.classList.add('opacity-100', 'translate-y-0');
              }, parseInt(delay, 10) * 2); // Multiplica por 2 para aumentar el retraso
            }
          });
        
      }, 10); // Aseguramos que el menú tenga tiempo para abrirse
    });
  }
});



document.addEventListener('DOMContentLoaded', () => {
  // Selecciona todos los select dentro del formulario con la clase wpcf7-form
  const selectElements = document.querySelectorAll<HTMLSelectElement>('.wpcf7-form select');

  // Función para actualizar la clase basado en el valor del select
  const updateSelectClass = (element: HTMLSelectElement) => {
    if (element.value !== '' && element.value !== null) {
      element.classList.add('has-value');
    } else {
      element.classList.remove('has-value');
    }
  };

  // Inicializar el estado de los select
  selectElements.forEach(element => {
    element.addEventListener('change', () => updateSelectClass(element));

    // Comprobar inicialmente si ya tienen algún valor
    updateSelectClass(element);
  });
});





