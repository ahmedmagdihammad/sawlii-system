@extends('layouts.frontend.master')
@section('title')
    My Saved Jobs
@endsection
@section('content')

<script>
    $("header .navbar-default .navbar-nav>li.notification .dropdown-menu").mCustomScrollbar();       
</script>
<!-- Your share button code -->
<div id="main-content">
    <!-- Dashboard Navigation -->
    @include('pages.frontend.freelancer.nav_dashboard')
    <!-- Dashboard Navigation End -->

<section class="main-dashboard financial-dashboard">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="financial-dashboard-wrap">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="financial-statistics-wallet clearfix">
                                <div class="financial-statistics-wrap">
                                    <ul class="financial-statistics clearfix">
                                        <li class="sts-item">
                                            <div class="sts-item-wrap">
                                                <div class="amount-wrap">0<span>$</span></div>
                                                <label class="sts-label">Total Income</label>
                                            </div>
                                        </li>
                                        <li class="sts-item">
                                            <div class="sts-item-wrap">
                                                <div class="amount-wrap">0<span>$</span></div>
                                                <label class="sts-label">Total Expenses</label>
                                            </div>
                                        </li>
                                        <li class="sts-item">
                                            <div class="sts-item-wrap">
                                                <div class="amount-wrap">0<span>$</span></div>
                                                <label class="sts-label">Job Earning</label>
                                            </div>
                                        </li>
                                        <li class="sts-item">
                                            <div class="sts-item-wrap">
                                                <div class="amount-wrap">0<span>$</span></div>
                                                <label class="sts-label">Service Earning</label>
                                            </div>
                                        </li>
                                        <li class="sts-item">
                                            <div class="sts-item-wrap">
                                                <div class="amount-wrap">0<span>$</span></div>
                                                <label class="sts-label">Job onhold</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="financial-wallet mobile-view">
                                    <div class="box box-primary">
                                        <div class="box-header">
                                            <h3 class="box-title">Wallet</h3>
                                            <div class="box-tools pull-right">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#financialWallet"></a>
                                            </div>
                                        </div>
                                        <div id="financialWallet" class="panel-collapse collapse in" >
                                            <div class="box-body" >
                                                <div class="wallet-wrap">
                                                    <div class="wallet-amount-wrap">
                                                        <label class="wallet-amount-label">Total Wallet Amount</label>
                                                        <div class="amount-wrap">0<span>$</span></div>
                                                    </div>
                                                    <div class="wallet-btn-wrap">
                                                        <button type="button" name="" id="AddtoWallet" class="btn btn-primary btn-block wallet-btn">Add amount in wallet</button>
                                                        <button type="button" name="" id="RedeemRequest" class="btn btn-secondary btn-block wallet-btn %REDEEM_HIDE%">Request for redeem</button>
                                                    </div>
                                                    <input type="hidden" name="realUserId" id="realUserId" value="93">
                                                    <input type="hidden" name="oppositeUserId" id="oppositeUserId" value="94">
                                                    <div class="secure-payment-wrap text-center">
                                                        <div class="secure-payment-text"><span><i class="fa fa-lock"></i> 100%</span> Secure Payment By:</div>
                                                        <ul class="clearfix payment-cards">
                                                            <li><i class="fa fa-cc-paypal"></i></li>
                                                            <li><i class="fa fa-cc-visa"></i></li>
                                                            <li><i class="fa fa-cc-mastercard"></i></li>
                                                            <li><i class="fa fa-cc-amex"></i></li>
                                                            <li><i class="fa fa-cc-diners-club"></i></li>
                                                            <li><i class="fa fa-cc-discover"></i></li>
                                                            <li><i class="fa fa-cc-jcb"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-8">
                            <div class="financial-statistics-chart">
                                <div class="box box-primary">
                                    <div class="box-header">
                                        <h3 class="box-title">Income And Expenses</h3>
                                        <div class="box-tools pull-right">
                                            <select class="form-group" id="map_data">
                                                <option value="month">Month</option>
                                                <option value="year">Year</option>
                                            </select>
                                            <!-- <a data-toggle="collapse" data-parent="#accordion" href="#financialChart"></a> -->
                                        </div>
                                    </div>
                                    <div id="financialChart" class="panel-collapse collapse in" >
                                        <div class="box-body" >
                                            <div class="financial-chart-wrap">
                                                <canvas id="canvas"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 desktop-view">
                            <div class="financial-wallet">
                                <div class="box box-primary">
                                    <div class="box-header">
                                        <h3 class="box-title">Wallet</h3>
                                        <div class="box-tools pull-right">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#financialWallet"></a>
                                        </div>
                                    </div>
                                    <div id="financialWallet" class="panel-collapse collapse in" >
                                        <div class="box-body" >
                                            <div class="wallet-wrap">
                                                <div class="wallet-amount-wrap">
                                                    <label class="wallet-amount-label">Total Wallet Amount</label>
                                                    <div class="amount-wrap">0<span>$</span></div>
                                                </div>
                                                <div class="wallet-btn-wrap">
                                                    <button type="button" name="" id="AddtoWallet" class="btn btn-primary btn-block wallet-btn">Add amount in wallet</button>
                                                    <button type="button" name="" id="RedeemRequest" class="btn btn-secondary btn-block wallet-btn %REDEEM_HIDE%">Request for redeem</button>
                                                </div>
                                                <input type="hidden" name="realUserId" id="realUserId" value="93">
                                                <input type="hidden" name="oppositeUserId" id="oppositeUserId" value="94">
                                                <div class="secure-payment-wrap text-center">
                                                    <div class="secure-payment-text"><span><i class="fa fa-lock"></i> 100%</span> Secure Payment By:</div>
                                                    <ul class="clearfix payment-cards">
                                                        <li><i class="fa fa-cc-paypal"></i></li>
                                                        <li><i class="fa fa-cc-visa"></i></li>
                                                        <li><i class="fa fa-cc-mastercard"></i></li>
                                                        <li><i class="fa fa-cc-amex"></i></li>
                                                        <li><i class="fa fa-cc-diners-club"></i></li>
                                                        <li><i class="fa fa-cc-discover"></i></li>
                                                        <li><i class="fa fa-cc-jcb"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="sawlii-tabs-wrap financial-transactions-wrap">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#financialTab" data-toggle="tab" aria-expanded="true">Financial History</a></li>
                                    <li class=""><a href="#walletTab" data-toggle="tab" aria-expanded="false">Wallet</a></li>
                                    <li class=""><a href="#paytransHistoryTab" data-toggle="tab" aria-expanded="false">Payment History</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="financialTab">
                                        <div class="box box-primary">
                                            <div class="box-header">
                                                <h3 class="box-title">Job Income History</h3>
                                                <div class="box-tools pull-right">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#jobIncome"></a>
                                                </div>
                                            </div>
                                            <div id="jobIncome" class="panel-collapse collapse in" >
                                                <div class="box-body" >
                                                    <div class="transaction-table">
                                                        <div class="transaction-total-wrap">
                                                            <div class="trans-total-item">Total Earnings  : <div class="amount-wrap">0<span>$</span></div></div>
                                                            <div class="trans-total-item">Total Pending : <div class="amount-wrap">0<span>$</span></div></div>
                                                        </div>
                                                        <div class="table-responsive">
                                                            <table>
                                                                <thead>
                                                                    <tr>
                                                                        <th class="ft-title">Job Title</th>
                                                                        <th class="ft-name">Customer Name</th>
                                                                        <th class="ft-milestone">No. of Milestones</th>
                                                                        <th class="ft-date">Date</th>
                                                                        <th class="ft-status">Status</th>
                                                                        <th class="ft-pamount">Pending Amount<small>($)</small></th>
                                                                        <th class="ft-ramount">Received Amount<small>($)</small></th>
                                                                        <th class="ft-fees">Admin Fees<small>($)</small></th>
                                                                        <th class="ft-total">Total Amount<small>($)</small></th>
                                                                        <th class="ft-action">View</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr><td colspan=8>No Records Found</td></tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box box-primary">
                                            <div class="box-header">
                                                <h3 class="box-title">Service Income History</h3>
                                                <div class="box-tools pull-right">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#serviceIncome"></a>
                                                </div>
                                            </div>
                                            <div id="serviceIncome" class="panel-collapse collapse in" >
                                                <div class="box-body" >
                                                    <div class="transaction-table">
                                                        <div class="transaction-total-wrap">
                                                            <div class="trans-total-item">Total Earnings : <div class="amount-wrap">0<span>$</span></div></div>
                                                            <div class="trans-total-item">Total Pending : <div class="amount-wrap">0<span>$</span></div></div>
                                                        </div>
                                                        <div class="table-responsive">
                                                            <table>
                                                                <thead>
                                                                    <tr>
                                                                        <th class="ft-title">Service Title</th>
                                                                        <th class="ft-name">Customer Name</th>
                                                                        <th class="ft-date">Date</th>
                                                                        <th class="ft-status">Status</th>
                                                                        <th class="ft-pamount">Pending Amount<small>($)</small></th>
                                                                        <th class="ft-ramount">Received Amount<small>($)</small></th>
                                                                        <th class="ft-action">View</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr><td colspan=7>No Records Found</td></tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="walletTab">
                                        <div class="box box-primary">
                                            <div class="box-header">
                                                <h3 class="box-title">Wallet Transaction History</h3>
                                            </div>
                                            <div class="box-body" >
                                                <div class="transaction-table">
                                                    <div class="transaction-total-wrap">
                                                        <div class="trans-total-item">Total credit amount : <div class="amount-wrap">0$</div></div>
                                                    </div>
                                                    <div class="table-responsive">
                                                        <table>
                                                            <thead>
                                                                <tr>
                                                                    <th class="ft-tid">Transaction Id</th>
                                                                    <th class="ft-date">Payment Status</th>
                                                                    <th class="ft-status">Date</th>
                                                                    <th class="ft-total">Amount($)</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                 <tr><td colspan=5>No credit amount found</td></tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box box-primary">
                                            <div class="box-body" >
                                                <div class="transaction-table">
                                                    <div class="transaction-total-wrap">
                                                        <div class="trans-total-item">Redeem Request : <div class="amount-wrap">0$</div></div>
                                                        </div>
                                                    <div class="table-responsive">
                                                        <table>
                                                            <thead>
                                                                <tr>
                                                                    <th class="ft-tid">Transaction ID</th>
                                                                    <th class="ft-date">Transaction Date</th>
                                                                    <th class="ft-date">Request sent date</th>
                                                                    <th class="ft-status">Requested amount($)</th>
                                                                    <th class="ft-total">Status</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <tr><td colspan=5>No redeem request found</td></tr> 
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box box-primary">
                                            <div class="box-body" >
                                                <div class="transaction-table">
                                                    <div class="transaction-total-wrap">
                                                        <div class="trans-total-item">Job Onhold Amount : <div class="amount-wrap">0$</div></div>
                                                        </div>
                                                    <div class="table-responsive">
                                                        <table>
                                                            <thead>
                                                                <tr>
                                                                    <th class="ft-title">Job Title</th>
                                                                    <th class="ft-total">Amount<small>($)</small></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>$</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box box-primary">
                                            <div class="box-body" >
                                                <div class="transaction-table">
                                                    <div class="transaction-total-wrap">
                                                        <div class="trans-total-item">Services Onhold Amount : 
                                                            <div class="amount-wrap">0$</div>
                                                        </div>
                                                    </div>
                                                    <div class="table-responsive">
                                                        <table>
                                                            <thead>
                                                                <tr>
                                                                    <th class="ft-title">Services Title</th>
                                                                    <th class="ft-total">Amount ($)</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr><td colspan=2>No hold data found.</td></tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="paytransHistoryTab">
                                        <div class="box box-primary">
                                            <div class="box-header">
                                                <h3 class="box-title">Payment History</h3>
                                                <div class="box-tools pull-right">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#paytransHistory"></a>
                                                </div>
                                            </div>
                                            <div id="paytransHistory" class="panel-collapse collapse in" >
                                                <div class="box-body" >
                                                    <div class="transaction-table">
                                                        <div class="table-responsive">
                                                            <table>
                                                                <thead>
                                                                    <tr>
                                                                        <th class="ft-title">Service Title</th>
                                                                        <th class="ft-date">Paid Amount ($)</th>
                                                                        <th class="ft-status">Payment Date</th>
                                                                        <th class="ft-total">Status</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr> <td colspan="4" style="text-align:center" > No Records Found</td> </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box box-primary">
                                            <div class="box-header">
                                                <h3 class="box-title">Credit package payment</h3>
                                                <div class="box-tools pull-right">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#creditPackage"></a>
                                                </div>
                                            </div>
                                            <div id="creditPackage" class="panel-collapse collapse in" >
                                                <div class="box-body" >
                                                    <div class="transaction-table">
                                                        <div class="table-responsive">
                                                            <table>
                                                                <thead>
                                                                    <tr>
                                                                        <th class="ft-title">Package</th>
                                                                        <th class="ft-date">Amount ($)</th>
                                                                        <th class="ft-status">PAYMENT DATE</th>
                                                                        <th class="ft-total">Status</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr> <td colspan="4" style="text-align:center" > No Records Found</td> </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box box-primary">
                                            <div class="box-header">
                                                <h3 class="box-title">Service Featured Payment</h3>
                                                <div class="box-tools pull-right">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#creditPackage"></a>
                                                </div>
                                            </div>
                                            <div id="creditPackage" class="panel-collapse collapse in" >
                                                <div class="box-body" >
                                                    <div class="transaction-table">
                                                        <div class="table-responsive">
                                                            <table>
                                                                <thead>
                                                                    <tr>
                                                                        <th class="ft-title">Service</th>
                                                                        <th class="ft-date">Amount ($)</th>
                                                                        <th class="ft-status">PAYMENT DATE</th>
                                                                        <th class="ft-total">Status</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr> <td colspan="4" style="text-align:center" > No Records Found</td> </tr>
                                                                </tbody>
                                                            </table>
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
        </div>
    </div>
