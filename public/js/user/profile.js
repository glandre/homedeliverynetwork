function textFromRole() {
    $('span.role').each(function() {

        switch($(this).html()) {
            case 'Super':
            case 'Webmaster':
                $(this).attr('class', 'font-weight-bold');
                break;
            case 'Admin':
                $(this).attr('class', 'text-primary font-weight-bold');
                break;
            case 'Fullment':
                $(this).attr('class', 'text-info font-weight-bold');
                break;
            case 'Shipper':
            case 'Writer':
            case 'Marketing':
                $(this).attr('class', 'text-warning font-weight-bold');
                break;
            default:
                $(this).attr('class', 'text-success font-weight-bold');
        }
    });
}