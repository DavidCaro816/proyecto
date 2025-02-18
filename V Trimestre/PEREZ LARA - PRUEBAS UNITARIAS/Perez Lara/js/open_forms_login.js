const button_open_forms = document.getElementById('button_open_forms')
      main = document.querySelector('main')
      cover = document.getElementById('cover')
      register_section = document.getElementById('register')
      login_section = document.getElementById('login')
      login_form_container = document.getElementById('container_login')
      register_form = document.getElementById('register_form')
      message = document.getElementById('message');

/* Agregación de evento click para visualizar formularios*/
button_open_forms.addEventListener('click', action);

/* Función para determinar el formulario a mostrar -> Login - Register */
function action() {
    main.classList.toggle('main_register');
    cover.classList.toggle('cover_register');
    register_section.classList.toggle('register_active');
    login_section.classList.toggle('login_inactive');
    register_form.classList.toggle('register_form_active');
    login_form_container.classList.toggle('container_login_inactive');
    if(main.classList.contains('main_register')){
        message.innerHTML = '¿Ya tienes una cuenta?';
        button_open_forms.innerHTML = 'Inicia sesión';
    }else{
        message.innerHTML = '¿No tienes una cuenta?';
        button_open_forms.innerHTML = 'Registrate';
    }
}