</section>
<!-- wallet Amount Modal -->
<div class="modal fade in" id="walletTransfer" role="dialog" tabindex="-1">
  <div class="modal-dialog">
      <form method="post" name="walletAmntFrm" id="walletAmntFrm">
        <input type="hidden" name="action" value="">
        <input type="hidden" name="chkpoint" value="">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">×</button>
              <h4 class="modal-title">Wallet Amount Transfer </h4>
            </div>
            <div class="modal-body">
              <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">$</span>
                    <input type="number" name="WalletAmount" class="form-control" id="WalletAmount" placeholder="Enter Amount" maxlength="10" aria-describedby="basic-addon1">
                  </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-system" name="transferToWallet" id="transferToWallet" value="transferToWallet">Submit</button>
            </div>
      </div>
    </form> 
  </div>
</div>
<!-- Reddem request modal -->

<div class="modal fade in" id="RedeemRequestModal" role="dialog" tabindex="-1">
  <div class="modal-dialog">
    <form method="post" name="redeemFrm" id="redeemFrm">
        <input type="hidden" name="action" value="">
        <input type="hidden" name="chkpoint" value="">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">×</button>
              <h4 class="modal-title">Request for Redeem</h4>
            </div>
            <div class="modal-body">
              <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">$</span>
                    <input type="number" name="amountRedeem" class="form-control" id="amountRedeem" placeholder="Enter Amount" maxlength="10" aria-describedby="basic-addon1">
                </div>
              </div>
              <p>Enter amount and send request to admin for get return your amount</p>
            </div>
            <div class="modal-footer">
              <input type="hidden" name="action" id="action" value="SendRedeemRequest">
              <button type="submit" class="btn btn-system" name="reedemForm" value="sendRedeemRequest" id="sendRedeemRequest">Submit</button>
            </div>
      </div>
    </form> 
  </div>
