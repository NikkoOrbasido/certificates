<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Rouge+Script|Vollkorn|Vollkorn+SC" rel="stylesheet"> 



<style type="text/css">
	u {
		text-decoration: none;
		padding-top: 0;
		border-bottom: 2px solid black;
	}
	.input-file-container {
	  position: relative;
	  width: 225px;
	} 
	.js .input-file-trigger {
	  display: block;
	  padding: 14px 45px;
	  background: #39D2B4;
	  color: #fff;
	  font-size: 1em;
	  transition: all .4s;
	  cursor: pointer;
	}
	.js .input-file {
	  position: absolute;
	  top: 0; left: 0;
	  width: 225px;
	  opacity: 0;
	  padding: 14px 0;
	  cursor: pointer;
	}
	.js .input-file:hover + .input-file-trigger,
	.js .input-file:focus + .input-file-trigger,
	.js .input-file-trigger:hover,
	.js .input-file-trigger:focus {
	  background: #34495E;
	  color: #39D2B4;
	}

	.file-return {
	  margin: 0;
	}
	.file-return:not(:empty) {
	  margin: 1em 0;
	}
	.js .file-return {
	  font-style: italic;
	  font-size: .9em;
	  font-weight: bold;
	}
	.js .file-return:not(:empty):before {
	  content: "Selected file: ";
	  font-style: normal;
	  font-weight: normal;
	}
	#input-1 {
  position: absolute; 
  top: 41px; 
  right: 20px; 
  font-size: 14px; 
  padding: 10px;
	}
	#input-2 {
  position: absolute; 
  top: 120px; 
  right: 20px; 
  font-size: 14px; 
  padding: 10px;
	}
	#input-3 {
  position: absolute; 
  top: 199px; 
  right: 20px; 
  font-size: 14px; 
  padding: 10px;
	}
	#input-4 {
  position: absolute; 
  top: 278px; 
  right: 20px; 
  font-size: 14px; 
  padding: 10px;
}
#input-5 {
  position: absolute; 
  top: 359px; 
  right: 20px; 
  font-size: 14px; 
  padding: 10px;
}
#input-6 {
  position: absolute; 
  top: 438px; 
  right: 20px; 
  font-size: 14px; 
  padding: 10px;
}
#input-7 {
  position: absolute; 
  top: 517px; 
  right: 20px; 
  font-size: 14px; 
  padding: 10px;
}
#input-8 {
  position: absolute; 
  top: 596px; 
  right: 20px; 
  font-size: 14px; 
  padding: 10px;
}
</style>

<div class="panel panel-default">
	<div class="panel-body">
		<form>		
			<div class="form-group">
			  <p>Certificate Title</p>
			  <input ng-model="cert_fields['heading']" type="text" class="form-control" maxlength="30" required>
			  <span id="input-1" class="label label-info">{{30 - cert_fields['heading'].length}}</span>
			</div>
			<div class="form-group">
		  	<p>Subheading</p>
		  	<input ng-model="cert_fields['subheading']" type="text" class="form-control" maxlength="45" required>
		  	<span id="input-2" class="label label-info">{{45 - cert_fields['subheading'].length}}</span>
			</div>
			<div class="form-group">
		  	<p>Name of Student</p>
		  	<input ng-init="recipient_name='<% $studentName %>'" type="text" class="form-control" maxlength="45" ng-model="recipient_name" required >
		  	<span id="input-3" class="label label-info">{{45 - recipient_name.length}}</span>
			</div>
			<div class="form-group">
		  	<p>Postheading</p>
		  	<input ng-model="cert_fields['postheading']" type="text" class="form-control" maxlength="50" required>
		  	<span id="input-4" class="label label-info">{{50 - cert_fields['postheading'].length}}</span>
			</div>
			<div class="form-group"  ng-init="ownSignature=true" >
		      <p>Signature &nbsp; 
		       <input type="checkbox" value="" name="ownSignature" ng-model="useOwnSignature"  class="radioBtn" id="ownSignature" ng-click="showUploadSignature();"> Use my own signature 
		      </p>
		      <input ng-model="cert_fields['signature']"   ng-init="cert_fields['signature']=''"  type="text" class="form-control" maxlength="25"  ng-show="ownSignature"  >
		      <span id="input-5" class="label label-info" ng-show="ownSignature">{{25 - cert_fields['signature'].length}}</span>
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
		  	<input ng-init="provider='<% $teacherName %>'" type="text" class="form-control" maxlength="30" ng-model="provider" required >
		  	<span id="input-6" class="label label-info">{{30 - provider.length}}</span>
			</div>
			<div class="form-group">
		  	<p>Position</p>
		  	<input ng-model="cert_fields['providerTitle']" type="text" class="form-control" maxlength="20" required>
		  	<span id="input-7" class="label label-info">{{20 - cert_fields['providerTitle'].length}}</span>
			</div>
			<div class="form-group">
		  	<p>Date</p>
		  	<input ng-model="date_given" type="text" class="form-control" maxlength="20"  ng-init="date_given='<% date('F j, Y')%>'" required>
		  	<span id="input-8" class="label label-info">{{20 - date_given.length}}</span>
			</div>

			<div class="form-group">
			    <p>Certificate Logo (optional)</p>
			    <div class="form-group">
			    	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#logoList">
			  			Browse
			  		</button>
			    </div>
			      <p class="file-return" ></p>
			</div>

		</form>
	</div>
