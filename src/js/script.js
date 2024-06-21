document.addEventListener('DOMContentLoaded', function() {
    if (document.body.classList.contains('categorie')) {
        document.querySelectorAll('[data-click="delete"]').forEach(function(button) {
            button.addEventListener('click', function(event) {
                event.preventDefault();
                document.querySelector('body').classList.add('has-modal-active');
                document.querySelector('.modal-delete').classList.add('active');

                let category_id = event.currentTarget.closest('form').querySelector('[type="hidden"]').value;
                document.querySelector('.modal-delete').querySelector('[type="hidden"]').value = category_id;
            });
        });

        document.querySelector('[data-click="new-category"]').addEventListener('click', function(event) {
            event.preventDefault();
            document.querySelector('body').classList.add('has-modal-active');
            document.querySelector('.modal-add').classList.add('active');
        });

        document.querySelectorAll('[data-click="close"]').forEach(function(button) {
            button.addEventListener('click', function(event) {
                document.querySelector('body').classList.remove('has-modal-active');
                event.currentTarget.closest('.modal.active').classList.remove('active');
            });
        });
    }

    if (document.body.classList.contains('home')) {
        document.querySelector('[name="categorie"]').addEventListener('change', function(event) {
            event.target.closest('form').submit();
        });
    }

    if (document.body.classList.contains('single')) {
        var glide = new Glide('.glide', {
            type: 'carousel',
            animationDuration: 600,
            gap: 24,
            startAt: 0,
            perView: 3,
            breakpoints: {
                1000: {
                    perView: 2
                },
                600: {
                    perView: 1
                }
            }
        });
        glide.mount();
    }
});

