<div id="container-content"> 
    <div class="clearfix"></div>
    <div class="content-center page clearfix">
        <div class="breadcrumbs clearfix">
            <ul>
                <li> <a class="active first" href="<?php echo site_url();?>">Accueil </a>/ </li>
                <li><strong><?php echo $cms['titre'];  ?></strong></li>
            </ul>
        </div>
        <div class="box-category clearfix">
            <div class="header-title">
                <h1>Paiement sécurisé par HIPAY</h1>
            </div>
            <div class="information">
			       <?php if($cms['id'] == "15"): ?>
						<h2>Paiement directe </h2>
						<form action="https://payment.hipay.com/index/link" method="post" target="_blank">
						<input type="hidden" name="id" value="56A20C9D18A0B" />
						  <input type="text" size="25" name="amount" id="amount" value="" style="padding:5px; margin-top:5px; font-size:20px; color:#AF0274;-webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px;">
						<input type="image" name="hipay_payment_button" src="https://www.hipaywallet.com/images/i18n/fr/bt_payment_1.png" />
						</form>
						<!--<h2>Paiement 3ds </h2>-->
						<form action="https://payment.hipay.com/index/link" method="post" target="_blank"><input type="hidden" name="id" value="56A09E8630F62" />
						 <label>Montant de la transaction :</label>
						 <input type="text" size="25" name="amount" id="amount" value="" style="padding:5px; margin-top:5px; font-size:20px; color:#AF0274;-webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px;">
						 <span>Euro</span>
						<br><br/>
						<input type="image" name="hipay_payment_button" src="https://www.hipaydirect.com/images/i18n/fr/bt_payment_6.png" /></form>
			        <?php else : ?>
                      <?php echo str_replace("../../../../", "http://www.portail-de-voyance.com/",  $cms['description']); ?>
                    <?php endif; ?>				   
            </div>
        </div>
    </div>
</div>