module.exports = {
  theme: {
    extend: {
      colors: {
        'primary' : '#ffdc34',
        'dark-brown': '#0e0101',
        'light-brown': '#543107',
      },
      inset: {
        '-4': '-1.5rem',
        '-8': '-3rem'
      }
    }
  },
  variants: {
<<<<<<< HEAD
    textColor: ['responsive', 'hover', 'focus', 'group-hover'],
    borderColor: ['responsive', 'hover', 'focus', 'group-hover'],
  },
  plugins: []
=======
    backgroundColor: ['responsive', 'hover', 'focus', 'first'],
    textColor: ['responsive', 'hover', 'focus', 'first'],
    fontWeight: ['responsive', 'hover', 'focus', 'first'],
    fontSize: ['responsive', 'first'],
    textAlign: ['responsive', 'first'],
    height: ['responsive', 'first'],
    inset: ['responsive', 'first'],
    position: ['responsive', 'first'],
    borderWidth: ['responsive', 'first'],
  },
  plugins: [
    function({ addUtilities }) {
      const newUtilities = {
        '.bg-grad-gold-orange': {
          background: `radial-gradient(circle, rgba(212, 175, 55, 1) 18%, rgba(195, 101, 34, 1) 90%)`,
        }
      }

      addUtilities(newUtilities, {
        variants: ['responsive', 'first']
      })
    }
  ]
>>>>>>> 0c98898c6bd9a5544a0806d8d80f04fdbeabe63e
}
