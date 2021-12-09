const App = new Vue({
    el: '#app',
    data:{
        disks: null,
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
});