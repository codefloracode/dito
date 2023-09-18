<footer id="footer">
  <div class="prod">
    <div class="contact">
      <h2>Vamos Produzir!</h2>
      <p><?php echo get_field('e-mail', 26); ?></p>
      <p><?php echo get_field('phone', 26); ?></p>
    </div>
    <div class="works">
      <p><?php echo get_field('red_text', 26); ?></p>
    </div>
  </div>
  <div class="arts-brands">
    <div class="artists">
     <h4>Artistas</h4>
     <?php echo get_field('artists', 26); ?>  
    </div>
    <div class="brands">
     <h4>Marcas</h4>
     <?php echo get_field('brands', 26); ?>  
    </div>
  </div>
</footer>