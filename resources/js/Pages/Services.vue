<template>
    <welcome-layout :title="'Služby'">
        <div class="container z-50 mx-auto px-4 h-full flex flex-col lg:flex-row justify-center">
            <div class="py-0 lg:py-8 xl:py-16 2xl:py-32">
                <div class="grid md:grid-cols-4 my-4 md:my-0">
                    <button @click="showLeft = true" class="service-card rounded-lg p-4 shadow-xl">
                        <span>
                            <font-awesome-icon :icon="['fas', 'computer']" class="service-icon my-6 text-xl lg:text-4xl xl:text-4xl text-goldenrod"/>
                        </span>
                        <h2 class="mb-6 text-xl font-bold uppercase text-shadow-md">
                            Pokročilé plánování a rozvrhování výroby
                        </h2>
                    </button>
                    <button @click="showMiddle = true" class="service-card rounded-lg p-4 shadow-xl">
                        <span>
                            <font-awesome-icon :icon="['fas', 'digital-tachograph']" class="service-icon my-6 text-xl lg:text-4xl xl:text-4xl text-goldenrod"/>
                        </span>
                        <h2 class="mb-6 text-xl font-bold uppercase text-shadow-md">
                            Digitální simulace výrobních a logistických procesů
                        </h2>
                    </button>
                    <button @click="showRight = true" class="service-card rounded-lg p-4 shadow-xl">
                        <span>
                            <font-awesome-icon :icon="['fas', 'project-diagram']" class="service-icon my-6 text-xl lg:text-4xl xl:text-4xl text-goldenrod"/>
                        </span>
                        <h2 class="mb-6 text-xl font-bold uppercase text-shadow-md">
                            Projekty s využitím Siemens Tecnomatix Plant Simulation
                        </h2>
                    </button>
                    <button @click="showRight2 = true" class="service-card rounded-lg p-4 shadow-xl">
                        <span>
                            <font-awesome-icon :icon="['fas', 'chart-line']" class="service-icon my-6 text-xl lg:text-4xl xl:text-4xl text-goldenrod"/>
                        </span>
                        <h2 class="mb-6 text-xl font-bold uppercase text-shadow-md">
                            Analýza výrobních dat z hlediska plánování
                        </h2>
                    </button>
                </div>

                <Modal :show="showLeft">
                    <h2 class="mb-6 text-xl xl:text-3xl text-goldenrod font-bold uppercase text-shadow-md">
                        Pokročilé plánování a rozvrhování výroby
                    </h2>

                    <p class="mb-4 font-bold xl:text-2xl text-left">
                        Projekty pro implementaci pokročilého plánování zahrnují:
                    </p>
                    <ul class="pl-8 lg:pl-16 xl:text-xl">
                        <li>Dodání a přizpůsobení simulačního modelu pro konkrétní výrobu</li>
                        <li>Nastavení potřebných vstupních dat</li>
                        <li>Asistence při nastavení firemních procesů pro úspěšnou implementaci</li>
                        <li>Nastavení požadovaných výstupů</li>
                        <li>Úprava uživatelského prostředí podle požadavků zákazníka</li>
                        <li>Aplikace požadovaných optimalizačních algoritmů</li>
                        <li>Školení příslušných pracovníků</li>
                    </ul>

                    <secondary-button @click="showLeft = false" class="mt-8">Zavřít</secondary-button>
                </Modal>

                <Modal :show="showMiddle">
                    <h2 class="mb-6 text-xl xl:text-3xl text-goldenrod font-bold uppercase text-shadow-md">
                        Digitální simulace výrobních a logistických procesů
                    </h2>

                    <p class="mb-4 font-bold xl:text-2xl text-left">
                        Projekty pro simulaci výrobních a logistických procesů zahrnují:
                    </p>
                    <ul class="pl-8 lg:pl-16 xl:text-xl">
                        <li>Vytvoření simulačního modelu pro daný systém</li>
                        <li>Analýza systému</li>
                        <li>Optimalizace požadovaných parametrů</li>
                        <li>Návrhy pro zlepšení stávajícího systému</li>
                        <li>Testování různých variant</li>
                        <li>Možnost využít model k plánování výroby</li>
                    </ul>
                    <secondary-button @click="showMiddle = false" class="mt-8">Zavřít</secondary-button>
                </Modal>

                <Modal :show="showRight">
                    <h2 class="mb-6 text-xl xl:text-3xl text-goldenrod font-bold uppercase text-shadow-md">
                        Projekty s využitím Siemens Tecnomatix Plant Simulation
                    </h2>

                    <ul class="pl-8 lg:pl-16 xl:text-xl">
                        <li>Úprava již vytvořených modelů k požadovaným funkcím</li>
                        <li>Vytvoření nových modelů včetně specifických požadavků</li>
                        <li>Konzultace a poradenství</li>
                    </ul>
                    <secondary-button @click="showRight = false" class="mt-8">Zavřít</secondary-button>
                </Modal>

                <Modal :show="showRight2">
                    <h2 class="mb-6 text-xl xl:text-3xl text-goldenrod font-bold uppercase text-shadow-md">
                        Analýza výrobních dat z hlediska plánování
                    </h2>

                    <p class="xl:text-xl">
                        V případě potřeby lepšího nastavení firemních dat pro výrobu, je možné provést analýzu
                        současného stavu. Z té vyplyne, jaká data je potřeba doladit, popřípadě změnit formu
                        jejich evidence. Dále je možné použít různých nástrojů, které pomohou odhalit v datech
                        nežádoucí vlastnosti a poté je efektivněji správně nastavit.
                    </p>
                    <secondary-button @click="showRight2 = false" class="mt-8">Zavřít</secondary-button>
                </Modal>

                <div class="hidden lg:block services justify-center lg:flex">
                    <img src="../../images/services.jpg" class="z-50 w-full sm:w-3/5 md:w-full lg:w-1/2 xl:w-1/2 2xl:w-8/12" alt="Planisimo" />
                </div>
            </div>
        </div>
    </welcome-layout>
</template>

<script>
import Modal from "../Jetstream/Modal";
import SecondaryButton from "../Jetstream/SecondaryButton";
import WelcomeLayout from "../Layouts/WelcomeLayout";
import { library } from "@fortawesome/fontawesome-svg-core";
import { faComputer, faDigitalTachograph, faProjectDiagram, faChartLine} from "@fortawesome/free-solid-svg-icons";

library.add(faComputer, faDigitalTachograph, faProjectDiagram, faChartLine);

export default {
    name: "Services",
    components: {
        WelcomeLayout,
        Modal,
        SecondaryButton,
    },
    data() {
        return {
            showLeft: false,
            showMiddle: false,
            showRight: false,
            showRight2: false,
        }
    },
}
</script>

<style scoped>
.services {
    z-index: 100;
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translate(-50%);
}

.service-card {
    z-index: 998;
    background-color: #fff;
    border: 1px solid #8080805e;
    text-align: center;
}

.service-card:hover {
    z-index: 999;
    background-color: #f3d613;
    transform: scale(1.1);
    transition: transform 0.5s ease-in-out;
}

.service-card:hover .service-icon {
    color: white;
}

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
