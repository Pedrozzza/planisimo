<template>
    <div>
        <Head :title="title" />

        <div class="flex flex-col h-screen justify-between">
            <navbar></navbar>
            <main class="flex-grow main">
                <slot></slot>
            </main>
            <Footer></Footer>
        </div>

    </div>
</template>

<script>
import { Head, Link } from '@inertiajs/inertia-vue3';
import Navbar from "../Components/Navbar";
import Footer from "../Components/Footer";

export default {
    name: "WelcomeLayout",
    components: {
        Footer,
        Navbar,
        Head,
        Link
    },
    props: {
        title: String
    }
}
</script>

<style scoped>
.main {
    position: relative;
}

.main::before {
    content: "";
    background-image: url("../../images/background.jpg");
    background-size: cover;
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    opacity: 0.05;
    z-index: -1;
}
</style>
