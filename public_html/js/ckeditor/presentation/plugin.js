CKEDITOR.plugins.add( 'presentation', {
    icons: 'presentation',
    init: function( editor ) {

        var command = editor.addCommand('insertPresentation', new CKEDITOR.dialogCommand('presentation'));
        command.modes = {wysiwyg:1, source:1};
        command.canUndo = true;
        
        // editor.addCommand( 'insertPresentation', {
        //     exec: function( editor ) {
        //         var now = new Date();
        //         editor.insertHtml( 'The current date and time is: <em>' + now.toString() + '</em>' );
        //     }
        // });

        editor.ui.addButton( 'Presentation', {
            label: 'Insert Presentation',
            command: 'insertPresentation',
            toolbar: 'insert'
        });

        CKEDITOR.dialog.add('presentation', this.path + 'dialogs/presentation.js');
    }
});