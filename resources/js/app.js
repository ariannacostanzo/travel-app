import './bootstrap';
import '../css/app.css';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';

import { library } from '@fortawesome/fontawesome-svg-core'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

// Importa le icone che vuoi usare

import { faHome, faUser, faXmark, faPlus, faTrashCan, faPencil, faAngleDown } from '@fortawesome/free-solid-svg-icons'
import { faTwitter, faFacebook, faInstagram, faYoutube } from '@fortawesome/free-brands-svg-icons'

// Aggiungi le icone alla libreria
library.add(faHome, faUser, faXmark, faPlus, faTrashCan, faPencil, faAngleDown)
library.add(faTwitter, faFacebook, faInstagram, faYoutube)


const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .component('font-awesome-icon', FontAwesomeIcon) // Registra il componente globale
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});
