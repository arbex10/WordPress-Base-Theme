<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <div class="form-group">
  	<input type="text" class="field form-control" name="s" id="s" placeholder="<?php esc_attr_e( 'Search', 'wbt' ); ?>" />
  </div>
  <input type="submit" class="submit btn btn-primary" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'wbt' ); ?>" />
</form>