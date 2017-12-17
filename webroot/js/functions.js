$(document).ready(function () {

    var extension = ["jpg", "gif", "png", "jpeg", "rar", "txt", "pdf", "doc", "docx", "xls", "csv", "potx", "pot", "ppt"];
    $('.input-file').each(function () {
        $(this).fileinput({
            showUpload: false,
            maxFileCount: 10,
            layoutTemplates: {
                main1: "{preview}\n" +
                "<div class=\'input-group {class}\'>\n" +
                "   <div class=\'input-group-btn\'>\n" +
                "       {browse}\n" +
                "       {upload}\n" +
                "       {remove}\n" +
                "   </div>\n" +
                "   {caption}\n" +
                "</div>"
            },
            allowedFileExtensions: extension
        });
    });

    $('.btn-open-form').click(function () {
        $('.hidden-form').show(500);
    });

    $('.btn-close-form').click(function () {
        $('.hidden-form').hide(500);
    });

    $(document).find('select.select2').select2({
        placeholder:'Selecione',
        width: '100%'
    });
});