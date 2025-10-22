import defaultTheme from 'tailwindcss/defaultTheme'
import forms from '@tailwindcss/forms'

export default {
  content: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Figtree', ...defaultTheme.fontFamily.sans],
      },
      colors: {
        primary: '#0F172A',
        accent: '#38BDF8',
        secondary: '#FACC15',
        success: '#22C55E',
        danger: '#EF4444',
        fondo: '#F1F5F9',
        texto: '#1E293B',
      },
    },
  },
  plugins: [forms],
}
