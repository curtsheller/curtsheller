const plugin = require('tailwindcss/plugin')
const colors = require('tailwindcss/colors')
const defaultTheme = require('tailwindcss/defaultTheme')

// Install Tailwind CSS with Laravel
// https://tailwindcss.com/docs/guides/laravel
//
/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
          // https://laravel.com/docs/9.x/mix
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.{blade.php,vue,js}',
    ],
    safelist: [
        'bg-brand-icon',
        {
          pattern: /bg-(red|green|blue|yellow|orange|gray|grey)-(100|300|500|700|900)/,
        },
    ],
    theme: {
        colors: {
            // https://tailwindcss.com/docs/customizing-colors

            transparent: 'transparent',
            current: 'currentColor',

            white: colors.white,
            black: 'var(--brand-color-900)',

            'text': 'var(--brand-color-900)',
            'link': '#666',

            'brand': {
                light: "var(--brand-color-300)",
                DEFAULT: "var(--brand-color-500)",
                mid: "var(--brand-color-500)",
                dark: "var(--brand-color-700)",

                50: "var(--brand-color-50)",
                100: "var(--brand-color-100)",
                200: "var(--brand-color-200)",
                300: "var(--brand-color-300)",
                400: "var(--brand-color-400)",
                500: "var(--brand-color-500)",
                600: "var(--brand-color-600)",
                700: "var(--brand-color-700)",
                800: "var(--brand-color-800)",
                900: "var(--brand-color-900)",
            },

            'secondary': {
                light: "var(--secondary-color-300)",
                DEFAULT: "var(--secondary-color-500)",
                mid: "var(--secondary-color-500)",
                dark: "var(--secondary-color-700)",

                50: "var(--secondary-color-50)",
                100: "var(--secondary-color-100)",
                200: "var(--secondary-color-200)",
                300: "var(--secondary-color-300)",
                400: "var(--secondary-color-400)",
                500: "var(--secondary-color-500)",
                600: "var(--secondary-color-600)",
                700: "var(--secondary-color-700)",
                800: "var(--secondary-color-800)",
                900: "var(--secondary-color-900)",
            },

            // Site color aliases
            grey: colors.neutral,
            gray: colors.slate,
            red: colors.red,
            orange: colors.orange,
            green: colors.green,
            blue: colors.sky,
            yellow: colors.amber,

            // Membership Levels and Access
            //
            // Brandy-Punch
            'bronze': '#CD7F32',  'free': '#CD7F32', 'Free': '#CD7F32',
            'bronze': {
                DEFAULT: '#cd7f32',

                '50': '#fdf9f5',
                '100': '#faf2eb',
                '200': '#f3dfcc',
                '300': '#ebccad',
                '400': '#dca570',
                '500': '#cd7f32',
                '600': '#b9722d',
                '700': '#9a5f26',
                '800': '#7b4c1e',
                '900': '#643e19'
            },
            // Silver-Chalice
            'silver': '#abacae',
            'silver': {
                DEFAULT: '#abacae',

                '50': '#fbfbfb',
                '100': '#f7f7f7',
                '200': '#eaeaeb',
                '300': '#dddedf',
                '400': '#c4c5c6',
                '500': '#abacae',
                '600': '#9a9b9d',
                '700': '#808183',
                '800': '#676768',
                '900': '#545455'
            },
            // Hokey-Pokey
            'gold': '#d4af37', 'premium': '#d4af37', 'Premium': '#d4af37',
            'gold': {
                DEFAULT: '#d4af37',

                '50': '#fdfbf5',
                '100': '#fbf7eb',
                '200': '#f4ebcd',
                '300': '#eedfaf',
                '400': '#e1c773',
                '500': '#d4af37',
                '600': '#bf9e32',
                '700': '#9f8329',
                '800': '#7f6921',
                '900': '#68561b'
            },
            'forever': '#d4af37',
            'admin': '#ed8936',
            'tester': '#9b2c2c',
            'dealer': '#9b2c2c',
            'forever': '#276749',

            'info': '#4299e1',
            'instrument': '#ed8936',
            'student': '#4299e1',
            'subject': '#68d391',
        },
        fontFamily: {
            //  See if 'display' and ;condensed are needed from learningukulele.com
            //  and generally clean-up and tweak the fonts
            sans: 'Fira-Sans', ...defaultTheme.fontFamily.sans,
            serif: 'Roboto-Slab', ...defaultTheme.fontFamily.serif,
            mono: [
              'ui-monospace', 'SFMono-Regular', 'Menlo', 'Monaco', 'Consolas', '"Liberation Mono"', '"Courier New"', 'monospace',
            ],
            // Used for the sidebar
            heading: [
              'Hermes-Maia', 'Fira-Sans', 'Concourse',
            ],
            display: [
              'Hermes-Maia', 'Fira-Sans', 'Concourse',
            ],
            concourse: [
              'Concourse',
            ],
            inter: [
              'Inter',
            ],
            dingbats: [
              'Zapf-Dingbats',
            ],
            script: [
              'Special Elite', 'cursive',
        ],
        extend: {
          typography: (theme) => ({
            DEFAULT: {
              text: {
                xs: '0.75rem',
                // ...
              },
            },
          }),
        },
      },
    extend: {
        colors: {
            grey: {
                DEFAULT: '#78716c',
            },
            gray: {
                DEFAULT:'#64748b',
            },
            red: {
                DEFAULT: '#ef4444',
            },
            green: {
                DEFAULT: '#10b981',
            },
            blue: {
                DEFAULT: '#0ea5e9',
            },
            yellow: {
                DEFAULT: '#f59e0b',
            },
            orange: {
                DEFAULT: '#f97316',
            },
        },
        spacing: {
            '16': '4rem',
            '18': '4.5rem',
            '22': '5.5rem',
        },
        width: {
            '5-percent': '5%',
            '10-percent': '10%',
            '15-percent': '15%',
            '20-percent': '20%',
            '25-percent': '25%',
            '30-percent': '30%',
            '35-percent': '35%',
            '40-percent': '40%',
            '45-percent': '45%',
            '50-percent': '50%',
            '60-percent': '60%',
            '70-percent': '70%',
            '75-percent': '75%',
            '80-percent': '80%',
            '90-percent': '90%',
        },
        height: {
            '5-percent': '5%',
            '10-percent': '10%',
            '15-percent': '15%',
            '20-percent': '20%',
            '25-percent': '25%',
            '30-percent': '30%',
            '35-percent': '35%',
            '40-percent': '40%',
            '45-percent': '45%',
            '50-percent': '50%',
            '60-percent': '60%',
            '70-percent': '70%',
            '75-percent': '75%',
            '80-percent': '80%',
            '90-percent': '90%',
        },
        lineHeight: {
            'solid': 1,
        },
        letterSpacing: {
            'tightest': '-.075em',
            'huge': '.3em',
        },
        listStyleType: {
            square: 'square',
            roman: 'upper-roman',
        },
        gridTemplateColumns: {
          '18': 'repeat(18, minmax(0, 1fr))',
        },
        gridColumn: {
          'span-13': 'span 13 / span 13',
          'span-14': 'span 14 / span 14',
          'span-15': 'span 15 / span 15',
          'span-16': 'span 16 / span 16',
          'span-17': 'span 17 / span 17',
          'span-18': 'span 18 / span 18',
        },
        gridColumnStart: {
          '14': '14',
          '15': '15',
          '16': '17',
          '18': '18',
          '19': '19',
        },
        gridColumnEnd: {
          '14': '14',
          '15': '15',
          '16': '17',
          '18': '18',
          '19': '19',
        }
    },
  },
  plugins: [
    // https://tailwindcss.com/docs/plugins
    // Official Plugins
    //
    require('@tailwindcss/line-clamp'),
    require('@tailwindcss/aspect-ratio'),
    require('@tailwindcss/forms'),
    require('@tailwindcss/typography'),

    plugin(function({ addUtilities }) {
      addUtilities({
        '.scroll-smooth': {
          'scroll-behavior': 'smooth',
        },
        '.scroll-auto': {
          'scroll-behavior': 'auto',
        },
      })
    }),
  ]
}
