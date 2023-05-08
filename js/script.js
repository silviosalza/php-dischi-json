const { createApp } = Vue;

createApp({
  data() {
    return {
      dischi: [],

    };
  },
  mounted() {
    axios
      .get("http://localhost/Boolean-MAMP/Maggio/php-dischi-json/server.php")
      .then((resp) => {
        this.dischi = resp.data.results;
      });

  },

}).mount("#app");