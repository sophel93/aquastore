<?php if ( have_rows( 'additional_content_block' ) ) : ?>
	<div class="additional-content-block">
    <?php while ( have_rows( 'additional_content_block' ) ) : the_row(); ?>
      <ul>
        <li class="list-title">Nimi</li>
        <li><?php the_sub_field( 'item_name' ); ?></li>
        <li class="list-title">Hinta</li>
        <li><?php the_sub_field( 'item_price' ); ?></li>
        <li class="list-title">Valmistaja</li>
        <li><?php the_sub_field( 'item_manufacturer' ); ?></li>
        <li class="list-title">Vesilinja</li>
        <li><?php the_sub_field( 'item_water_line' ); ?></li>
        <li class="list-title">Leveys</li>
        <li><?php the_sub_field( 'item_width' ); ?></li>
      </ul>
    <?php endwhile; ?>

      <button class="display-more">Lisätiedot +</button>

    <div class="additional-content">
      <ul>
        <li class="list-title">Suunnittelija</li>
        <li><?php the_field( 'item_designer' ); ?></li>
        <li class="list-title">Valmistusmaa</li>
        <li><?php the_field( 'item_origin' ); ?></li>
        <li class="list-title">Painolasti</li>
        <li><?php the_field( 'item_weight_capacity' ); ?></li>
        <li class="list-title">Makuusijat</li>
        <li><?php the_field( 'item_berth_amount' ); ?></li>
        <li class="list-title">Syväys</li>
        <li><?php the_field( 'item_draft' ); ?></li>
        <li class="list-title">Paino</li>
        <li><?php the_field( 'item_weight' ); ?></li>
        <li class="list-title">Kölityyppi</li>
        <li><?php the_field( 'item_keel' ); ?></li>
        <li class="list-title">TCC IRC</li>
        <li><?php the_field( 'tcc_irc' ); ?></li>
      </ul>

    <?php if ( have_rows( 'item_motor_details' ) ) : ?>
      <h4>Moottori</h4>
      <ul>
      <?php while ( have_rows( 'item_motor_details' ) ) : the_row(); ?>
        <li class="list-title">Moottorimalli</li>
        <li><?php the_sub_field( 'item_engine_model' ); ?></li>
        <li class="list-title">Polttoaine</li>
        <li><?php the_sub_field( 'item_fuel' ); ?></li>
        <li class="list-title">Teho</li>
        <li><?php the_sub_field( 'item_engine_power' ); ?></li>
        <li class="list-title">Vaihteisto</li>
        <li><?php the_sub_field( 'item_gearing' ); ?></li>
      <?php endwhile; ?>
      </ul>
    <?php endif; ?>
    </div>
</div>
<?php endif; ?>