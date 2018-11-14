

<?php wp_footer(); ?>
<footer class="mainFooter">
    <section class="helpFooter">
        <h3>Help</h3>

        <?php 
          wp_nav_menu(array('menu' => 'Footer Menu',)); ?>


    </section>
    <section class="aboutFooter">
        <h3><a href="#">About</a></h3>
        <?php
        $id = 40;
        $aboutPage = get_post($id);
         ?>
        <p><?php echo $aboutPage->post_content ?></p>

    </section>
    <section class="newsletterFooter">
        <h3>Newsletter</h3>
        <form class="formNewsletter" action="." method="post">
            <input type="text" name="inputMailNewsletter" placeholder="Your email address" value="">
            <button type="submit" name="button">Sign up</button>
        </form>
    </section>
</footer>
</body>
</html>
