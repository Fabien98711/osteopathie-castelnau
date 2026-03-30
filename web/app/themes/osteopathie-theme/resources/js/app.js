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

const circleTab = [
  {
    container: document.querySelector('.enceinte-container'),
    icone: document.querySelector('.icone-enceinte'),
  },
  {
    container: document.querySelector('.bébé-container'),
    icone: document.querySelector('.icone-bébé '),
  },
  {
    container: document.querySelector('.senior-container'),
    icone: document.querySelector('.icone-senior'),
  },
  {
    container: document.querySelector('.sport-container'),
    icone: document.querySelector('.icone-sport'),
  },
  {
    container: document.querySelector('.enfant-container'),
    icone: document.querySelector('.icone-enfant'),
  },
];

circleTab.forEach((element) => {
  element.icone.addEventListener('mouseenter', () => {
    element.container.classList.add('active');
    console.log("c'est bon");
  });
  element.icone.addEventListener('mouseleave', () => {
    element.container.classList.remove('active');
  });
});

const cadreMap = document.querySelector('.cadre-map');
const imgMap = document.querySelector('.img-map');
const cadreInfo = document.querySelector('.cadre-info');

if (imgMap && cadreMap && cadreInfo) {
  const localisationBlock = gsap.timeline({
    scrollTrigger: {
      trigger: cadreMap,
      start: 'top 80%',
      toggleActions: 'play reverse play reverse',
    },
  });

  localisationBlock
    .fromTo(
      cadreMap,
      {
        y: -40,
        opacity: 0,
      },
      {
        y: 0,
        opacity: 1,
        duration: 1.2,
        ease: 'power3.out',
      },
    )
    .fromTo(
      imgMap,
      {
        x: -40,
        opacity: 0,
      },
      {
        x: 0,
        opacity: 1,
        duration: 1,
        ease: 'power3.out',
      },
    )
    .fromTo(
      cadreInfo,
      {
        x: 40,
        opacity: 0,
      },
      {
        x: 0,
        opacity: 1,
        duration: 0.8,
        ease: 'power3.out',
      },
    );
}
