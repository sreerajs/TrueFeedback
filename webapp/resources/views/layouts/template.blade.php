<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>@yield('title') | TrueFeedback</title>
  <meta name="description" content="Bytacoin">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

  <!-- Favicon -->
  <link rel="apple-touch-icon" href="apple-touch-icon.png">
  <link rel="shortcut icon" href="../favicon.png" type="image/x-icon">

  <!-- Scripts-->

  <script src="../../js/jquery.validate.js"></script>
  <script src="../../js/form.validate.js"></script>
  <script src="../../js/functions.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
  <script src="../../js/neat.js"></script>
  <!-- Stylesheet -->
  <link rel="stylesheet" href="../../css/neat.css">
  <link rel="stylesheet" href="../../css/style.css">
  <link rel="stylesheet" type="text/css" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.1/jquery.rateyo.min.css">
  <meta name="_token" content="{{ csrf_token() }}">
</head>
<body>
  @yield('body_content')
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
  <script src="../../js/vendor.js"></script>
  <script src="../../js/form-builder.min.js" type="text/javascript"></script>
  <script src="../../js/form-render.min.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.1/jquery.rateyo.min.js"></script>
  <script src="../js/form-composer.js"></script>

  <!-- Font Awesome -->
  <script defer src = "https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity = "sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin = "anonymous" ></script>
</body>
<!-- Survey Form Rendering -->

@if(isset($dataArray['survey_form']))
@php
$surveyFormData = $dataArray['survey_form'];
@endphp
<script type="text/javascript">
if($("#SurveyRender").length){
  $.ajax(
    {
      headers: {
        'X-CSRF-Token': $('meta[name="_token"]').attr('content')
      },
      type: "POST",
      url: "/survey_form",
      dataType: "html",
      data: {"surveyID": @php echo $dataArray['survey_id'] @endphp},
      success: function(returnData)
      {
        renderForm(returnData)
      }
    });
    function renderForm(formData) {
      jQuery(function() {
        //var formData = '<form-template><fields><field type="text" label="Full Name" name="text-1476748004559" subtype="text" class="red form-control"></field><field type="select" label="Occupation" class="form-control" name="select-1476748006618"><option label="Street Sweeper" value="option-1" selected="true">Street Sweeper</option><option label="Moth Man" value="option-2">Moth Man</option><option label="Chemist" value="option-3">Chemist</option></field><field type="textarea" label="Short Bio" class="form-control" name="textarea-1476748007461" subtype="textarea" rows="5"></field></fields></form-template>',
        formRenderOpts = {
          dataType: 'xml',
          formData: formData
        };
        var renderedForm = $('#SurveyRender');
        renderedForm.formRender(formRenderOpts);
      });
    }
    /*jQuery(function($) {
    var escapeEl = document.createElement('textarea'),
    code = document.getElementById('SurveyRender'),
    escapeHTML = function(html) {
    escapeEl.textContent = html;
    return escapeEl.innerHTML;
  },
  formData = '{{ $surveyFormData }}',
  addLineBreaks = function(html) {
  return html.replace(new RegExp('&gt; &lt;', 'g'), '&gt;\n&lt;').replace(new RegExp('&gt;&lt;', 'g'), '&gt;\n&lt;');
};

// Grab markup and escape it
var $markup = $('<div/>');
$markup.formRender({formData});

// set < code > innerHTML with escaped markup
code.innerHTML = addLineBreaks($markup[0].innerHTML);
});
alert("hello");*/
}
@endif
</script>
</html>
