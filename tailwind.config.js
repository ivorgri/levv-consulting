/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./automad-master/packages/levv/levv_theme/**/*.{php,html,js}"],
  theme: {
    extend: {
      fontFamily: {
        'quicksand-light': ['quicksand-light'],
        'quicksand': ['quicksand'],
        'quicksand-semibold': ['quicksand-semibold'],
        'quicksand-bold': ['quicksand-bold'],
        'passageway-light': ['passageway-light','sans-serif'],
        'passageway-bold': ['passageway-bold','sans-serif']
      },
      colors: {
        'levv-turqouise': '#00889A',
        'levv-korenblauw': '#004E91',
        'levv-dieppaars': '#472553',
        'levv-wijnrood': '#880A3C',
        'levv-heide': '#755F68',
        'levv-klei': '#CAC6C2',
        // 'levv-klei-background': '#CAC6C240', //Added Alpha value of 25%
        'levv-klei-background': '#f1f0ef',
        'levv-dieppaars-about-us': '#472553BF', //Added Alpha value of 75%
        'levv-korenblauw-about-us': '#004E91BF', //Added Alpha value of 75%
        'levv-wijnrood-homepage-card': '#880A3CE6', //Added Alpha value of 75%
      },
      gridTemplateColumns: {
        // 'levv-assignment-block': '25px 25px auto auto 25px 25px auto 25px',
        'levv-assignment-block': '25px auto 25px auto 1fr 25px',
        'levv-assignment-header': '25px auto 25px',
        'levv-assignment-body': '25px auto 25px'
      },
      gridTemplateRows: {
        'levv-about-us': 'min-content 7rem 2.5rem min-content',
        'levv-about-us-md': 'min-content 7rem 2.5rem min-content',
        'levv-homepage-card': '50% 1fr min-content',
        // 'levv-assignment-block': '25px 25px auto 25px 25px auto 25px auto 25px',
        'levv-assignment-block': 'auto 25px auto 25px auto',
        'levv-assignment-header': '25px auto 25px',
        'levv-assignment-body': '45px auto auto 25px'
      },
      strokeWidth: {
        '3': '3px'
      },
      width: {
        'homepage-card': '350px',
        'homepage-card-md': '500px',
        'assignment-card': '300px',
        'assignment-card-md': '300px'
      },
      minWidth: {
        'assignment-card': '300px',
        'assignment-card-md': '300px'
      },
      maxWidth: {
        'homepage-card': '350px',
        'homepage-card-md': '500px',
        'assignment-card': '300px',
        'assignment-card-md': '300px'
      },
      scale: {
        '101': '1.01',
      },
      transitionDelay: {
        '125': '125ms',
      }
    }
  },
}
