const { createApp } = Vue;

createApp({

  data() {
    return{
      apiUrl: "server.php"

    }
  },
  methods:{
    getDiscsData(){
      axios.get(this.apiUrl)
      .then(result =>  {
        console.log(result.data);
      })
    }
  },
  mounted() {
    console.log('Mounted "php-dischi-json"');
    this.getDiscsData();
  }

}).mount('#app');