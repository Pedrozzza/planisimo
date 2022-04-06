<script setup>
defineProps({
    type: {
        type: String,
        default: 'button',
    },
});
</script>

<template>
    <button :type="type" class="pulse text-xs md:text-base 2xl:text-xl inline-flex items-center px-4 py-2 border-3 border-goldenrod rounded-2xl text-gold font-bold uppercase tracking-widest shadow-sm focus:outline-none active:text-golden active:bg-golden-light disabled:opacity-25 transition" style="background-color: #000000">
        <slot />
    </button>
</template>

<style scoped>
.pulse:hover {
    animation: pulse; /* referring directly to the animation's @keyframe declaration */
    animation-duration: 2s; /* don't forget to set a duration! */
}
</style>
