<template>
    <div class="profile_cont w-[99vw] min-h-screen bg-gray-100 flex justify-center px-80 py-10">
        <div class="profile_wrapper w-full bg-white shadow-md flex flex-col">
            <div class="profile_nav bg-white flex justify-between pl-24 pr-32 border-b-2 border-gray-200">
                <div class="info flex flex-col items-center w-20 h-50">
                    <img class="w-full" src="http://127.0.0.1:8000/image/free-icon-heart-shape-outline-with-lining-at-right-edge-31611.png" alt="" srcset="">
                    <p class="w-1/3">Name</p>
                </div>
                <div class="nav_menu flex items-center gap-x-16 ">
                    <a href="" class="max-[1200px]:text-[18px] max-[430px]:text-[14px] hover:opacity-50">
                        Главная
                    </a>
                    <a href="" class="max-[1200px]:text-[18px] max-[430px]:text-[14px] hover:opacity-50">
                        Редактировать
                    </a>
                    <a href="" class="text-red-500 max-[1200px]:text-[18px] max-[430px]:text-[14px] hover:text-red-700">
                        Выйти
                    </a>
                </div>

            </div>
            <div class="my_posts w-full flex flex-wrap justify-center gap-10 py-10">
                <div v-for="post in posts" :key="post.id"   class="flex px-[15px]  py-5 justify-between bg-white shadow-md max-[320px]:w-full max-[600px]:w-full max-[680px]:w-full w-80 flex-col max-[430px]:w-full">
                    <div class="mb-5 flex justify-start flex-col gap-y-[25px] max-[430px]:text-sm">
                        <div @click="open = !open" class="post_title text-xl flex justify-start items-center border-[#A8A8A8] border-b">
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
                        <div data-hs-overlay="#hs-basic-modal" class="comment cursor-pointer  flex gap-x-2">
                            <img @click="modalShow(post.id)"  id="modal-switch" class="w-6" src="http://127.0.0.1:8000/image/free-icon-comment-6366342.png" alt="">
                            <p>0</p>
                        </div>

                    </div>


                    <div v-if="open" id="static-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-full max-w-2xl max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <!-- Modal header -->
                                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                        {{post.title}}`
                                    </h3>
                                    <button type="button" @click="open = !open" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="static-modal">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <div class="p-4 md:p-5 space-y-4">
                                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                        {{ post.body }}
                                    </p>
                                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                        The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25 and is meant to ensure a common set of data rights in the European Union. It requires organizations to notify users as soon as possible of high-risk data breaches that could personally affect them.
                                    </p>
                                </div>
                                <!-- Modal footer -->
                                <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                    <button data-modal-hide="static-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
                                    <button data-modal-hide="static-modal" type="button" class="ms-3 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>











            </div>
        </div>
    </div>


    <!-- <div id="modalShow" class="modalShow relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
          Background backdrop, show/hide based on modal state.

          Entering: "ease-out duration-300"
            From: "opacity-0"
            To: "opacity-100"
          Leaving: "ease-in duration-200"
            From: "opacity-100"
            To: "opacity-0"
        <div class=" fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

        <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
          <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
              Modal panel, show/hide based on modal state.

              Entering: "ease-out duration-300"
                From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                To: "opacity-100 translate-y-0 sm:scale-100"
              Leaving: "ease-in duration-200"
                From: "opacity-100 translate-y-0 sm:scale-100"
                To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
              <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                <div class="sm:flex sm:items-start">
                  <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                    <svg class="h-6 w-6 text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                    </svg>
                  </div>
                  <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                    <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">Deactivate account</h3>
                    <div class="mt-2">
                      <p class="text-sm text-gray-500">Are you sure you want to deactivate your account? All of your data will be permanently removed. This action cannot be undone.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                <button type="button" @click="modalHidden()" class="inline-flex w-full justify-center rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 sm:ml-3 sm:w-auto">Deactivate</button>
                <button type="button" class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">Cancel</button>
              </div>
            </div>
          </div>
        </div>
      </div> -->
</template>

<script setup>

import {onMounted, ref} from 'vue'
import { useRouter } from 'vue-router';

let router = useRouter();

let open = ref(false)

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

let modal = document.getElementById("modalShow");
// const modalShow = (id) => {
//     console.log(modal);
//     modal.classList.remove("hidden")
// }
// const modalHidden = () => {
//     modal.classList.add("hidden")
// }

</script>

<style scoped>

</style>
