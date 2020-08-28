<?php

/*
Template Name: Appointments
*/

?>

<?php get_header();?>

<div>
  <h1><?php the_title();?></h1>
  <p>This is the Architect page</p>
  <button id="show-popup">popup button</button> 
</div>
<div id="proposalPopUp" class="closeProposalWindow lead-form-popup showPopUp">
			<div class="contentView">
				<div class="inner">

					<div id="close_proposal_window" class="closeProposal closeProposalWindow"><img src="https://3jbq2ynuxa-flywheel.netdna-ssl.com/wp-content/themes/klientboost/img/menu-close-light.svg" alt=""></div>

					<div class="progressBarContainer">
							<div class="progress-planet active-planetish currentlyActiveStep">
								<img src="https://3jbq2ynuxa-flywheel.netdna-ssl.com/wp-content/themes/klientboost/img/proposal-planets/planet-1.png" alt="">
							</div>
							<div class="between-planet-line"></div>
							<div class="progress-planet">
								<img src="https://3jbq2ynuxa-flywheel.netdna-ssl.com/wp-content/themes/klientboost/img/proposal-planets/planet-2.png" alt="">
							</div>
							<div class="between-planet-line"></div>
							<div class="progress-planet">
								<img src="https://3jbq2ynuxa-flywheel.netdna-ssl.com/wp-content/themes/klientboost/img/proposal-planets/planet-3.png" alt="">
							</div>
					</div>		<div class="step stepOne activeStep" id="stepOne" data-progressbar-title="Getting started">			<div class="fieldGroup">
											<label for="step1_dropdown_goals">What are your goals?</label>
											<div class="selectricWrapper"><div class="selectricHideSelect"><select id="step1_dropdown_goals" name="step1_dropdown_goals" required="" tabindex="0"><option value="">Choose</option><option value="Get more conversions">Get more conversions</option><option value="Get more phone leads">Get more phone leads</option><option value="Lower cost per conversion">Lower cost per conversion</option><option value="All of the above">All of the above</option><option value="Other...">Other...</option>				</select></div><div class="selectric"><p class="label">choose</p><i class="fa fa-angle-down"></i></div><div class="selectricItems" tabindex="-1"><div class="selectricScroll"><ul><li class="">Choose</li><li class="">Get more conversions</li><li class="">Get more phone leads</li><li class="">Lower cost per conversion</li><li class="">All of the above</li><li class="last">Other...</li></ul></div></div><input class="selectricInput" tabindex="0"></div>
										</div>			<div class="fieldGroup">
											<label for="step1_dropdown_advertise">Where do you advertise?</label>
											<div class="selectricWrapper"><div class="selectricHideSelect"><select id="step1_dropdown_advertise" name="step1_dropdown_advertise" required="" tabindex="0"><option value="">Choose</option><option value="Nationally">Nationally</option><option value="Locally">Locally</option><option value="Internationally">Internationally</option><option value="Other...">Other...</option>				</select></div><div class="selectric"><p class="label">choose</p><i class="fa fa-angle-down"></i></div><div class="selectricItems" tabindex="-1"><div class="selectricScroll"><ul><li class="">Choose</li><li class="">Nationally</li><li class="">Locally</li><li class="">Internationally</li><li class="last">Other...</li></ul></div></div><input class="selectricInput" tabindex="0"></div>
										</div>			<div class="fieldGroup">
							<div class="proposal-striped-line proposal-advanced-hidden-mobile"></div>
							<div class="brand-btn medium nextStep">Continue<i class="fa fa-angle-right"></i></div>
						</div><div class="proposal-advanced-hidden-mobile"><br><h2 class="small-margin">What's In The Proposal?</h2><div class="row"><div class="c-info-columns__column col-sm-4"><div class="c-info-columns__column_icon"><img src="https://3jbq2ynuxa-flywheel.netdna-ssl.com/wp-content/uploads/2018/01/icon-minimal-eyeball-150x150.png" alt="Competitor Info"></div><div class="c-info-columns__column_title">Competitor Info</div></div><div class="c-info-columns__column col-sm-4"><div class="c-info-columns__column_icon"><img src="https://3jbq2ynuxa-flywheel.netdna-ssl.com/wp-content/uploads/2018/01/icon-minimal-info-150x150.png" alt="Optimization Tips"></div><div class="c-info-columns__column_title">Optimization Tips</div></div><div class="c-info-columns__column col-sm-4"><div class="c-info-columns__column_icon"><img src="https://3jbq2ynuxa-flywheel.netdna-ssl.com/wp-content/uploads/2018/01/icon-minimal-dollar-sign-150x150.png" alt="Custom Pricing"></div><div class="c-info-columns__column_title">Custom Pricing</div></div><div class="col-xs-12 c-info-columns__more-text">... and so much more!</div></div></div></div>		<div class="step stepTwo" id="stepTwo" data-progressbar-title="Almost done">			<div class="fieldGroup">
											<label for="step2_dropdown_leads_or_sales">Do you want leads or sales?</label>
											<div class="selectricWrapper"><div class="selectricHideSelect"><select id="step2_dropdown_leads_or_sales" name="step2_dropdown_leads_or_sales" required="" tabindex="0"><option value="">Choose</option><option value="Leads">Leads</option><option value="Sales">Sales</option><option value="Both, I sell a service and a product">Both, I sell a service and a product</option><option value="Not sure">Not sure</option>				</select></div><div class="selectric"><p class="label">choose</p><i class="fa fa-angle-down"></i></div><div class="selectricItems" tabindex="-1"><div class="selectricScroll"><ul><li class="">Choose</li><li class="">Leads</li><li class="">Sales</li><li class="">Both, I sell a service and a product</li><li class="last">Not sure</li></ul></div></div><input class="selectricInput" tabindex="0"></div>
										</div>
													<div class="fieldGroup">
											<label for="step2_dropdown_monthly_ppc_spend">What’s your monthly PPC ad spend?</label>
											<div class="selectricWrapper"><div class="selectricHideSelect"><select id="step2_dropdown_monthly_ppc_spend" name="step2_dropdown_monthly_ppc_spend" required="" tabindex="0"><option value="">Choose</option><option value="$0 - $1,000">$0 - $1,000</option><option value="$1,001 - $5,000">$1,001 - $5,000</option><option value="$5,001 - $25,000">$5,001 - $25,000</option><option value="$25,001 - $100,000">$25,001 - $100,000</option><option value="$100,001+">$100,001+</option>				</select></div><div class="selectric"><p class="label">choose</p><i class="fa fa-angle-down"></i></div><div class="selectricItems" tabindex="-1"><div class="selectricScroll"><ul><li class="">Choose</li><li class="">$0 - $1,000</li><li class="">$1,001 - $5,000</li><li class="">$5,001 - $25,000</li><li class="">$25,001 - $100,000</li><li class="last">$100,001+</li></ul></div></div><input class="selectricInput" tabindex="0"></div>
                    </div>
                    
                    <?php echo do_shortcode( '[contact-form-7 id="16" title="Contact form 1"]' ); ?>

						<div class="fieldGroup">
							<div class="proposal-striped-line proposal-advanced-hidden-mobile"></div>
							<div class="brand-btn medium nextStep">Last Step<i class="fa fa-angle-right"></i></div>
							<div class="brand-btn medium backStep">Previous step</div>
						</div><div class="proposal-advanced-hidden-mobile"><div class="testimonial full-width color-white"><div class="quote">"<p>When it comes to PPC, the first person I turn to is Johnathan Dane. He and his team cut through the bullshit and get straight to the point with the goal of making you more money. Work with him.</p>"</div><div class="image"><img src="https://3jbq2ynuxa-flywheel.netdna-ssl.com/wp-content/uploads/2017/02/Peep-Laja-400x400.jpg" alt="Peep Laja"></div><div class="name">Peep Laja</div><div class="title">Founder @ <a target="_blank" class="company" href="https://conversionxl.com/">ConversionXL</a></div></div></div></div>		<div class="step stepThree" id="stepThree" data-progressbar-title="Final Step">	<div class="row">
							<div class="col-sm-6">	<div class="fieldGroup">
									<label for="step2_website">What’s your website?</label>
									<input type="text" id="step2_website" class="url-input" name="step2_website" required="">
									<span class="invalid-homepage">Please enter a valid URL (e.g. www.myhomepage.com)</span>
								</div>

								<div class="fieldGroup">
									<label for="name">What's your name?</label>
									<input type="text" name="name" id="step3_name" required="">
								</div>

								<div class="fieldGroup">
									<label for="email">What's your email?</label>
									<input type="email" name="email" id="step3_email" required="">
								</div>

								<div class="fieldGroup">
									<label for="step3_phone">What's your number?</label>
									<input type="text" name="step3_phone" id="step3_phone" required="">
								</div>

								<div class="fieldGroup">
									<div class="brand-btn medium nextStep ga-event-proposal-step3">Send my free proposal</div>
									<div class="brand-btn medium backStep">Previous step</div>
								</div>
							</div>

              <div class="col-xs-12 col-sm-5 col-sm-offset-1">
                <div class="prefer-to-call-wrapper">
                  <div class="prefer-to-call-inner">
                    <div class="prefer-to-call">
                      <img src="https://3jbq2ynuxa-flywheel.netdna-ssl.com/wp-content/uploads/2019/05/phone-icon.png" alt="phone icon">
                      <p>Prefer to call?</p>
                      <hr>
                      <p>Reach us directly to chat with one of our PPC &amp; CRO experts</p>
                      <hr>
                      <p>Call Now</p>
                      <a href="tel:8662042028">(866) 204-2028</a>
                    </div>
                  </div>
                </div>
              </div>
              
						</div>


					</div>

					<div class="spinnerView messageView">
						<h2>Processing...</h2>
						<i class="fa fa-circle-o-notch fa-3x fa-spin"></i>
					</div>

					<div class="successView messageView">
						<h2>Thanks!<br>
<br>
Please look out for an email from us.</h2>
						<div id="complete_close_window_button" class="brand-btn medium closeProposalWindow">Close window</div>
					</div>

					<div class="errorView messageView">
						<h2>Whoops!<br>problem here.</h2>
						<div id="try_again_button" class="brand-btn medium retry-submit">
							try again
						</div>
					</div>

				</div>

			</div>
		</div>

<?php get_footer();?>