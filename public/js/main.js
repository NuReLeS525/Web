(function () {
    console.log('e');
    // Burger

    document.addEventListener('click', burgerInit)

    function burgerInit(e) {

        const burgerIcon = e.target.closest('.burger-icon')
        console.log(burgerIcon);
        const burgerNavLink = e.target.closest('.header__nav-link')
        console.log(burgerNavLink);

        if (!burgerIcon && !burgerNavLink) return
        if (document.documentElement.clientWidth > 900) return

        if (!document.body.classList.contains('body--opened-menu')) {
            document.body.classList.add('body--opened-menu')
        } else {
            document.body.classList.remove('body--opened-menu')
        }

    }


    // Accordion

    const accordionLists = document.querySelectorAll('.accordeon__list');
    console.log(accordionLists);
    accordionLists.forEach(el => {

        // Если мы хотим, чтобы один аккордеон айтэм был изначально открыт при загрузки страницы:
        // document.querySelector('.accordion-list__item--opened .accordion-list__content').style.maxHeight = document.querySelector('.accordion-list__item--opened .accordion-list__content').scrollHeight + 'px';
        el.addEventListener('click', (e) => {

            const accordionList = e.currentTarget;
            const accordionOpenedItem = accordionList.querySelector('.accordeon__item--opened')
            const accordionOpenedContent = accordionList.querySelector('.accordeon__item--opened .accordeon__bottom')

            const accordionControl = e.target.closest('.accordeon__arrow');
            if (!accordionControl) return;
            e.preventDefault()
            const accordionItem = accordionList.querySelector('.accordeon__item');
            const accordionContent = accordionList.querySelector('.accordeon__text');

            if (accordionOpenedItem && accordionItem != accordionOpenedItem) {
                accordionOpenedItem.classList.remove('accordeon__item--opened');

                accordionOpenedContent.style.maxHeight = null;
            }
            accordionItem.classList.toggle('accordeon__item--opened');

            if (accordionItem.classList.contains('accordeon__item--opened')) {
                accordionContent.style.maxHeight = accordionContent.scrollHeight + 'px';
            } else {
                accordionContent.style.maxHeight = null;
            }

        });

    });

})();
