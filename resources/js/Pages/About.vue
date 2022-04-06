<template>
    <welcome-layout :title="'O společnosti'">
        <div class="container z-50 mx-auto h-full ">
            <div class="py-8 px-8 lg:py-8 xl:py-16 2xl:py-24">
                <div class="">
                    <h1 class="mb-8 z-50 text-xl sm:text-2xl md:text-3xl lg:text-4xl xl:text-5xl text-golden uppercase font-bold text-shadow-md leading-snug" style="line-height: 1.2">
                        Vize a poslání PLANISIMO, s.r.o.
                    </h1>
                    <p class="mb-4 z-50 text-base sm:text-xl md:text-xl lg:text-2xl 2xl:text-3xl">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nulla accumsan, elit sit amet varius semper, nulla mauris mollis quam, tempor suscipit diam nulla vel leo. In convallis. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Nullam sit amet magna in magna gravida vehicula. Nulla est. Quisque tincidunt scelerisque libero. Mauris tincidunt sem sed arcu. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <p class="mb-4 z-50 text-base sm:text-xl md:text-xl lg:text-2xl 2xl:text-3xl">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nulla accumsan, elit sit amet varius semper, nulla mauris mollis quam, tempor suscipit diam nulla vel leo. In convallis. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Nullam sit amet magna in magna gravida vehicula. Nulla est. Quisque tincidunt scelerisque libero. Mauris tincidunt sem sed arcu. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>
            </div>
        </div>
    </welcome-layout>
</template>

<script>
import WelcomeLayout from "../Layouts/WelcomeLayout";

export default {
    name: "About",
    components: {
        WelcomeLayout,
    }
}
</script>

<style scoped>

</style>
