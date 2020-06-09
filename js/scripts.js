//////////////////////////////////////////
  // RWD FOR MOBILE PHONES
  //////////////////////////////////////////

  //Hamburger Full scrn menu 
  const open = document.querySelector('#open');
  const close = document.querySelector('#close');
  const menu = document.querySelector('#menu');
  const link1 = document.querySelector('#link1');
  const link2 = document.querySelector('#link2');

  // Open menu
  open.addEventListener('click', (el) => {
    menu.setAttribute('style', 'display: flex;');
  });

  // Close meneu
  close.addEventListener('click', (el) => {
    menu.setAttribute('style', 'display: none !important;');
  });

  // Close menu whene user click on link 
  link1.addEventListener('click', (el) => {
    menu.setAttribute('style', 'display: none !important;');
  });

  link2.addEventListener('click', (el) => {
    menu.setAttribute('style', 'display: none !important;');
  });


  //////////////////////////////////////////
  // RWD SHOW DROPDOWN AFTER CLICK ON HEADING
  //////////////////////////////////////////
  let openedSlubne = false;
  let openedDlafirm = false;
  let openedOkazjonalne = false;
  let openedWideo = false;

  ///////////////////////
  // 1. Slubne
  const slubne = document.querySelector('#slubne');
  const slubneDropdown = document.querySelector('#slubneDropdown');

  // Open dropdown & close SLUBNE
  slubne.addEventListener('click', (el) => {
    if (openedSlubne === false) {
      // Turn off rest dropdowns
      dlafirmDropdown.setAttribute('style', 'display: none;');
      okazjonalneDropdown.setAttribute('style', 'display: none;');
      wideoDropdown.setAttribute('style', 'display: none;');
      // Turn off states
      openedDlafirm = false;
      openedOkazjonalne = false;
      openedWideo = false;

      slubneDropdown.setAttribute('style', 'display: block;');
      openedSlubne = !openedSlubne; // change to "opened"
    } else {
      slubneDropdown.setAttribute('style', 'display: none;');
      openedSlubne = !openedSlubne; // change to "close
    }

  });
  ///////////////////////

  ///////////////////////
  // 2. Dla firm
  const dlafirm = document.querySelector('#dlafirm');
  const dlafirmDropdown = document.querySelector('#dlafirmDropdown');

  // Open dropdown & close SLUBNE
  dlafirm.addEventListener('click', (el) => {
    if (openedDlafirm === false) {
      // Turn off rest dropdowns
      slubneDropdown.setAttribute('style', 'display: none;');
      okazjonalneDropdown.setAttribute('style', 'display: none;');
      wideoDropdown.setAttribute('style', 'display: none;');

      // Turn off states
      openedSlubne = false;
      openedOkazjonalne = false;
      openedWideo = false;

      dlafirmDropdown.setAttribute('style', 'display: block;');
      openedDlafirm = !openedDlafirm; // change to "opened"

    } else {
      dlafirmDropdown.setAttribute('style', 'display: none;');
      openedDlafirm = !openedDlafirm; // change to "close
    }

  });
  ///////////////////////

  ///////////////////////
  // 3. Okazjonalne
  const okazjonalne = document.querySelector('#okazjonalne');
  const okazjonalneDropdown = document.querySelector('#okazjonalneDropdown');

  // Open dropdown & close SLUBNE
  okazjonalne.addEventListener('click', (el) => {
    if (openedOkazjonalne === false) {
      // Turn off rest dropdowns
      slubneDropdown.setAttribute('style', 'display: none;');
      dlafirmDropdown.setAttribute('style', 'display: none;');
      wideoDropdown.setAttribute('style', 'display: none;');

      // Turn off states
      openedSlubne = false;
      openedWideo = false;
      openedDlafirm = false;

      okazjonalneDropdown.setAttribute('style', 'display: block;');
      openedOkazjonalne = !openedOkazjonalne; // change to "opened"

    } else {
      okazjonalneDropdown.setAttribute('style', 'display: none;');
      openedOkazjonalne = !openedOkazjonalne; // change to "close
    }

  });
  ///////////////////////

   ///////////////////////
  // 4. Wideo
  const wideo = document.querySelector('#wideo');
  const wideoDropdown = document.querySelector('#wideoDropdown');

  // Open dropdown & close SLUBNE
  wideo.addEventListener('click', (el) => {
    if (openedWideo === false) {
      // Turn off rest dropdowns
      slubneDropdown.setAttribute('style', 'display: none;');
      dlafirmDropdown.setAttribute('style', 'display: none;');
      okazjonalneDropdown.setAttribute('style', 'display: none;');

      // Turn off states
      openedSlubne = false;
      openedDlafirm = false;
      openedOkazjonalne = false;

      wideoDropdown.setAttribute('style', 'display: block;');
      openedWideo = !openedWideo; // change to "opened"

    } else {
      wideoDropdown.setAttribute('style', 'display: none;');
      openedWideo = !openedWideo; // change to "close
    }

  });
  ///////////////////////
  // Cookies policy - local storage
  ///////////////////////
  
  // 1. Check for cookies
  // Set event listeners on cookie div
  const cookieDiv = document.querySelector('.hero__policy-container');

  // Check for cookie accept in local storage
  let cookieAcceptSaved = localStorage.getItem('cookieAccept');

  if (cookieAcceptSaved === 'yes') {
    cookieDiv.setAttribute('style', 'display: none !important;');
  } else {
    cookieDiv.setAttribute('style', 'display: block !important;');
  }

  // 2. Set Cookie if clicked 
  cookieDiv.addEventListener('click', () => {
    // Set cookie accept (you cannot save boolean value! need to use string)
    localStorage.setItem('cookieAccept', 'yes');
    cookieDiv.setAttribute('style', 'display: none;');
  })
