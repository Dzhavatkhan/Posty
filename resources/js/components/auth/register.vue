<template>
    <div class="container mt-5">
        <h2>Регистрация</h2>
        <form class="form">
            <div class="mb-3 mt-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name" v-model="form.name" name="email">
            </div>
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" v-model="form.email" name="email">
            </div>
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email:</label>
                <input type="password" class="form-control" id="email" placeholder="Enter password" v-model="form.password" name="email">
            </div>
            <div class="mb-3 mt-3">
                <input class="btn btn-primary" type="submit" @click="send()" value="Отправить">
            </div>
        </form>
    </div>
</template>

<script setup>
import { ref } from "vue";

    let form = ref({
        name: '',
        email: '',
        password: ''
    })
    const send = () => {
        console.log(form.value.email, form.value.name, form.value.password);

    }
</script>

<style lang="scss" scoped>

</style>
