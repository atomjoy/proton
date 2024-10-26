<x-proton::email title="Email" locale="pl">
	<x-slot:style>
		<style>						
			.proton-wrapper {
				background: #fff;
			}
            .proton-table {
                box-shadow: none;
                border-radius: 0px;
            }
			.proton-table tr td {
				padding: 0px 5%;
				padding: 0px 0px;
			}
            .proton-main-img img {
                float: left;
                width: 100%;
				margin: 0px;
                border-radius: 0px;
            }
            .proton-browser-link center {
                padding: 10px !important;
				background: #f2f2fd;
				background: #fff;
            }
            
			.proton-browser-link a {
                font-size: 13px;
                font-weight: 400;
                color: #999;
            }
            
			.proton-main-img img {
                border-radius: 0px 0px 20px 20px;
            }

            .proton-promo-header {				
                float: left;
                width: 100%;
				padding: 30px;
                height: auto;
                color: #fff;
                background: #144497 !important;
				box-sizing: border-box;
            }
            
			.proton-promo-header img {
                width: 150px;
            }

            .proton-tags-h1 {
                font-size: 35px;
                font-weight: 700;
                margin: 0px !important;
            }

            .proton-tags-h2 {
                font-size: 26px;
                font-weight: 700;
                margin: 0px !important;
            }

            .proton-tags-h3 {
                font-size: 23px;
                font-weight: 700;
                margin: 0px !important;
            }

            .proton-tags-h4 {
                font-size: 20px;
                font-weight: 600;
                margin: 0px !important;
            }

			.proton-tags-center {
				float: left;
				width: 100%;
				text-align: center;
			}
			
			a.proton-tags-button {
				display: inline-block;
				text-decoration: none;				
				color: #fff;
				background: #024ef0;
				border-radius: 10px;
				padding: 10px 30px;
				margin-top: 10px;
			}

			a.proton-tags-button:hover {
				text-decoration: none;				
				color: #fff;
				background: #55cc55;
				border-radius: 10px;
				padding: 10px 30px;
				margin-top: 10px;
			}

			a.proton-promo-button {
				text-decoration: none;
				font-weight: 500;
				float: left;
				width: auto;
				color: #000;
				background: #fff;
				border-radius: 10px;
				padding: 10px 30px;
				margin-top: 10px;
			}

			a.proton-promo-button-small {
				text-decoration: none;
				font-weight: 500;
				font-size: 15px;
				float: left;
				width: auto;
				color: #000;
				background: #fff;
				border: 1px solid #000;
				border-radius: 10px;
				padding: 7px 20px;
				margin-top: 10px;
			}

			a.proton-promo-button-small:hover {
				text-decoration: none;
				float: left;
				width: auto;
				color: #fff;
				background: #000;
				border: 1px solid #000;
				border-radius: 10px;
				padding: 7px 20px;
				margin-top: 10px;
			}

			a.proton-more-products-button {
				text-decoration: none;
				font-weight: 600;				
				width: 250px;				
				color: #000;
				background: #fff;
				border: 1px solid #000;
				border-radius: 10px;
				padding: 10px 20px;
				margin-top: 10px;
			}

			a.proton-more-products-button:hover {								
				color: #fff;
				background: #000;
				border: 1px solid #000;
				border-radius: 10px;
				padding: 10px 20px;
				margin-top: 10px;
			}

			.proton-tags-margin {
				float: left;
				width: 100%;
				height: 20px;
			}

			.proton-tags-divider {
				float: left;
				width: 100%;
				height: 0px;
				margin-top: 20px;
				margin-bottom: 20px;
				border-top: 1px solid #d9d9d9;
			}

			.proton-row-width-padding-left {
				padding-left: 15px
			}

			.proton-row-width-padding-right {
				padding-right: 15px
			}

			.proton-row-width-33-padding-left {
				padding-left: 14px;
			}
			.proton-row-width-33-padding-center {
				padding: 0px 7px;
			}
			.proton-row-width-33-padding-right {
				padding-right: 14px;
			}

			.proton-full-width {
				float: left;
				width: 100%;
				height: auto;
				box-sizing: border-box;
			}

			.proton-baner-1 {
				float: left;
				width: 100%;
				height: auto;
				background: #f9f9f9;
				border-radius: 10px;
				padding: 30px 0px;
			}
			
			.proton-baner-1 tr td {
				background: #f9f9f9;
			}		
			
			.proton-baner-2 {
				float: left;
				width: 100%;
				height: auto;				
				border-radius: 10px;
				padding: 30px 0px;
			}

			.email-btn-blue {
				color: #fff;
				background: #1a73e8;
			}

			.proton-color-gray {
				color: #666 !important;
			}

			.proton-footer-small {
				color: #999;
				font-size: 12px;
				text-align: center
			}

			.proton-footer-small a {
				color: #999
			}

			td.proton-inner-padding {
				padding: 0px 30px !important;
			}

			/* .email-gray-bg td {
				background: #eee !important;
				padding: 20px 0px !important;
			} */

			@media only screen and (max-width: 660px)  {
				.proton-row-width-50 {
					width: 100%;
					padding: 0px;
				}

				.proton-row-width-33 {
					width: 100%;
					padding: 0px;
				}

				.email-image-small {
					width: 100%;
				}

				.proton-baner1-item {
					width: 100%;
				}
				
				.proton-baner1-item img {
					width: 90px;
				}

				.proton-baner2-item {
					width: 100%;
				}
				
				.proton-baner2-item img {
					width: 60px;
					margin-top: 20px;
				}				
			}
		</style>
	</x-slot:style>

	<x-proton::row class="proton-browser-link">        
        <center><a href="{{ request()->getSchemeAndHttpHost() }}" target="_blank">{{ __('Email not displaying correctly? View in browser.'); }}</a></center>        
    </x-proton::row>

	<x-proton::row>
        <div class="proton-promo-header">
			<x-proton::tags.logo url="https://raw.githubusercontent.com/atomjoy/proton/main/public/images/logo.png" />
			<x-proton::tags.p>{{ __('Autumn weekend with a promotion') }}</x-proton::tags.p>
			<x-proton::tags.h1>{{ __('In-app discounts') }}</br>{{ __('up to 50%') }}</x-proton::tags.h1>
            <x-proton::tags.margin />			
            <x-proton::tags.promocode>WEEKEND</x-proton::tags.promocode>            
			<x-proton::tags.button url="{{ request()->getSchemeAndHttpHost() . '/promotion/weekend' }}" class="proton-promo-button">{{ __('Check promotions') }}</x-proton::tags.button>
        </div>
		<div class="proton-main-img">
			<img src="https://raw.githubusercontent.com/atomjoy/proton/main/public/images/promo-banner-top.jpg" alt="Image">
		</div>
	</x-proton::row>

	<x-proton::row class="proton-inner-padding">		
		<x-proton::tags.margin />
		<x-proton::tags.h2>{{ __('Last chance for 0% installments') }}</x-proton::tags.h2>
		<x-proton::tags.margin />
		
		<x-proton::promo.products 
			img1="https://raw.githubusercontent.com/atomjoy/proton/main/public/images/images11.jpg" text1="Mobiles" title1="Xiaomi Redmi</br>Silver 4/128GB</br>Green" price1="2590PLN" promoprice1="2250PLN" divider1="true"
			img2="https://raw.githubusercontent.com/atomjoy/proton/main/public/images/images12.jpg" text2="Headphones" title2="Steal Series 6</br>Cosmo 700</br>WiFi" price2="3490PLN" promoprice2="3090PLN" divider2="true"
			img3="https://raw.githubusercontent.com/atomjoy/proton/main/public/images/images13.jpg" text3="Earsphones" title3="Apple AirPods</br> 2 generation</br>Lighting" price3="990PLN" promoprice3="780PLN" divider3="true"
		/>

		<x-proton::promo.products 
			img1="https://raw.githubusercontent.com/atomjoy/proton/main/public/images/images1.jpg" text1="Watches" title1="Swatch XT</br>Ballo 4</br>Golden" price1="2590PLN" promoprice1="2000PLN" divider1="false"
			img2="https://raw.githubusercontent.com/atomjoy/proton/main/public/images/images2.jpg" text2="Laptops" title2="Laptop Hp XTX</br>Combo 950</br>WiFi" price2="3990PLN" promoprice2="3500PLN" divider2="false"
			img3="https://raw.githubusercontent.com/atomjoy/proton/main/public/images/images3.jpg" text3="Mobiles" title3="Samsung</br> 9 generation</br>Silver" price3="2590PLN" promoprice3="2100PLN" divider3="false"
		/>
	</x-proton::row>

	<x-proton::row class="proton-inner-padding">
		<x-proton::tags.margin />
		<x-proton::tags.button-center url="{{ request()->getSchemeAndHttpHost() }}" class="proton-more-products-button">
			{{ __('More Products') }}
		</x-proton::tags.button-center>		
		<x-proton::tags.margin />
	</x-proton::row>

	<x-proton::row>
		<x-proton::tags.divider />
		<x-proton::tags.margin />
		<center>
			<img src="https://raw.githubusercontent.com/atomjoy/proton/main/public/images/promo-banner.jpg" alt="Image" style="margin-bottom: 0px">
		</center>
		<x-proton::tags.margin />
		<x-proton::tags.divider />
	</x-proton::row>

	<x-proton::row class="proton-inner-padding">		
		<x-proton::tags.margin />
		<x-proton::tags.h2>{{ __('New products') }}</x-proton::tags.h2>
		<x-proton::tags.margin />

		<x-proton::promo.product-left
			img="https://raw.githubusercontent.com/atomjoy/proton/main/public/images/laptop.jpg"
			text="Order Motorola edge 50 neo"
			h3="Get it as a gift </br> TWS headphones"
			url="{{ request()->getSchemeAndHttpHost() }}"
		/>
		
		<x-proton::tags.margin />

		<x-proton::promo.product-right
			img="https://raw.githubusercontent.com/atomjoy/proton/main/public/images/mobile.jpg"
			text="Ideas for long evenings"
			h3="TV, audio, phones </br> at lower prices"
			url="{{ request()->getSchemeAndHttpHost() }}"
		/>
	</x-proton::row>

	<x-proton::row class="proton-inner-padding">
		<x-proton::tags.margin />
		<x-proton::promo.baner1 />
		<x-proton::tags.margin />
	</x-proton::row>

	<x-proton::row class="proton-inner-padding">		
		<x-proton::tags.divider />		        
		<x-proton::promo.baner2 />				
		<x-proton::tags.divider />        
	</x-proton::row>
	
	<x-proton::row class="proton-inner-padding">
		<center>
			<x-proton::tags.margin />
			<p>{{ __('Join us and stay up to date') }}</p>
			<x-proton::tags.margin />
		</center>
		<x-proton::tags.social name="facebook" />		
		<x-proton::tags.social name="instagram" />		
		<x-proton::tags.social name="youtube" />		
		<x-proton::tags.social name="x" />
		<x-proton::margin />
	</x-proton::row>

	<x-proton::row class="proton-inner-padding">
		<div class="proton-footer-small">
			{{ __('In order to send you the newsletter, we process the data we receive from you. You always have access to your data and can correct or delete it. You can do this in your account settings on our website. If you no longer want to receive such information from us, click the unsubscribe link. More information can be found in the Privacy Policy.') }}
			</br>
			<a href="/" style="font-weight: 400">{{ __('Unsubscribe from newsletter') }}</a>
		</div>
	</x-proton::row>
</x-proton::email>