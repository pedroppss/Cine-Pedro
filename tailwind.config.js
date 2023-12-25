/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './*.{html,php}',
    './app/views/*.{html,php}',
    './app/js/*.{html,js}'
  ],
  theme: {
    extend: {
      backgroundColor:{
        fond_black:'#020510',
        fond_transp:'#FFFFFF33',
        fond_black_2:'#020510B2'
        
      },
      fontFamily:{
        'poppins':['Poppins']
      },
      backgroundSize:{
        'personalized':'96rem'
      },
      height:{
        'personalized':'43rem',
        '516':'516px',
        '620':'620px'

      },
      width:{
        '500':'500px',
        '300':'300px'
      },
      margin:{
        'personalized':'33rem'
      }
    },
  },
  plugins: [],
}

