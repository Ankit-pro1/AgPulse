// Coverage Section 
(()=>{
    let toggleBtn = document.getElementsByClassName('item')
    let length = toggleBtn.length;
    console.log(length);
});

// Footer read-more/read-less button
(()=>{
    const readMoreBtn = document.querySelector('.footer-read-more-btn');
    readMoreBtn.addEventListener('click',()=>{
        let readMore = document.querySelector('.footer-read-more');
        let dots = document.querySelector('#dots');
        if(dots.style.display === 'inline'){
            dots.style.display = 'none';
            readMoreBtn.innerHTML = 'read less';
            readMore.style.display = 'inline';
        }else{
            dots.style.display = 'inline';
            readMoreBtn.innerHTML = 'read more';
            readMore.style.display = 'none';
        }
    })
})();

// Getting footer-footer copyright year
(()=>{
    let copyrightYearbox = document.querySelector("#copyright-year");
    const date = new Date();
    let copyrightYear = date.getFullYear();
    copyrightYearbox.innerHTML = copyrightYear;
    
})();