@extends('/layouts.master')

@section('top-script')
<link rel="stylesheet" href="/css/home_style_sheet.css">
@stop

@section('content')

<!-- Add columns for name and info -->

  <div class="row">
    <div class="col-md-9"><img src="/img/Sharon.jpg" alt="Sharon Ranels" class="headshot-thumbnail"></div>
    <div class="col-md-9" id="div-height"><em><strong class="namefont">Sharon Ranels</strong></em>
    Web Developer</div>

<!-- CONTACT INFO -->
    
    <div class="col-md-3"><strong>CONTACT INFORMATION</strong></div>
    
    <div class="col-md-4">San Antonio TX<br>
    (832) 298-4240<br>
    <a href="mailto:sharonranels@yahoo.com">sharonranels@yahoo.com</a><br></div>
    
    <div class="col-md-4"><a href="http://www.linkedin.com/in/sharonranels/" target="_blank"><img src="/img/linkedinlogo2.jpeg" alt="Linked In" class="contact-height"></a><br>
    <a href="https://github.com/sharonranels" target="_blank"><img src="/img/github.jpeg" alt="Git Hub" class="contact-height"></a></div>  
  
  </div>


@stop