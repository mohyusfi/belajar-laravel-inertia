import "./bootstrap";
import "./../css/app.css";
import { createApp, h } from "vue";
import { createInertiaApp, Head, Link } from "@inertiajs/vue3";
import DefaultLayout from "./Layouts/DefaultLayout.vue";
import { ZiggyVue } from "ziggy-js";

createInertiaApp({
    title: (name) => `${name} MyApp`, // global title
    resolve: (name) => {
        const pages = import.meta.glob("./Pages/**/*.vue", { eager: true });
        const page = pages[`./Pages/${name}.vue`];
        page.default.layout = page.default.layout || DefaultLayout; // set default layout
        return page;
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .component("Head", Head) // global component
            .component("Link", Link) // global component
            .mount(el);
    },
    progress: {
        // The delay after which the progress bar will appear, in milliseconds...
        // delay: 250,

        // The color of the progress bar...
        color: "#29d",

        // Whether to include the default NProgress styles...
        includeCSS: true,

        // Whether the NProgress spinner will be shown...
        showSpinner: true,
    },
});