</div>
<script type="text/javascript">
    var url = "http://www.sukhadaam.com/demo/sawlii/ajaxFreelancerFinancialDashboard";
    $(document).ready(function(){
        $(document).on("click","#AddtoWallet",function(){
          $("#walletTransfer").modal("show");
        });

        /*Redeem modal */
        $(document).on("click","#RedeemRequest",function(){
          $("#RedeemRequestModal").modal("show");
        });

        /*Redeem modal */
        $(document).on("click","#RedeemRequest",function(){
          $("#RedeemRequestModal").modal("show");
        });

        /*wallet validation*/
        $(document).on("click","#transferToWallet",function(){
           $("#walletAmntFrm").validate({
                ignore: [],
                errorClass: 'help-block',
                errorElement: 'label',
                highlight: function (element)
                {
                    $(element).closest('.form-group').addClass('has-error');
                },
                unhighlight: function (element)
                {
                    $(element).closest('.form-group').removeClass('has-error');
                },
                rules:
                {
                    WalletAmount:{required:true,minlength:1,digits:true}
                },
                messages:
                {
                    WalletAmount:{required:"Please enter amount",digits:"Please enter number only"}
                },
                errorPlacement: function(error, element) {
                    if(element.parent('.input-group').length) {
                        error.insertAfter(element.parent());
                    } else {
                        error.insertAfter(element);
                    }
                },
                onError : function(){
                    $('.input-group.error-class').find('.help-block.form-error').each(function() {
                      $(this).closest('.form-group').addClass('error-class').append($(this));
                    });
                }
            });
           if($("#walletAmntFrm").valid())
           {
            addOverlay();
           }
        });

        /*Redeem validation*/
        $(document).on("click","#sendRedeemRequest",function(){
           $("#redeemFrm").validate({
                ignore: [],
                errorClass: 'help-block',
                errorElement: 'label',
                highlight: function (element)
                {
                    $(element).closest('.form-group').addClass('has-error');
                },
                unhighlight: function (element)
                {
                    $(element).closest('.form-group').removeClass('has-error');
                },
                rules:
                {
                    amountRedeem:{required:true,minlength:1,digits:true,remote: url }
                },
                messages:
                {
                    amountRedeem:{required:"Please enter amount",digits:"Please enter number only",remote:"Insufficient amount for redeem"}
                },
                errorPlacement: function(error, element) {
                    if(element.parent('.input-group').length) {
                        error.insertAfter(element.parent());
                    } else {
                        error.insertAfter(element);
                    }
                },
                onError : function(){
                    $('.input-group.error-class').find('.help-block.form-error').each(function() {
                      $(this).closest('.form-group').addClass('error-class').append($(this));
                    });
                }
            });
            if($("#redeemFrm").valid())
            {
              // addOverlay();
              $("#redeemFrm").submit();
            }
        });
        $(document).on("click",".send-rem",function(){
            var id = $(this).attr("data-id");
            addOverlay();
            $.post(url,{"action":"send_reminder","id":id},function(data){
                removeOverlay();
                toastr['success']('Reminder mail has been sent successfully.');
            },'json');
        });
        $(document).on("change","#map_data",function(){
            url = "http://www.sukhadaam.com/demo/sawlii/ajaxFreelancerFinancialDashboard";
            $type = $(this).val();
            $realUserId = $("#realUserId").val();
            $oppositeUserId = $("#oppositeUserId").val();
            addOverlay();
            $.post(url,{"action":"updateChart","type":$type,"realUserId":$realUserId,"oppositeUserId":$oppositeUserId},function(data){
                removeOverlay();
                if(data.status=="success"){                   
                    chartData(data.content.heading,data.content.income,data.content.expense,data.content.scales_name);                
                }else{
                    toastr['success']('Something went wrong, please try again!.');
                }
            },'json');
        });    
    });
