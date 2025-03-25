import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
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
              hospitalBlue: "#0073E6",
              oldPaper: "#F5F5DC",
            },

            colors: {
              'turquoise': '#40E0D0',
              'sea-green': '#2E8B57',
          },
        },
    },

    plugins: [forms],
};

module.exports = {
    content: ["./resources/views/**/*.blade.php"],
    theme: {
      extend: {
        colors: {
          hospitalBlue: "#0073E6",
          oldPaper: "#F5F5DC",
        },
      },
    },
    plugins: [],
  }

//   module.exports = {
//     theme: {
//         extend: {
//             colors: {
//                 'turquoise': '#40E0D0',
//                 'sea-green': '#2E8B57',
//             },
//         },
//     },
//     plugins: [],
// }

  