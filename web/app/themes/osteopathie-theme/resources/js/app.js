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

document.addEventListener('DOMContentLoaded', function () {
  let bgImg = document.querySelector('.bg-img');
  const imgBase = bgImg.getAttribute('src');

  const pairs = [
    {
      container: document.querySelector('.nourrisson-container'),
      circle: document.querySelector('.circle-bb'),
      detail: document.querySelector('.detail-bb'),
      img: document.querySelector('.img-nourrisson'),
    },
    {
      container: document.querySelector('.enceinte-container'),
      circle: document.querySelector('.circle-femme'),
      detail: document.querySelector('.detail-femme'),
      img: document.querySelector('.img-enceinte '),
    },
    {
      container: document.querySelector('.senior-container'),
      circle: document.querySelector('.circle-senior'),
      detail: document.querySelector('.detail-senior'),
      img: document.querySelector('.img-senior '),
    },
  ];

  pairs.forEach((element) => {
    element.circle.addEventListener('mouseenter', () => {
      element.container.classList.add('active');
      element.detail.classList.add('active');
      bgImg.setAttribute('src', element.img.getAttribute('src'));
    });
    element.circle.addEventListener('mouseleave', () => {
      element.container.classList.remove('active');
      element.detail.classList.remove('active');
      bgImg.setAttribute('src', imgBase);
    });
  });
});