</script>
<script> 
    $(document).ready(function(){
        chartData(["January","February","March","April","May","June","July","August","September","October","November","December"],[],[],"Monthly");        
    });
    function chartData(chart_heading,chart_income,chart_enpense,scales_name){
        console.log();
        var DAYS = chart_heading;
        var config = {
            type: 'line',
            data: {
                labels: chart_heading, 
                datasets: [{
                    label: 'Income',
                    backgroundColor: window.chartColors.blue,
                    borderColor: window.chartColors.blue,
                    data: chart_income,
                    fill: false,
                }, {
                    label: 'Expenses',
                    fill: false,
                    backgroundColor: window.chartColors.grey,
                    borderColor: window.chartColors.grey,
                    data: chart_enpense,
                }]
            },
            options: {
                responsive: true,
                title: {
                    display: true,
                    text: ''
                },
                tooltips: {
                    mode: 'index',
                    intersect: true,
                },
                hover: {
                    mode: 'nearest',
                    intersect: true
                },
                scales: {
                    xAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: scales_name
                        }
                    }],
                    yAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'KWD'
                        }
                    }]
                }
            }
        };
        var ctx = document.getElementById('canvas').getContext('2d');
        window.myLine = new Chart(ctx, config);
    }     
</script>
</div>
<!-- {GOOGLE_ANALYTIC_CODE} -->
<section class="email-subscribe-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="newsletter-wrap">
                    <div class="newsletter-object"></div>
                     <div class="newsletter-content">
                        <h2 class="main-title">Subscribe to our Newsletter</h2>
                        <div class="title-info">Subscribe to receive news and updates with your Email Address.</div>
                        <form class="newsletter-form" action="#" method="post" name="newsletterFrm" id="newsletterFrm">
                            <div class="form-group">
                                    <input class="form-control" name="email" id="email" placeholder="Email Address"/>
                                    <input type="hidden" name="action" id="action" value="subscribeUser">
                                    <button type="submit" name="newsletterSubscriber" id="newsletterSubscriber" class="btn btn-primary"><span>Subscribe</span></button>
                            </div>
                        </form>
                      </div>
                    <!-- <div class="row">
                      <div class="col-md-6 col-sm-7">
                       
                      </div>
                    </div> -->
                    <div class="newsletter-bg">
                      <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 5000.000000 1194.000000" preserveAspectRatio="xMidYMid meet">
                          <metadata>
                          Created by potrace 1.15, written by Peter Selinger 2001-2017
                          </metadata>
                          <g transform="translate(0.000000,1194.000000) scale(0.100000,-0.100000)"
                          fill="#28a8e0" stroke="none">
                          <path d="M3816 11814 c-200 -43 -394 -159 -581 -348 -196 -198 -358 -459 -455
                          -731 -17 -49 -114 -380 -215 -735 -391 -1373 -934 -3280 -1150 -4040 -377
                          -1326 -691 -2427 -971 -3410 -146 -514 -279 -997 -295 -1073 -38 -186 -53
                          -354 -46 -512 19 -436 186 -735 467 -837 l65 -23 24325 -3 c18057 -2 24340 0
                          24385 9 391 73 603 539 530 1161 -25 218 3 113 -462 1743 -134 473 -323 1136
                          -419 1473 -677 2378 -1016 3571 -1420 4989 -190 667 -363 1258 -385 1315 -205
                          527 -626 947 -1027 1024 -114 22 -42244 19 -42346 -2z"/>
                          </g>
                      </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection