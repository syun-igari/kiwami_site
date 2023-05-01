const targetElement = document.querySelectorAll('.animation-target');
const getSectionService = document.querySelector('.section-service');
const addService1 = document.querySelector('.service1');
const addService2 = document.querySelector('.service2');
console.log(targetElement);

document.addEventListener('scroll', function () { //スクロールイベントでスクロールするたびにアクションがおこる
  const getsericeDistancr = getSectionService.getBoundingClientRect().top + getSectionService.clientHeight * 0.6;
  if (window.innerHeight > getsericeDistancr) {
    getSectionService.style.backgroundColor = '#FFF';
    getSectionService.style.color = '#000';

  }

  for (let i = 0; i < targetElement.length; i++) {
    const getElementDistance = targetElement[i].getBoundingClientRect().top +  //要素と画面の上（ブラウザの画面端）との距離を取得
    targetElement[i].clientHeight * .6 //要素の高さ×0.6
    if (window.innerHeight > getElementDistance) {
      targetElement[i].classList.add('show');
      console.log(getElementDistance)
   }
  }
})
