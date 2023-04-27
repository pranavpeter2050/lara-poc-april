<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
</p>

## Installing Vue

After setting up a Laravel project as required, we need to pair it with Vue. Open a terminal inside your current Laravel project and run the below command to install Vue.

```bash
npm install vue@latest vue-loader@latest vue-router
```

By default, Laravel 10 should be installed with **Vite** as the bundler **Webpack**. If your project folder contains a **vite.config.js** file then it is using **Vite**. If you have a **webpack.mix.js** then it uses **Webpack**

### Setup Vue with Vite

- Inside your `resource/js/app.js` file, add the below code to import the necessary dependencies to setup a Vue.js application and mount it to a specified element on a HTML page.

```javascript
// Import the createApp function from the Vue library. This function is used to create a new Vue instance.
import { createApp } from 'vue';

// Imports the "main" Vue component of the application as "app".
import app from './layouts/main.vue'

// Creates a new Vue instance using the createApp function and mounts it to the #app element which will be defined in welcome.blade.php
createApp(app).mount("#app")
```

- Define the HTML element where the Vue app will be mounted as shown below. In this case, `resources/views/welcome.blade.php`.

```html
// welcome.blade.php
// Remove the existing code inside the <body> tag
...
<body class="antialiased">
    <div id="app"></div>

    @vite('resources/js/app.js')
</body>
```

- Created a folder called `layouts`. Inside this new folder, create a vue file, lets name this `main.vue`. Fill it with the following code.

```javascript
<template>
  <div>
    <h1>
      Hello, Entry point here!
    </h1>
  </div>
</template>
```

- Now, we'll need to `@vitejs/plugin-vue` npm package to enable Vite to handle Vue components (.vue files) by transforming them into JavaScript modules that can be loaded by the browser. Run below command to install it.

```bash
npm i @vitejs/plugin-vue
```

- Add the folling lines to `vite.config.js` to import the above plugin.

```javascript
// vite.config.js
import vue from '@vitejs/plugin-vue'

export default {
  plugins: [vue()],
}
```

- Now run `npm run dev` to start the Vite server / frontend and `php artisan serve` start the Laravel server / backend in separate terminal inside your project path.
- By default, Laravel starts at `port 8000` unless we define some other port in the `.env` file. Try opening the URL: <http://127.0.0.1:8000/>

#### References

- [Install Vue 3 In Laravel 9 With Vite | Laravel Vite With Vue 3 | Vite Laravel Vue 3 | #1 HINDI](https://www.youtube.com/watch?v=8_ptB59jcWM&t=2s), it's in Hindi, will update link to English version if it exists.
- [@vitejs/plugin-vue](https://www.npmjs.com/package/@vitejs/plugin-vue)

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## References

- [PHP Cheatsheet](https://overapi.com/php)
- [Laravel Documentation](https://laravel.com/docs)
- [Laravel Bootcamp](https://bootcamp.laravel.com)
- [Laracasts](https://laracasts.com)
- [Vue JS - Getting Started](https://vuejs.org/guide/quick-start.html)
