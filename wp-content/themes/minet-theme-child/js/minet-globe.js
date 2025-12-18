window.addEventListener('load', function() {
    if (typeof Globe === 'undefined') return;

    const container = document.getElementById('my-globe-container');
    if (!container) return;

    const globe = Globe()(container)
        .globeImageUrl(minetGlobeData.globeImage)
        .bumpImageUrl(minetGlobeData.globeImage)
        .backgroundColor('#00000000')
        .showAtmosphere(false)
        .pointsData([])
        .onGlobeReady(() => {
            const loader = new THREE.TextureLoader();

            loader.load(minetGlobeData.cloudsJpg, (mainTex) => {
                loader.load(minetGlobeData.cloudsPng, (outerTex) => {
                    const mainClouds = new THREE.Mesh(
                        new THREE.SphereGeometry(globe.getGlobeRadius() * 1.03, 64, 64),
                        new THREE.MeshBasicMaterial({
                            map: mainTex,
                            transparent: true,
                            opacity: 0.4,
                            side: THREE.DoubleSide,
                            depthWrite: false,
                            depthTest: false
                        })
                    );
                    mainClouds.renderOrder = 999;
                    globe.scene().add(mainClouds);

                    const outerClouds = new THREE.Mesh(
                        new THREE.SphereGeometry(globe.getGlobeRadius() * 1.05, 64, 64),
                        new THREE.MeshBasicMaterial({
                            map: outerTex,
                            transparent: true,
                            opacity: 0.25,
                            side: THREE.DoubleSide,
                            depthWrite: false,
                            depthTest: false
                        })
                    );
                    outerClouds.renderOrder = 998;
                    globe.scene().add(outerClouds);

                    const animateClouds = () => {
                        mainClouds.rotation.y += 0.0025;
                        outerClouds.rotation.y += 0.0015;
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
    controls.autoRotateSpeed = 0.6;
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
