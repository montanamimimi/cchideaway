class Calendar {
    constructor() {
        document.querySelectorAll(".simcal-event-details").forEach(el => {
            this.addListeners(el);
          })
    }

    addListeners(el) {

        el.addEventListener('click', () => {
            const description = el.querySelector('.simcal-event-description');

            if (description) {
                description.classList.toggle('simcal-event-description-show');
            }
            
        })
        
    }
}

export default Calendar;