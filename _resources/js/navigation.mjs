// ---------------------------------------------------------------------------
// Mobile Menu Show/Hide

export function navigation() {
   const menuBtn    = document.getElementById(`open_mobile_menu_btn`);
   const closeMenuBtn    = document.getElementById(`close_mobile_menu_btn`);
   const mobileMenu = document.querySelector(`.m-site_header__nav_wrapper`);


   // Toggle Mobile
   function toggleMobile(){
      var viewportWidth = window.innerWidth || document.documentElement.clientWidth;

      if (viewportWidth > 1280) {
         // Unactivate hamburger
         menuBtn.classList.remove(`-is-active`);
         menuBtn.setAttribute(`aria-expanded`, false);

         // Unactivate mobile menu
         mobileMenu.classList.remove(`-is-active`);

      } else {
      }
   }

   // Toggle Header + Mobile
   toggleMobile();

   // On Resize
   window.addEventListener('resize', function () {
      // Toggle Mobile
      toggleMobile();
   }, false);



   // Reveal Mobile Menu On Hamburger Click
   menuBtn.onclick = function(){
      this.classList.toggle(`-is-active`);
      mobileMenu.classList.toggle(`-is-active`);

      if (this.classList.contains(`-is-active`)) {
         this.setAttribute(`aria-expanded`, `true`);
      } else {
         this.setAttribute(`aria-expanded`, `false`);
      }
   };

   closeMenuBtn.onclick = function(){
      mobileMenu.classList.toggle(`-is-active`);
   }
}