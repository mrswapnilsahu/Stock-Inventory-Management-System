<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="shortcut icon" href=""> -->
    <title>VSK</title>
    <link rel="stylesheet" type="text/css" href="assets/lib/perfect-scrollbar/css/perfect-scrollbar.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/lib/material-design-icons/css/material-design-iconic-font.min.css"/>
    <link rel="stylesheet" href="assets/css/style.css" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="custom.css">
    <style type="text/css">
      *{
        font-size: 20px;
      }
    </style>
  </head>
  <body style="font-size: 18px; font-weight: bold; background-color: #dfdce3;" onload="dis();">
    <div class="be-wrapper be-color-header be-color-header-primary">
      <nav class="navbar navbar-default navbar-fixed-top be-top-header">
        <div class="container-fluid" style="background-color: #05386b;">
          <div class="navbar-header">
            
          </div>
          <div class="be-right-navbar">
            <ul class="nav navbar-nav navbar-right be-user-nav">
              <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle"><img src="assets/img/avatar.png" alt="Avatar"><span class="user-name">Admin</span></a>
                <ul role="menu" class="dropdown-menu">
                  <!-- <li><a href="#"><span class="icon mdi mdi-face"></span> Account</a></li>
                  <li><a href="#"><span class="icon mdi mdi-settings"></span> Settings</a></li> -->
                  <li><a href="index.html"><span class="icon mdi mdi-power"></span> Logout</a></li>
                </ul>
              </li>
            </ul>
            <div class="page-title"><span>VSK Industry</span></div>
            
          </div>
        </div>
      </nav>
      <div class="be-left-sidebar " style="background-color: #2f2fa2; position: fixed;">
        <div class="left-sidebar-wrapper "><a href="#" class="left-sidebar-toggle"></a>
          <div class="left-sidebar-spacer" >
            <div class="left-sidebar-scroll">
              <div class="left-sidebar-content">
                <ul class="sidebar-elements">
                  <li class="divider" style="color: white;font-size: 18px;">Menu</li>
                    <li><a id="dash" onclick="callPro(this.id);" style="cursor: pointer; color: white;"><i class="icon mdi mdi-store"></i><span>Dashboard</span></a>
                  </li>
                  <li><a id="pro" onclick="callPro(this.id);" style="cursor: pointer; color: white;"><i class="icon mdi mdi-local-grocery-store"></i><span>Product Details</span></a>
                  </li>
                  <li><a id="pro_list" onclick="callPro(this.id);" style="cursor: pointer; color: white;"><i class="icon mdi mdi-money"></i><span>Price List</span></a>
                  </li>
                  <li><a id="cat" onclick="callPro(this.id);" style="cursor: pointer; color: white;"><i class="icon mdi mdi-receipt"></i><span>Category</span></a>
                  </li>
                  <li><a id="ty" onclick="callPro(this.id);" style="cursor: pointer; color: white;"><i class="icon mdi mdi-shape"></i><span>Measurement</span></a>
                  </li>
                  <li><a id="st" onclick="callPro(this.id);" style="cursor: pointer; color: white;"><i class="icon mdi mdi-grain"></i><span>Stock Details</span></a>
                  </li>
                  <li><a id="firm" onclick="callPro(this.id);" style="cursor: pointer; color: white;"><i class="icon mdi mdi-store"></i><span>Firm</span></a>
                  </li>
                  <li><a id="c_bill" onclick="callPro(this.id);" style="cursor: pointer; color: white;"><i class="icon mdi mdi-assignment"></i><span>Custom Billing</span></a>
                  </li>
                  <li><a id="bill" onclick="callPro(this.id);" style="cursor: pointer; color: white;"><i class="icon mdi mdi-assignment"></i><span>Stock Billing</span></a>
                  </li>
                  <li><a id="sbill" onclick="callPro(this.id);" style="cursor: pointer; color: white;"><i class="icon mdi mdi-assignment-returned"></i><span>Seller Billing</span></a>
                  </li>                
                  <li><a id="sb" onclick="callPro(this.id);" style="cursor: pointer; color: white;"><i class="icon mdi mdi-assignment"></i><span>Stock Bill Details</span></a>
                  </li>
                  <li><a id="show_seller_bill" onclick="callPro(this.id);" style="cursor: pointer; color: white;"><i class="icon mdi mdi-assignment"></i><span>Seller Bill Details</span></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="be-content">
        
        <div class="main-content container-fluid">
          <!--PAGE CONTENT -->
          <div id="output">
  


<?php ?>