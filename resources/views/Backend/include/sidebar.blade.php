<aside class="left-sidebar" data-sidebarbg="skin5">
  <!-- Sidebar scroll-->
  <div class="scroll-sidebar">
      <!-- Sidebar navigation-->

      {{-- Category Management Menu --}}
      <nav class="sidebar-nav">
          <ul id="sidebarnav" class="p-t-30">
            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Category Management </span></a>
                <ul aria-expanded="false" class="collapse  first-level">
                <li class="sidebar-item"><a href="{{route('createCategory')}}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Create Category </span></a></li>
                    <li class="sidebar-item"><a href="{{route('manageCategory')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Manage Category </span></a></li>
                </ul>
            </li>
             {{-- Add Image  --}}   
             <ul id="sidebarnav" class="p-t-30">
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Advertise Management </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                    <li class="sidebar-item"><a href="{{route('createImage')}}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Create Advertise </span></a></li>
                        <li class="sidebar-item"><a href="{{route('manageImage')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Manage Advertise </span></a></li>
                    </ul>
             </li>

             {{-- Add Cintact info  --}}   
             <ul id="sidebarnav" class="p-t-30">
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Contact Management </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                    <li class="sidebar-item"><a href="{{route('createContact')}}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Create Contact Info </span></a></li>
                        <li class="sidebar-item"><a href="{{route('manageContact')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Manage Contact Info </span></a></li>
                    </ul>
             </li>
           
              
          </ul>

          <ul id="sidebarnav" class="p-t-30">
            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Newsletter Email </span></a>
                <ul aria-expanded="false" class="collapse  first-level">
                <li class="sidebar-item"><a href="{{route('letter')}}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Subscribed Mail </span></a></li>
                   
                </ul>
         </li>
       
          
      </ul>
     
              
          
      </nav>
      <!-- End Sidebar navigation -->
  </div>
  <!-- End Sidebar scroll-->
</aside>