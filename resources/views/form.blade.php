<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>DRRD Editor</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Load TinyMCE locally -->
  <script src="{{ asset('tinymce/tinymce.min.js') }}"></script>

  <script>
    tinymce.init({
  selector: 'textarea.rich-editor',
  height: 500,
  menubar: true,
  toolbar_mode: 'wrap', // 👈 show all buttons, no "..."
  plugins: [
    'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview', 'anchor',
    'searchreplace', 'visualblocks', 'code', 'fullscreen',
    'insertdatetime', 'media', 'table', 'code', 'help', 'wordcount'
  ],
  toolbar: `undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | 
            forecolor backcolor | alignleft aligncenter alignright alignjustify | 
            bullist numlist outdent indent | link image media table | 
            removeformat code fullscreen | enterbtn`,

  branding: false,
  content_style: "body { margin: 0; padding: 10px; font-size: 16px; line-height: 1.6; }",

  setup: function (editor) {
    editor.ui.registry.addButton('enterbtn', {
      text: 'Enter',
      tooltip: 'Insert line break <br>',
      onAction: function () {
        editor.insertContent('<br>');
      }
    });
  },

  image_title: true,
  automatic_uploads: false,
  file_picker_types: 'image',
  file_picker_callback: function (callback, value, meta) {
    if (meta.filetype === 'image') {
      const input = document.createElement('input');
      input.setAttribute('type', 'file');
      input.setAttribute('accept', 'image/*');

      input.onchange = function () {
        const file = this.files[0];
        const reader = new FileReader();
        reader.onload = function () {
          callback(reader.result, { alt: file.name });
        };
        reader.readAsDataURL(file);
      };

      input.click();
    }
  }
});

  </script>
</head>
<body class="bg-light">
<div class="container mt-5">
  <h2 class="mb-4">DRRD Rich Text Editor</h2>
  <form method="POST" action="{{ route('save.content') }}">
    @csrf
    <div class="mb-3">
      <label for="textE" class="form-label">Rich Text Content</label>
      <textarea class="form-control rich-editor" name="E" id="textE"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
  </form>
</div>
</body>
</html>
