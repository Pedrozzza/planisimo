<template>
    <div class="text-center flex flex-col justify-center">
        <h1 class="mb-4 z-50 text-xl sm:text-2xl md:text-3xl lg:text-3xl xl:text-3xl 2xl:text-5xl text-golden uppercase font-bold text-shadow-md leading-snug animate__animated animate__zoomInDown" style="line-height: 1.2">ŘEŠENÍ PLÁNOVÁNÍ VÝROBY a  siMULACE VÝROBNÍCH a LOGISTICKÝCH PROCESŮ</h1>
        <p class="mb-4 z-50 text-base sm:text-xl md:text-xl lg:text-2xl 2xl:text-3xl font-bold">Správně nastavené parametry výrobních procesů snižují firmě náklady až o desítky procent</p>
        <div class="mb-4 z-50">
            <JetNavLink :href="route('about')" class="ml-2 pulse text-xs md:text-base 2xl:text-xl inline-flex items-center border-3 border-goldenrod rounded-2xl text-gold font-bold uppercase tracking-widest shadow-sm focus:outline-none active:text-golden active:bg-golden-light disabled:opacity-25 transition" style="background-color: #000000; padding: 0.25rem 1rem">
                Zjistit Více
            </JetNavLink>
        </div>
    </div>
</template>

<script>
import JetNavLink from '@/Jetstream/NavLink.vue';
import JetButton from '@/Jetstream/Button.vue'
import { library } from "@fortawesome/fontawesome-svg-core";
import { faAngleDoubleRight } from "@fortawesome/free-solid-svg-icons";

library.add(faAngleDoubleRight);

export default {
    name: "MainSection",
    components: {
        JetButton,
        JetNavLink,
    }
}
</script>

<style scoped>
.pulse:hover {
    animation: pulse; /* referring directly to the animation's @keyframe declaration */
    animation-duration: 2s; /* don't forget to set a duration! */
}
</style>
