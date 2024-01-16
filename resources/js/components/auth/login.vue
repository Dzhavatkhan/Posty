<template>
    <div class="conatainer w-[99vw] bg-gray-100 h-screen flex justify-center items-center">
        <div class="form bg-white shadow-md w-[450px] h-[550px] flex flex-col justify-center items-center gap-[75px]">
                <div class="form_title flex justify-center">
                    <p class=" text-[36px]" >Авторизация</p>
                </div>
                <div class="form_body flex flex-col items-center gap-y-[35px]">
                    <input v-model="form.login" type="text" class=" pl-3 text-xl border-gray-400 focus:border-black h-[35px] w-[256px] border-b outline-none" placeholder="Логин">
                    <img @click="hiddenPassword()" ref="hiddenPass" class="hidPas cursor-pointer w-5 absolute top-[488px] ml-[200px]" src="http://127.0.0.1:8000/image/free-icon-eye-159604.png" alt="">
                    <input v-model="form.password" type="password" class="pass w-[256px] outline-none  pl-3 text-xl border-gray-400 focus:border-black h-[35px] border-b"  placeholder="Пароль">
                </div>
                <div class="form_footer">
                    <button @click="send()" class="text-xl hover:border-black border duration-[0.5s] hover:text-black hover:bg-white bg-black  text-white px-[100px] rounded-md py-3">Войти</button>
                    <a @click="signUp()" class="block cursor-pointer mt-2 underline hover:text-blue-600 text-blue-400">У вас нет аккаунта?</a>
                </div>

        </div>
    </div>

</template>

<script setup>
import { ref } from 'vue'
import { useRouter } from 'vue-router';
const router = useRouter();
const signUp = () => {
    router.push('signUp');
}
    let form = ref({
        login: '',
        password: ''
    })
    const send = () => {
        console.log(form.value.login);

    }
    const hiddenPassword = () => {
       let password = document.querySelector(".pass");
       if (password.type == "password") {
            password.type = "text";

       }
       else{
        password.type = "password";
       }
    }
</script>

<style lang="scss" scoped>

</style>
