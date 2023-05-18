$(document).on('click', '.modals .chat', function(e) {
    $('.modal-primary').addClass('enable');
});
$(document).on('click', '.modal-primary .close', function(e) {
    $('.modal-primary').removeClass('enable');
});

$(document).on('click', '.modals .contatos', function(e) {
    $('.modal-secondy').addClass('enable');
});
$(document).on('click', '.modal-secondy .close', function(e) {
    $('.modal-secondy').removeClass('enable');
});