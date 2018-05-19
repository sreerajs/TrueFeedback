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
  <script src="../../js/neat.js"></script>
  
  <!-- Stylesheet -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
  <link rel="stylesheet" href="../../css/neat.css">
  <link rel="stylesheet" href="../../css/style.css">
  <link rel="stylesheet" type="text/css" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.1/jquery.rateyo.min.css">
  <meta name="_token" content="{{ csrf_token() }}">
</head>
<body>
  @yield('body_content')
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.1/jquery.rateyo.min.js"></script>
<script src="../../js/vendor.js"></script>
<script src="../../js/form-builder.min.js" type="text/javascript"></script>
<script src="../../js/form-render.min.js" type="text/javascript"></script>
<script src="../js/form-composer.js"></script>

<!-- Font Awesome -->
<script defer src = "https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity = "sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin = "anonymous" ></script>

<!-- Survey Form Rendering -->
@if(isset($dataArray['survey_id']))
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
        formRenderOpts = {
          dataType: 'xml',
          formData: formData
        };
        var renderedForm = $('#SurveyRender');
        renderedForm.formRender(formRenderOpts);
      });
    }
}
@endif
</script>
</html>
