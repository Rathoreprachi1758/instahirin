<x-header data="import component"/>
<link rel="stylesheet" href="{{ asset('css/css/master_tab.css') }}">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script>
   $(document).ready(function(){
      $('#shift_import').DataTable();
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
                       <li><a href="{{route('master.company')}}">Company</a></li>
                       <li><a href="{{route('master.department')}}">Department</a></li>
                       <li><a href="{{route('master.designation')}}">Designation</a></li>
                       <li><a href="{{route('master.shift_master')}}">Shift Master Daily</a></li>
                       <li><a href="{{route('master.category')}}">Category</a></li>
                       <li><a href="{{route('master.emp_master')}}">Employee Master</a></li>
                       <li><a href="{{route('master.shift_config')}}">Employee Configuration</a></li>
                       <li><a href="{{route('master.master_data')}}" class="active">Import/Export - Excel</a></li>
                       <li><a href="{{route('master.master_leave')}}">Leave</a></li>
                       <li><a href="{{route('master.master_holiday')}}">Holiday</a></li>
                   </ul>
               </div>
            </div>
         </div>
      </div> 
   </div> 
</div>