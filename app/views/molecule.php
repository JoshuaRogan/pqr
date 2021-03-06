<!-- QR CODE MODAL--> 
<div class="modal fade" id="qrcodemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">QR Code</h4>
      </div>
      <div class="modal-body">
        <img class="img-responsive center-block" src="img/qrcode.png" alt="qr-image">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- QR CODE MODAL --> 

<div class="container">
	<div class="molecule row"> 
		<!-- Molecule name as h1 for SEO-->
		<h1 id="molecule-name">
			<a class="visible-xs-inline" href="#" data-toggle="modal" data-target="#qrcodemodal"><i class="fa fa-qrcode"></i></a> Methyl 2-Hydroxybenzoate
		</h1>


		<!--This is where the canvas/img/js will be for the molecule viewer (Using an image for tempalte--> 
		<div id="molecule-viewer" class="col-sm-12 col-md-7 col-md-push-5">
			<div class='viewer_3Dmoljs' data-href='data/mol2/meth.mol2' data-type='mol2' data-backgroundcolor='0xffffff' data-style='sphere'></div>
		</div>

		<section id="molecule-details"> 
			<div id="molecule-properties" class="col-sm-12 col-md-5 col-md-pull-7">
				<div class="panel panel-default">
					<!-- Default panel contents -->
					<div class="panel-heading">
						<h2>Properties <span class='pull-right properties-view-options'> <a href="#" id="simpleView">Simple</a> | <a href="#" id="detailedView">Detailed</a></span> </h2> 
					</div>

					<div class="panel-body">
						<p>Listed below are the properties for <strong>Methyl 2-Hydroxybenzoate</strong>.</p>
					</div>

					<!-- Table for all of the properties -->
					<table class="table">
						<thead> 

						</thead>

						<tbody> 
							
							<tr class="molecule-formula"> 
								<td>Formula<sup><a href="#" data-container="body" data-toggle="tooltip" title="Some tooltip text!"><i class="fa fa-question"></i></a></sup></td>
								<td>C<sub>8</sub>H<sub>8</sub>O<sub>3</sub></td> <!--Will use JS or tempalte engine for formatting--> 
							</tr>

							<tr class="molecule-iupac-name"> 
								<td>IUPAC Name<sup><a href="#" data-container="body" data-toggle="tooltip" title="Some tooltip text!"><i class="fa fa-question"></i></a></sup></td> 
								<td>methyl 2-hydroxybenzoate</td>
							</tr>

							<tr class="molecule-molecular-mass"> 
								<td>Molecular Mass<sup><a href="#" data-container="body" data-toggle="tooltip" title="Some tooltip text!"><i class="fa fa-question"></i></a></sup></td>
								<td>152.1494 g·mol<sup>−1</sup></td>
							</tr>

							<tr class="molecule-head-of-formation"> 
								<td>Heat of Formation<sup><a href="#" data-container="body" data-toggle="tooltip" title="Some tooltip text!"><i class="fa fa-question"></i></a></sup></td>
								<td>-502.14902 kJ·mol<sup>−1</sup></td>
							</tr>

							<tr class="molecule-dipole-movement"> 
								<td>Dipole Moment<sup><a href="#" data-container="body" data-toggle="tooltip" title="Some tooltip text!"><i class="fa fa-question"></i></a></sup></td>
								<td>
									&radic; (0.192<sup>2</sup> + 0.800<sup>2</sup> + -0.312<sup>2</sup>)
									<br/><em><small>Can use Mathjax to make this look nicer</small></em>
								</td>
							</tr>

							<tr class="molecule-doi"> 
								<td>D.O.I<sup><a href="#" data-container="body" data-toggle="tooltip" title="Some tooltip text!"><i class="fa fa-question"></i></a></sup></td>
								<td><a href="#"> dx.doi.org/10.1234/pqr-mlfhjehsliiphl-uhfffaoysa-n</td>
							</tr>

							<!-- Begin Detailed Section --> 
							<tr class="molecule-alt-names detailed"> 
								<td>Synonyms<sup><a href="#" data-container="body" data-toggle="tooltip" title="Some tooltip text!"><i class="fa fa-question"></i></a></sup></td> 
								<td>
									<ul class="list-inline">
										<li>methyl-salicylate</li>
										<li>Oil of wintergreen</li>
										<li>Betula oil</li>
										<li>Salicylic acid methyl ester</li>
										<li>Betula oil</li>
										<li>Betula oil</li>
										<li>Betula oil</li>
								</td>
							</tr>

							<tr class="molecule-cas-numbers detailed"> 
								<td>CAS Number(s)<sup><a href="#" data-container="body" data-toggle="tooltip" title="Some tooltip text!"><i class="fa fa-question"></i></a></sup></td> 
								<td>
									<ul class="list-inline">  
										<li>119-36-8</li>
							            <li>8022-86-4</li>
							            <li>8024-54-2</li>
									</ul>
								</td>
							</tr>

							<tr class="molecule-inchikey detailed"> 
								<td>inchikey<sup><a href="#" data-container="body" data-toggle="tooltip" title="Some tooltip text!"><i class="fa fa-question"></i></a></sup></td>
								<td>OSWPMRLSEDHDFF-UHFFFAOYSA-N</td> 
							</tr>

							<tr class="molecule-pg-symmetry detailed"> 
								<td>Point Group Symmetry<sup><a href="#" data-container="body" data-toggle="tooltip" title="Some tooltip text!"><i class="fa fa-question"></i></a></sup></td>
								<td>C<sub>1</sub></td> <!--Will use JS to automatically add subscripts --> 
							</tr>

							<tr class="molecule-volume detailed"> 
								<td>Volume<sup><a href="#" data-container="body" data-toggle="tooltip" title="Some tooltip text!"><i class="fa fa-question"></i></a></sup></td>
								<td>175.59 &#8491;<sup>3</sup></td> 
							</tr>

							<tr class="molecule-surface-area detailed"> 
								<td>Surface Area<sup><a href="#" data-container="body" data-toggle="tooltip" title="Some tooltip text!"><i class="fa fa-question"></i></a></sup></td>
								<td>175.59 &#8491;<sup>3</sup></td> 
							</tr>

							<tr class="molecule-homo-energy detailed"> 
								<td>Homo Energy<sup><a href="#" data-container="body" data-toggle="tooltip" title="Some tooltip text!"><i class="fa fa-question"></i></a></sup></td>
								<td>-9.512 eV</td> 
							</tr>

							<tr class="molecule-lumo-energy detailed"> 
								<td>LUMO Energy<sup><a href="#" data-container="body" data-toggle="tooltip" title="Some tooltip text!"><i class="fa fa-question"></i></a></sup></td>
								<td>-0.693 eV</td> 
							</tr>
							<!-- End Detailed Section --> 

							
							<tr class="molecule-qr-code"> 
								<td>Qr Code<sup><a href="#" data-container="body" data-toggle="tooltip" title="Generate a QR code for this molecule"><i class="fa fa-question"></i></a></sup></td>
								<td> <a href="#" data-toggle="modal" data-target="#qrcodemodal"> Generate QR Code </a></td> 
							</tr>


						</tbody>
					</table>



					
				</div>
			</div> 
		</section> <!-- End Properties Section --> 



	</div> <!-- End Molecule --> 

















</div>
