const { createApp } = Vue;

const app = createApp({
    data(){
        return{
            lista:[],
            nuovoImpegno: {
                impegno: ""
            },
        }
    },
    methods:{
        fetchImpegni() {
            axios.get("API/todo.php")
                .then(resp=>{
                    this.lista=resp.data
                })
        },
        inviaRichiesta(){
            axios.post("API/creatodo.php", this.nuovoImpegno, {
            headers: { 'Content-Type': 'multipart/form-data' }
            }).then(resp=>{
                this.fetchImpegni();
                
            })
            this.nuovoImpegno= {
                impegno:""
            }
        }
    },
    mounted(){
        this.fetchImpegni();
    }
}).mount("#app");