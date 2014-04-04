@extends('/layouts.master')

@section('top-script')
<link rel="stylesheet" href="/css/home_style_sheet.css">
@stop

@section('content')

<!-- Add columns for name and info -->

  <div class="row home">
    
    <div class="col-sm-5"><img ALIGN="Left" src="/img/Sharon.jpg" alt="Sharon Ranels" class="headshot-thumbnail"></div>

<!-- CONTACT INFO -->
        
        <div class="col-sm-5 home-contact">
            <div id="hover-format"><a href="tel:1-832-298-4240">(832) 298-4240</a></div>
            <div><a href="mailto:sharonranels@yahoo.com">sharonranels@yahoo.com</a></div>
            <div><a href="https://github.com/sharonranels" target="_blank"><img src="/img/github.jpeg" alt="Git Hub" class="contact-height">&nbsp;&nbsp;github.com/sharonranels</a></div>
            <div><a href="http://www.linkedin.com/in/sharonranels/" target="_blank"><img src="/img/linkedinlogo2.jpeg" alt="Linked In" class="contact-height">&nbsp;&nbsp;linkedin.com/in/sharonranels</a></div>
        </div>  
    </div>


@stop