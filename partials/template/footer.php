   <!-- footer -->
   <footer>
      <!-- footer left -->
      <div v-if="recently_played.length > 0" class="left">
        <div class="playing_album_photo">
          <img :src="'img/' + recently_played[albumIndex].poster" alt="recently_played[albumIndex].author">
        </div>
        <div class="playing_album_text">
          <h5>{{recently_played[albumIndex].author}}</h5>
        </div>
        <div class="playing_album_save">
          <ul class="list_none list_inline">
            <li><a href="#"><i class="far fa-heart"></i></a></li>
            <li><a href="#"><i class="far fa-folder"></i></a></li>
          </ul>
        </div>
      </div>
      <!-- /footer left -->
      <!-- footer center -->
      <div class="center">
        <ul class="playback-list list_none">
          <li><a href="#"><i class="fas fa-random"></i></a></li>
          <li><a href="#"><i class="fas fa-step-backward"></i></a></li>
          <li><a href="#"><i class="playbutton far fa-play-circle"></i></a></li>
          <li><a href="#"><i class="fas fa-step-forward"></i></a></li>
          <li><a href="#"><i class="fas fa-undo"></i></a></li>
        </ul>
        <div class="time">
          <p><small class="played-time">0:25</small></p>
          <div class="time_bar">
            <div class="played"></div>
          </div>
          <p><small class="remaining-time">4:35</small></p>
        </div>
      </div>
      <!-- /footer center -->
      <!-- footer right -->
      <div class="right">
        <ul class="sharing list_none">
          <li><a href="#"><i class="fas fa-bars"></i></a></li>
          <li><a href="#"><i class="sharing_ico fas fa-desktop"></i></a></li>
        </ul>
        <div class="sound_ico"><i class="vol-ico fas fa-volume-up"></i></div>
        <div class="volume_bar"><div class="volume"></div></div>
      </div>
      <!-- footer right -->
    </footer>
    <!-- /footer -->