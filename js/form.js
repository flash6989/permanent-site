jQuery(document).ready(function () {
    jQuery("form").submit(function () { // Событие отправки с формы
        var form_data = jQuery(this).serialize(); // Собираем данные из полей
        jQuery.ajax({
            type: "POST", // Метод отправки
            url: "sendform.php", // Путь к PHP обработчику sendform.php

            data: form_data,

        });
        $(this).find('input, textarea').prop('disabled', true);
        let form = document.querySelector('#callback__form');
        form.style.display = 'none'
        event.preventDefault();
        let succes = document.getElementById('succes')
        succes.hidden = false;

    });
});