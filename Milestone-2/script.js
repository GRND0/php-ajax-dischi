const app = new Vue({
    el: "#root",
    data: {
      database: [],
    },
    created() {
      axios
        .get("http://localhost/php-ajax-dischi/Milestone-2/server.php")
        .then((resp) => {
          this.database = resp.data;
        });
    },
  });