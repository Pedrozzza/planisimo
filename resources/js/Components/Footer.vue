<template>
    <footer class="bg-footer">
        <div class="container-fluid mx-auto">
            <div class="text-center text-shadow-md text-xs 2xl:text-base p-2 font-bold flex flex-col lg:flex-row justify-around items-center" style="color: white">
                <div>© 2015 - {{new Date().getFullYear()}} <a class="font-bold hover:opacity-50" href="https://www.planisimo.cz">PLANISIMO, s.r.o.</a>
                </div>
                <div class="my-2 lg:my-0">
                    <a class="text-goldenrod shadow-xl" href="tel:+420776150957">
                        <font-awesome-icon :icon="['fas', 'phone-square']" size="lg" class="text-sm md:text-xl xl:text-xl 2xl:text-2xl"/>
                        <span class="ml-2 hover:opacity-50" style="color: white">+420 776 150 957</span>
                    </a>
                    <a class="text-goldenrod ml-4 shadow-xl" href="mailto:info@planisimo.cz">
                        <font-awesome-icon :icon="['fas', 'envelope']" size="lg" class="text-sm md:text-xl xl:text-xl 2xl:text-2xl"/>
                        <span class="ml-2 hover:opacity-50" style="color: white">info@planisimo.cz</span>
                    </a>
                </div>
                <div class="" style="color: white">
                    Realizace:
                    <a class="font-bold hover:opacity-50" href="#">webstudio-pedro.cz</a>
                </div>
            </div>
        </div>
    </footer>
</template>

<script>
import { library } from "@fortawesome/fontawesome-svg-core";
import {
    faInstagram,
    faFacebook,
} from "@fortawesome/free-brands-svg-icons";
import { faEnvelope, faPhoneSquare  } from "@fortawesome/free-solid-svg-icons";

library.add(faInstagram, faFacebook, faEnvelope, faPhoneSquare);

export default {
    name: "Footer"
}
</script>

<style scoped>

</style>
