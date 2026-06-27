/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './*.php',
    './includes/*.php',
  ],
  theme: {
    extend: {
      colors: {
        'navy':         '#1F1F1F',
        'navy-light':   '#181818',
        'navy-mid':     '#242424',
        'navy-card':    '#2a2a2a',
        'power-red':    '#FC0D15',
        'power-red-dk': '#C70711',
        'power-red-lt': '#FD6064',
        'steel':        '#8A8A8A',
        'silver':       '#F2F2F2',
        'silver-lt':    '#f0f2f5',
      },
      fontFamily: {
        'heading': ['Barlow Condensed', 'Impact', 'Arial Narrow', 'sans-serif'],
        'body':    ['Inter', 'system-ui', 'sans-serif'],
      },
      minHeight: { '11': '2.75rem', '12': '3rem', '13': '3.25rem' },
      height:    { '11': '2.75rem', '12': '3rem', '13': '3.25rem', '18': '4.5rem' },
    },
  },
  plugins: [],
};
