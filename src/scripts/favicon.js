window.addEventListener('visibilitychange', () => {
  const { hidden } = document
  document.querySelector('[rel="shortcut icon"]').setAttribute(
    'href',
    (hidden) 
      ? 'src/assets/academic-cap-novisibility.svg'
      : 'src/assets/academic-cap.svg'
  )
})

