@extends('layouts.main')

@section('admin', $user->name)
@section('conteudo')
<div class="content-header">
<div class="header-section">
            <h1>
                <i class="fa fa-table"></i>Perfil do Jogador<br><small>HTML tables can become fully dynamic with cool features!</small>
            </h1>
        </div>
    </div>

<div id="page-content">

                        <!-- eCommerce Customer Header -->
    <!-- END eCommerce Customer Header -->

    <!-- Customer Content -->
    <div class="row">
        <div class="col-lg-4">
            <!-- Customer Info Block -->
            <div class="block">
                <!-- Customer Info Title -->
                <div class="block-title">
                    <h2><i class="fa fa-file-o"></i> <strong>Customer</strong> Info</h2>
                </div>
                <!-- END Customer Info Title -->

                <!-- Customer Info -->
                <div class="block-section text-center">
                    <a href="javascript:void(0)">
                        <img src="img/placeholders/avatars/avatar4@2x.jpg" alt="avatar" class="img-circle">
                    </a>
                    <h3>
                        <strong>Jonathan Taylor</strong><br><small></small>
                    </h3>
                </div>
                <table class="table table-borderless table-striped table-vcenter">
                    <tbody>
                        <tr>
                            <td class="text-right" style="width: 50%;"><strong>Social Title</strong></td>
                            <td>Mr.</td>
                        </tr>

                        <tr>
                            <td class="text-right"><strong>Last Visit</strong></td>
                            <td>06/11/2014 - 09:41</td>
                        </tr>
                        <tr>
                            <td class="text-right"><strong>Language</strong></td>
                            <td>English (UK)</td>
                        </tr>
                        <tr>
                            <td class="text-right"><strong>Registrations</strong></td>
                            <td><span class="label label-primary">Newsletter</span></td>
                        </tr>
                        <tr>
                            <td class="text-right"><strong>Status</strong></td>
                            <td><span class="label label-success"><i class="fa fa-check"></i> Active</span></td>
                        </tr>
                    </tbody>
                </table>
                <!-- END Customer Info -->
            </div>
            <!-- END Customer Info Block -->

            <!-- Quick Stats Block -->
            <div class="block gallery gallery-widget">
                <!-- Quick Stats Title -->
                <div class="block-title">
                    <h2 class="text-center"> <strong>Pé</strong> Dominante</h2>
                </div>
                <!-- END Quick Stats Title -->

                <!-- Quick Stats Content -->
                <img src="img/placeholders/peDireto.png" alt="">
               <!-- <a href="javascript:void(0)" class="widget widget-hover-effect2 themed-background-muted-light">
                    <div class="widget-simple">
                        <div class="widget-icon pull-right themed-background">
                            <i class="fa fa-truck"></i>
                        </div>
                        <h4 class="text-left">
                            <strong>4</strong><br><small>Orders in Total</small>
                        </h4>
                    </div>
                </a>
                -->
                <!-- END Quick Stats Content -->
            </div>
            <!-- END Quick Stats Block -->
        </div>
        <div class="col-lg-8">
            <!-- Orders Block -->
            <div class="block">
                <!-- Orders Title -->
                <div class="block-title">
                    <div class="block-options pull-right">
                        <span class="label label-success"><strong>$ 2125,00</strong></span>
                    </div>
                    <h2><i class="fa fa-truck"></i> <strong>Orders</strong> (4)</h2>
                </div>
                <!-- END Orders Title -->

                <!-- Orders Content -->
                <table class="table table-bordered table-striped table-vcenter">
                    <tbody>
                        <tr>
                            <td class="text-center" style="width: 100px;"><a href="page_ecom_order_view.html"><strong>ORD.685199</strong></a></td>
                            <td class="hidden-xs" style="width: 15%;"><a href="javascript:void(0)">5 Products</a></td>
                            <td class="text-right hidden-xs" style="width: 10%;"><strong>$585,00</strong></td>
                            <td><span class="label label-warning">Processing</span></td>
                            <td class="hidden-xs">Paypal</td>
                            <td class="hidden-xs text-center">16/11/2014</td>
                            <td class="text-center" style="width: 70px;">
                                <div class="btn-group btn-group-xs">
                                    <a href="page_ecom_order_view.html" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="View"><i class="fa fa-eye"></i></a>
                                    <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-xs btn-danger" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center"><a href="page_ecom_order_view.html"><strong>ORD.685198</strong></a></td>
                            <td class="hidden-xs"><a href="javascript:void(0)">2 Products</a></td>
                            <td class="text-right hidden-xs"><strong>$958,00</strong></td>
                            <td><span class="label label-info">For delivery</span></td>
                            <td class="hidden-xs">Credit Card</td>
                            <td class="hidden-xs text-center">03/10/2014</td>
                            <td class="text-center">
                                <div class="btn-group btn-group-xs">
                                    <a href="page_ecom_order_view.html" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="View"><i class="fa fa-eye"></i></a>
                                    <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-xs btn-danger" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center"><a href="page_ecom_order_view.html"><strong>ORD.685197</strong></a></td>
                            <td class="hidden-xs"><a href="javascript:void(0)">3 Products</a></td>
                            <td class="text-right hidden-xs"><strong>$318,00</strong></td>
                            <td><span class="label label-success">Delivered</span></td>
                            <td class="hidden-xs">Bank Wire</td>
                            <td class="hidden-xs text-center">17/06/2014</td>
                            <td class="text-center">
                                <div class="btn-group btn-group-xs">
                                    <a href="page_ecom_order_view.html" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="View"><i class="fa fa-eye"></i></a>
                                    <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-xs btn-danger" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center"><a href="page_ecom_order_view.html"><strong>ORD.685196</strong></a></td>
                            <td class="hidden-xs"><a href="javascript:void(0)">6 Products</a></td>
                            <td class="text-right hidden-xs"><strong>$264,00</strong></td>
                            <td><span class="label label-success">Delivered</span></td>
                            <td class="hidden-xs">Paypal</td>
                            <td class="hidden-xs text-center">27/01/2014</td>
                            <td class="text-center">
                                <div class="btn-group btn-group-xs">
                                    <a href="page_ecom_order_view.html" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="View"><i class="fa fa-eye"></i></a>
                                    <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-xs btn-danger" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!-- END Orders Content -->
            </div>
            <!-- END Orders Block -->

            <!-- Products in Cart Block -->
            <div class="block">
                <!-- Products in Cart Title -->
                <div class="block-title">
                    <div class="block-options pull-right">
                        <span class="label label-success"><strong>$ 517,00</strong></span>
                    </div>
                    <h2><i class="fa fa-shopping-cart"></i> <strong>Products</strong> in Cart (3)</h2>
                </div>
                <!-- END Products in Cart Title -->

                <!-- Products in Cart Content -->
                <table class="table table-bordered table-striped table-vcenter">
                    <tbody>
                        <tr>
                            <td class="text-center" style="width: 100px;"><a href="page_ecom_product_edit.html"><strong>PID.8715</strong></a></td>
                            <td class="hidden-xs" style="width: 15%;"><a href="page_ecom_product_edit.html">Product #98</a></td>
                            <td class="text-right hidden-xs" style="width: 10%;"><strong>$399,00</strong></td>
                            <td><span class="label label-success">Available (479)</span></td>
                            <td class="text-center" style="width: 70px;">
                                <a href="page_ecom_product_edit.html" data-toggle="tooltip" title="" class="btn btn-xs btn-default" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center"><a href="page_ecom_product_edit.html"><strong>PID.8725</strong></a></td>
                            <td class="hidden-xs"><a href="page_ecom_product_edit.html">Product #98</a></td>
                            <td class="text-right hidden-xs"><strong>$59,00</strong></td>
                            <td><span class="label label-success">Available (163)</span></td>
                            <td class="text-center">
                                <a href="page_ecom_product_edit.html" data-toggle="tooltip" title="" class="btn btn-xs btn-default" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center"><a href="page_ecom_product_edit.html"><strong>PID.8798</strong></a></td>
                            <td class="hidden-xs"><a href="page_ecom_product_edit.html">Product #98</a></td>
                            <td class="text-right hidden-xs"><strong>$59,00</strong></td>
                            <td><span class="label label-danger">Out of Stock</span></td>
                            <td class="text-center">
                                <a href="page_ecom_product_edit.html" data-toggle="tooltip" title="" class="btn btn-xs btn-default" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!-- END Products in Cart Content -->
            </div>
            <!-- END Products in Cart Block -->

            <!-- Customer Addresses Block -->
            <div class="block">
                <!-- Customer Addresses Title -->
                <div class="block-title">
                    <h2><i class="fa fa-building-o"></i> <strong>Customer</strong> Addresses (2)</h2>
                </div>
                <!-- END Customer Addresses Title -->

                <!-- Customer Addresses Content -->
                <div class="row">
                    <div class="col-lg-6">
                        <!-- Billing Address Block -->
                        <div class="block">
                            <!-- Billing Address Title -->
                            <div class="block-title">
                                <h2>Billing Address</h2>
                            </div>
                            <!-- END Billing Address Title -->

                            <!-- Billing Address Content -->
                            <h4><strong>Jonathan Taylor</strong></h4>
                            <address>
                                Sunset Str 620<br>
                                Melbourne<br>
                                Australia, 21-842<br><br>
                                <i class="fa fa-phone"></i> (999) 852-11111<br>
                                <i class="fa fa-envelope-o"></i> <a href="javascript:void(0)">johnathan.taylor@example.com</a>
                            </address>
                            <!-- END Billing Address Content -->
                        </div>
                        <!-- END Billing Address Block -->
                    </div>
                    <div class="col-lg-6">
                        <!-- Shipping Address Block -->
                        <div class="block">
                            <!-- Shipping Address Title -->
                            <div class="block-title">
                                <h2>Shipping Address</h2>
                            </div>
                            <!-- END Shipping Address Title -->

                            <!-- Shipping Address Content -->
                            <h4><strong>Harry Burke</strong></h4>
                            <address>
                                Sunset Str 598<br>
                                Melbourne<br>
                                Australia, 21-852<br><br>
                                <i class="fa fa-phone"></i> (999) 852-22222<br>
                                <i class="fa fa-envelope-o"></i> <a href="javascript:void(0)">harry.burke@example.com</a>
                            </address>
                            <!-- END Shipping Address Content -->
                        </div>
                        <!-- END Shipping Address Block -->
                    </div>
                </div>
                <!-- END Customer Addresses Content -->
            </div>
            <!-- END Customer Addresses Block -->

            <!-- Referred Members Block -->
            <div class="block">
                <!-- Referred Members Title -->
                <div class="block-title">
                    <h2><i class="fa fa-group"></i> <strong>Referred</strong> Members (2)</h2>
                </div>
                <!-- END Referred Members Title -->

                <!-- Referred Members Content -->
                <div class="row">
                    <div class="col-lg-6">
                        <a href="javascript:void(0)" class="widget widget-hover-effect2 themed-background-muted-light">
                            <div class="widget-simple">
                                <img src="img/placeholders/avatars/avatar12.jpg" alt="avatar" class="widget-image img-circle pull-left">
                                <h4 class="widget-content text-right">
                                    <strong>Julia Warren</strong>
                                    <small>Orders Value: <strong>$280,00</strong></small>
                                </h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a href="javascript:void(0)" class="widget widget-hover-effect2 themed-background-muted-light">
                            <div class="widget-simple">
                                <img src="img/placeholders/avatars/avatar2.jpg" alt="avatar" class="widget-image img-circle pull-left">
                                <h4 class="widget-content text-right">
                                    <strong>Kyle Ross</strong>
                                    <small>Orders Value: <strong>$780,00</strong></small>
                                </h4>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- END Referred Members Content -->
            </div>
            <!-- END Referred Members Block -->

            <!-- Private Notes Block -->

            <!-- END Private Notes Block -->
        </div>
    </div>
    <!-- END Customer Content -->


@endsection
