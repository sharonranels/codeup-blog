@extends('/layouts.master')

@section('content')

<div class="blog-header">
  <h1 class="blog-title">Sharon Ranels</h1>
  <p class="lead blog-description"><em><strong>Portfolio</em></strong></p>
</div>

<hr class="line">
  
<!-- Add columns for capstone info -->

<div class="row item_box">
  <div class="col-sm-6"><img ALIGN="Left" src="/img/Iwantit.png" alt="Capstone Image" class="capstone-image">
    <a href="https://github.com/blind-squirrel/blind-squirrel" class="btn btn-default" align="left" role="button" target="_blank"><img src="/img/github.jpeg" alt="Git Hub" class="btn-dim"></a>
    <a href="http://i-want-it.us/" class="btn btn-success" role="button" target="_blank" align="right">Go To Site</a>
  </div>

    <div class="col-sm-6">
      <div class="row">
        <div class="col-md-12">
          <h3><u>I Want It!</u></h3>
            <p><strong>I Want It</strong> is an application that helps the user to budget and save for a special purchase, whether it be large or small, financed or paid in cash.</p><br>
            <p>The program has the following features:</p>
              <ul class="port-details">
                <li>Built using JQuery, Laravel, JavaScript, CSS and MySQL</li>
                <li>Create a new user, login and logout</li>
                <li>Admin versus user rights</li>
                <li>User data change, including password change via email notification</li>
                <li>Error banner if the data does not meet standard requirements</li>
                <li>Database interaction</li>
              </ul>
        </div>
      </div>
    </div>  
</div>

  <hr class="line">

<!-- THUMBNAILS -->
    <div class="row">
      
      <!-- Portfolio Entry #1 -->
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail item_box">
          <img src="/img/blog-screenshot.png" alt="Address Book" class="screenshot-thumbnail">
          <div class="caption">
            <h3 class="text-center"><u>Blog</u></h3>
            <p>Features:</p>
            <ul class="port-details">
              <li></li>
              <li>Create a new user, login and logout</li>
              <li>Admin versus user rights</li>
              <li>Error banner if the data does not meet standard requirements</li>
              <li>Database interaction</li>
            </ul>
            <p></p>
            <p><a href="https://github.com/sharonranels/codeup-blog" class="btn btn-default" role="button" target="_blank"><img src="/img/github.jpeg" alt="Git Hub" class="btn-dim"></a></p>
          </div>
        </div>
      </div> <!-- End Portfolio Entry #1 -->

      <!-- Portfolio Entry #2 -->
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail item_box">
          <img src="/img/NationalParks.png" alt="National Parks" class="screenshot-thumbnail">
          <div class="caption">
            <h3 class="text-center"><u>Data Base Query and Entry</u></h3>
            <p>Features:</p>
            <ul class="port-details">
              <li>Database query</li>
              <li>New-data entry into the database</li>
              <li>Sort by column</li>
              <li>Error banner if the data does not meet standard requirements</li>
              <li>Column headers that are fixed to the top of the page</li>
            </ul>
            <p><a href="https://github.com/sharonranels/codeup.dev/blob/master/public/national-parks.php" class="btn btn-default" role="button" target="_blank"><img src="/img/github.jpeg" alt="Git Hub" class="btn-dim"></a></p>
          </div>
        </div>
      </div>  <!-- End Portfolio Entry #2 -->
      
      <!-- Portfolio Entry #3 -->
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail item_box">
          <img src="/img/whackscreen.png" alt="Whack-A-Mole screenshot" class="screenshot-thumbnail">
          <div class="caption">
            <h3 class="text-center"><u>Whack-A-Mole Game</u></h3>
            <p>This game has the following features:</p>
            <ul class="port-details">
              <li>Game-time count-down</li>
              <li>High-score tracker</li>
              <li>Hit and miss counter</li>
            </ul>
            <a href="https://github.com/sharonranels/codeup.dev/blob/master/public/Whack.html" class="btn btn-default" role="button" target="_blank"><img src="/img/github.jpeg" alt="Git Hub" class="btn-dim"></a>
            <a href="/Whack.html" class="btn btn-success" role="button" target="_blank">Play Live</a>
          </div>
        </div>
      </div>  <!-- End Portfolio Entry #3 -->
      
      

    </div>

@stop




