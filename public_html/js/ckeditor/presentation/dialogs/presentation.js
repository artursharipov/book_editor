CKEDITOR.dialog.add('presentation', function(editor) {
    return {
      title : 'Слайды презентации',
      minWidth : 400,
      minHeight : 200,
      onOk: function() {
        var id = this.getContentElement('presentation', 'id').getInputElement().getValue();
        this._.editor.insertHtml('##' + id + '##');
      },
      contents : [{
        id : 'presentation',
        label : 'First Tab',
        title : 'First Tab',
        elements : [
            {
                id : 'id',
                type : 'text',
                label : 'ID презентации'
            },
            // {
            //     id: 'browse',
            //     type: 'button',
            //     filebrowser: 'presentation:id',
            //     hidden: true,
            //     label: editor.lang.common.browseServer
            // }
        ]
      }]
    };
  });