$(document).ready(function() {
    $("#pre-activate-next-btn").click(function() {
        // do checks
        var key = $('#pre-activate-key').val();

        key = $.trim(key);

        if (key == '') {
            alert('Не верный ключ');
            return;
        }

        location.href = 'activate/' + key;
    });
});