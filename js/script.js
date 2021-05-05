var app = new Vue(
   {
      el: "#app",
      data:{
         recently_played: [],
         popolar_artists: [],
         created_for_user: [],
         genres: [],
         select: "",
         search: "",
         albumIndex: 0,
      },
      mounted: function() {
         axios.get("http://localhost:8888/php-ajax-dischi/api.php")
         .then((serverAnswer) => {
            this.created_for_user = serverAnswer.data.created_for_user;
            console.log(this.created_for_user)
            this.popolar_artists = serverAnswer.data.popolar_artists;
            console.log(this.popolar_artists)
            this.recently_played = serverAnswer.data.recently_played;
            console.log(this.recently_played)
            this.recently_played.forEach((album) => { 
               if (this.genres.includes(album.genre) == false ){
                  this.genres.push(album.genre)
               }
             });
         });
      },
      computed:{
         filtredAlbums: function(){
             return this.recently_played.filter((disk) =>{
                if (this.search != ""){
                  return disk.title.toLowerCase().match(this.search.toLowerCase())
                  
                }else{
                  return disk.genre.match(this.select)
                }
             });
         },
      }
   });