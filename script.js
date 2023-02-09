const { createApp } = Vue;
const apiUri = 'http://localhost/php-dischi-json/discs.php';
const app = createApp({
    data() {
        return {
            cards: []
        }
    },
    created() {
        axios.get(apiUri).then(res => {
            this.cards = res.data;
        })
    }
})
app.mount(' #app')