const burgerToggle = document.querySelector('.burger');
const navToggle = document.querySelector('.nav');

burgerToggle.addEventListener('click', () => {
    burgerToggle.classList.toggle('active');
    navToggle.classList.toggle('active');
})


//creating an api to observe dom elements 
const items = document.querySelectorAll(
'#h2fade, #h6fade, div.booster-look-one, div.booster-text-one, div.booster-look-two, div.booster-text-two, div.showcase-two')
const options = { 
    threshold:1,
    rootMargin:"0px 550px -100px 550px" 
};

const observer = new IntersectionObserver(function
(entries, observer) {
entries.forEach(entry => {
    if(!entry.isIntersecting){
        return; 
    }
    else{
        console.log(entry.target) + console.log(entry.isIntersecting);
        entry.target.classList.toggle('slide');
        observer.unobserve(entry.target);
    }
});
}, options);

items.forEach(item =>{
    observer.observe(item);
})

