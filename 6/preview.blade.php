<style type="text/css">

.hovereffect {
  height: auto !important;
}

.count {
position: absolute;
font-size: 14px;
padding: 10px;
left: 804px;
margin-top: -39px;
width: 38px;
}

</style>

<div class="panel panel-default" ng-hide="!editSummary">
	<div class="panel-body">
		<form>  
	    <div class="form-group">
	      <p>Certificate Title</p>
	      <input ng-model="cert_fields['heading']" ng-init="cert_fields['heading']=' <% $cert_fields['heading'] %>'" type="text" class="form-control" maxlength="30" ng-trim="false" required>
	      <span class="label label-info count">{{30 - cert_fields['heading'].length}}</span>
	    </div>
	    <div class="form-group">
	      <p>Subheading</p>
	      <input ng-model="cert_fields['subheading']" ng-init="cert_fields['subheading']=' <% $cert_fields['subheading'] %>'" type="text" class="form-control" maxlength="45" required>
	      <span class="label label-info count" >{{45 - cert_fields['subheading'].length}}</span>
	    </div>
	    <div class="form-group">
	      <p>Name of Student</p>
	      <input ng-init="recipient_name=' <% $cert_details -> recipient_name %>'" type="text" class="form-control" maxlength="45" ng-model="recipient_name" required >
	      <span class="label label-info count">{{45 - recipient_name.length}}</span>
	    </div>
	    <div class="form-group">
	      <p>Postheading</p>
	      <input ng-model="cert_fields['postheading']" ng-init="cert_fields['postheading']='  <% $cert_fields['postheading'] %>'" type="text" class="form-control" maxlength="55" required>
	      <span  class="label label-info count">{{55 - cert_fields['postheading'].length}}</span>
	    </div>
	    <div class="form-group" >
	      <p>Signature &nbsp; 
	       <input type="checkbox" value="" name="ownSignature" ng-model="useOwnSignature"  class="radioBtn" id="ownSignature" ng-click="showUploadSignature()" > Use my own signature 
	      </p>
	      <input name="textSignature" ng-model="cert_fields['signature']" ng-init="cert_fields['signature']=' <% $cert_fields['signature'] %>'" type="text" class="form-control" maxlength="25"  ng-show="ownSignature">
	      <span  class="label label-info count" ng-show="ownSignature">{{25 - cert_fields['signature'].length}}</span>

	      <div class="input-file-container" ng-hide="ownSignature">  
	       
		    	<div class="btn-group-upload">
		    		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#signatureList">
		    			Browse
		    		</button>
		    	</div>

	     </div>
	     <p class="file-return" ng-hide="ownSignature"></p>
	    </div>
	    <div class="form-group">
	      <p>Name of Teacher</p>
	      <input ng-init="provider=' <% $cert_details -> provider %>'" type="text" class="form-control" maxlength="30" ng-model="provider" required >
	      <span class="label label-info count">{{30 - provider.length}}</span>
	    </div>
	    <div class="form-group">
	      <p>Position</p>
	      <input ng-model="cert_fields['providerTitle']" ng-init="cert_fields['providerTitle']=' <% $cert_fields['providerTitle'] %>'" type="text" class="form-control" maxlength="20" required>
	      <span class="label label-info count">{{20 - cert_fields['providerTitle'].length}}</span>
	    </div>
	    <div class="form-group">
	      <p>Date</p>
	      <input ng-model="date_given" type="text" class="form-control" maxlength="30"  ng-init="date_given='<% $cert_details -> date_given %>'" required>
	      <span class="label label-info count">{{30 - date_given.length}}</span>
	    </div>

	    <div class="form-group">
	    <p>Certificate Logo (optional)</p>
	    <div class="form-group">
	    	<button type="button" class="btn" data-toggle="modal" data-target="#logoList">
	  			Browse
	  		</button>
	    </div>
	      <p class="file-return" ></p>
	   	</div>
   </form>
	</div>
</div>

