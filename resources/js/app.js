
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app'
});

const greetings = [
    'Hello',
    'Bonjour',
    'Hola',
    'Привет',
    'Здравствуйте',
    'Ciao',
    'Aloha',
];

const colors = {
    'blue': 'rgb(52,144,220)',
    'indigo': 'rgb(101,116,205)',
    'purple': 'rgb(149,97,226)',
    'pink': 'rgb(246,109,155)',
    'red': 'rgb(227,52,47)',
    'orange': 'rgb(246,153,63)',
    'yellow': 'rgb(255,237,74)',
    'green': 'rgb(56,193,114)',
    'teal': 'rgb(77,192,181)',
    'cyan': 'rgb(108,178,235) '
};

class MyApp
{
    static randomItem(arr) {
        return arr[Math.floor(Math.random()*arr.length)];
    }

    static randomColor() {
        const items = colors;
        const keys = Object.keys(colors);
        return items[MyApp.randomItem(keys)]
    }

    static randomGreeting() {
        const items = greetings;
        return MyApp.randomItem(items)
    }

}

window.myApp = MyApp;