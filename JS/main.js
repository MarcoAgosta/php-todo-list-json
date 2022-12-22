const { createApp } = Vue;

const app = createApp({
    data(){
        return{
            lista:[],
        }
    },
    methods:{
        fetchImpegni() {
            axios.get("API/todo.php")
                .then(resp=>{
                    this.lista=resp.data
                })
        }
    },
    mounted(){
        this.fetchImpegni();
    }
}).mount("#app");