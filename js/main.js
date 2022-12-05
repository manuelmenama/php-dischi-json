const { createApp } = Vue;

createApp({

  data() {
    return{
      apiUrl: "server.php",
      takeDiscs: []
    }
  },
  methods:{
    getDiscsData(){
      axios.get(this.apiUrl)
      .then(result =>  {
        console.log(result.data);
        this.takeDiscs = result.data;
        console.log(takeDiscs);
      })
    }
  },
  mounted() {
    console.log('Mounted "php-dischi-json"');
    this.getDiscsData();
  }

}).mount('#app');