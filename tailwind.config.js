const colors = require('tailwindcss/colors')

module.exports = {
  purge: false,
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      padding: {
        '1/2': '50%',
        'full': '100%'
      },
      margin: {
        '1/2': '50%',
        'full': '100%'
      },
      screens: {
        sm: '640px',
        md: '768px',
        lg: '1024px',
        xl: '1280px',
        '2xl': '1536px',
      },
      colors: {
        transparent: 'transparent',
        black: {
          DEFAULT: '#222222',
        },
        white: {
          DEFAULT: '#ffffff',
        },
        red: {
          300: '#7B5762',
          400: '#6E4854',
          500: '#41202B'
        },
        gray: {
          300: '#EFEAEC',
          400: '#F1F2F2',
          500: '#F0ECE9',
        },
        pink: {
          400: '#E2B5B3'
        }
      },
      spacing: {
        22: '5.5rem',
        '2/3': '66.666667%',
        'full': '100%',
        'banner': '85vh',
        'screen': '100vh'
      },
      fontFamily: {
        action: [
          'action',
          'ui-sans-serif',
          'system-ui',
          '-apple-system',
          'BlinkMacSystemFont',
          '"Segoe UI"',
          'Roboto',
          '"Helvetica Neue"',
          'Arial',
          '"Noto Sans"',
          'sans-serif',
          '"Apple Color Emoji"',
          '"Segoe UI Emoji"',
          '"Segoe UI Symbol"',
          '"Noto Color Emoji"',
        ],
        minion: [
          'minion-pro-display',
          'ui-serif',
          'system-ui',
          '-apple-system',
          'BlinkMacSystemFont',
          '"Segoe UI"',
          'Roboto',
          '"Helvetica Neue"',
          'Arial',
          '"Noto Sans"',
          'serif',
          '"Apple Color Emoji"',
          '"Segoe UI Emoji"',
          '"Segoe UI Symbol"',
          '"Noto Color Emoji"',
        ],
        proxima: [
          'Proxima Nova',
          'ui-sans-serif',
          'system-ui',
          '-apple-system',
          'BlinkMacSystemFont',
          '"Segoe UI"',
          'Roboto',
          '"Helvetica Neue"',
          'Arial',
          '"Noto Sans"',
          'sans-serif',
          '"Apple Color Emoji"',
          '"Segoe UI Emoji"',
          '"Segoe UI Symbol"',
          '"Noto Color Emoji"',
        ],
      },
      fontSize: {
        base: '16px',
        3: '0.75rem',
        4: '1rem',
        5: '1.125rem',
        7: '1.7rem',
        6: '1.5rem',
        8: '2rem',
        10: '2.5rem',
        12: '3rem',
        14: '3.5rem',
        16: '4rem',
        20: '5rem',
        24: '6rem',
        28: '7rem',
        32: '8rem',
        36: '9rem',
        40: '10rem'
      },
      maxWidth: (theme, { breakpoints }) => ({
        '8xl': '92.5rem',
        ...breakpoints(theme('screens')),
      }),
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}