<table align="center" role="presentation" aria-hidden="true" cellspacing="0" cellpadding="0" border="0" style="width:847px; height: 585px; border-collapse: collapse; background-image: url('http://images.all-free-download.com/images/graphicthumb/decorative_pattern_certificate_backgrounds_vector_528943.jpg'); background-repeat: no-repeat;  background-size: 847px 585px;">

	<tr>
		<td>
			<table align="center" role="presentation" aria-hidden="true" cellspacing="0" cellpadding="0" border="0" style="margin-bottom: 5px; margin-top: 0; padding-top: 0; padding-bottom: 0;">
				<tr>
					<td colspan="5" style="text-align: center; color: #4b783a; font-weight: bold; font-size: 63px; font-family: 'Great Vibes', cursive; width: auto; padding: 0; margin: 0;">
						<input type="text" ng-model="cert_fields['heading']" ng-init="cert_fields['heading']=' <% $cert_fields['heading'] %>'" name="heading" placeholder="Your certificate title here" maxlength="30" style="color: #4b783a; width: 700px; border: 0; outline: none; text-align: center; background: transparent;"  disabled><!-- {{Heading}} -->
					</td>
				</tr>         
				<tr>
					<td colspan="5" style="text-align: center; color: #9F2B30; font-size: 37px; font-family: 'Great Vibes', cursive;">
						<input type="text" ng-model="cert_fields['subheading']" ng-init="cert_fields['subheading']=' <% $cert_fields['subheading'] %>'" name="subheading" placeholder="Your subheading here" maxlength="45" style="width: 700px; border: 0; outline: none; text-align: center; background: transparent;" disabled><!-- {{Subheading}} -->
					</td>
				</tr>
				<tr>
					<td colspan="5" style="text-align: center; color: black; font-size: 37px; font-weight: bold; font-family: 'Great Vibes', cursive;">
						<input type="text" ng-model="recipient_name" ng-init="recipient_name=' <% $cert_details -> recipient_name %>'" name="recipient_name" placeholder="Your student's name here" maxlength="45" style="width: 700px; border: 0; outline: none; text-align: center; background: transparent;" disabled><!-- {{Recipient}} -->
					</td>
				</tr>
				<tr>
					<td colspan="5" style="text-align: center; color: #9F2B30; font-size: 37px; font-family: 'Great Vibes', cursive;">
						<input type="text" ng-model="cert_fields['postheading']" ng-init="cert_fields['postheading']='  <% $cert_fields['postheading'] %>'" name="postheading" placeholder="Your postheading here" maxlength="55" style="width: 700px; border: 0; outline: none; text-align: center; background: transparent;" disabled><!-- {{Postheading}} -->
					</td>
				</tr>
			</table>
			
			<table align="center" role="presentation" aria-hidden="true" cellspacing="0" cellpadding="0" border="0">
				<tr>
					<td style="width: 13%; padding-top: 10px;">
					</td>

					<td style="width: 29%; text-align: center; color: #9F2B30; font-size: 16px; font-family: 'Alegreya Sans', sans-serif; padding-top: 30px; padding-left: 10px;">
						
						@if(strpos($cert_fields['signature'], '/assets') === false) 
							<span ng-init="useOwnSignature=false;ownSignature=true"></span>
						@else
							<span ng-init="useOwnSignature=true;ownSignature=false"></span>
						@endif
						
							<input type="text"  ng-show="ownSignature" ng-model="cert_fields['signature']" ng-init="cert_fields['signature']=' <% $cert_fields['signature'] %>'" name="signature" maxlength="25" placeholder="Your signature here" style="position: absolute; width: 28%; font-size: 25px; border: 0; outline: none; background: transparent; text-align: center; font-family: 'Great Vibes', cursive; bottom: 235px;">

							<img id="signature" src="{{cert_fields['signature']}}"  class="file-return" style="position: absolute; left: 186px; bottom: 233px; width: 135px;" ng-model="cert_fields['signature']" ng-hide="ownSignature">
						

						<input type="text" ng-model="provider" ng-init="provider=' <% $cert_details -> provider %>'" name="provider" placeholder="Your name here" maxlength="30" style="width: 100%; border: 0; outline: none; background: transparent; border-bottom: 1px solid black; text-align: center;"><br>
						<input type="text" ng-model="cert_fields['providerTitle']" ng-init="cert_fields['providerTitle']=' <% $cert_fields['providerTitle'] %>'" name="providerTitle" placeholder="Your position here" maxlength="70" style="width: 75%; font-weight: bold; border: 0; outline: none; background: transparent; text-align: center;">

					</td>

					<td align="center" style="width: 16%;">
						<img src="{{cert_fields['logo']}}" style="width: 135px;">
					</td>

					<td style="width: 29%; text-align: center; color: #9F2B30; font-size: 16px; font-family: 'Alegreya Sans', sans-serif; padding-top: 39px; padding-right: 10px;">
						<input type="text" name="date" maxlength="30" style="width: 100%; border: 0; outline: none; background: transparent; border-bottom: 1px solid black; text-align: center;" ng-init="date_given='<% $cert_details -> date_given %>'" ng-model="date_given" disabled><br>
						<p style="font-size: 16px; font-weight: bold;">Date</p>
					</td>
					<td style="width: 13%;">
					</td>
				</tr>
			</table>
			<span ng-init="cert_fields['logo']=' <% $cert_fields['logo'] %>'"></span>
			<span ng-init="cert_fields['signature']=' <% $cert_fields['signature'] %>'"></span>
		</td>
	</tr>
</table>