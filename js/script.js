let arrow = document.querySelectorAll(".arrow");
	for (var i = 0; i < arrow.length; i++) {
		arrow[i].addEventListener("click", (e)=>{
			let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
			arrowParent.classList.toggle("showMenu");
		});
	}

	let sidebar = document.querySelector(".sidebar");
	let sidebarBtn = document.querySelector(".fa-sidebar");
	console.log(sidebarBtn);
	sidebarBtn.addEventListener("click", ()=>{
	sidebar.classList.toggle("close");
});


function scrollToSection(sectionId) {
	const section = document.getElementById(sectionId);
	if (section) {
		section.scrollIntoView({ behavior: 'smooth' });
	}
}

$(".carousel").swipe({

	swipe: function(event, direction, distance, duration, fingerCount, fingerData) {

		if (direction == 'left') $(this).carousel('next');
		if (direction == 'right') $(this).carousel('prev');

	},
	allowPageScroll:"vertical"

});