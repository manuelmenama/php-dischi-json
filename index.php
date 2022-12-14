<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>
  <!-- css -->
  <link rel="stylesheet" href="./css/style.css">
  <!-- axios -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/1.2.0/axios.min.js' integrity='sha512-OdkysyYNjK4CZHgB+dkw9xQp66hZ9TLqmS2vXaBrftfyJeduVhyy1cOfoxiKdi4/bfgpco6REu6Rb+V2oVIRWg==' crossorigin='anonymous'></script>
  <!-- vuejs -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/3.2.45/vue.global.js' integrity='sha512-boEFRnFthrf+bNt2FkCFAjd809yT4B9R5Kr1eTROVLdzT79sgQanuKUhu/R7eDHmWL8IcjHIkxjdEVvvP6DLMA==' crossorigin='anonymous'></script>
  <!-- bootstap js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <title>Dischi php-json</title>
</head>
<body>

  <div id="app">

    <header>
      <h1>THIS.LOGO</h1>
      
      <select class="form-select my-form-select w-25" aria-label="Default select example" v-model="selectedGenre" @change="genreFilter()">
        <option selected value="">Open this select menu</option>
        <option value="Rock">Rock</option>
        <option value="Pop">Pop</option>
        <option value="Metal">Metal</option>
        <option value="Jazz">Jazz</option>
      </select>

      <button @click="toggleForm()" type="button" class="btn btn-primary">Add New Album</button>

    </header>


    <main class="container">

      <div v-if="isOpenForm" class="my-form">

        <div class="card my-form-card">
          <div class="card-header d-flex justify-content-between align-items-center">
            <span>Add New Album Form</span>
            <button @click="toggleForm()" type="button" class="btn btn-outline-secondary my-colosing-btn">X</button>
          </div>
          <div class="card-body">
            
          
            <div class="mb-3">
              <label for="title" class="form-label">Titolo</label>
              <input type="text" class="form-control" id="title" aria-describedby="emailHelp" v-model="title">
            </div>
            <div class="mb-3">
              <label for="author" class="form-label">Autore</label>
              <input type="text" class="form-control" id="author" v-model="author">
            </div>
            <div class="mb-3">
              <label for="year" class="form-label">Anno</label>
              <input type="text" class="form-control" id="year" v-model="year">
            </div>
            <div class="mb-3">
              <label for="cover-path" class="form-label">Location della cover</label>
              <input type="text" class="form-control" id="cover-path" v-model="poster">
            </div>

            <label for="genre" class="form-label">Genere</label>
            <select class="form-select my-form-select mb-3" aria-label="Default select example" id="genre" v-model="genre">
              <option selected value="">Open this select menu</option>
              <option value="Rock">Rock</option>
              <option value="Pop">Pop</option>
              <option value="Metal">Metal</option>
              <option value="Jazz">Jazz</option>
            </select>
            <button type="button" class="btn btn-primary" @click="addAlbum()">Aggiungi</button>
            

          </div>
        </div>

      </div>

      <div class="row my-wrapper">

        <div
          v-for="(disc, index) in takeDiscs"
          :key="index"
          class="col-4 my-card">

          <div class="my-card-elements">

            <div class="my-card-img">

              <img :src="disc.poster" alt="">
            </div>
            <div class="my-card-text">
              <h3>{{disc.title}}</h3>
              <h6>{{disc.author}}</h6>
            </div>
          </div>

        </div>

      </div>

    </main>

  </div>

  <script src="./js/main.js"></script>
  
</body>
</html>