(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner(0);


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 45) {
            $('.navbar').addClass('sticky-top shadow-sm');
        } else {
            $('.navbar').removeClass('sticky-top shadow-sm');
        }
    });


    // International Tour carousel
    $(".InternationalTour-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        center: false,
        dots: true,
        loop: true,
        margin: 25,
        nav: false,
        navText: [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ],
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 2
            },
            1200: {
                items: 3
            }
        }
    });


    // packages carousel
    $(".packages-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        center: false,
        dots: false,
        loop: true,
        margin: 25,
        nav: true,
        navText: [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ],
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 2
            },
            1200: {
                items: 3
            }
        }
    });


    // testimonial carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        center: true,
        dots: true,
        loop: true,
        margin: 25,
        nav: true,
        navText: [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ],
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 2
            },
            1200: {
                items: 3
            }
        }
    });


    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({ scrollTop: 0 }, 1500, 'easeInOutExpo');
        return false;
    });

})(jQuery);

$(document).ready(function () {
    // ajax setup
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf"]').attr('content'),
            'Accept': 'application/json',
        }
    });
    // set Toaster Optinos
    setToastrOptions();
    // delete modal for users
    $('#delete-modal').on('show.bs.modal', function (e) {
        var btn = e.relatedTarget;
        var deleteUrl = btn.getAttribute('data-delete-url');
        var message = btn.getAttribute('data-message');
        var name = btn.getAttribute('data-name');
        var modalForm = $(this).find('form[name="confirm-delete-form"]');
        modalForm.attr('action', deleteUrl);
        modalForm.attr('method', 'DELETE');
        $(this).find('.modal-body p').text(message + "\t" + name);
    });
    //Handle delete confirmation form
    $(document).on('submit', 'form[name="confirm-delete-form"]', function (e) {
        e.preventDefault();
        $.ajax({
            url: $(this).attr('action'),
            type: $(this).attr('method'),
            data: {},
            success: function (response) {
                if (response.is_deleted) {
                    toastr.success(response.message);
                    $('#row-' + response.row_to_delete).parent().parent().parent().remove();
                    $('#delete-modal').modal('hide');
                } else {
                    toastr.error(response.message);
                }
            },
            error: function (response) {
                toastr.error(response.message);
            }
        });
    });
});

function setToastrOptions() {
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": true,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "slideDown",
        "hideMethod": "fadeOut"
    }
}


/* ############# GENERAL FORM SUBMIT ################ */

$(document).on('submit', '.custom-form', function (e) {
    e.preventDefault();
    var formData = new FormData(this);
    $('#spinner').addClass('show');


    $.ajax({
        url: $(this).attr('action'),
        type: $(this).attr('method'),
        processData: false,
        contentType: false,
        data: formData,
        enctype: "multipart/form-data",
        success: function (response) {
            if (response.status) {
                toastr.success(response.message);
            } else {
                toastr.error(response.message);
            }
            if (response.reset_form) {
                $(this).trigger('reset');
            }
            if (response.modal_to_hide) {
                $(response.modal_to_hide).modal('hide');
            }
            if (response.reload) {
                setTimeout(function () {
                    location.reload();
                }, 1000); // wait for 1 second
            }
            if (response.reload_table) {
                $(response.table).DataTable().ajax.reload();
            }
            if (response.redirect) {
                setTimeout(function () {
                    window.location.href = response.redirect;
                }, 1000); // wait for 1 second
            }
            if (response.elements_changed) {
                $.each(response.elements_changed, function (element, html) {
                    $(element).html(html);
                });
            }
            $('#spinner').removeClass('show');



        }, error: function (response) {
            if (response.status == 422) {
                if (response.responseJSON.errors) {
                    $.each(response.responseJSON.errors, function (key, errorsArray) {
                        $.each(errorsArray, function (item, error) {
                            toastr.error(error);
                        });
                    });
                } else if (response.responseJSON.message) {
                    $.each(response.responseJSON.message, function (item, error) {
                        toastr.error(error);
                    });
                }
            } else if (response.responseJSON && response.responseJSON.message) {
                toastr.error(response.responseJSON.message);
            } else {
                toastr.error(response.message);
            }
            $('#spinner').removeClass('show');




        }
    });
});

/* ############# GENERAL FORM SUBMIT ################ */



// English Inputs
// Get all input elements with the specified class
const inputs = document.querySelectorAll('.en-only');

// Iterate over each input and attach event listeners
inputs.forEach((input) => {
    input.addEventListener('input', (event) => {
        const inputValue = event.target.value;
        const englishCharsRegex = /^[a-zA-Z0-9 -]*$/;

        if (!englishCharsRegex.test(inputValue)) {
            const englishCharsOnly = inputValue.replace(/[^a-zA-Z0-9 -]/g, '');
            event.target.value = englishCharsOnly;
        }
    });
});


// Arabic Inputs
// Get all input elements with the specified class
const arabicInputs = document.querySelectorAll('.ar-only');

// Iterate over each input and attach event listeners
arabicInputs.forEach((input) => {
    input.addEventListener('input', (event) => {
        const arabicInputValue = event.target.value;
        const arabicCharsRegex = /^[\u0600-\u06FF0-9 -]*$/;

        if (!arabicCharsRegex.test(arabicInputValue)) {
            const arabicCharsOnly = arabicInputValue.replace(/[^\u0600-\u06FF0-9 -]/g, '');
            event.target.value = arabicCharsOnly;
        }
    });
});

const textInputs = document.querySelectorAll('.text-only');
// Iterate over each input and attach event listeners
textInputs.forEach((input) => {
    input.addEventListener('input', (event) => {
        input.value = input.value.replace(/[^a-zA-Z]/g, '');
    });
});






/**
     * Master Checkbox trigger
     * */
$(document).on('change', '#master-checkbox', function () {
    const checkboxes = document.querySelectorAll('input[type="checkbox"]:not(#master_checkbox)');
    const isChecked = this.checked;
    checkboxes.forEach(function (checkbox) {
        checkbox.checked = isChecked;
    });
});


$(document).on('change', '#categorySelect', function () {
    const selectedValue = this.value;
    const selectedOption = this.selectedOptions[0];
    const programs = JSON.parse(selectedOption.getAttribute('data-programs'));

    const programSelect = document.querySelector('#programSelect');
    programSelect.innerHTML = '';
    programs.forEach(program => {
        const option = document.createElement('option');
        option.value = program.id;
        option.text = program.name;
        programSelect.appendChild(option);
    });

});
