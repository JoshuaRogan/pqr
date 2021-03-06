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

     <div class="row">
          <div class="col-md-6">
               <h2> Welcome to Pitt Quantum Repository! </h2>
               <p> Check out the molecule of the week, news, links, or search for a molecule above. </p>
               <div class="list-group other-content">
                    <a href="#" class="list-group-item"><span class="badge">New</span><i class="fa fa-newspaper-o"></i> Cras justo odio</a>
                    <a href="#" class="list-group-item"><span class="badge">New</span><i class="fa fa-link"></i> Dapibus ac facilisis in</a>
                    <a href="#" class="list-group-item"><i class="fa fa-newspaper-o"></i> Morbi leo risus</a>
                    <a href="#" class="list-group-item"><i class="fa fa-newspaper-o"></i> Porta ac consectetur ac</a>
                    <a href="#" class="list-group-item"><i class="fa fa-link"></i> Vestibulum at eros</a>
                    <a href="#" class="list-group-item"><i class="fa fa-newspaper-o"></i> Morbi leo risus</a>
                    <a href="#" class="list-group-item"><i class="fa fa-link"></i> Porta ac consectetur ac</a>
                    <a href="#" class="list-group-item"><i class="fa fa-newspaper-o"></i> Cras justo odio</a>
                    <a href="#" class="list-group-item"><i class="fa fa-link"></i> Dapibus ac facilisis in</a>
               </div>
          </div>


          <div id="molecule-of-the-week" class="col-md-6">
               <h2> Molecule of the Week </h2>
               <p> Explore new molecules weekly via the molecule of the week module! Click the molecule name to get more information.  </p>
               <h3> <a href="/molecule"> Methyl 2-Hydroxybenzoate </a></h3>

               <div id="molecule-viewer">
                    <div class='viewer_3Dmoljs' data-href='data/mol2/meth.mol2' data-type='mol2' data-backgroundcolor='0xffffff' data-style='sphere'></div>
               </div>


          </div>

     </div>



</div>
