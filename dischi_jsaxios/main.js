const app = new Vue({
    el: "#app",
    data: {
        albums: [],
        authorsList: [],
        selectValue: "All",
        openedSelect: false,
        dataURL: "http://localhost/php_dischi/dischi_jsaxios/database/database.php",
    },
    created() {
        this.getFirstData();
    },
    methods: {
        getFirstData() {
            // Get data
            axios
                .get(this.dataURL, {
                    params: {
                        query: "",
                    },
                })
                .then((res) => {
                    this.albums = res.data.full_list;
                    this.authorsList = res.data.authors;
                })
                .catch((err) => {
                    console.log(err);
                });
        },

        filteredAlbum() {
            console.log(this.selectValue);

            // Get filtered data
            axios
                .get(this.dataURL, {
                    params: {
                        query: this.selectValue,
                    },
                })
                .then((res) => {
                    this.albums = res.data;
                })
                .catch((err) => {
                    console.log(err);
                });
        },
    },
});
