const App = new Vue({
    el: '#app',
    data:{
        disks: null,
        value: "",
    },
    mounted(){
        axios
            .get('./data/db.php')
            .then(resp =>{
                console.log(resp.data);
                this.disks = resp.data
            })
            .catch(error =>{
                console.log(error);
            })   
    },
    methods:{
        filter(){
            this.value = document.getElementById('select').value;
            axios
                .get('./data/db.php?genre='+this.value)
                .then(resp =>{
                    console.log(resp.data);
                    this.disks = resp.data
                })
                .catch(error =>{
                    console.log(error);
                })   
            
        }
    }
});