<template>
    <div class="container mt-5">
        <h2>Авторизация</h2>
        <form class="form">
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" v-model="form.email" name="email">
            </div>
            <div class="mb-3 mt-3">
                <input class="btn btn-primary" type="submit" @click="send()" value="Отправить">
            </div>
            <a href="" @click="register()">Sign Up</a>
        </form>
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
