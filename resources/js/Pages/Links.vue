<template>
    <welcome-layout :title="'Odkazy'">
        <div class="container z-50 mx-auto h-full">
            <div class="py-8 px-8 lg:py-8 xl:py-16 2xl:py-24">
                <div class="">
                    <h1 class="mb-8 z-50 text-xl sm:text-2xl md:text-3xl lg:text-4xl xl:text-5xl text-golden uppercase font-bold text-shadow-md leading-snug" style="line-height: 1.2">
                        Odkazy
                    </h1>
                    <ul>
                        <li>
                            <a href="#" target="_blank" class="mb-4 z-50 text-base sm:text-xl md:text-xl lg:text-2xl 2xl:text-3xl underline hover:opacity-50">
                                modelová simulace výroby
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </welcome-layout>
</template>

<script>
import WelcomeLayout from "../Layouts/WelcomeLayout";

export default {
    name: "Links",
    components: {
        WelcomeLayout,
    }
}
</script>

<style scoped>
 ul {
     list-style: disc;
 }
</style>
