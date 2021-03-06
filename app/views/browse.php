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
     <div class="row clearfix" id="splash-search">
          <div class="col-md-12">
               <div class="jumbotron text-center">
                    <h2>Pitt Quantum Repository</h2>
                    <p>Enter your molecule name, inCHI key, or &lt;any ID&gt; </p>
                    
                    <form class="text-center form-inline" role="form">
                         <div class="input-group">
                              <input type="text" id="molec-query" class="form-control typeahead" autocomplete="off"  placeholder="Enter Query">
                              <span class="input-group-btn">
                                   <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                   </button>
                              </span>
                         </div>
                    </form>

                    <p id="num-compounds"><strong>PQR currently includes <span class="number">55,000</span> compounds in <span class="number">25</span> categories!</strong></p>
               </div>
          </div>
     </div>

     <!-- Molecule Browser -->
     <div class="row clearfix" id="molecule-browser">

          <div class="molecule-viwer row">
               <div class="col-md-4" class=""> 
                    <div class='viewer_3Dmoljs' data-href='data/mol2/meth.mol2' data-type='mol2' data-backgroundcolor='0xffffff' data-style='sphere'></div>
               </div>

               <div class="col-md-8 properties"> 
                    <h3><a href="/molecule" target="_blank">Methyl 2-Hydroxybenzoate</a></h3>
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

                                   
                                   <tr class="molecule-qr-code"> 
                                        <td>Qr Code<sup><a href="#" data-container="body" data-toggle="tooltip" title="Generate a QR code for this molecule"><i class="fa fa-question"></i></a></sup></td>
                                        <td> <a href="#" data-toggle="modal" data-target="#qrcodemodal"> Generate QR Code </a></td> 
                                   </tr>
                              </tbody>
                         </table>
               </div>
          </div>

          <div class="molecule-viwer row">
               <div class="col-md-4" class=""> 
                    <div class='viewer_3Dmoljs' data-href='data/mol2/temp.mol2' data-type='mol2' data-backgroundcolor='0xffffff' data-style='stick'></div>
               </div>

               <div class="col-md-8 properties"> 
                    <h3><a href="/molecule" target="_blank">Molecule Name</a></h3>
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

                                   
                                   <tr class="molecule-qr-code"> 
                                        <td>Qr Code<sup><a href="#" data-container="body" data-toggle="tooltip" title="Generate a QR code for this molecule"><i class="fa fa-question"></i></a></sup></td>
                                        <td> <a href="#" data-toggle="modal" data-target="#qrcodemodal"> Generate QR Code </a></td> 
                                   </tr>
                              </tbody>
                         </table>
               </div>
          </div>

          <div class="molecule-viwer row">
               <div class="col-md-4" class=""> 
                    <div class='viewer_3Dmoljs' data-href='data/mol2/temp2.mol2' data-type='mol2' data-backgroundcolor='0xffffff' data-style='sphere'></div>
               </div>

               <div class="col-md-8 properties"> 
                    <h3><a href="/molecule" target="_blank">Molecule Name</a></h3>
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

                                   
                                   <tr class="molecule-qr-code"> 
                                        <td>Qr Code<sup><a href="#" data-container="body" data-toggle="tooltip" title="Generate a QR code for this molecule"><i class="fa fa-question"></i></a></sup></td>
                                        <td> <a href="#" data-toggle="modal" data-target="#qrcodemodal"> Generate QR Code </a></td> 
                                   </tr>
                              </tbody>
                         </table>
               </div>
          </div>

          <div class="molecule-viwer row">
               <div class="col-md-4" class=""> 
                    <div class='viewer_3Dmoljs' data-href='data/mol2/meth.mol2' data-type='mol2' data-backgroundcolor='0xffffff' data-style='stick'></div>
               </div>

               <div class="col-md-8 properties"> 
                    <h3><a href="/molecule" target="_blank">Molecule Name</a></h3>
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

                                   
                                   <tr class="molecule-qr-code"> 
                                        <td>Qr Code<sup><a href="#" data-container="body" data-toggle="tooltip" title="Generate a QR code for this molecule"><i class="fa fa-question"></i></a></sup></td>
                                        <td> <a href="#" data-toggle="modal" data-target="#qrcodemodal"> Generate QR Code </a></td> 
                                   </tr>
                              </tbody>
                         </table>
               </div>
          </div>


     </div>


</div>