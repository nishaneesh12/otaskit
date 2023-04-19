
<aside class="main-sidebar sidebar-dark-light">
    <a href="" class="brand-link">
     
        <span class="brand-text font-weight-light">Nisha Interview</span>
    </a>
    <div class="sidebar"">  

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-compact nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-header text-md">OCIS</li>
                <li class="nav-item">
                    <a href="{{url('home')}}" class="nav-link {{ (request()->is('home')) ? 'active' : '' }}">
                        <i class="nav-icon fas fa-house-user"></i>
                        <p>Home</p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="" class="nav-link dev">
                        <i class="nav-icon fas fa-tools"></i>
                        <p>Employee<i class="fas fa-angle-up right"></i></p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                    <a href="{{url('Add_employee_detls')}}" class="nav-link {{ (request()->is('Add_employee_detls')) ? 'active' : '' }}">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>Add Employee</p>
                    </a>
                </li> 
                <li class="nav-item">
                    <a href="{{url('view_employee_detls')}}" class="nav-link {{ (request()->is('view_employee_detls')) ? 'active' : '' }}">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>View Employee</p>
                    </a>
                </li> 

                    </ul>
                </li>
                    
                <li class="nav-item has-treeview">
                    <a href="" class="nav-link dev">
                        <i class="nav-icon fas fa-tools"></i>
                        <p>Task<i class="fas fa-angle-up right"></i></p>
                    </a>

                    <ul class="nav nav-treeview">
               
                <li class="nav-item">
                    <a href="{{url('add_task')}}" class="nav-link {{ (request()->is('add_task')) ? 'active' : '' }}">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>Add Task</p>
                    </a>
                </li> 
                <li class="nav-item">
                    <a href="{{url('view_task')}}" class="nav-link {{ (request()->is('view_task')) ? 'active' : '' }}">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>View Task</p>
                    </a>
                </li>
                </ul>
                </li>
                <li class="nav-item">
                    <a href="{{url('assign_task')}}" class="nav-link {{ (request()->is('assign_task')) ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tools"></i>
                        <p>Assign Task</p>
                    </a>
                </li>
                
                    </ul>
                </li>
                
                 
  
           
            </ul>
        </nav>       
    </div>   
</aside>
