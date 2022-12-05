const { createApp } = Vue;

createApp({

  data() {
    return{
      apiUrl: "server.php",
      takeDiscs: [],
      selectedGenre: ""
    }
  },
  methods:{
    getDiscsData(){
      axios.get(this.apiUrl)
      .then(result =>  {
        console.log(result.data);
        this.takeDiscs = result.data;
      })
    },
    genreFilter(){
      console.log(this.selectedGenre);
      const data = {
        postGenre: this.selectedGenre
      }

      axios.post(this.apiUrl, data, {
        headers: {'Content-Type': "multipart/form-data"}
      })
      .then(response => {
        console.log(response.data);
        this.takeDiscs = response.data;
      })
    }
  },
  mounted() {
    console.log('Mounted "php-dischi-json"');
    this.getDiscsData();
  }

}).mount('#app');