@extends('layouts.main')

@section('admin', $user->name)
@section('conteudo')
<div class="content-header">
        <div class="header-section">
            <h1>
                <i class="fa fa-table"></i>Datatables<br><small>HTML tables can become fully dynamic with cool features!</small>
            </h1>
        </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li>Tables</li>
        <li><a href="">Datatables</a></li>
    </ul>
    <!-- END Datatables Header -->

    <!-- Datatables Content -->
    <div class="block full">
        <div class="block-title">
            <h2><strong>Datatables</strong> integration</h2>
        </div>
        <p><a href="https://datatables.net/" target="_blank">DataTables</a> is a plug-in for the Jquery Javascript library. It is a highly flexible tool, based upon the foundations of progressive enhancement, which will add advanced interaction controls to any HTML table. It is integrated with template's design and it offers many features such as on-the-fly filtering and variable length pagination.</p>

        <div class="table-responsive">
            <table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center"><i class="gi gi-user"></i></th>
                        <th>Client</th>
                        <th>Email</th>
                        <th>Subscription</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">1</td>
                        <td class="text-center"><img src="img/placeholders/avatars/avatar15.jpg" alt="avatar" class="img-circle"></td>
                        <td><a href="/perfilJogador">client1</a></td>
                        <td>client1@company.com</td>
                        <td><span class="label label-info">Business</span></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">2</td>
                        <td class="text-center"><img src="img/placeholders/avatars/avatar2.jpg" alt="avatar" class="img-circle"></td>
                        <td><a href="javascript:void(0)">client2</a></td>
                        <td>client2@company.com</td>
                        <td><span class="label label-primary">Personal</span></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">3</td>
                        <td class="text-center"><img src="img/placeholders/avatars/avatar7.jpg" alt="avatar" class="img-circle"></td>
                        <td><a href="javascript:void(0)">client3</a></td>
                        <td>client3@company.com</td>
                        <td><span class="label label-info">Business</span></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">4</td>
                        <td class="text-center"><img src="img/placeholders/avatars/avatar2.jpg" alt="avatar" class="img-circle"></td>
                        <td><a href="javascript:void(0)">client4</a></td>
                        <td>client4@company.com</td>
                        <td><span class="label label-info">Business</span></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">5</td>
                        <td class="text-center"><img src="img/placeholders/avatars/avatar6.jpg" alt="avatar" class="img-circle"></td>
                        <td><a href="javascript:void(0)">client5</a></td>
                        <td>client5@company.com</td>
                        <td><span class="label label-info">Business</span></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">6</td>
                        <td class="text-center"><img src="img/placeholders/avatars/avatar13.jpg" alt="avatar" class="img-circle"></td>
                        <td><a href="javascript:void(0)">client6</a></td>
                        <td>client6@company.com</td>
                        <td><span class="label label-success">VIP</span></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">7</td>
                        <td class="text-center"><img src="img/placeholders/avatars/avatar8.jpg" alt="avatar" class="img-circle"></td>
                        <td><a href="javascript:void(0)">client7</a></td>
                        <td>client7@company.com</td>
                        <td><span class="label label-warning">Trial</span></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">8</td>
                        <td class="text-center"><img src="img/placeholders/avatars/avatar11.jpg" alt="avatar" class="img-circle"></td>
                        <td><a href="javascript:void(0)">client8</a></td>
                        <td>client8@company.com</td>
                        <td><span class="label label-success">VIP</span></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">9</td>
                        <td class="text-center"><img src="img/placeholders/avatars/avatar4.jpg" alt="avatar" class="img-circle"></td>
                        <td><a href="javascript:void(0)">client9</a></td>
                        <td>client9@company.com</td>
                        <td><span class="label label-warning">Trial</span></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">10</td>
                        <td class="text-center"><img src="img/placeholders/avatars/avatar14.jpg" alt="avatar" class="img-circle"></td>
                        <td><a href="javascript:void(0)">client10</a></td>
                        <td>client10@company.com</td>
                        <td><span class="label label-warning">Trial</span></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">11</td>
                        <td class="text-center"><img src="img/placeholders/avatars/avatar7.jpg" alt="avatar" class="img-circle"></td>
                        <td><a href="javascript:void(0)">client11</a></td>
                        <td>client11@company.com</td>
                        <td><span class="label label-info">Business</span></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">12</td>
                        <td class="text-center"><img src="img/placeholders/avatars/avatar15.jpg" alt="avatar" class="img-circle"></td>
                        <td><a href="javascript:void(0)">client12</a></td>
                        <td>client12@company.com</td>
                        <td><span class="label label-success">VIP</span></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">13</td>
                        <td class="text-center"><img src="img/placeholders/avatars/avatar6.jpg" alt="avatar" class="img-circle"></td>
                        <td><a href="javascript:void(0)">client13</a></td>
                        <td>client13@company.com</td>
                        <td><span class="label label-success">VIP</span></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">14</td>
                        <td class="text-center"><img src="img/placeholders/avatars/avatar1.jpg" alt="avatar" class="img-circle"></td>
                        <td><a href="javascript:void(0)">client14</a></td>
                        <td>client14@company.com</td>
                        <td><span class="label label-success">VIP</span></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">15</td>
                        <td class="text-center"><img src="img/placeholders/avatars/avatar14.jpg" alt="avatar" class="img-circle"></td>
                        <td><a href="javascript:void(0)">client15</a></td>
                        <td>client15@company.com</td>
                        <td><span class="label label-warning">Trial</span></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">16</td>
                        <td class="text-center"><img src="img/placeholders/avatars/avatar12.jpg" alt="avatar" class="img-circle"></td>
                        <td><a href="javascript:void(0)">client16</a></td>
                        <td>client16@company.com</td>
                        <td><span class="label label-success">VIP</span></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">17</td>
                        <td class="text-center"><img src="img/placeholders/avatars/avatar7.jpg" alt="avatar" class="img-circle"></td>
                        <td><a href="javascript:void(0)">client17</a></td>
                        <td>client17@company.com</td>
                        <td><span class="label label-success">VIP</span></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">18</td>
                        <td class="text-center"><img src="img/placeholders/avatars/avatar3.jpg" alt="avatar" class="img-circle"></td>
                        <td><a href="javascript:void(0)">client18</a></td>
                        <td>client18@company.com</td>
                        <td><span class="label label-warning">Trial</span></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">19</td>
                        <td class="text-center"><img src="img/placeholders/avatars/avatar12.jpg" alt="avatar" class="img-circle"></td>
                        <td><a href="javascript:void(0)">client19</a></td>
                        <td>client19@company.com</td>
                        <td><span class="label label-success">VIP</span></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">20</td>
                        <td class="text-center"><img src="img/placeholders/avatars/avatar14.jpg" alt="avatar" class="img-circle"></td>
                        <td><a href="javascript:void(0)">client20</a></td>
                        <td>client20@company.com</td>
                        <td><span class="label label-success">VIP</span></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">21</td>
                        <td class="text-center"><img src="img/placeholders/avatars/avatar3.jpg" alt="avatar" class="img-circle"></td>
                        <td><a href="javascript:void(0)">client21</a></td>
                        <td>client21@company.com</td>
                        <td><span class="label label-warning">Trial</span></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">22</td>
                        <td class="text-center"><img src="img/placeholders/avatars/avatar15.jpg" alt="avatar" class="img-circle"></td>
                        <td><a href="javascript:void(0)">client22</a></td>
                        <td>client22@company.com</td>
                        <td><span class="label label-primary">Personal</span></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">23</td>
                        <td class="text-center"><img src="img/placeholders/avatars/avatar10.jpg" alt="avatar" class="img-circle"></td>
                        <td><a href="javascript:void(0)">client23</a></td>
                        <td>client23@company.com</td>
                        <td><span class="label label-primary">Personal</span></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">24</td>
                        <td class="text-center"><img src="img/placeholders/avatars/avatar15.jpg" alt="avatar" class="img-circle"></td>
                        <td><a href="javascript:void(0)">client24</a></td>
                        <td>client24@company.com</td>
                        <td><span class="label label-info">Business</span></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">25</td>
                        <td class="text-center"><img src="img/placeholders/avatars/avatar7.jpg" alt="avatar" class="img-circle"></td>
                        <td><a href="javascript:void(0)">client25</a></td>
                        <td>client25@company.com</td>
                        <td><span class="label label-primary">Personal</span></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">26</td>
                        <td class="text-center"><img src="img/placeholders/avatars/avatar1.jpg" alt="avatar" class="img-circle"></td>
                        <td><a href="javascript:void(0)">client26</a></td>
                        <td>client26@company.com</td>
                        <td><span class="label label-warning">Trial</span></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">27</td>
                        <td class="text-center"><img src="img/placeholders/avatars/avatar6.jpg" alt="avatar" class="img-circle"></td>
                        <td><a href="javascript:void(0)">client27</a></td>
                        <td>client27@company.com</td>
                        <td><span class="label label-success">VIP</span></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">28</td>
                        <td class="text-center"><img src="img/placeholders/avatars/avatar13.jpg" alt="avatar" class="img-circle"></td>
                        <td><a href="javascript:void(0)">client28</a></td>
                        <td>client28@company.com</td>
                        <td><span class="label label-success">VIP</span></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">29</td>
                        <td class="text-center"><img src="img/placeholders/avatars/avatar14.jpg" alt="avatar" class="img-circle"></td>
                        <td><a href="javascript:void(0)">client29</a></td>
                        <td>client29@company.com</td>
                        <td><span class="label label-info">Business</span></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">30</td>
                        <td class="text-center"><img src="img/placeholders/avatars/avatar6.jpg" alt="avatar" class="img-circle"></td>
                        <td><a href="javascript:void(0)">client30</a></td>
                        <td>client30@company.com</td>
                        <td><span class="label label-success">VIP</span></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">31</td>
                        <td class="text-center"><img src="img/placeholders/avatars/avatar11.jpg" alt="avatar" class="img-circle"></td>
                        <td><a href="javascript:void(0)">client31</a></td>
                        <td>client31@company.com</td>
                        <td><span class="label label-primary">Personal</span></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">32</td>
                        <td class="text-center"><img src="img/placeholders/avatars/avatar4.jpg" alt="avatar" class="img-circle"></td>
                        <td><a href="javascript:void(0)">client32</a></td>
                        <td>client32@company.com</td>
                        <td><span class="label label-warning">Trial</span></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">33</td>
                        <td class="text-center"><img src="img/placeholders/avatars/avatar4.jpg" alt="avatar" class="img-circle"></td>
                        <td><a href="javascript:void(0)">client33</a></td>
                        <td>client33@company.com</td>
                        <td><span class="label label-success">VIP</span></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">34</td>
                        <td class="text-center"><img src="img/placeholders/avatars/avatar9.jpg" alt="avatar" class="img-circle"></td>
                        <td><a href="javascript:void(0)">client34</a></td>
                        <td>client34@company.com</td>
                        <td><span class="label label-success">VIP</span></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">35</td>
                        <td class="text-center"><img src="img/placeholders/avatars/avatar6.jpg" alt="avatar" class="img-circle"></td>
                        <td><a href="javascript:void(0)">client35</a></td>
                        <td>client35@company.com</td>
                        <td><span class="label label-primary">Personal</span></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">36</td>
                        <td class="text-center"><img src="img/placeholders/avatars/avatar15.jpg" alt="avatar" class="img-circle"></td>
                        <td><a href="javascript:void(0)">client36</a></td>
                        <td>client36@company.com</td>
                        <td><span class="label label-primary">Personal</span></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">37</td>
                        <td class="text-center"><img src="img/placeholders/avatars/avatar6.jpg" alt="avatar" class="img-circle"></td>
                        <td><a href="javascript:void(0)">client37</a></td>
                        <td>client37@company.com</td>
                        <td><span class="label label-success">VIP</span></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">38</td>
                        <td class="text-center"><img src="img/placeholders/avatars/avatar7.jpg" alt="avatar" class="img-circle"></td>
                        <td><a href="javascript:void(0)">client38</a></td>
                        <td>client38@company.com</td>
                        <td><span class="label label-success">VIP</span></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">39</td>
                        <td class="text-center"><img src="img/placeholders/avatars/avatar2.jpg" alt="avatar" class="img-circle"></td>
                        <td><a href="javascript:void(0)">client39</a></td>
                        <td>client39@company.com</td>
                        <td><span class="label label-success">VIP</span></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">40</td>
                        <td class="text-center"><img src="img/placeholders/avatars/avatar10.jpg" alt="avatar" class="img-circle"></td>
                        <td><a href="javascript:void(0)">client40</a></td>
                        <td>client40@company.com</td>
                        <td><span class="label label-primary">Personal</span></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">41</td>
                        <td class="text-center"><img src="img/placeholders/avatars/avatar15.jpg" alt="avatar" class="img-circle"></td>
                        <td><a href="javascript:void(0)">client41</a></td>
                        <td>client41@company.com</td>
                        <td><span class="label label-info">Business</span></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">42</td>
                        <td class="text-center"><img src="img/placeholders/avatars/avatar11.jpg" alt="avatar" class="img-circle"></td>
                        <td><a href="javascript:void(0)">client42</a></td>
                        <td>client42@company.com</td>
                        <td><span class="label label-info">Business</span></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">43</td>
                        <td class="text-center"><img src="img/placeholders/avatars/avatar11.jpg" alt="avatar" class="img-circle"></td>
                        <td><a href="javascript:void(0)">client43</a></td>
                        <td>client43@company.com</td>
                        <td><span class="label label-primary">Personal</span></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                            </div>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>

@endsection
