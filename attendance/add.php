                      <?php 
                       if (!isset($_SESSION['ACCOUNT_ID'])){
                          redirect(web_root."admin/index.php");
                         }

                    

                       ?> 

 <section id="feature" class="transparent-bg">
        <div class="container">
           <div class="center wow fadeInDown">
                 <h2 class="page-header">Add New Candidate</h2>
              

            <div class="row">
                <div class="features">

                        <form class="form-horizontal span6 " action="controller.php?action=add" method="POST"> 
                             <div class="form-group">
                              <div class="col-md-8">
                                <label class="col-md-4 control-label" for=
                                "StudentID">Candidates :</label>

                                <div class="col-md-8">

                                  <select class="form-control select2" name="StudentID">
                                    <option>Select</option>
                                      <?php 
                                          $query = "SELECT * FROM  tblstudent WHERE Cand_Status != 'Candidate'";
                                          $mydb->setQuery($query);
                                          $cur = $mydb->loadResultList();

                                        foreach ($cur as $result) {
                                          echo '<option value='.$result->StudentID.'>'.$result->Lastname.', '.$result->Firstname.'</option>';

                                        }
                                        ?>
                                  </select>
                                   
                                </div>
                              </div>
                            </div>
 
                            <div class="form-group">
                              <div class="col-md-8">
                                <label class="col-md-4 control-label" for=
                                "Position">Position:</label>

                                <div class="col-md-8">
                                   <select class="form-control select2" name="Position">
                                      <option>Select</option>
                                      <option value="President">President</option>
                                      <option value="Vice-President">Vice-President</option>
                                      <option value="Secretary">Secretary</option>
                                      <option value="Treasurer">Treasurer</option>   
                                      <option value="Senators">Senators</option>
                                  </select>
                                  
                                </div>
                              </div>
                            </div>


                             <div class="form-group">
                              <div class="col-md-8">
                                <label class="col-md-4 control-label" for=
                                "PartyList">Party List:</label>

                                <div class="col-md-8">
                                  
                                   <input class="form-control input-sm" id="PartyList" name="PartyList" placeholder=
                                      "Party List" type="any" value="" required>
                                </div>
                              </div>
                            </div> 
 
                             <div class="form-group">
                              <div class="col-md-8">
                                <label class="col-md-4 control-label" for=
                                "RunningDate">Date of Candidacy:</label>
           
                                <div class="col-md-8">
                                   <div class="input-group" id=""> 
                                        <div class="input-group-addon"> 
                                          <i class="fa fa-calendar"></i>
                                        </div>
                                        <input id="datemask2" name="RunningDate"  value="" type="text" class="form-control " size="7" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask>
                                      </div>
                                </div>
                              </div>
                            </div>  
                         
                       <div class="form-group">
                              <div class="col-md-8">
                                <label class="col-md-4 control-label" for=
                                "idno"></label>

                                <div class="col-md-8">
                                 <button class="btn btn-primary btn-sm" name="save" type="submit" ><span class="fa fa-save fw-fa"></span>  Save</button> 
                                  
                                 </div>
                              </div>
                            </div> 
                  </form>
       
                
                </div>
            </div>
        </div>
    </section>
 

    <section id="bottom">
        <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
        
        </div> 
  </section>