</div>

	

<table align="center" role="presentation" aria-hidden="true" cellspacing="0" cellpadding="0" border="0" style="width:847px; height: 585px; border-collapse: collapse; background-image: url('https://gallery.yopriceville.com/var/resizes/Free-Clipart-Pictures/Certificate-Templates/Blue_and_White_Certificate_Template_PNG_Image.png?m=1441076101'); background-repeat: no-repeat;  background-size: 847px 585px;">

	<tr>
		<td>
			<table align="center" role="presentation" aria-hidden="true" cellspacing="0" cellpadding="0" border="0" style="margin-bottom: 20px; margin-top: 0; padding-top: 0;">
				<tr>
					<td colspan="5" style="text-align: center; padding: 0; margin: 0;">
           				<span ng-init="cert_fields['logo']='/assets/img/certificates/logo/angel-rosebernados-s3r5m5879/1513060060_logo.png'"></span>
						<img id="logo" src="{{cert_fields['logo']}}" style="width: 135px"  ng-model="cert_fields['logo']">
					</td>
				</tr>
				<tr>
					<td colspan="5" style="text-align: center; color: #fd6e35; font-size: 75px; font-family: 'Rouge Script', cursive; font-style: italic; padding: 0; margin: 0;">
						<input type="text" name="cert_fields['heading']" ng-model="cert_fields['heading']" placeholder="Certificate title" style="color: #4b783a; width: 700px; border: 0; outline: none; text-align: center; background: transparent;" disabled> <!-- {{Heading}} -->
					</td>
				</tr>
				<tr>
					<td colspan="5" style="text-align: center; color: #0f1b3e; font-size: 24px; font-family: 'Vollkorn SC', serif;">
						<input type="text" name="cert_fields['subheading']" ng-model="cert_fields['subheading']" placeholder="Subheading" style="width: 700px; border: 0; outline: none; text-align: center; background: transparent;" disabled> <!-- {{Subheading}} -->
					</td>
				</tr>
				<tr>
					<td colspan="5" style="text-align: center; color: black; font-size: 31px; font-family: 'Vollkorn', serif;">
						<input type="text" name="recipient_name" ng-model="recipient_name"  placeholder="Student Name" style="width: 700px; border: 0; outline: none; text-align: center; background: transparent;" disabled><!-- {{Recipient}} -->
					</td>
				</tr>
				<tr>
					<td colspan="5" style="text-align: center; color: #0f1b3e; font-size: 24px; font-family: 'Vollkorn SC', serif;">
						<input type="text" name="cert_fields['postheading']" ng-model="cert_fields['postheading']" placeholder="Postheading" style="width: 700px; border: 0; outline: none; text-align: center; background: transparent;" disabled><!-- {{Postheading}} -->
					</td>
				</tr>
			</table>

			<table align="center" role="presentation" aria-hidden="true" cellspacing="0" cellpadding="0" border="0" style="margin-bottom: 55px;">
				<tr>
					

					<td style="width: 40%; text-align: center; color: #9F2B30; font-size: 16px; font-family: 'Alegreya Sans', sans-serif; padding-top: 17px; padding-left: 50px;">

						<input type="text" ng-hide="useOwnSignature"  name="cert_fields['signature']" ng-model="cert_fields['signature']" ng-show="ownSignature" placeholder="Signature" style="position: absolute; width: 30%; font-size: 25px; border: 0; outline: none; background: transparent; text-align: center; font-family: 'Great Vibes', cursive; bottom: 195px; left: 120px;" disabled>

						<img id="signature" src="{{cert_fields['signature']}}" ng-show="useOwnSignature" class="file-return" style="position: absolute; left: 178px; bottom: 165px; width: 135px;" ng-model="cert_fields['signature']">


						<input type="text" name="provider" ng-model="provider" placeholder="Teacher Name" style="width: 220px; border: 0; outline: none; background: transparent; border-bottom: 1px solid black; text-align: center;" disabled><br>
						<input type="text" name="cert_fields['providerTitle']" ng-model="cert_fields['providerTitle']" placeholder="Position" style="width: 100%; font-weight: bold; border: 0; outline: none; background: transparent; text-align: center;" disabled>
					</td>

					<td align="center" style="width: 20%;">
						
					</td>

					<td style="width: 40%; text-align: center; color: #9F2B30; font-size: 16px; font-family: 'Alegreya Sans', sans-serif; padding-top: 16px; padding-right: 50px;">
						<input type="text" name="date_given" ng-model="date_given" style="width: 220px; border: 0; outline: none; background: transparent; border-bottom: 1px solid black; text-align: center;" disabled><br>
						<p style="font-size: 16px; font-weight: bold;">Date</p>
					</td>

					
				</tr>
			</table>
		</td>
	</tr>
</table>
<br>



