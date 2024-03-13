( function() {
  $ = jQuery;

  function init(){
     gaspInit();
  }
  function gaspInit(){
    // gsap.registerPlugin(ScrollTrigger);
    const tl = gsap.timeline({
      ease: "none"
    });

    tl.add('start')
      .to(".logo_ex", {
        scale: 0.3,
        // duration: 1,
        transformOrigin: "top left",
      }, 'start')
      .to(".logo_pnd", {
        scale: 0.3,
        // duration: 1,
        transformOrigin: "top right",
      }, 'start')
    ScrollTrigger.create({
      trigger: "#scroll_trigger",
      start: "top",
      end: "bottom",
      // pin: true,
      animation: tl,
      scrub: 0.78,
      pinSpacing: false
    });
  }

  $(document).ready(function(){
    init();
  });

} )();
