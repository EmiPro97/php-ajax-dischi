const app = new Vue({
    el: '#app',
    data: {
        albums: [],
    },
    created() {
        // Get data
        const dataURL = 'http://localhost/php_dischi/dischi_jsaxios/database/database.php';

        axios.get(dataURL)
            .then(res => {
                this.albums = res.data;
            })
            .catch(err => {
                console.log(err);
            });
    },
});