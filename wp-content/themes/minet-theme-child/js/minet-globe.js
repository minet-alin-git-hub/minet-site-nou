window.addEventListener('load', function() {
    if (typeof THREE === 'undefined' || typeof ThreeGlobe === 'undefined') return;

    const canvas = document.getElementById('my-globe-canvas');
    if (!canvas) return;

    const scene = new THREE.Scene();

    const camera = new THREE.PerspectiveCamera(75, canvas.clientWidth / canvas.clientHeight, 0.1, 2000);
    camera.position.z = 190;

    const renderer = new THREE.WebGLRenderer({ canvas, alpha: true, antialias: true });
    renderer.setPixelRatio(window.devicePixelRatio);
    renderer.setSize(canvas.clientWidth, canvas.clientHeight);

    const ambientLight = new THREE.AmbientLight(0xffffff, 2);
    
    scene.add(ambientLight);

    const directionalLight = new THREE.DirectionalLight(0xffffff, 0.8);
    directionalLight.position.set(100, 50, 100);
    scene.add(directionalLight);

    const globe = new ThreeGlobe().globeImageUrl(minetGlobeData.globeImage);

    scene.add(globe);

    function animate() {
        globe.rotation.y += 0.002;
        renderer.render(scene, camera);
        requestAnimationFrame(animate);
    }

    function resizeRenderer() {
        const width = canvas.clientWidth;
        const height = canvas.clientHeight || 400;
        renderer.setSize(width, height, false);
        camera.aspect = width / height;
        camera.updateProjectionMatrix();
    }

    window.addEventListener('resize', resizeRenderer);
    resizeRenderer();
    animate();
});
