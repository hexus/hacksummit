(function($) {
    $(function($) {
        $('.project-list').sortable({
            handle: '.project-handle',
            items:  '> .project',
            // toleranceElement: '> div',
            placeholder: 'project-placeholder',
            forcePlaceholderSize: true
        });
        
        $('[contenteditable').on('focus', function() {
            $(this).data('before', $(this).html());
        });
        
        $('.project-name').blur(function() {
            var text = $(this).text().replace(/\n/g, ' ');
            
            if (!text) {
                text = $(this).data('before');
            }
            
            $(this).text(text);
        }).keypress(function(e) {
            if (e.which === 13) {
                e.preventDefault();
                $(this).blur();
            }
        });
    });
})(jQuery);
