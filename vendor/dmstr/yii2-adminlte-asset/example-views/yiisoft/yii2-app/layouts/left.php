<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            
            
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => 'Vehicle Informations', 'icon' => 'file-code-o', 'url' => ['/vehicleinformation']],
                    ['label' => 'Bill ', 'icon' => 'dashboard', 'url' => ['/billupload']],
                    ['label' => 'Project Registers', 'icon' => 'file-code-o', 'url' => ['/projectregister']],
                    ['label' => 'Bank Gurantees ', 'icon' => 'dashboard', 'url' => ['/bankgurantee']],
                    ['label' => 'Running Project IPC ', 'icon' => 'dashboard', 'url' => ['/runningprojectipc']],
                    ['label' => 'Project Status ', 'icon' => 'dashboard', 'url' => ['/site/projectstatus']],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    
                ],
            ]
        ) ?>

    </section>

</aside>
