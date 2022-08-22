<footer>
            <div class="grid-layout-footer">
                <div>
                    <h4 class="name-logo-footer-position">ODA culture, 2022</h4>
                    <a href="/index.php">
                        <img class="image-footer" src="/img/v1.svg" alt="logotype">
                    </a>
                </div>

                <div>
                    <h4 class="h4-footer">Контакты</h4>
                    <a class="text-footer" href="tel:+79023084148">+79023084148</a><br>
                    <a class="text-footer" href="https://www.instagram.com/oda_culture/" target="_blank">Нельзяграм</a><br>
                    <a class="text-footer" href="https://vk.com/oda_culture" target="_blank">Вконтакте</a><br>  
                </div>

                <div>
                    <h4 class="h4-footer">Мессенджер</h4>
                    <a class="text-footer" href="mailto:hello@oda-culture.store">Email</a><br>
                    <a class="text-footer" href="https://t.me/DarinaZhu" target="_blank">Telegram</a><br>
                    <a class="text-footer" href="https://l.clck.bar/6a705" target="_blank">WhatsApp</a><br>
                </div>

                <div>
                    <h4 class="h4-footer">Прочее</h4>
                    <a class="text-footer" href="/police.php" target="_blank">Политика конфиденциальности и
                        оферта</a>
                </div>
            </div>
            <p class="text-cookies">Мы используем ваши «Cookies» — данные о посещении нашего сайта. Это помогает
                делать наш проект лучше.</p>
            <p class="text-cookies">Жучкова Д.Д. — ИНН 525406158308</p>
           
            <a href="https://www.instagram.com/fox_with_matches/" target="_blank" class="author">2022, дизайн и разработка - Алиса Цыганова</a>

        </footer>
    </div>
    </div>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <!-- modal activate -->
    <script>
        let i;
        let container = document.querySelector('.container');
        let slider = document.querySelector('.swiper');
        let container_item_modal_img = Array.from(document.querySelectorAll('.container .item-modal img'));
        let swiper_item_modal_img = Array.from(document.querySelectorAll('.swiper .item-modal img'));

        container_item_modal_img.forEach(element => {
            element.addEventListener('click', () => {
                if (container.getAttribute('style') == 'display: block;') {
                    container.setAttribute('style', 'display: none;');
                    slider.setAttribute('style', 'display: block;');
                    i = container_item_modal_img.indexOf(element);

                    var swiper = new Swiper(".mySwiper", {
                        initialSlide: i,
                        navigation: {
                            nextEl: ".swiper-button-next",
                            prevEl: ".swiper-button-prev",
                        },
                    });
                }
            });
        });
        swiper_item_modal_img.forEach(element => {
            element.addEventListener('click', () => {
                if (container.getAttribute('style') == 'display: none;') {
                    container.setAttribute('style', 'display: block;');
                    slider.setAttribute('style', 'display: none;');
                }
            });
        });

    </script>
</body>

</html>