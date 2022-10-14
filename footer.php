
<section class="footer">

    <div class="footer-links">
        <ul>
            <li>Početna</li>
            <li>O nama</li>
            <li>Izaberi knjigu</li>
            <li>Najčešća pitanja</li>
            <li>Kontakt</li>
        </ul>
    </div>

    <div class="logo-footer">
        <a href="index.php"><img src="img/content/Logo.png" alt="Personalizovane knjige za decu - Zmajca Gasa"></a> 
    </div>

    <div class="zmaj-sa-decom">
        <img src="img/new/footer-image-zmaj-sa-decom.png" alt="">
    </div>

    <div class="form-footer">
        <h3 class="form-titlt">Pišite nam</h3>
        <form>
            <div class="form-row">
            <div class="input-group">
                <input type="text" id="name" required>
                <label for="name"><i class="fa-regular fa-user"></i> Vaše ime:</label>
            </div>
            <div class="input-group">
                <input type="email" id="email" required>
                <label for="email"><i class="fa-solid fa-at"></i> Vaš email:</label>
            </div>
            <div class="input-group">
                <textarea id="message" rows="8" required></textarea>
                <label for="message"><i class="fa-regular fa-envelope"></i> Vaša poruka:</label>
            </div>
            <button type="submit">POŠALJI</button>
            </div>
        </form>
    </div>
</section>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<script src="js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="js/jquery.flipster.min.js"></script>
<script>
    $('.carousel').flipster({
        style: 'carousel',
        spacing: -0.3,
    });

</script>
</body>
</html>