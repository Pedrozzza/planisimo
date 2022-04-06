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
                            <a href="https://www.plm.automation.siemens.com/global/en/products/manufacturing-planning/plant-simulation-throughput-optimization.html" target="_blank" class="mb-4 z-50 text-base sm:text-xl font-bold md:text-xl lg:text-2xl 2xl:text-3xl hover:opacity-50">
                                Plant Simulation
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/watch?v=luGX--JMBq8" target="_blank" class="mb-4 z-50 text-base sm:text-xl md:text-xl lg:text-2xl 2xl:text-3xl hover:opacity-50">
                                Simulace výroby skel
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/watch?v=zxTLqMg0SW8" target="_blank" class="mb-4 z-50 text-base sm:text-xl md:text-xl lg:text-2xl 2xl:text-3xl hover:opacity-50">
                                Odhalení úzkého místa v procesu
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
    list-style: none; /* Remove default bullets */
}

ul li::before {
    content: "\2022";  /* Add content: \2022 is the CSS Code/unicode for a bullet */
    color: goldenrod; /* Change the color */
    font-weight: bold; /* If you want it to be bold */
    display: inline-block; /* Needed to add space between the bullet and the text */
    width: 1em; /* Also needed for space (tweak if needed) */
    margin-left: -1em; /* Also needed for space (tweak if needed) */
}
</style>
