CKEDITOR.plugins.add( 'zamanager', {
    init: function( editor ) {
        editor.config.filebrowserBrowseUrl = './ckeditor/plugins/zamanager/index.php';
         editor.config.filebrowserImageBrowseUrl = './ckeditor/plugins/zamanager/index.php';
    }
});
