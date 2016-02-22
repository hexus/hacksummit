(function($) {
    $(function($) {
        var projectList = $('.project-list').nestedSortable({
            items:  '.project',
            handle: '.project-handle',
            opacity: 0.75,
            // toleranceElement: '> div',
            placeholder: 'project-placeholder',
            forcePlaceholderSize: true,
            maxLevels: 2
        });
        
        $('.project-list').on('focus', '[contenteditable]', function() {
            $(this).data('before', $(this).html());
        });
        
        $('.project-list').on('blur', '.project-name', function() {
            var text = $(this).text().replace(/\n/g, ' ');
            
            if (!text) {
                text = $(this).data('before');
            }
            
            $(this).text(text);
            
            var projectListData = projectList.sortable('toArray', {
                attribute: 'data-id',
                expression: /()(\d+)/,
                startDepthCount: 0,
                excludeRoot: true
            });
            
            console.log(projectListData);
        }).keypress(function(e) {
            if (e.which === 13) {
                e.preventDefault();
                $(this).blur();
            }
        });
        
        $('.add-project').click(function() {
            var template = $($('.project-template').html());
            
            template.attr('data-id', -1);
            template.find('.project-name').text('New project');
            
            $('.project-list').append(template);
        });
    });
})(jQuery);
