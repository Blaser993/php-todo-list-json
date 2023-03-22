const { createApp } = Vue

createApp({
    data(){
        return{
            title: "To-do list",
            todos: [],
        }
    },
    methods:{
        fetchTodoList(){
            axios
                .get("./server.php")
                .then(res => {
                    console.log(res.data)
                    this.todos = res.data
            })
            .catch((err) => {
                console.log(err)
                this.todos = []
            })
        },
    },
    mounted(){
        this.fetchTodoList()
    },
}).mount("#app")

