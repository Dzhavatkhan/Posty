<template>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="javascript:void(0)">Logo</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link" @click="login()">Войти</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">Link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">Link</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="text" placeholder="Search">
              <button class="btn btn-primary" type="button">Search</button>
            </form>
          </div>
        </div>
      </nav>
      <h1 class="text-3xl font-bold underline ">
        Hello world!
      </h1>
      <div class="container-fluid mt-5">
        <div class="row" >
            <div class="toast show mt-3 ms-3" v-for="post in posts" :key="post.id">
                <div class="toast-header">
                  {{ post.title }}
                </div>
                <div class="toast-body">
                  {{ post.body }}
                </div>
                <div class="toast-footer">
                    <button @click="like(post.id)">
                        <i class="far fa-heart"></i>
                    </button>
                    <p class="text-black">{{post.like}}</p>
                </div>
              </div>
        </div>
      </div>



    </template>

<script setup>

import {onMounted, ref} from 'vue'
import { useRouter } from 'vue-router';

let router = useRouter();

let posts = ref([])

onMounted(async() => {
    getPosts();
})
const login = () => {
    router.push("/sign in")
}
const getPosts = async() => {
    let response = await axios.get("api/posts")
    posts.value = response.data.posts;
    console.log(posts.value);
}
const like = async (id) => {
    let response = await axios.post("api/like/" + id)
    console.log(response.data.like);
    getPosts();
}

</script>

<style lang="scss" scoped>

</style>
