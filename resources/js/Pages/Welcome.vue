<template>
    <welcome-layout :title="'Úvod'">
        <div class="container mx-auto px-4 h-full flex flex-col lg:flex-row justify-center">
            <div class="py-0 lg:py-8 xl:py-16 2xl:py-24 grid lg:grid-cols-2 gap-4">
                <div class="sm:justify-center sm:flex">
                    <img src="../../images/welcome-main.jpg" class="w-full z-50 sm:w-3/5 md:w-11/12 lg:w-full" alt="Planisimo" />
                </div>
                <main-section></main-section>
            </div>
        </div>
    </welcome-layout>
</template>

<script setup>
import MainSection from "../Components/MainSection";
import WelcomeLayout from "../Layouts/WelcomeLayout";

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});
</script>

<style scoped>

</style>
