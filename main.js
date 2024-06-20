const { createApp } = Vue

createApp({
    data() {
        return {
            urlAlbum: "http://localhost/php-dischi-json/server.php",
            data: [],
        }
    },
    methods: {
        getData() {
            axios.get(this.urlAlbum).then((response) => {
                this.data = response.data;
                console.log(this.data)
            })
        },
    },
    created() {
        this.getData();
    }
}).mount('#app')