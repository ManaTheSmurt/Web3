tinymce.init({
    selector: 'textarea#TinyMCE',
    plugins: 'a11ychecker advcode casechange export formatpainter linkchecker autolink lists checklist mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
    toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter pageembed permanentpen table',
    toolbar_mode: 'floating',
    tinycomments_mode: 'embedded',
    tinycomments_author: 'Author name',
  });