<section class="numbers">
    <div class="numbers-wrapper">
        <div class="numbers-wrapper-left">
            <?php if (!empty($args->image)): ?>
                <figure><?php echo wp_get_attachment_image($args->image['id'], '', '', array('class' => '', 'alt' => $args->image['title'])); ?></figure>
            <?php endif; ?>
            <div>
                <h2>Partener de încredere pentru companii din întreaga lume, pentru a crearea materiale mai performante, din 1983</h2>
                <p>De la fibre brute la produse finite, Minet oferă materiale care au performanțe constante, sustenabile și precise</p>
            </div>
        </div>
        <div class="numbers-wrapper-right">
            <?php if (!empty($args->numbers)): ?>
                <div class="numbers_container clear">
                    <?php foreach ($args->numbers as $number): ?>
                        <div class="number_item">
                            <p class="number"><span class="count"><?php echo $number['number']; ?></span></p>
                            <p class="text"><?php echo $number['text']; ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            <canvas id="my-globe-canvas"></canvas>
        </div>
    </div>
</section>