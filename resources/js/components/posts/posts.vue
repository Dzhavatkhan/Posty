<template>
    <div class="p-6 max-w-sm mx-auto bg-white rounded-xl shadow-md flex items-center space-x-4">
        <div class="flex-shrink-0">
          <img class="h-12 w-12" src="/img/logo.svg" alt="ChitChat Logo">
        </div>
        <div>
          <div class="text-xl font-medium text-black">ChitChat</div>
          <p class="text-gray-500">You have a new message!</p>
        </div>
      </div>
      <h1 class="text-3xl font-bold underline ">
        Hello world!
      </h1>

      <div class="flex bg-white mx-auto gap-10 w-3/4 flex-wrap h-450px">
            <div class=" shadow-md mt-3 w-80 max-h-3/4" v-for="post in posts" :key="post.id">
                <div class="toast-header">
                  {{ post.title }}
                </div>
                <div class="toast-body">
                  {{ post.body }}
                </div>
                <div class="toast-footer mb-2 w-full h-20">
                    <button @click="like(post.id)">
                        <i class="far fa-heart"></i>
                    </button>
                    <p class="text-black">{{post.like}}</p>
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
