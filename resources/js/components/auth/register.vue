<template>
    <div class="flex justify-center items-center bg-gray-100 w-screen h-screen">
        <div class=" form_wrapper w-[450px] h-[550px] bg-white shadow-md flex flex-col items-center py-5 gap-y-8">
            <div class="form_title flex justify-center items-center text-[36px] py-5">
                Регистрация
            </div>
            <div class="form_body flex flex-col items-center gap-10">
                <input type="text" v-model="form.name" class="w-[300px] h-10 border-gray-400 border-b focus:border-black outline-none pl-5" placeholder="Логин">
                <input type="text" v-model="form.email" class="w-[300px] h-10 border-gray-400 border-b focus:border-black outline-none pl-5" placeholder="Почта">
                <input type="text" v-model="form.password" class="w-[300px] h-10 border-gray-400 border-b focus:border-black outline-none pl-5" placeholder="Пароль">
                <input type="text" v-model="form.password_conf" class="w-[300px] h-10 border-gray-400 border-b focus:border-black outline-none pl-5" placeholder="Подтвердите пароль">
            </div>
            <div class=" form_footer flex flex-col items-center w-full h-18 gap-y-2">
                <button class="border cursor-pointer duration-[0.5s] h-10 bg-black text-white hover:border-black w-[300px] hover:bg-opacity-0 hover:text-black">Отправить</button>
                <a class="underline block w-50 cursor-pointer text-blue-400 hover:text-blue-600">У вас уже есть аккаунт?</a>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref } from "vue";

    let form = ref({
        name: '',
        email: '',
        password: '',
        password_conf: ''
    })
    const send = () => {
        console.log(form.value.email, form.value.name, form.value.password);

    }
</script>

