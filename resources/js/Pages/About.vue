<template>
    <welcome-layout :title="'O společnosti'">
        <div class="container z-50 mx-auto h-full ">
            <div class="py-8 px-8 lg:py-12 lg:px-12 xl:py-24 2xl:py-32" style="background-color: #ffffff">
                <div class="">
                    <p class="mb-4 z-50 text-base sm:text-xl md:text-xl lg:text-xl lg:text-justify 2xl:text-2xl">
                        Společnost PLANISIMO, s.r.o. je zaměřená na řešení pokročilého plánování a rozvrhování výroby
                        a na digitální simulace různých výrobních či logistických procesů.
                    </p>
                    <p class="mb-4 z-50 text-base sm:text-xl md:text-xl lg:text-xl lg:text-justify 2xl:text-2xl">
                        Hlavním posláním je s pomocí softwarových nástrojů umožnit firmám získat větší přehled nad
                        výrobními a logistickými procesy za účelem efektivnějšího využití zdrojů. Koncept je navržen
                        tak, aby bylo řešení dostupné i menším firmám.
                    </p>
                    <p class="mb-4 z-50 text-base sm:text-xl md:text-xl lg:text-xl lg:text-justify 2xl:text-2xl">
                        Do každého výrobního, či logistického procesu vstupuje poměrně velké množství vlivů.
                        Od požadavků zákazníků, pro něž je potřeba zajistit vstupní materiál a výrobu jednotlivých položek,
                        až po kompletaci finálních výrobků. Rozvržení výroby tak, aby byly splněny požadavky
                        zákazníků a zároveň efektivně využity zdroje, bývá často poměrně problematické.
                    </p>
                    <p class="mb-8 z-50 text-base sm:text-xl md:text-xl lg:text-xl lg:text-justify 2xl:text-2xl">
                        Nástroj, který pomáhá tuto problematiku řešit, je digitální model výrobního a logistického
                        systému. S využitím takového modelu je možné si pomocí simulace otestovat jakým způsobem bude
                        při zadaných parametrech výrobní proces probíhat. Běžné využití je pak následující:
                    </p>
                    <ul class="pl-8 lg:pl-16 font-bold">
                        <li class="z-50 text-base sm:text-xl md:text-xl lg:text-xl 2xl:text-2xl">Ověřování nových zakázek</li>
                        <li class="z-50 text-base sm:text-xl md:text-xl lg:text-xl 2xl:text-2xl">Fronty práce na pracovištích</li>
                        <li class="z-50 text-base sm:text-xl md:text-xl lg:text-xl 2xl:text-2xl">Vhodná opatření v případě poruchy či odstávky stroje</li>
                        <li class="z-50 text-base sm:text-xl md:text-xl lg:text-xl 2xl:text-2xl">Řešení změn ve výrobě</li>
                        <li class="z-50 text-base sm:text-xl md:text-xl lg:text-xl 2xl:text-2xl">Sledování toku výrobků a materiálu</li>
                        <li class="z-50 text-base sm:text-xl md:text-xl lg:text-xl 2xl:text-2xl">Odhalení úzkých míst</li>
                        <li class="z-50 text-base sm:text-xl md:text-xl lg:text-xl 2xl:text-2xl">Předpokládaná vytíženost pracovišť</li>
                        <li class="z-50 text-base sm:text-xl md:text-xl lg:text-xl 2xl:text-2xl">Předpokládaná spotřeba materiálu</li>
                    </ul>
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
