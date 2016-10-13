function textFromProfile() {
    $('span.profile').each(function() {

        switch($(this).html()) {
            case 'Super':
                $(this).attr('class', 'text-danger font-weight-bold');
                break;
            case 'Admin':
                $(this).attr('class', 'text-warning font-weight-bold');
                break;
            default:
                $(this).attr('class', 'text-info font-weight-bold');
        }
    });
}