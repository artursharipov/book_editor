CKEDITOR.plugins.addExternal('insertpre', '/js/ckeditor/insertpre/');
CKEDITOR.plugins.addExternal('videoembed', '/js/ckeditor/videoembed/');
CKEDITOR.plugins.addExternal('video', '/js/ckeditor/video/');
CKEDITOR.plugins.addExternal('audio', '/js/ckeditor/audio/');
CKEDITOR.plugins.addExternal('autogrow', '/js/ckeditor/autogrow/');
CKEDITOR.plugins.addExternal('tableresizerowandcolumn', '/js/ckeditor/tableresizerowandcolumn/');
CKEDITOR.plugins.addExternal('presentation', '/js/ckeditor/presentation/');

CKEDITOR.editorConfig = function( config ) {
    
	config.allowedContent = true;
	config.removePlugins = 'elementspath';
	config.resize_enabled = false;
	config.extraPlugins = 'insertpre,videoembed,video,audio,autogrow,tableresizerowandcolumn,presentation';
	// config.skin = 'moono-dark,/moono-dark/';
	config.disableNativeSpellChecker = false;
	config.height = 400;
	config.toolbar = [
		[
			'Source', '-',                                     
			'Outdent', 'Indent', 'PasteFromWord', '-',
			'Strike', 'Subscript', 'Superscript', '-', 
			'Blockquote', 'InsertPre', 'Anchor', 'VideoEmbed', '-',
			'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-',
		],
		[
			'Format', '-',
			'Bold', 'Italic', 'Underline', 'RemoveFormat', '-',
			'NumberedList', 'BulletedList', 'Table', '-',
			'Link', 'Unlink', '-',
			'Image', 'Video', 'audio', 'Presentation', '-',
			// 'Format', 'Font', 'FontSize', 'TextColor', 'BGColor', 'Iframe', '-',
		]
	];
	
};