@extends('/layouts.master')

@section('top-script')
<link rel="stylesheet" href="/css/home_style_sheet.css">
@stop

@section('content')

<!-- Add columns for name and info -->

  <div class="row home">
    
    <div class="col-sm-9"><img ALIGN="Left" src="/img/Sharon.jpg" alt="Sharon Ranels" class="headshot-thumbnail">

<!-- CONTACT INFO -->
        
        <div class="col-sm-3 home-contact">(832) 298-4240<br>
            <a class="home-contact" href="mailto:sharonranels@yahoo.com">sharonranels@yahoo.com</a><br>
            <a href="http://www.linkedin.com/in/sharonranels/" target="_blank"><img src="/img/linkedinlogo2.jpeg" alt="Linked In" class="contact-height">www.linkedin.com/in/sharonranels</a><br>
            <a href="https://github.com/sharonranels" target="_blank"><img src="/img/github.jpeg" alt="Git Hub" class="contact-height">https://github.com/sharonranels</a>
        </div>  
    </div>
  </div>


@stop