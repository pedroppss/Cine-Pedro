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
        fond_black_2:'#020510B2',
        fond_inicio:'#1D1731',
        button_gray:'#FFFFFF4D',
        button_gray_2:'#FFFFFF1A',
        button_gray_3:'#FFFFFF66',
        fond_film:'#EBEBEB4D',
        button:'#8F8F8F66',
        
      },
      colors:{
        color_button:'#EEEEEE',
        color_button_2:'#CECECE',
        color_gray:'#9E9E9E',
        color_gray_2:'#D8D8D8'
      },
      fontFamily:{
        'poppins':['Poppins']
      },
      backgroundSize:{
        'personalized':'96rem'
      },
      height:{
        'personalized':'43rem',
        '87':'87px',
        '190':'190px',
        '265':'265px',
        '396':'396px',
        '466':'466px',
        '516':'516px',
        '620':'620px',
        '647':'647px',
        '684':'684.488px',
        
      },
      width:{
        '350':'350px',
        '415':'415px',
        '500':'500px',
        '590':'590px',
        '300':'300px',
        '653':'653px',
        '1000':'1395.871px',
        '1001':'1361px',
        '1361':'1361px',
        '1002':'1400.872px',
      },
      margin:{
        'personalized':'33rem',
        '151':'151px',
      }
    },
  },
  plugins: [],
}

