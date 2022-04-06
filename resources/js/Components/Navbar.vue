<template>
    <nav class="background-black border-gray-200 px-2 sm:px-4" style="z-index: 1111">
        <div class="container flex flex-wrap justify-between items-center mx-auto">
            <a href="/" class="flex items-center logo">
                <img src="../../images/planisimo-logo.png" class="h-8 sm:h-12" alt="Planisimo" />
            </a>
            <button @click="hideNavbar = !hideNavbar" data-collapse-toggle="mobile-menu" type="button" class="button-mobile z-10 inline-flex items-center p-1 m-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100" aria-controls="mobile-menu" aria-expanded="false">
                <span class="sr-only">Otevři menu</span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            </button>
            <div class="w-full md:block md:w-auto text-center" id="mobile-menu" :class="{ 'hidden': hideNavbar }" >
                <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:text-xl md:mt-0 md:font-medium">
                    <JetNavLink :href="route('welcome')" :active="route().current('welcome')">
                        Úvod
                    </JetNavLink>
                    <JetNavLink :href="route('about')" :active="route().current('about')">
                        O společnosti
                    </JetNavLink>
                    <JetNavLink :href="route('services')" :active="route().current('services')">
                        Služby
                    </JetNavLink>
                    <JetNavLink :href="route('links')" :active="route().current('links')">
                        Odkazy
                    </JetNavLink>
                    <JetNavLink :href="route('contact')" :active="route().current('contact')">
                        Kontakty
                    </JetNavLink>
                </ul>
            </div>
        </div>
    </nav>
</template>

<script>
import JetNavLink from '@/Jetstream/NavLink.vue';
import JetResponsiveNavLink from '@/Jetstream/ResponsiveNavLink.vue';

export default {
    name: "Navbar",
    components: {
        JetNavLink,
        JetResponsiveNavLink
    },
    data() {
        return {
            hideNavbar: true,
        }
    },

}
</script>

<style scoped>
a {
    background-image: linear-gradient(
        to right,
        #f3d613,
        #f3d613 50%,
        white 50%
    );
    background-size: 200% 100%;
    background-position: -100%;
    display: inline-block;
    padding: 5px 0;
    position: relative;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    transition: all 0.3s ease-in-out;
}

a:before {
    content: '';
    background: #FFD700;
    display: block;
    position: absolute;
    bottom: -3px;
    left: 0;
    width: 0;
    height: 3px;
    transition: all 0.3s ease-in-out;
}

a:hover {
    background-position: 0;
}

a:hover::before {
    width:100%;
}

.button-mobile {
    background-color: #FFD700;
}

.background-black {
    background-color: #000;
}

.logo:before {
    content: '';
    background: #FFD700;
    display: block;
    position: absolute;
    bottom: 83px;
    left: 0;
    width: 0;
    height: 3px;
    transition: all 0.3s ease-in-out;
}

.logo:hover {
    transform: scale(1.1);
}
</style>
