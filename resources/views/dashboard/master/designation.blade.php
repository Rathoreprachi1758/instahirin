<x-header data="designation component"/>
<link rel="stylesheet" href="{{ asset('css/css/master_tab.css') }}">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script>
   $(document).ready(function(){
      $('#designation').DataTable();
   });
</script>
<div class="fr-section" style="margin-top: -72px">
   <div class="fr-section_detail ">
       <div class="dashboard_innerPages">
           <div class="custom_tabs_section">
               <div class="custom_tittle descriptionTxt">
                   <h4>Master</h4>
                   <p><strong>Description:</strong> Keep track of all company master details including employee
                       designations, shift information, category of employees, and <br> their configurations. Also
                       able to oversee leave master with holiday details.</p>
               </div>
               <div class="custom_tabs">
                   <ul>
                       <li><a href="{{ route('master.index') }}">Company</a></li>
                       <li><a href="{{route('department.index')}}">Department</a></li>
                       <li><a href="{{route('master.designation')}}" class="active">Designation</a></li>
                       <li><a href="{{route('master.shift_master')}}">Shift Master Daily</a></li>
                       <li><a href="{{route('master.category')}}">Category</a></li>
                       <li><a href="{{route('master.emp_master')}}">Employee Master</a></li>
                       <li><a href="{{route('master.shift_config')}}">Employee Configuration</a></li>
                       <li><a href="{{route('master.master_data')}}">Import/Export - Excel</a></li>
                       <li><a href="{{route('master.master_leave')}}">Leave</a></li>
                       <li><a href="{{route('master.master_holiday')}}">Holiday</a></li>
                   </ul>
               </div>
               {{-- // --}}
               <div class="custom_tabs_data" id="tab3" style="display: block;">
                  <div class="masterTab_bg">
                      <div class="masterTab_data">
                          <div class="custom_tittle">
                              <h5>Designation Master</h5>
                          </div>
                          <div class="sorting_nav" style="margin-left: 165px;margin-bottom: -46px">
                           <div class="showSort">
                               <div class="allSelect">
                                   <strong class="entitiesSelect">Select Company</strong>
                                   <div class="showSort_select seleComp">
                                       <select class="fav_show">
                                           <option value="Yes">Yes</option>
                                           <option value="No">No</option> 
                                       </select>
                                   </div>
                               </div>

                               <div class="allSelect">
                                   <strong class="entitiesSelect">Select Department</strong>
                                   <div class="showSort_select seleComp">
                                       <select class="fav_show">
                                           <option value="Yes">Yes</option>
                                           <option value="No">No</option> 
                                       </select>
                                   </div>
                               </div>
                           </div>
                       </div>
                          <div class="masterTable">
                              <div class="row">
                                  <div class="col-xxl-12 ">
                                      <div class="masterTable_data">
                                          <table class="table" id="designation">
                                              <thead>
                                              <tr>
                                                  <th><h6 class="text-left">Designation ID</h6></th>
                                                  <th width="550"><h6>Designation Name</h6></th>
                                                  <th><h6>Action</h6></th> 
                                              </tr>
                                              </thead>
                                              <tbody>
                                              <tr>
                                                  <td><div class="tabletext"><p class="pl-3">01</p></div></td>
                                                  <td><div class="tabletext"><p>UX Designer</p></div></td> 
                                                  <td>
                                                      <div class="actionBtns">
                                                          <button class="actBtn"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                                          <button class="actBtn"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                                      </div>
                                                  </td>  
                                              </tr> 
                                              
                                              <tr>
                                                  <td><div class="tabletext"><p class="pl-3">02</p></div></td>
                                                  <td><div class="tabletext"><p>Python Developer</p></div></td> 
                                                  <td>
                                                      <div class="actionBtns">
                                                          <button class="actBtn"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                                          <button class="actBtn"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                                      </div>
                                                  </td>  
                                              </tr> 

                                              <tr>
                                                  <td><div class="tabletext"><p class="pl-3">03</p></div></td>
                                                  <td><div class="tabletext"><p>App Developer</p></div></td> 
                                                  <td>
                                                      <div class="actionBtns">
                                                          <button class="actBtn"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                                          <button class="actBtn"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                                      </div>
                                                  </td>  
                                              </tr> 
                                              </tbody>
                                          </table>
                                      </div>
                                  </div>
                              </div>
                          </div>


                          <div class="table_actions">
                              <div class="row align-items-center">
                                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 "> 
                                      <div class="table_actionsBtns">
                                          <button class="tb_actionBtn">Add</button>
                                          <button class="tb_actionBtn">Exit</button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
         </div>
      </div> 
   </div> 
</div>