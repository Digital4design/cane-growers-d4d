/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{html,twig,php}"],
  theme: {
    extend: {
      zIndex: {
        'down': '-1',
      },
      margin: {
        'initial': 'initial',
      },
      rotate: {
        '270': '270deg',
      },
      screens: {
        'sm': '640px',
        'md': '768px',
        'lg': '1024px',
        'xl': '1200px',
        '2xl': '1280px',
        '3xl': '1380px',
        '4xl': '1440px',
      },
      minHeight:{
        '1/2':'50%',
      },
      backgroundImage: {
        'component-overlay': 'linear-gradient(90deg, rgba(0, 0, 0, 0.50) 0%, rgba(0, 0, 0, 0.00) 100%), linear-gradient(0deg, rgba(0, 0, 0, 0.30) 0%, rgba(0, 0, 0, 0.30) 100%)',
        'banner-overlay': 'linear-gradient(0deg, rgba(30, 30, 30, 0.80) 0%, rgba(30, 30, 30, 0.80) 100%)',
        'membership-overlay':'linear-gradient(180deg, rgba(0, 0, 0, 0.00) 0%, rgba(0, 0, 0, 0.90) 100%, rgba(0, 0, 0, 0.60) 0%, rgba(0, 0, 0, 0.60) 100%)',
        'cane-banner-overlay':'linear-gradient(0deg, rgba(0, 0, 0, 0.50) 0%, rgba(0, 0, 0, 0.50) 100%)',
        'gallery-overlay':' linear-gradient(0deg, rgba(0, 0, 0, 0.30) 0%, rgba(0, 0, 0, 0.30) 100%)',
      },
      boxShadow: {
        'caneBanner': '0px 10px 10px -5px rgba(0, 0, 0, 0.04), 0px 20px 25px -5px rgba(0, 0, 0, 0.10)',
        'dropdown':'0px 1px 2px 0px rgba(0, 0, 0, 0.06), 0px 1px 3px 0px rgba(0, 0, 0, 0.10)',
        'gallery':'0px 2px 4px -1px rgba(0, 0, 0, 0.06), 0px 4px 6px -1px rgba(0, 0, 0, 0.10)',
        'drpodownMenu':'0px 10px 10px -5px rgba(0, 0, 0, 0.04), 0px 20px 25px -5px rgba(0, 0, 0, 0.10)'
      },
      transitionProperty: {
        'top': 'top',
      },
      lineHeight: {
        '44': '2.75rem',
        '60': '3.75rem',
        '72': '4.5rem',
        '88': '5.5rem',
      },
      height: {
        '50': '50rem',
        '400':'400px',
      },
      colors: {
        'green':'#5E9732',
        'light-green':'#ABBD26',
        'mid-green':'#5E9732',
        'dark-green':'#384B00',
        'blue':'#035374',
        'black-ish':'#1e1e1e',
        'wireframe-dark':'#2E4857',
        'light-black':'rgba(30,30,30,0.5)',
        'aplha-black-16':'rgba(0,0,0,0.16)',
        'aplha-black-48':'rgba(0,0,0,0.48)',
        'aplha-black-64':'rgba(0,0,0,0.64)',
        'aplha-black-88':'rgba(0,0,0,0.88)',
        'alpha-white':'rgba(255,255,255,0.3)',
        'charcoal-grey': {
          '200':'#E4E8EE'
        },
        'dark-grey': {
          '500':'#323232'
        },      
        'off-white': {
          '50': '#e7e3d0',
          '100': '#F5F4EC',
          '300': '#CFC7A1',
          '400': '#BCB17C',
          '500': '#A99A56',
          '600': '#837843',
          '700': '#5E5630',
          '800': '#38331D',
          '900': '#13110A',
        },
      },
      fontFamily: {
        'sans': ['"General Sans"', 'sans-serif'],
        'serif': ['Sentient', 'serif'],
      },
    },
  },
  plugins: [],
}

