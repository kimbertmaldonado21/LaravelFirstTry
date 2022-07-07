// vite.config.js
import vue from '@vitejs/plugin-vue'

export default {
  plugins: [vue([
    'resources/css/app.css',
    'resources/js/app.js',
  ])]
}