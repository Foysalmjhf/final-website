// dark mode - light mode

let darkModeEnabled = localStorage.getItem('darkModeEnabled') === 'true';

const enableDarkMode = () => {
	darkModeEnabled = true;
	document.body.classList.add('dark-mode');
	localStorage.setItem('darkModeEnabled', 'true');
}

const disableDarkMode = () => {
	darkModeEnabled = false;
	document.body.classList.remove('dark-mode');
	localStorage.setItem('darkModeEnabled', 'false');
}

document.addEventListener('DOMContentLoaded', () => {
	darkModeButton.checked = darkModeEnabled;
	document.body.classList.toggle('dark-mode', darkModeEnabled);
});

const darkModeButton = document.getElementById('darkModeButton');

	darkModeButton.addEventListener('change', () => {
	if(darkModeButton.checked) {
		enableDarkMode();
	} else {
		disableDarkMode();
	}
});

const hamburger = document.querySelector('.hamburger');
const navList = document.querySelector('nav ul');

hamburger.addEventListener('click', () => {
		hamburger.classList.toggle('active');
		navList.classList.toggle('active');
});	

// Multiple Text

const typed = new Typed('.multiple', {
		strings: ['Theme Developer', 'Web Designer', 'Graphic Designer'],
		typeSpeed: 100,
		backSpeed: 100,
		backDelay: 1000,
		loop: true
});


// Header Shadow On Scroll  effect

const header = document.querySelector('header');

window.addEventListener('scroll', () => {
	if(window.scrollY > 0) {
		header.style.boxShadow = '0 2px 4px rgba(0,0,0,0.1)';
	} else {
		header.style.boxShadow = 'none';
	}
});
// scroll animations

const observer = new IntersectionObserver ((entries) => {
	entries.forEach((entry) => {
	console.log(entry)
		if (entry.isIntersecting) {
			entry.target.classList.add('show');
		} else {
			entry.target.classList.remove('show');
		}

	});

});

// // Scroll section active link

// // Scroll section active link

// Get all sections that have an ID defined
const sections = document.querySelectorAll("section");

// Add an event listener listening for scroll
window.addEventListener("scroll", navHighlighter);

function navHighlighter() {
  
  // Get current scroll position
  let scrollY = window.pageYOffset;
  
  // Now we loop through sections to get height, top and ID values for each
  sections.forEach(current => {
    const sectionHeight = current.offsetHeight;
    const sectionTop = current.offsetTop - 50;
    sectionId = current.getAttribute("id");
    
    /*
    - If our current scroll position enters the space where current section on screen is, add .active class to corresponding navigation link, else remove it
    - To know which link needs an active class, we use sectionId variable we are getting while looping through sections as an selector
    */
    if (
      scrollY > sectionTop &&
      scrollY <= sectionTop + sectionHeight
    ){
      document.querySelector(".list-darkmode-menu a[href*=" + sectionId + "]").classList.add("active");
    } else {
      document.querySelector(".list-darkmode-menu a[href*=" + sectionId + "]").classList.remove("active");
    }
  });
	hamburger.classList.remove('active');
	navList.classList.remove('active');
}
		
			


const hiddenElements = document.querySelectorAll('.foysalanimated');

hiddenElements.forEach((el) => observer.observe(el));







