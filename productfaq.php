<?php


$q1 = ''; $q2 = ''; $q3 = ''; $q4 = ''; $q5 = ''; $q6 = ''; 
$a1 = ''; $a2 = ''; $a3 = ''; $a4 = ''; $a5 = ''; $a6 = ''; 

if (null !== get_post_custom_values('question_1')) $q1 = get_post_custom_values('question_1')[0];
if (null !== get_post_custom_values('question_2')) $q2 = get_post_custom_values('question_2')[0]; 
if (null !== get_post_custom_values('question_3')) $q3 = get_post_custom_values('question_3')[0]; 
if (null !== get_post_custom_values('question_4')) $q4 = get_post_custom_values('question_4')[0]; 
if (null !== get_post_custom_values('question_5')) $q5 = get_post_custom_values('question_5')[0]; 
if (null !== get_post_custom_values('question_6')) $q6 = get_post_custom_values('question_6')[0]; 
if (null !== get_post_custom_values('answer_1')) $a1 = get_post_custom_values('answer_1')[0]; 
if (null !== get_post_custom_values('answer_2')) $a2 = get_post_custom_values('answer_2')[0]; 
if (null !== get_post_custom_values('answer_3')) $a3 = get_post_custom_values('answer_3')[0]; 
if (null !== get_post_custom_values('answer_4')) $a4 = get_post_custom_values('answer_4')[0]; 
if (null !== get_post_custom_values('answer_5')) $a5 = get_post_custom_values('answer_5')[0]; 
if (null !== get_post_custom_values('answer_6')) $a6 = get_post_custom_values('answer_6')[0]; 



