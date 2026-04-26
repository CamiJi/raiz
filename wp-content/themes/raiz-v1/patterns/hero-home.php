<?php
/**
 * Title: Hero Inicio
 * Slug: raiz-v1/hero-home
 * Categories: featured
 * Description: Hero principal para la home de Raiz Consulting.
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"color":{"background":"var(--wp--preset--color--base)"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:var(--wp--preset--color--base);padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"layout":{"type":"constrained"},"style":{"spacing":{"blockGap":"1.5rem"}}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"clamp(2rem,5vw,3.75rem)","lineHeight":"1.1"},"color":{"text":"var(--wp--preset--color--contrast)"}}} -->
<h1 class="wp-block-heading has-text-align-center" style="color:var(--wp--preset--color--contrast);font-size:clamp(2rem,5vw,3.75rem);line-height:1.1">RAÍZ, La base para que tu hotel crezca sin perder su esencia</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.1rem"},"color":{"text":"var(--wp--preset--color--primary)"}}} -->
<p class="has-text-align-center" style="color:var(--wp--preset--color--primary);font-size:1.1rem">Estrategia, operaciones y experiencia de huésped alineadas con la identidad única de tu marca.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"url":"<?php echo esc_url( get_permalink( 18 ) ); ?>","style":{"color":{"background":"var(--wp--preset--color--primary)","text":"var(--wp--preset--color--base)"},"border":{"radius":"999px"},"spacing":{"padding":{"top":"0.8rem","bottom":"0.8rem","left":"1.5rem","right":"1.5rem"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background wp-element-button" href="<?php echo esc_url( get_permalink( 18 ) ); ?>" style="border-radius:999px;color:var(--wp--preset--color--base);background-color:var(--wp--preset--color--primary);padding-top:0.8rem;padding-right:1.5rem;padding-bottom:0.8rem;padding-left:1.5rem">Agendar una consulta</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->