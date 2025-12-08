document.addEventListener('DOMContentLoaded', () => {
    const btn = document.createElement('button');
    btn.id = 'scrollToTop';
    btn.innerHTML = `
<svg fill="#c42b1c" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
	 width="15px" height="15px" viewBox="0 0 60.731 60.731"
	 xml:space="preserve">
<g>
	<g>
		<polygon points="30.366,0 0.625,29.735 17.998,29.735 18.003,60.731 42.733,60.729 42.733,29.735 60.107,29.735 		"/>
	</g>
</g>
</svg>
<span>To top</span><span>Top</span>
`;    
    document.body.appendChild(btn);
    window.addEventListener('scroll', () => {
        if (window.scrollY > 300) btn.style.display = 'flex';
        else btn.style.display = 'none';
    });

    btn.addEventListener('click', () => {
        let start = null;
        const startY = window.scrollY;
        const duration = 500;

        function step(timestamp) {
            if (!start) start = timestamp;
            const progress = timestamp - start;
            const percent = Math.min(progress / duration, 1);
            window.scrollTo(0, startY * (1 - percent));
            if (progress < duration) window.requestAnimationFrame(step);
        }
        window.requestAnimationFrame(step);
    });
});