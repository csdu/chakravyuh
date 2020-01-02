module.exports = {
  theme: {
    extend: {
      colors: {
        'primary' : '#ffdc34'
      },
      inset: {
        '-4': '-1.5rem',
        '-8': '-3rem'
      }
    }
  },
  variants: {
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
}
