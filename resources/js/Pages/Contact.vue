<template>
    <welcome-layout :title="'Kontakty'">
        <div class="container z-50 mx-auto h-full">
            <div class="py-8 px-8 lg:py-8 xl:py-10 2xl:py-24">
                <div class="">
                    <h1 class="mb-8 z-50 text-xl sm:text-2xl md:text-3xl lg:text-4xl xl:text-5xl text-golden uppercase font-bold text-shadow-md leading-snug" style="line-height: 1.2">
                        Kontakty
                    </h1>
                    <hr/>
                    <div class="grid lg:grid-cols-2 lg:gap-8 mb-16">
                        <div>
                            <p class="my-4 lg:my-8 font-bold z-50 text-base sm:text-xl md:text-xl lg:text-2xl 2xl:text-3xl">
                                Kontaktní osoba:
                            </p>
                            <div>
                                <ul class="text-base md:text-xl mb-6">
                                    <li class="mb-4"><font-awesome-icon :icon="['fas', 'user']" size="lg" class="mr-4 text-goldenrod" style="width: 30px"/>Ing. Richard Kubiš</li>
                                    <li class="mb-4 hover:opacity-50"><a href="tel:+420776150957"><font-awesome-icon :icon="['fas', 'mobile-alt']" size="lg" class="mr-4 text-goldenrod" style="width: 30px"/>+420 776 150 957</a></li>
                                    <li class="mb-4 hover:opacity-50"><a href="mailto:info@planisimo.cz"><font-awesome-icon :icon="['fas', 'envelope']" size="lg" class="mr-4 text-goldenrod" style="width: 30px"/>info@planisimo.cz</a></li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <p class="my-4 lg:my-8 font-bold z-50 text-base sm:text-xl md:text-xl lg:text-2xl 2xl:text-3xl">
                                Fakturační údaje:
                            </p>
                            <div>
                                <ul class="text-base md:text-xl mb-6">
                                    <li class="mb-4">Obchodní firma: PLANISIMO, s.r.o.</li>
                                    <li class="mb-4">Sídlo: Příční 560, 664 82 Říčany</li>
                                    <li class="mb-4">IČO: 04545419</li>
                                    <li class="mb-4">DIČ: CZ04545419</li>
                                    <li class="mb-4">Zapsána v obchodním rejstříku vedeném Krajským soudem v Brně, oddíl C, vložka  90521/KSBR.</li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </welcome-layout>
</template>

<script>
import WelcomeLayout from "../Layouts/WelcomeLayout";
import { library } from "@fortawesome/fontawesome-svg-core";
import { faEnvelope, faMobileAlt, faMapMarkerAlt, faGlobe, faUser } from "@fortawesome/free-solid-svg-icons";

library.add(faEnvelope, faMobileAlt, faMapMarkerAlt, faGlobe, faUser);

export default {
    name: "Contact",
    components: {
        WelcomeLayout,
    }
}
</script>

<style scoped>

</style>
