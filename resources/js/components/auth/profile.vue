<template>
    <div class="profile_cont w-[99vw] h-screen bg-gray-100 flex justify-center px-80 py-10">
        <div class="profile_wrapper w-full bg-white shadow-md flex flex-col h-full">
            <div class="profile_nav flex justify-between p-10 border-b-2 border-gray-200">
                <div class="info flex flex-col items-center w-20 h-50">
                    <img class="w-full" src="http://127.0.0.1:8000/image/free-icon-heart-shape-outline-with-lining-at-right-edge-31611.png" alt="" srcset="">
                    <p class="w-1/3">Name</p>
                </div>
                <div class="nav_menu flex items-center gap-x-16 ">
                    <a href="" class="max-[1200px]:text-[18px] max-[430px]:text-[14px]">
                        Главная
                    </a>
                    <a href="" class="max-[1200px]:text-[18px] max-[430px]:text-[14px]">
                        Редактировать
                    </a>
                    <a href="" class="text-red-700 max-[1200px]:text-[18px] max-[430px]:text-[14px]">
                        Выйти
                    </a>
                </div>

            </div>
            <div class="my_posts w-full flex flex-wrap justify-center">
                <div v-for="post in posts" :key="post.id" class="flex px-[15px]  py-5 justify-between bg-white shadow-md max-[320px]:w-full max-[600px]:w-full max-[680px]:w-full w-80 flex-col max-[430px]:w-full">
                    <div class="mb-5 flex justify-start flex-col gap-y-[25px] max-[430px]:text-sm">
                        <div class="post_title text-xl flex justify-start items-center border-[#A8A8A8] border-b">
                            {{ post.title }}
                        </div>

                        <div class="post_body">
                            {{post.body}}
                        </div>
                    </div>

                    <div class="post_footer flex gap-3">
                        <div class="like flex gap-x-2">
                            <img @click="like(post.id)" class="w-6" :src="src" alt="" srcset="">
                            <p>{{post.like}}</p>
                        </div>
                        <div class="comment flex gap-x-2">
                            <img class="w-6" src="http://127.0.0.1:8000/image/free-icon-comment-6366342.png" alt="">
                            <p>0</p>
                        </div>

                    </div>
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
let src = ref('http://127.0.0.1:8000/image/free-icon-heart-shape-outline-with-lining-at-right-edge-31611.png')
onMounted(async() => {
    getPosts();
})
const login = () => {
    router.push("/signIn")
}
const getPosts = async() => {
    let response = await axios.get("api/posts")
    posts.value = response.data.posts;
    console.log(posts.value);
}
const like = async (id) => {
    let response = await axios.post("api/like/" + id)
    console.log(response.data.like);
    src.value = 'http://127.0.0.1:8000/image/free-icon-heart-black-shape-38362.png'
    getPosts();
}

</script>

<style scoped>

</style>
