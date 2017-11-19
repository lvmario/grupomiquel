


<form role="search" method="get" class="search-form-header" action="<?php  esc_url( home_url( '/' ) ) ?> ">
                <label class="search-form-label">
                    <input type="search" class="search-field" placeholder="Qué estas buscando?" value="<?php get_search_query()  ?> " name="s" />
                </label>
                <input type="submit" id="search_submit" class="search-submit" value="<?php   esc_attr_x( 'Search', 'submit button' ) ?>" />
</form>

<script type='text/javascript'>

jQuery( document ).ready(function(){
var boton = jQuery('.lupa');
var Form = jQuery('.search-form-header');
var submit = jQuery('#search_submit');
var iconosSocial = jQuery('.hvr-float-shadow');
boton.click(function() {
  Form.css('display', 'inline-block');

  boton.css('display', 'none');
    Form.css('margin-top', '3px');
  submit.css('top', '3px');
 /* iconosSocial.css('vertical-align', 'top');*/
});
});

</script>
