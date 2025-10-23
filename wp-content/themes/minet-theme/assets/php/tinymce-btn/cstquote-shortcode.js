(function() {
    tinymce.PluginManager.add( 'simple-quote', function( editor, url ) {
        // Add Button to Visual Editor Toolbar
        editor.addButton('simple-quote', {
            title: 'Custom Quotes',
            cmd: 'simple-quote',
            image: url + '/simple-quote.png',
        });

        editor.addCommand('simple-quote', function() {
            var selected_text = editor.selection.getContent({
                'format': 'html'
            });

            var open_column = '<div class="cst-simple-quote">' + selected_text + '</div>';
            var close_column = '';
            var return_text = '';
            return_text = open_column + close_column;
            editor.execCommand('mceReplaceContent', false, return_text);
            return;
        });

    });
})();
(function() {
    tinymce.PluginManager.add( 'complex-quote', function( editor, url ) {
        // Add Button to Visual Editor Toolbar
        editor.addButton('complex-quote', {
            title: 'Complex Quotes',
            cmd: 'complex-quote',
            image: url + '/complex-quote.jpg',
        });

        editor.addCommand('complex-quote', function() {
            var selected_text = editor.selection.getContent({
                'format': 'html'
            });

            var open_column = '<div class="cst-complex-quote">' + selected_text + '</div>';
            var close_column = '';
            var return_text = '';
            return_text = open_column + close_column;
            editor.execCommand('mceReplaceContent', false, return_text);
            return;
        });

    });
})();
