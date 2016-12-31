$(document).ready(() => {

    // slide
    $('.alert').delay(3000).slideUp();

    
    //likes
    $('#likes').click(() => {
        console.log('hello');
    });

    console.log('test');

    function confirmDelete() {
    var result = confirm('Are you sure you want to delete?');

    if (result) {
            return true;
        } else {
            return false;
        }
    }
});