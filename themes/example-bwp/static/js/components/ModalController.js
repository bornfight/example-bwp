import {gsap} from "gsap";

export default class ModalController {
    constructor() {
        this.DOM = {}
    }

    init() {
        document.addEventListener("initModal", (ev) => {
            this.tl = gsap.timeline({paused: true});
            this.tl.fromTo(".js-modal", {
                    display: "none",
                    autoAlpha: 0,
                }, {
                    display: "flex",
                    autoAlpha: 1,
                    duration: 0.2
                }
            );


        });

        // eslint-disable-next-line no-unused-vars
        document.addEventListener("afterPopulateModal", (ev) => {
            this.tl.to(
                ".js-modal-inner",
                {
                    autoAlpha: 1,
                    duration: 0.3,
                },
                "-=0.4",
            );
        });

        // eslint-disable-next-line no-unused-vars
        document.addEventListener("openModal", (ev) => {
            this.tl.play();
        });

        document.addEventListener("closeModal", (ev) => {
            this.tl.reverse();
        });
    }
}
