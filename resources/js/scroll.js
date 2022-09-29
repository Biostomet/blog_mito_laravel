var slideL = {
  distance: '150%',
  origin: 'left',
  opacity: null,
  delay: 1000,
};
var slideR = {
  distance: '150%',
  origin: 'right',
  opacity: null
};
var slideB = {
  distance: '150%',
  origin: 'bottom',
  opacity: null,
  scale: .1,
  duration: 2000,
  delay: 500,
  rotate: {
    x: 800,
    z: 200
}
};

ScrollReveal().reveal('#logo', slideL);
ScrollReveal().reveal('#container_card', slideB);
ScrollReveal().reveal('#navitem', slideR);
