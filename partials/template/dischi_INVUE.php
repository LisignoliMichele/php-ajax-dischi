       <!-- section recently played -->
       <section v-if="recently_played.length > 0" id="recently_played">
          <h2>Recently played</h2>
          <input v-model="search" type="text" placeholder="search"></i>
         <select v-if="genres.length > 0" v-model="select">
            <option value="">Tutti i generi</option>
            <option :value="genre" v-for="genre in genres">{{genre}} </option>
         </select>
          <div class="album_music">
            <a v-for="(disk, index) in filtredAlbums" class="music" @click="albumIndex = index"></i>
              <div class="album_photo">
                <img :src="'img/' + disk.poster" alt="album photo">
              </div>
              <h4>{{disk.author}}</h4>
              <p>{{disk.title}}</p>
            </a>
          </div>
        </section>
        <!-- /section recently played -->
        <!-- section Created for user -->
        <section v-if="created_for_user.length > 0" id="created_for_user">
          <h2>Creato per John Doe</h2>
          <p>Più ascolti, più accurati saranno i suggerimenti</p>
          <div class="album_music">
            <a v-for="disk in created_for_user" class="music">
              <div class="album_photo">
                <img :src="'img/' + disk.poster" alt="album photo">
              </div>
              <h4>{{disk.author}}</h4>
              <p>{{disk.title}}</p>
            </a>
          </div>
        </section>
        <!-- /section Created for user -->
        <!-- /section popolar artists -->
        <section v-if="popolar_artists.length > 0" id="popolar">
          <h2>Artisti più popolari</h2>
          <p>Più ascolti, più accurati saranno i suggerimenti</p>
          <div class="album_music">
             <a v-for="disk in popolar_artists" class="music">
              <div class="album_photo">
                <img :src="'img/' + disk.poster" alt="album photo">
              </div>
              <h4>{{disk.author}}</h4>
              <p>{{disk.title}}</p>
            </a>
          </div>
        </section>
        <!-- /section popolar artists -->