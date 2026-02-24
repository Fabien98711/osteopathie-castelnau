import.meta.glob(['../images/**', '../fonts/**']);
import gsap from 'gsap';
import ScrollTrigger from 'gsap/ScrollTrigger';
gsap.registerPlugin(ScrollTrigger);

const subTitle = document.querySelector('.hero-page-subtitle');
if (subTitle) {
  gsap.fromTo(
    subTitle,
    {
      y: 40,
      opacity: 0,
    },
    {
      y: 0,
      opacity: 1,
      duration: 1.5,
      ease: 'power3.out',
    },
    '+=0.6',
  );
}

const textPresentation = document.querySelector('.page1-presentation');
const presentationCTA = document.querySelector('.presentation-CTA');
if (textPresentation && presentationCTA) {
  const presentationBlock = gsap.timeline({
    scrollTrigger: {
      trigger: textPresentation,
      start: 'top 80%',
      toggleActions: 'play reverse play reverse',
    },
  });

  (presentationBlock
    .fromTo(
      textPresentation,
      {
        x: -40,
        opacity: 0,
      },
      {
        x: 0,
        opacity: 1,
        duration: 1.5,
        ease: 'power3.out',
      },
    )
    .fromTo(
      presentationCTA,
      {
        y: 40,
        opacity: 0,
      },
      {
        y: 0,
        opacity: 1,
        duration: 1.5,
        ease: 'power3.out',
      },
    ),
    '-=0.5');
}
