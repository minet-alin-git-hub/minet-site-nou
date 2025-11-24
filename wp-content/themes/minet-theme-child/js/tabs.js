document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.tabs-nav li').forEach(tab => {
        tab.addEventListener('click', function(){
            const parent = this.closest('.tabs-container');
            parent.querySelectorAll('.tabs-nav li').forEach(t => t.classList.remove('active'));
            parent.querySelectorAll('.tab-pane').forEach(p => p.classList.remove('active'));
            this.classList.add('active');
            parent.querySelector('#' + this.dataset.tab).classList.add('active');
        });
    });
});