if ($q1) { 

?>

<div data-elementor-type="container" data-elementor-id="16186" class="elementor elementor-16186" data-elementor-post-type="elementor_library">
							
		
		<div style="padding: 0;" class="elementor-element elementor-element-c0d8b8f e-flex e-con-boxed e-con" data-id="c0d8b8f" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}">
					<div class="e-con-inner">
				<div class="elementor-element elementor-element-1d7fecc animated-slow dtla-faq elementor-widget elementor-widget-accordion animated slideInUp" data-id="1d7fecc" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;slideInUp&quot;}" data-widget_type="accordion.default">
				<div class="elementor-widget-container">
			<style>.elementor-accordion{text-align:left}.elementor-accordion .elementor-accordion-item{border:1px solid #d5d8dc}.elementor-accordion .elementor-accordion-item+.elementor-accordion-item{border-top:none}.elementor-accordion .elementor-tab-title{margin:0;padding:15px 20px;font-weight:700;line-height:1;cursor:pointer;outline:none}.elementor-accordion .elementor-tab-title .elementor-accordion-icon{display:inline-block;width:1.5em}.elementor-accordion .elementor-tab-title .elementor-accordion-icon svg{width:1em;height:1em}.elementor-accordion .elementor-tab-title .elementor-accordion-icon.elementor-accordion-icon-right{float:right;text-align:right}.elementor-accordion .elementor-tab-title .elementor-accordion-icon.elementor-accordion-icon-left{float:left;text-align:left}.elementor-accordion .elementor-tab-title .elementor-accordion-icon .elementor-accordion-icon-closed{display:block}.elementor-accordion .elementor-tab-title .elementor-accordion-icon .elementor-accordion-icon-opened,.elementor-accordion .elementor-tab-title.elementor-active .elementor-accordion-icon-closed{display:none}.elementor-accordion .elementor-tab-title.elementor-active .elementor-accordion-icon-opened{display:block}.elementor-accordion .elementor-tab-content{display:none;padding:15px 20px;border-top:1px solid #d5d8dc}@media (max-width:767px){.elementor-accordion .elementor-tab-title{padding:12px 15px}.elementor-accordion .elementor-tab-title .elementor-accordion-icon{width:1.2em}.elementor-accordion .elementor-tab-content{padding:7px 15px}}.e-con-inner>.elementor-widget-accordion,.e-con>.elementor-widget-accordion{width:var(--container-widget-width);--flex-grow:var(--container-widget-flex-grow)}</style>		<div class="elementor-accordion">
							
            
            <?php if ($q1) { ?>
            <div class="elementor-accordion-item">
					<div id="elementor-tab-title-3091" class="elementor-tab-title elementor-active" data-tab="1" role="button" aria-controls="elementor-tab-content-3091" aria-expanded="true" tabindex="0" aria-selected="true">
													<span class="elementor-accordion-icon elementor-accordion-icon-right" aria-hidden="true">
															<span class="elementor-accordion-icon-closed"><i class="fas fa-chevron-down"></i></span>
								<span class="elementor-accordion-icon-opened"><i class="fas fa-minus"></i></span>
														</span>
												<a class="elementor-accordion-title" tabindex="0"><?php echo $q1; ?></a>
					</div>
					<div id="elementor-tab-content-3091" class="elementor-tab-content elementor-clearfix elementor-active" data-tab="1" role="region" aria-labelledby="elementor-tab-title-3091" style="display: block;"><?php echo $a1; ?>

</div>
				</div>
                <?php } ?> 
							
                
                <?php if ($q2) { ?>
                <div class="elementor-accordion-item">
					<div id="elementor-tab-title-3092" class="elementor-tab-title" data-tab="2" role="button" aria-controls="elementor-tab-content-3092" aria-expanded="false">
													<span class="elementor-accordion-icon elementor-accordion-icon-right" aria-hidden="true">
															<span class="elementor-accordion-icon-closed"><i class="fas fa-chevron-down"></i></span>
								<span class="elementor-accordion-icon-opened"><i class="fas fa-minus"></i></span>
														</span>
												<a class="elementor-accordion-title" tabindex="0"><?php echo $q2; ?></a>
					</div>
					<div id="elementor-tab-content-3092" class="elementor-tab-content elementor-clearfix" data-tab="2" role="region" aria-labelledby="elementor-tab-title-3092"><?php echo $a2; ?></div>
				</div>
                <?php } ?> 	
                
                <?php if ($q3) { ?>
                <div class="elementor-accordion-item">
					<div id="elementor-tab-title-3093" class="elementor-tab-title" data-tab="3" role="button" aria-controls="elementor-tab-content-3093" aria-expanded="false">
													<span class="elementor-accordion-icon elementor-accordion-icon-right" aria-hidden="true">
															<span class="elementor-accordion-icon-closed"><i class="fas fa-chevron-down"></i></span>
								<span class="elementor-accordion-icon-opened"><i class="fas fa-minus"></i></span>
														</span>
												<a class="elementor-accordion-title" tabindex="0"><?php echo $q3; ?></a>
					</div>
					<div id="elementor-tab-content-3093" class="elementor-tab-content elementor-clearfix" data-tab="3" role="region" aria-labelledby="elementor-tab-title-3093"><?php echo $a3; ?></div>
				</div>
                <?php } ?> 	
                
                <?php if ($q4) { ?>
                <div class="elementor-accordion-item">
					<div id="elementor-tab-title-3094" class="elementor-tab-title" data-tab="4" role="button" aria-controls="elementor-tab-content-3094" aria-expanded="false">
													<span class="elementor-accordion-icon elementor-accordion-icon-right" aria-hidden="true">
															<span class="elementor-accordion-icon-closed"><i class="fas fa-chevron-down"></i></span>
								<span class="elementor-accordion-icon-opened"><i class="fas fa-minus"></i></span>
														</span>
												<a class="elementor-accordion-title" tabindex="0"><?php echo $q4; ?></a>
					</div>
					<div id="elementor-tab-content-3094" class="elementor-tab-content elementor-clearfix" data-tab="4" role="region" aria-labelledby="elementor-tab-title-3094"><?php echo $a4; ?></div>
				</div>
                <?php } ?> 	
                
                <?php if ($q5) { ?>
                <div class="elementor-accordion-item">
					<div id="elementor-tab-title-3095" class="elementor-tab-title" data-tab="5" role="button" aria-controls="elementor-tab-content-3095" aria-expanded="false">
													<span class="elementor-accordion-icon elementor-accordion-icon-right" aria-hidden="true">
															<span class="elementor-accordion-icon-closed"><i class="fas fa-chevron-down"></i></span>
								<span class="elementor-accordion-icon-opened"><i class="fas fa-minus"></i></span>
														</span>
												<a class="elementor-accordion-title" tabindex="0"><?php echo $q5; ?></a>
					</div>
					<div id="elementor-tab-content-3095" class="elementor-tab-content elementor-clearfix" data-tab="5" role="region" aria-labelledby="elementor-tab-title-3095"><?php echo $a5; ?></div>
				</div>
                <?php } ?> 
                
                <?php if ($q6) { ?>
                <div class="elementor-accordion-item">
					<div id="elementor-tab-title-3096" class="elementor-tab-title" data-tab="6" role="button" aria-controls="elementor-tab-content-3096" aria-expanded="false">
													<span class="elementor-accordion-icon elementor-accordion-icon-right" aria-hidden="true">
															<span class="elementor-accordion-icon-closed"><i class="fas fa-chevron-down"></i></span>
								<span class="elementor-accordion-icon-opened"><i class="fas fa-minus"></i></span>
														</span>
												<a class="elementor-accordion-title" tabindex="0"><?php echo $q6; ?></a>
					</div>
					<div id="elementor-tab-content-3096" class="elementor-tab-content elementor-clearfix" data-tab="6" role="region" aria-labelledby="elementor-tab-title-3096"><?php echo $a6; ?></div>
				</div>
                <?php } ?> 


								</div>
				</div>
				</div>
					</div>
				</div>
							</div>


                            <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "<?php echo $q1; ?>",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "<?php echo $a1; ?>"
      }
    },
    {
      "@type": "Question",
      "name": "<?php echo $q2; ?>",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "<?php echo $a2; ?>"
      }
    },
    {
      "@type": "Question",
      "name": "<?php echo $q3; ?>",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "<?php echo $a3; ?>"
      }
    },
    {
      "@type": "Question",
      "name": "<?php echo $q4; ?>",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "<?php echo $a4; ?>"
      }
    },
    {
      "@type": "Question",
      "name": "<?php echo $q5; ?>",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "<?php echo $a5; ?>"
      }
    },
    {
      "@type": "Question",
      "name": "<?php echo $q6; ?>",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "<?php echo $a6; ?>"
      }
    }
  ]
}
</script>

                            <?php } else { echo do_shortcode('[elementor-template id="16353"]'); } ?>