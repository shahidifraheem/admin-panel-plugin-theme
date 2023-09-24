jQuery(function ($) {
    $('#header-select-logo-button, #footer-select-logo-button').on('click', function () {
        var frame = wp.media({
            title: 'Select or Upload Logo',
            button: {
                text: 'Use this Image',
            },
            multiple: false
        });

        let parent = $(this).parent();

        frame.on('select', function () {
            var attachment = frame.state().get('selection').first().toJSON();
            $(parent).find(".header_logo_attachment_id, .footer_logo_attachment_id").val(attachment.id);
            $(parent).find('img').attr("src", attachment.url);
            $(parent).find('img').css("display", "block");
        });

        frame.open();
        return false;
    });

    $(".delete-logo-button").click(function (e) {
        e.preventDefault();
        $(this).prev().attr("src", "");
        $(this).next().val("");
        $(this).prev().prev().css("display", "block")
        $(this).prev().css("display", "none")
        $(this).css("display", "none")
    })

    $("#font_family_preload").change(function () {
        if (this.checked) {
            $(this).val(1);
        } else {
            $(this).val(0);
        }
    });

})