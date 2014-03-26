@extends('/layouts.master')

@section('content')




<!-- Add columns for name and info -->

  <div class="row">
      <div class="col-md-3"><img src="/img/Sharon.jpg" alt="Sharon Ranels" class="headshot-thumbnail"></div>
      <div class="col-md-9" id="div-height"><em><strong class="namefont">Sharon Ranels</strong></em>
      Junior Software Developer</div>
    </div>

    <hr class="line">
<h1 class="text-center">PORTFOLIO</h1><br>

<!-- THUMBNAILS -->
    <div class="row">
      
      <!-- Portfolio Entry #1 -->
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
      </div>  <!-- End Portfolio Entry #1 -->
      
      <!-- Portfolio Entry #2 -->
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
            <p><a href="https://github.com/sharonranels/codeup.dev/blob/master/public/Whack.html" class="btn btn-default" role="button" target="_blank"><img src="/img/github.jpeg" alt="Git Hub" class="btn-dim"></a></p>
          </div>
        </div>
      </div>  <!-- End Portfolio Entry #2 -->
      
      <!-- Portfolio Entry #3
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail item_box">
          <img src="/img/ABS.png" alt="Address Book" class="screenshot-thumbnail">
          <div class="caption">
            <h3 class="text-center"><u>Address Book</u></h3>
            <p>This Address Book allows the user to:</p>
            <ul class="port-details">
              <li>Add new individual items to the list</li>
              <li>Upload a new file that will either add items onto the existing file or overwrite all exiting information</li>
              <li>Remove individual items from the list</li>
            </ul>
            <p>The user will also be notified and asked to retry if the item entry is too long or too short.</p>
            <p><a href="https://github.com/sharonranels/codeup.dev/blob/fa924a6d625fed85a91f62ac7a5ec5c20086cd8e/public/address_book.php" class="btn btn-default" role="button" target="_blank"><img src="/img/github.jpeg" alt="Git Hub" class="btn-dim"></a></p>
          </div>
        </div>
      </div> --> <!-- End Portfolio Entry #3 -->

    </div>

@stop




