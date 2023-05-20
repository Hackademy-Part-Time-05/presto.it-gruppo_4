import './bootstrap';
import Cookies from 'js-cookie';

function changeNavbar(event) {
    const mainNavbar = document.querySelector("#mainNavbar");
    if (window.scrollY > 100) {
      mainNavbar.classList.add("thin");
      mainNavbar.classList.add("bg-white");
    } else {
      mainNavbar.classList.remove("thin");
      mainNavbar.classList.remove("bg-white");
    }
  }
  // function toggleColors(target,classToRemove,classToAdd)
  // {
  //   target.forEach(function(element)
  //   {
  //       element.classList.remove(classToRemove);
  //       element.classList.add(classToAdd);
  //   });
  // }

  //   var toggleCounter = 0
  //   let toggleSkin = document.getElementById('skinButton');
  //   toggleSkin.addEventListener('click',function()
  //     {
  //       toggleCounter++
  //       console.log(toggleCounter);
  //       let targetGreen = Array.from(document.getElementsByClassName('bg-green'));
  //       let targetBlue = Array.from(document.getElementsByClassName('bg-blue'));
  //       let targetGradient0 = Array.from(document.getElementsByClassName('gradient0'))
  //       let targetGradient1 = Array.from(document.getElementsByClassName('gradient1'))

  //       let targetPink = Array.from(document.getElementsByClassName('bg-pink'));
  //       let targetLightblue = Array.from(document.getElementsByClassName('bg-lightblue'));
  //       let targetGradient2 = Array.from(document.getElementsByClassName('gradient2'));
  //       let targetGradient3 = Array.from(document.getElementsByClassName('gradient3'));

  //       if (toggleCounter%2 == 1)
  //       {
  //           toggleColors(targetGreen,'bg-green','bg-pink');
  //           toggleColors(targetBlue,'bg-blue','bg-lightblue');
  //           toggleColors(targetGradient0,'gradient0','gradient2');
  //           toggleColors(targetGradient1,'gradient1','gradient3');
  //       }
  //       else
  //       {
  //           toggleColors(targetPink,'bg-pink','bg-green');
  //           toggleColors(targetLightblue,'bg-lightblue','bg-blue');
  //           toggleColors(targetGradient2,'gradient2','gradient0');
  //           toggleColors(targetGradient3,'gradient3','gradient1');
  //       }
    
  //     });

