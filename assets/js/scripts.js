document.addEventListener('DOMContentLoaded', async () => {
	try {
		const response = await fetch('https://fakerapi.it/api/v2/images?_quantity=3');
		const data = await response.json();
		console.log(data)

		const slides = data.data;
		const sliderWrapper = document.getElementById('slider-content');

		slides.forEach(img => {
			const slide = document.createElement('div');
			slide.className = 'swiper-slide h-full flex items-center justify-center bg-gray-200';
			slide.innerHTML = `
				<img src="${img.url}" alt="${img.title}" class="w-full aspect-[16/9]" />
			`;
			sliderWrapper.appendChild(slide);
		});

		new Swiper('.mySwiper', {
			loop: true,
			pagination: {
				el: '.swiper-pagination',
				clickable: true,
			},
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
		});
	} catch (error) {
		console.error('Error al cargar las imágenes:', error);
	}
});
