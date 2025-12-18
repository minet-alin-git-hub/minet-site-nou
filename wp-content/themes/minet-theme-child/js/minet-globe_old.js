window.addEventListener('load', function() {
    if (typeof THREE === 'undefined' || typeof ThreeGlobe === 'undefined') return;

    const canvas = document.getElementById('my-globe-canvas');
    if (!canvas) return;

    const scene = new THREE.Scene();

    const camera = new THREE.PerspectiveCamera(75, canvas.clientWidth / canvas.clientHeight, 0.1, 2000);
    camera.position.z = 165;

    const renderer = new THREE.WebGLRenderer({ canvas, alpha: true, antialias: true });
    renderer.setPixelRatio(window.devicePixelRatio);
    renderer.setSize(canvas.clientWidth, canvas.clientHeight);

    // Load globe texture
    const globeTexture = new THREE.TextureLoader().load(minetGlobeData.globeImage);

    const globe = new ThreeGlobe()
        .globeImageUrl(minetGlobeData.globeImage)
        .globeMaterial(new THREE.MeshBasicMaterial({ map: globeTexture })) // No lighting, no glow
        .atmosphereColor('rgba(0,0,0,0)') // Remove atmosphere (aura)
        .atmosphereAltitude(0); // Ensure no altitude for halo
    scene.add(globe);

    function animate() {
        globe.rotation.y += 0.0015;
        renderer.render(scene, camera);
        requestAnimationFrame(animate);
    }

    function resizeRenderer() {
        const width = canvas.clientWidth;
        const height = canvas.clientHeight || 500;
        renderer.setSize(width, height, false);
        camera.aspect = width / height;
        camera.updateProjectionMatrix();
    }

    window.addEventListener('resize', resizeRenderer);
    resizeRenderer();
    animate();
});
