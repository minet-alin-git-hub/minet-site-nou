window.addEventListener('load', function() {
    if (typeof Globe === 'undefined') return;

    const container = document.getElementById('my-globe-container');
    if (!container) return;

    console.log('minet-globe: minetGlobeData=', window.minetGlobeData);

    const globe = Globe()(container)
        .globeImageUrl(minetGlobeData.globeImage)
        .bumpImageUrl(minetGlobeData.globeImage)
        .backgroundColor('#00000000')
        .showAtmosphere(false)
        .pointsData([])
        .onGlobeReady(() => {
            console.log('minet-globe: onGlobeReady - preparing to load clouds', minetGlobeData && minetGlobeData.cloudsJpg, minetGlobeData && minetGlobeData.cloudsPng);
            const loader = new THREE.TextureLoader();
            loader.load(minetGlobeData.cloudsJpg, (mainTex) => {
                loader.load(minetGlobeData.cloudsPng, (outerTex) => {
                    console.log('minet-globe: clouds textures loaded');
                    const mainClouds = new THREE.Mesh(
                        new THREE.SphereGeometry(globe.getGlobeRadius() * 1.015, 64, 64),
                        new THREE.MeshBasicMaterial({
                            map: mainTex,
                            transparent: true,
                            opacity: 0.4,
                            side: THREE.DoubleSide,
                            depthWrite: false,
                            depthTest: true
                        })
                    );
                    mainClouds.renderOrder = 998;
                    globe.scene().add(mainClouds);

                    const outerClouds = new THREE.Mesh(
                        new THREE.SphereGeometry(globe.getGlobeRadius() * 1.015, 64, 64),
                        new THREE.MeshBasicMaterial({
                            map: outerTex,
                            transparent: true,
                            opacity: 0.45,
                            side: THREE.DoubleSide,
                            depthWrite: false,
                            depthTest: true
                        })
                    );
                    outerClouds.renderOrder = 1000;
                    globe.scene().add(outerClouds);

                    const animateClouds = () => {
                        mainClouds.rotation.y += 0.0006;
                        outerClouds.rotation.y += 0.0003;
                        requestAnimationFrame(animateClouds);
                    };
                    animateClouds();
                });
            });
        });

    const camera = globe.camera();
    camera.position.z = 260;
    camera.updateProjectionMatrix();

    const controls = globe.controls();
    controls.enableZoom = false;
    controls.enableRotate = true;
    controls.autoRotate = true;
    controls.autoRotateSpeed = 0.3; // lower = slower globe rotation
    controls.update();

    function resize() {
        const width = container.clientWidth;
        const height = container.clientHeight || 500;
        globe.width([width]);
        globe.height([height]);
    }
    window.addEventListener('resize', resize);
    resize();
});
