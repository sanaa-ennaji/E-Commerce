// Add your JavaScript code here

export function inputEmpty(...inputs) {
    inputs.forEach(input => {
        $(input).val('');
    });
}
export function displayMessage(message , element , timeout) {

    element.removeClass('hidden').fadeIn();
    element.empty();
    element.append(`<div id="" class="ms-3 text-sm font-medium alert">${message}</div>`).fadeIn;

    setTimeout(function () {
        element.addClass('hidden').fadeOut();
        element.append(`<div id="" class="ms-3 text-sm font-medium alert">${message}</div>`);
    }, timeout);

}