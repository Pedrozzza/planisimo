<template>
    <welcome-layout :title="'Služby'">
        <div class="container z-50 mx-auto px-4 h-full flex flex-col lg:flex-row justify-center">
            <div class="py-0 lg:py-8 xl:py-16 2xl:py-32">
                <div class="grid md:grid-cols-3 my-4 md:my-0">
                    <button @click="showLeft = true" class="service-card rounded-lg p-4 shadow-xl">
                        <span>
                            <font-awesome-icon :icon="['fas', 'business-time']" class="service-icon my-6 text-xl lg:text-4xl xl:text-4xl text-goldenrod shadow-xl"/>
                        </span>
                        <h2 class="mb-6 text-xl font-bold uppercase text-shadow-md">
                            INTERNET FOR HOME OFFICE
                        </h2>
                        <p class="text-shadow-md">Create a uniform standard for the home office for your employees</p>
                    </button>
                    <button @click="showMiddle = true" class="service-card rounded-lg p-4 shadow-xl">
                        <span>
                            <font-awesome-icon :icon="['fas', 'business-time']" class="service-icon my-6 text-xl lg:text-4xl xl:text-4xl text-goldenrod shadow-xl"/>
                        </span>
                        <h2 class="mb-6 text-xl font-bold uppercase text-shadow-md">
                            INTERNET FOR HOME OFFICE
                        </h2>
                        <p class="text-shadow-md">Create a uniform standard for the home office for your employees</p>
                    </button>
                    <button @click="showRight = true" class="service-card rounded-lg p-4 shadow-xl">
                        <span>
                            <font-awesome-icon :icon="['fas', 'business-time']" class="service-icon my-6 text-xl lg:text-4xl xl:text-4xl text-goldenrod shadow-xl"/>
                        </span>
                        <h2 class="mb-6 text-xl font-bold uppercase text-shadow-md">
                            INTERNET FOR HOME OFFICE
                        </h2>
                        <p class="text-shadow-md">Create a uniform standard for the home office for your employees</p>
                    </button>
                </div>

                <Modal :show="showLeft">
                    <h2 class="mb-6 text-xl text-goldenrod font-bold uppercase text-shadow-md">
                        INTERNET FOR HOME OFFICE
                    </h2>

                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nulla accumsan, elit sit amet varius semper
                        , nulla mauris mollis quam, tempor suscipit diam nulla vel leo. In convallis. Excepteur sint occaecat cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Nullam sit amet magna in
                        magna gravida vehicula. Nulla est. Quisque tincidunt scelerisque libero. Mauris tincidunt sem sed arcu.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Vestibulum erat nulla, ullamcorper nec, rutrum non, nonummy ac, erat. Integer rutrum, orci vestibulum
                        ullamcorper ultricies, lacus quam ultricies odio, vitae placerat pede sem sit amet enim. Maecenas lorem.
                        Pellentesque pretium lectus id turpis. Aliquam erat volutpat. Integer rutrum, orci vestibulum
                        ullamcorper ultricies, lacus quam ultricies odio, vitae placerat pede sem sit amet enim.
                        Integer in sapien. In laoreet, magna id viverra tincidunt, sem odio bibendum justo,
                        vel imperdiet sapien wisi sed libero. Nullam faucibus mi quis velit. Praesent in mauris
                        eu tortor porttitor accumsan. Maecenas aliquet accumsan leo.
                    </p>
                    <secondary-button @click="showLeft = false" class="mt-8">Zavřít</secondary-button>
                </Modal>

                <Modal :show="showMiddle">
                    <h2 class="mb-6 text-xl text-goldenrod font-bold uppercase text-shadow-md">
                        INTERNET FOR HOME OFFICE
                    </h2>

                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nulla accumsan, elit sit amet varius semper
                        , nulla mauris mollis quam, tempor suscipit diam nulla vel leo. In convallis. Excepteur sint occaecat cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Nullam sit amet magna in
                        magna gravida vehicula. Nulla est. Quisque tincidunt scelerisque libero. Mauris tincidunt sem sed arcu.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Vestibulum erat nulla, ullamcorper nec, rutrum non, nonummy ac, erat. Integer rutrum, orci vestibulum
                        ullamcorper ultricies, lacus quam ultricies odio, vitae placerat pede sem sit amet enim. Maecenas lorem.
                        Pellentesque pretium lectus id turpis. Aliquam erat volutpat. Integer rutrum, orci vestibulum
                        ullamcorper ultricies, lacus quam ultricies odio, vitae placerat pede sem sit amet enim.
                        Integer in sapien. In laoreet, magna id viverra tincidunt, sem odio bibendum justo,
                        vel imperdiet sapien wisi sed libero. Nullam faucibus mi quis velit. Praesent in mauris
                        eu tortor porttitor accumsan. Maecenas aliquet accumsan leo.
                    </p>
                    <secondary-button @click="showMiddle = false" class="mt-8">Zavřít</secondary-button>
                </Modal>

                <Modal :show="showRight">
                    <h2 class="mb-6 text-xl text-goldenrod font-bold uppercase text-shadow-md">
                        INTERNET FOR HOME OFFICE
                    </h2>

                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nulla accumsan, elit sit amet varius semper
                        , nulla mauris mollis quam, tempor suscipit diam nulla vel leo. In convallis. Excepteur sint occaecat cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Nullam sit amet magna in
                        magna gravida vehicula. Nulla est. Quisque tincidunt scelerisque libero. Mauris tincidunt sem sed arcu.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Vestibulum erat nulla, ullamcorper nec, rutrum non, nonummy ac, erat. Integer rutrum, orci vestibulum
                        ullamcorper ultricies, lacus quam ultricies odio, vitae placerat pede sem sit amet enim. Maecenas lorem.
                        Pellentesque pretium lectus id turpis. Aliquam erat volutpat. Integer rutrum, orci vestibulum
                        ullamcorper ultricies, lacus quam ultricies odio, vitae placerat pede sem sit amet enim.
                        Integer in sapien. In laoreet, magna id viverra tincidunt, sem odio bibendum justo,
                        vel imperdiet sapien wisi sed libero. Nullam faucibus mi quis velit. Praesent in mauris
                        eu tortor porttitor accumsan. Maecenas aliquet accumsan leo.
                    </p>
                    <secondary-button @click="showRight = false" class="mt-8">Zavřít</secondary-button>
                </Modal>

                <div class="hidden lg:block services justify-center lg:flex">
                    <img src="../../images/services.jpg" class="z-50 w-full sm:w-3/5 md:w-full lg:w-5/6 xl:w-7/12 2xl:w-11/12" alt="Planisimo" />
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
import { faBusinessTime,  } from "@fortawesome/free-solid-svg-icons";

library.add(faBusinessTime);

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

</style>
