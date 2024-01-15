<template>
    <div class="conatainer w-[1903px] bg-gray-100 h-screen flex justify-center items-center">
        <div class="form bg-white shadow-md w-[450px] h-[550px] flex flex-col justify-center items-center gap-[100px]">
                <div class="form_title flex justify-center">
                    <p class=" text-[36px]" >Авторизация</p>
                </div>
                <div class="form_body flex flex-col items-center gap-y-[35px]">
                    <input type="text" class=" rounded-md pl-3 text-xl border-gray-400 focus:border-black h-[35px] w-[215px] border outline-none" placeholder="Логин">
                    <input type="text" class=" rounded-md outline-none w-[215px] pl-3 text-xl border-gray-400 focus:border-black h-[35px] border" placeholder="Пароль">
                </div>
                <div class="form_footer">
                    <button class="text-xl hover:border-black border duration-[0.5s] hover:text-black hover:bg-white bg-black  text-white px-[100px] rounded-md py-3">Войти</button>
                    <a href="" class="block text-blue-400">У вас нет аккаунта?</a>
                </div>

        </div>
    </div>

</template>

<script setup>
import { ref } from 'vue'
import { useRouter } from 'vue-router';
const router = useRouter();
const register = () => {
    router.push('signUp');
}
    let form = ref({
        email: ''
    })
    const send = () => {
        console.log(form.value.email);

    }
</script>

<style lang="scss" scoped>

</style>
