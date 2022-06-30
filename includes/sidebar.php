        <ul class="nav navbar-nav side-nav">
            <li style="margin-bottom: 200px !important;margin-top: -20px !important;">
                <a class="navbar-brand" href="http://localhost/construction_pms"><img width="207px;" style="margin-left: -7px !important;height: 240px !important;" src="http://localhost/construction_pms/images/logo.jpg"><b></b></a>
            </li>
                    <li>
                        <a href="index.php?page=home"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                   
                    <li class=''>
                        <a href="index.php?page=employee&io=1"><i class="fa fa-fw fa-users"></i> students List</a>
                    </li>
                    <li>
                        <a href="index.php?page=project_list&io=1"><i class="fa fa-fw fa-folder"></i> Project List</a>
                    </li>
                <?php if($_SESSION['TYPE'] == 1): ?>
                    <li class=''>
                    <a href="index.php?page=user_list&io=1"><i class="fa fa-users"></i> Users</a>
                    </li>
                <?php endif; ?>
            <li>
                <a href="index.php?page=position"><i class="fa fa-fw fa-check-circle"></i>Position</a>
            </li>

            <li>
                <a href="index.php?page=division"><i class="fa fa-fw fa-file-o"></i>Project Divisions</a>
            </li>
            <li style="">
                <a href="index.php?page=project_team"><i class="fa fa-fw fa-users"></i>Project Team</a>
            </li>
            <li style="">
                <a href="http://localhost:8080/" target="_blank" ><i class="fa fa-fw fa-tasks"></i>Task Manager</a>
            </li>

    </ul>
<script>
    var _h = location.href  
        $('.side-nav a').each(function(){
            if(_h.includes($(this).attr("href")) == true){
                $(this).closest('li').addClass('active')
            }
        })
</script>