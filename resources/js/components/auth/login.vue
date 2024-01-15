<template>
    <div class="conatainer w-[1903px] bg-gray-100 h-screen flex justify-center items-center">
        <div class="form bg-white shadow-md w-[450px] h-[750px] flex flex-col justify-center items-center gap-[150px]">
                <div class="form_title flex justify-center">
                    <p class="p-5 text-[36px]" >Авторизация</p>
                </div>
                <div class="form_body flex flex-col items-center gap-y-[35px]">
                    <input type="text" class=" pl-3 text-xl border-gray-400 focus:border-black h-[35px] w-1/2 border outline-none" placeholder="Логин">
                    <input type="text" class="outline-none  pl-3 text-xl border-gray-400 focus:border-black h-[35px] w-1/2 border" placeholder="Пароль">
                </div>
                <div class="form_footer">
                    <button class="text-xl">Войти</button>
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
