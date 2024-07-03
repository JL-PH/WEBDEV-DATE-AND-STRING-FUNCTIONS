let sections = document.querySelectorAll('section');

window.onscroll = function (){
    sections.forEach(section => {
        let windowPos = window.scrollY;
        let elementTop = section.offsetTop - 250;
        let elementHeight = section.offsetHeight;

        if (windowPos >= elementTop && windowPos < elementTop + elementHeight){
            section.classList.add('show-animation');
        }
    });
}