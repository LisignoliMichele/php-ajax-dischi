       <!-- section recently played -->
       <section id="recently_played">
          <h2>recently played</h2>
          <div class="album_music">
         <?php foreach($dischi["Recently played"] as $disco) : ?>
          <a href="#" class="music">
              <div class="album_photo">
                <img src="img/<?= $disco["poster"] ?>" alt="album photo">
              </div>
              <h4><?= $disco["author"] ?></h4>
              <p><?= $disco["title"] ?></p>
            </a>
         <?php endforeach; ?>
          </div>
        </section>
        <!-- /section recently played -->
        <!-- section Created for user -->
        <section id="created_for_user">
          <h2>Creato per John Doe</h2>
          <p>Più ascolti, più accurati saranno i suggerimenti</p>
          <div class="album_music">
          <?php foreach($dischi["created for user"] as $disco) : ?>
          <a href="#" class="music">
              <div class="album_photo">
                <img src="img/<?= $disco["poster"] ?>" alt="album photo">
              </div>
              <h4><?= $disco["author"] ?></h4>
              <p><?= $disco["title"] ?></p>
            </a>
         <?php endforeach; ?>
          </div>
        </section>
        <!-- /section Created for user -->
        <!-- /section popolar artists -->
        <section id="popolar">
          <h2>Artisti più popolari</h2>
          <p>Più ascolti, più accurati saranno i suggerimenti</p>
          <div class="album_music">
          <?php foreach($dischi["popolar artists"] as $disco) : ?>
          <a href="#" class="music">
              <div class="album_photo">
                <img src="img/<?= $disco["poster"] ?>" alt="album photo">
              </div>
              <h4><?= $disco["author"] ?></h4>
              <p><?= $disco["title"] ?></p>
            </a>
         <?php endforeach; ?>
          </div>
        </section>
        <!-- /section popolar artists -->