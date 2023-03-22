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
            axios.get("./server.php")
        }
    },
    mounted(){
        this.fetchTodoList()
    }
}).mount("#app")

