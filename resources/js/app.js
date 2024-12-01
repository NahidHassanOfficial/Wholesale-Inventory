import "./bootstrap";
import { createApp, h } from "vue";
import { createInertiaApp, Link } from "@inertiajs/vue3";
import { ZiggyVue } from "/vendor/tightenco/ziggy";
import MasterLayout from "./Pages/Backend/Layouts/Master.vue";

//import toast library
import Toast, { useToast } from "vue-toastification";
import "vue-toastification/dist/index.css";
window.toast = useToast(); //initialize toast globally

//import loader-animation
import loader from "@/js/loading-overlay";
window.loader = loader; //initialize loader globally

import VueApexCharts from "vue3-apexcharts";

createInertiaApp({
    resolve: (name) => {
        const pages = import.meta.glob("./Pages/**/*.vue", { eager: true });
        const page = pages[`./Pages/${name}.vue`];
        page.default.layout = page.default.layout || MasterLayout;
        return page;
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .use(Toast, {
                position: "bottom-right",
                timeout: 2500,
                closeOnClick: true,
                pauseOnFocusLoss: false,
                pauseOnHover: false,
                draggable: false,
                showCloseButtonOnHover: true,
                closeButton: "button",
                icon: true,
                rtl: false,
                transition: "Vue-Toastification__slideBlurred",
                maxToasts: 5,
                newestOnTop: true,
            })
            .component("Link", Link)
            .use(VueApexCharts)
            .mount(el);
    },
    progress: {
        color: "#009ed8",
    },
});
