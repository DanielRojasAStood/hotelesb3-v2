import {} from "./menu-init";
import { initSlickCarousels } from "./slick-init";

let Main = {
  init: async function () {
    // initialize demo javascript component - async/await invokes some
    //  level of babel transformation

    document.addEventListener("DOMContentLoaded", () => {
      initSlickCarousels();
    });
  },
};

Main.init();
