var app = new Vue({
    el: '#app',
    data: {
      diskArray: [],
    },
    methods: {
        getDisk() {
            axios.get('http://localhost:8888/php-ajax-dischi/api.php')
            .then((response) => {
                this.diskArray = response.data;
            });
        }
    },
    mounted() {
        this.getDisk();
    }
  })