<template>
    <div class="container mt-5">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/readme">Readme</a>
                    </li>
                </ul>
            </div>
        </nav>
        <h1 class="text-center mb-4">ToDo List</h1>
        <form @submit.prevent="addTodo" class="mb-4">
            <div class="input-group">
                <input v-model="newTodoTitle" class="form-control" placeholder="Yangi ToDo qo'shish" required/>
                <div class="input-group-append">
                    <button type="submit" class="btn btn-primary">Qo'shish</button>
                </div>
            </div>
        </form>
        <ul class="list-group">
            <li v-for="todo in todos" :key="todo.id" class="list-group-item d-flex justify-content-between align-items-center">
                {{ todo.title }}
                <button @click="deleteTodo(todo.id)" class="btn btn-danger btn-sm">O'chirish</button>
            </li>
        </ul>
        <p v-if="errorMessage" class="text-danger">{{ errorMessage }}</p>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            todos: [],
            newTodoTitle: '',
            errorMessage: ''
        };
    },
    mounted() {
        this.fetchTodos();
    },
    methods: {
        fetchTodos() {
            axios.get('/api/todos')
                .then(response => {
                    this.todos = Object.values(response.data);
                })
                .catch(error => {
                    console.error('ToDo ro‘yxatini yuklashda xatolik yuz berdi', error);
                    this.errorMessage = 'ToDo ro‘yxatini yuklashda xatolik yuz berdi';
                });
        },
        addTodo() {
            axios.post('/api/todos', { title: this.newTodoTitle })
                .then(response => {
                    this.todos.push(response.data);
                    this.newTodoTitle = '';
                    this.errorMessage = '';
                })
                .catch(error => {
                    console.error('ToDo qo‘shishda xatolik yuz berdi', error);
                    this.errorMessage = 'ToDo qo‘shishda xatolik yuz berdi: ' + (error.response ? error.response.data.error : error.message);
                });
        },
        deleteTodo(id) {
            if (Array.isArray(this.todos)) {
                axios.delete(`/api/todos/${id}`)
                    .then(() => {
                        this.todos = this.todos.filter(todo => todo.id !== id);
                    })
                    .catch(error => {
                        console.error('ToDo o‘chirishda xatolik yuz berdi', error);
                        this.errorMessage = 'ToDo o‘chirishda xatolik yuz berdi: ' + (error.response ? error.response.data.error : error.message);
                    });
            } else {
                console.error('this.todos massiv emas:', this.todos);
                this.errorMessage = 'ToDo ro‘yxatini yangilashda xatolik yuz berdi';
            }
        }

    }
};
</script>
