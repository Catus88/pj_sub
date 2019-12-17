  <!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a >Form User Master Registration Data Entry</a></li>
 
                            </ul>


                            <form method="post" onSubmit="JavaScript:return check_submit();" enctype="multipart/form-data" >

                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad">
                                                    
                                                        <div class="row  form-group">



                                                             <div class="row form-group">
                                              

                            
                           

                              
                          </div>
   <?php   $STRQTY = "select  email,Company   from [StockPrice].[dbo].[Username]  where [UserN]  ='".$_SESSION["USUSID"]."'  ";
$login_result = odbc_fetch_array(odbc_exec($con, $STRQTY));
$email = trim($login_result["email"]);
$Company = trim($login_result["Company"]);
 $this_date = date("Y/m/d");
 ?> 
                             
                      </div>


   <div class="row form-group">

                             <div class="col col-md-2"><label for="text-input" class=" form-control-label"> UMR No. : </label></div>
                            <div class="col-24 col-md-2"><input type="text"  readonly="" id="CARFNO" name="CARFNO" placeholder="UMR No."
                              value="<?php echo $CARFNO_trim; ?>"  class="form-control">

                            </div>

                             <div class="col col-md-2"><label for="text-input" class=" form-control-label"> Date :  </label></div>
                            <div class="col-24 col-md-2"><input type="text"  readonly="" id="date_umr" name="user_ref_date" placeholder="Date"
                              value="<?php echo $this_date ; ?>"  class="form-control">

  </div>

                          </div>
   <div class="row form-group">

                            <div class="col col-md-2"><label for="disabled-input" class=" form-control-label">Distributor Code:</label></div>
                            <div class="col-24 col-md-2"><input type="text"  readonly="" id="Distributor" placeholder="Distributor Code"   
                              name="Distributor" placeholder="Distributor Code"
                              value="<?php  echo  $Company  ;?>" class="form-control"></div>


     <?php  


$SOPO1_test = odbc_fetch_array( odbc_exec($conn, " select  O1ECNM,O1TCNM,O1CENM,O1CTNM  from  smcdta.sopo1
      where  O1CUSN = '".$Company."'  ") );

$O1ECNM_COM  =   iconv("windows-874", "utf-8", $SOPO1_test["O1ECNM"]);

     ?>

                            <div class="col col-md-2"><label for="text-input" class=" form-control-label">Distributor Name   :</label></div>
                            <div class="col-24 col-md-4"><input type="text" id=" "  readonly="" name="Distributor_name" value="<?php  echo  $O1ECNM_COM  ;?>" placeholder="Distributor Name"  class="form-control">
                            </div>

                             
                          </div>




                             <div class="row form-group">

                         

 <?php  

$O1CUSN_T =  trim($_GET['O1CUSN']) ;
$SOPO1_test12 = odbc_fetch_array( odbc_exec($conn, " select  *   from  smcdta.sopo1
      where  O1CUSN = '".$_GET['O1CUSN']."'  ") );

$O1ECNM  =   iconv("windows-874", "utf-8", $SOPO1_test12["O1ECNM"]);
$O1TAD1  =   iconv("windows-874", "utf-8", $SOPO1_test12["O1TAD1"]);
$O1TAD2  =   iconv("windows-874", "utf-8", $SOPO1_test12["O1TAD2"]);
$O1TAD3  =   iconv("windows-874", "utf-8", $SOPO1_test12["O1TAD3"]);
$O1TAD4  =   iconv("windows-874", "utf-8", $SOPO1_test12["O1TAD4"]);
$O1CTNM  =   iconv("windows-874", "utf-8", $SOPO1_test12["O1CTNM"]);
$O1CHQP  =   iconv("windows-874", "utf-8", $SOPO1_test12["O1CHQP"]);
$O1TLNO  =   iconv("windows-874", "utf-8", $SOPO1_test12["O1TLNO"]);
$O1FXNO  =   iconv("windows-874", "utf-8", $SOPO1_test12["O1FXNO"]);
$O1RGEX  =   iconv("windows-874", "utf-8", $SOPO1_test12["O1RGEX"]);
$O1TSR1  =   iconv("windows-874", "utf-8", $SOPO1_test12["O1TSR1"]);
$O1ECNM  =   iconv("windows-874", "utf-8", $SOPO1_test12["O1ECNM"]);
$O1ECNM  =   iconv("windows-874", "utf-8", $SOPO1_test12["O1ECNM"]);


$SOPOH = odbc_fetch_array( odbc_exec($conn, " select  OHCCTX,OHSTRG,OHGRP1,OHGRP2  from smcdta.SOPOH where  OHCUSN = '".$_GET['O1CUSN']."' limit 1  ") );
    $OHCCTX = iconv("windows-874", "utf-8", $SOPOH["OHCCTX"]);
    $OHGRP1 = iconv("windows-874", "utf-8", $SOPOH["OHGRP1"]);
    $OHGRP2 = iconv("windows-874", "utf-8", $SOPOH["OHGRP2"]);
     $INDT = $OHGRP1;
     $INDT1 = $OHGRP2;
  $OHSTRG1 = "00".$SOPOH["OHSTRG"];
     $SOPOW = odbc_fetch_array( odbc_exec($conn, " select  OWINDC ,OWGLEM ,OWGLEU,OWPRJP  from smcdta.SOPOW where  OWCUSN = '".$_GET['O1CUSN']."' limit 1  "));
     #  $INDT = substr($SOPOW['OWINDC'],0,2);

    $OWPRJP = iconv("windows-874", "utf-8", $SOPOW["OWPRJP"]);
    $OWGLEM = iconv("windows-874", "utf-8", $SOPOW["OWGLEM"]);    
    $OWGLEU = iconv("windows-874", "utf-8", $SOPOW["OWGLEU"]); 
    $OWINDC = iconv("windows-874", "utf-8", $SOPOW["OWINDC"]); 
    $OWGLEM = iconv("windows-874", "utf-8", $SOPOW["OWGLEM"]); 
    $OWGLEU = iconv("windows-874", "utf-8", $SOPOW["OWGLEU"]);   
    $OWPRJP = iconv("windows-874", "utf-8", $SOPOW["OWPRJP"]);  

    $OWMIX = $OWINDC.$OWGLEM.$OWGLEU.$OWPRJP;



  $SOPOA = odbc_fetch_array( odbc_exec($conn, "  select  OASLMN  from smcdta.SALETRR3 where  OATRRY = '".$SOPO1_test12['O1TRRY']."'  ORDER BY OAEFDT desc limit 1   "));
             $OASLMN = iconv("windows-874", "utf-8", $SOPOA["OASLMN"]);  
          
    $SOPOB = odbc_fetch_array( odbc_exec($conn, "  select  OBAMGR  from smcdta.SOPOB where  OBSLMN = '".$SOPOA['OASLMN']."' limit 1   "));
 
  $OBAMGR = iconv("windows-874", "utf-8", $SOPOB["OBAMGR"]);  

    $SOPOB2 = odbc_fetch_array( odbc_exec($conn, "  select  O7ESNM  from smcdta.SOPO7 where  O7SLMN = '".$SOPOA['OASLMN']."' limit 1   "));
$O7ESNM = iconv("windows-874", "utf-8", $SOPOB2["O7ESNM"]);  
 
    $SOPO71 = odbc_fetch_array( odbc_exec($conn, "  select  O7ESNM  from smcdta.SOPO7 where  O7SLMN = '".$SOPOB['OBAMGR']."' limit 1   "));
      
    $O7ESNM1 = iconv("windows-874", "utf-8", $SOPO71["O7ESNM"]);  
    $SOPEX = odbc_fetch_array( odbc_exec($conn, "  select  EXEDES  from smcdta.SOPEX where  EXEXTP  = 'CNTY'  and EXEXCD =  '".$SOPO1_test12['O1TSR1']."'   limit 1   "));

    $OBAMGR111 = $OASLMN.$O7ESNM;

    $OBAMGR11 = $OBAMGR.$O7ESNM1;
     ?>
                           
 

                           <!--  <div class="col col-md-2"><label for="text-input" class=" form-control-label">SMC A/C No.  :</label></div>
                            <div class="col-24 col-md-2"><input type="text" readonly="" list="brow"  id="idemployee" name="User_No" placeholder="SMC A/C No."
                              value="<?php echo $_POST['idemployee3']  ?>"  class="form-control" >
                            </div>-->
  
                          </div>

                           <div class="row form-group">


                              <div class="col col-md-2"><label for="disabled-input" class=" form-control-label"><font color="red"> Tax ID  :</font></label></div>
                            <div class="col-24 col-md-2"> <input type="text" id="customer_cusn"    name="customer_cusn"   maxlength="15" value="<?php echo $_GET["OHCCTX"]; ?>" placeholder="Search Tax ID  "   class="form-control"></div>


                             

                             <div class="col col-md-2"><label for="disabled-input" class=" form-control-label"><font color="red"> Tax  ID Branch :</font> </label></div>
                            <div class="col-24 col-md-2"> <input type="text" id="customer_cusn1"    name="customer_cusn1" maxlength="5"  value="<?php echo $_GET["OHSTRG"]; ?>" placeholder="Search   Brach   Code "   class="form-control"></div>



                            <div class="col col-md-1">
                            
                             
                         <button id="execute_search" type="button" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Click here after type Tax ID & Branch

                           
                            </button>
                             
  
 
                            </div>
                               
     


                           <!--  <div class="col col-md-2"><label for="text-input" class=" form-control-label">SMC A/C No.  :</label></div>
                            <div class="col-24 col-md-2"><input type="text" readonly="" list="brow"  id="idemployee" name="User_No" placeholder="SMC A/C No."
                              value="<?php echo $_POST['idemployee3']  ?>"  class="form-control" >
                            </div>-->
  
                          </div>



                          <div class="row form-group">
                           

                              </div>
                            <!--   ssssssssssssssssssssssssssssssssssssssssssssssssssssssss -->

                             
                                 
 

                           








                          
               
                 
 

                          <div class="row form-group">
                               <div class="col col-md-2"><label for="password-input" class=" form-control-label">User Name      :</label></div>
                            <div class="col-24 col-md-5"><input type="text" id="O1ECNM" name="engname" readonly="" placeholder="User Name Eng"  value="<?php echo $O1ECNM; ?>" class="form-control"></div>

                            
                               <div class="col-24 col-md-4"><input type="text" id="O1TCNM"  readonly="" name="O1TCNM" value="<?php echo $O1TCNM; ?>" placeholder="User Name Thai"  class="form-control"></div>


                          </div>


                       <div class="row form-group">
                                  <div class="col col-md-2"><label for="disabled-input" class=" form-control-label"><font color="red">*Distributor End User Code :</font>  </label></div>
                            <div class="col-24 col-md-2"> <input type="text" id="User_Code_Dist"    name="User_Code_Dist"  onchange="javascript:return check_usercode();"   maxlength="10"   value="" placeholder="Distributor End User Code "    class="form-control"></div>
                             <div class="col col-md-1">
           <!--        <button id="execute_search1" type="button" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Check Dis 
                           
                            </button> -->
                                   </div>  
                                       <div class="col col-md-2">
               <a href="./search.php"  class="btn btn-warning btn-sm  " >Search by Username</a>
                                   </div>  


<?php  
 


/*

<input type="text" id="O1CUSN" maxlength="8"  readonly=""   name="O1CUSN" value="<?php echo $O1CUSN_TA; ?>" placeholder="SMC A/C No."   class="form-control">  */
?>

                            <div class="col col-md-2"><label for="disabled-input" class=" form-control-label">SMC A/C No.  :</label></div>
                            <div class="col-24 col-md-2"> <input type="text" id="O1CUSN" maxlength="8"  readonly=""   name="O1CUSN" value="<?php echo $_GET["O1CUSN"]; ?>" placeholder="SMC A/C No."   class="form-control"></div>
  
                              </div>
  

                        
                          <div class="row form-group">
                           <div class="col col-md-2"><label for="disabled-input" class=" form-control-label">Address (Invoice)   :</label></div>
                           <div class="col-24 col-md-10"><input type="text" id="O1TAD1"  readonly="" name="O1TAD1" value="<?php echo $O1TAD1; ?>" placeholder="Address (Invoice)"  class="form-control"></div>

                             


                         </div>
                           <div class="row form-group">
                           <div class="col col-md-2"><label for="disabled-input" class=" form-control-label"></label></div>
                           <div class="col-24 col-md-10"><input type="text" id="O1TAD2"  readonly="" name="O1TAD2" value="<?php echo $O1TAD2; ?>"    class="form-control"></div>

                              

                         </div>
                          <div class="row form-group">
                           <div class="col col-md-2"><label for="disabled-input" class=" form-control-label"></label></div>
                           <div class="col-24 col-md-10"><input type="text" id="O1TAD3"  readonly="" name="O1TAD3" value="<?php echo $O1TAD3; ?>"    class="form-control"></div>

                              


                         </div>
                            <div class="row form-group">
                           <div class="col col-md-2"><label for="disabled-input" class=" form-control-label"></label></div>
                           <div class="col-24 col-md-10"><input type="text" id="O1TAD4"  readonly="" name="O1TAD4" value="<?php echo $O1TAD4; ?>"    class="form-control"></div>

                             

                         </div>

                       <div class="row form-group">
                            <div class="col col-md-2"><label for="disabled-input" class=" form-control-label">Contract Person    :</label></div>

                            <div class="col-24 col-md-4"><input type="text" id="O1CTNM"  readonly="" name="O1CTNM" value="<?php echo $O1CTNM; ?>" placeholder="Contract Person"  class="form-control"></div>
                             
                          <!--       <div class="container">
  
      
   <?php  echo " <a href='./Display_more.php?O1CUSN=".$_GET["O1CUSN"]."'   target='_blank'  class='btn btn-primary btn-sm ' > 

                        More Detail </a> ";  ?>
   
  
   
  
</div> -->

                          </div>

                   

 <div class="row form-group">
                            <div class="col col-md-2"><label for="disabled-input" class=" form-control-label">Remark    :</label></div>
                            <div class="col-24 col-md-10"><input type="text" id="O1CHQP"  readonly="" name="O1CHQP" value="<?php echo $O1CHQP ; ?>" placeholder="Remark"  class="form-control"></div>




                          </div>

                   <div class="row form-group">
                            <div class="col col-md-2"><label for="disabled-input" class=" form-control-label">Tel No.    :</label></div>
                            <div class="col-24 col-md-4"><input type="text" id="O1TLNO"  readonly="" name="O1TLNO" value="<?php echo $O1TLNO; ?>" placeholder="Tel No."  class="form-control"></div>

                                  <div class="col col-md-2"><label for="disabled-input" class=" form-control-label">Fax No.    :</label></div>
                            <div class="col-24 col-md-4"><input type="text" id="O1FXNO"  readonly="" name="O1FXNO" value="<?php echo $O1FXNO; ?>" placeholder="Fax No."  class="form-control"></div>


                          </div>

 
 











                         <div class="row form-group">
                         

                               

                             <div class="col col-md-2"><label for="disabled-input" class=" form-control-label">Project Code </label></div>
                            <div class="col-24 col-md-4"><input type="text" id="INDT"  readonly="" name="INDT" value="<?php echo $INDT; ?>" placeholder="Project Code"  class="form-control"></div>



                             <div class="col col-md-2"><label for="disabled-input" class=" form-control-label">Project code 10 digits: </label></div>
                            <div class="col-24 col-md-4"><input type="text" id="OWMIX"  readonly="" name="OWMIX" value="<?php echo $OWMIX; ?>" placeholder="Project code 10 digits"  class="form-control"></div>


                          </div>

                         
                            <input type="text" id="OHCCTX1" hidden  readonly="" name="OHCCTX1" value="<?php echo $OHCCTX1; ?>"  > 
                              


                                
                           <input type="text" id="OHSTRG1"   hidden readonly="" name="OHSTRG1" value="<?php   echo $OHSTRG1; ?>" > 

                         


                           <div class="row form-group">
                            
                              <div class="col col-md-2"><label for="disabled-input" class=" form-control-label">Industry  : </label></div>
                            <div class="col-24 col-md-4"><input type="text" id="INDT1"  readonly="" name="INDT1" value="<?php echo $INDT1; ?>" placeholder="Industry"  class="form-control"></div>


                               <div class="col col-md-2"><label for="disabled-input" class=" form-control-label">Country : </label></div>
                            <div class="col-24 col-md-4"><input type="text" id="O1TSR1"  readonly="" name="O1TSR1" value="<?php echo $O1TSR1; ?>" placeholder="Country"  class="form-control"></div>

                          
                          </div>
                           
                          <div class="row form-group">
                            

                               <div class="col col-md-2"><label for="disabled-input" class=" form-control-label">SMC Salesman  : </label></div>
                            <div class="col-24 col-md-4"><input type="text" id="OBAMGR111"  readonly="" name="OBAMGR111" value="<?php echo $OBAMGR111; ?>" placeholder="Country"  class="form-control"></div>

                          <div class="col col-md-2"><label for="disabled-input" class=" form-control-label">SMC  Branch    :</label></div>
                            <div class="col-24 col-md-4"><input type="text" id="O1RGEX"  readonly="" name="O1RGEX" value="<?php echo $O1RGEX; ?>" placeholder="SMC Branch"  class="form-control"></div>
                          </div>
               



                          <div class="row form-group">

                             <div class="col col-md-2"><label for="disabled-input" class=" form-control-label">SMC  ASM  :</label></div>
                            <div class="col-24 col-md-4"><input type="text" id="OBAMGR11"  readonly="" name="OBAMGR11" value="<?php echo $OBAMGR11; ?>" placeholder="SMC Area"  class="form-control"></div>
                                <div class="col col-md-2"><label for="disabled-input" class=" form-control-label"><font color="red"> *Distributor  Salesman  :</font></label></div>
                            <div class="col-24 col-md-4"><input type="text" id="Sales_Man_Dis"     name="Sales_Man_Dis"   maxlength="60"  value="<?php echo   $_POST['Man']; ?>" placeholder="Sales Man(Dis)"  class="form-control"></div>

                        </div>
                        

          
 
    <div class="row form-group">
                            <div class="col col-md-2"><label for="disabled-input" class=" form-control-label"><font color="red">*Issued By :</font>   </label></div>
                            <div class="col-24 col-md-4"><input type="text" id="Contact_Name"    name="Contact_Name"  maxlength="40"   value="" placeholder="Contact Name"   class="form-control"></div>

                               <div class="col col-md-2"><label for="disabled-input" class=" form-control-label">Email :</label></div>
                            <div class="col-24 col-md-4"><input type="email" id="Email"  readonly=""  name="Email" value="<?php  echo $email ;?>" placeholder="Email"  class="form-control"></div>


                          </div>
                          <div class="row form-group">
                            <div class="col col-md-2"><label for="disabled-input" class=" form-control-label"><font color="red">*Position :</font>  </label></div>
                            <div class="col-24 col-md-4"><input type="text" id="Position"     name="Position" value="" placeholder="Position"  maxlength="40"   class="form-control"></div>

                               <div class="col col-md-2"><label for="disabled-input" class=" form-control-label"><font color="red">*Tel :</font>  </label></div>
                            <div class="col-24 col-md-4"><input type="text" id="Tel" maxlength="20"       name="Tel" value="" placeholder="Tel"  class="form-control"></div>


                          </div>




    <!-- MONTH  ========================================== -->


<script type="text/javascript">$(document).ready(function(){
$("input").click(function(){
        $(this).next().show();
        $(this).next().hide();
    });

});</script>

       <!--action="3.php -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                          

                           <script language="javascript">

                           var t1 = 0;
                           var t2 = 0;
                           var t3 = 0;
                           var t4 = 0;
                           var t5 = 0;
                           var t6 = 0;
                           var t7 = 0;
                           var t8 = 0;
                           var t9 = 0;
                           var t10 = 0;
                           var t11 = 0;
                           var t12 = 0;
                           var sum = 0;
                       
                           function fnccheck(){

                             t1=parseFloat(document.getElementById('input1').value);
                             t2=parseFloat(document.getElementById('input2').value);
                             t3=parseFloat(document.getElementById('input3').value);
                             t4=parseFloat(document.getElementById('input4').value);
                             t5=parseFloat(document.getElementById('input5').value);
                             t6=parseFloat(document.getElementById('input6').value);
                             t7=parseFloat(document.getElementById('input7').value);
                             t8=parseFloat(document.getElementById('input8').value);
                             t9=parseFloat(document.getElementById('input9').value);
                             t10=parseFloat(document.getElementById('input10').value);
                             t11=parseFloat(document.getElementById('input11').value);
                             t12=parseFloat(document.getElementById('input12').value);
                           sum=t1+t2+t3+t4+t5+t6+t7+t8+t9+t10+t11+t12;

                            if (parseFloat(sum) == 0) {

                             alert("Please enter a value greater than zero!!");

                           }
                           else   {
                             document.getElementById('total').value = sum;
                           }

                           console.log(sum);



                           }
                           </script>

     <div class="product-status mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap drp-lst">
                      
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a >Fisical  Year  Budget</a> </li>
                             
                            </ul>

                            <?php 



                            ?>
                                                    <div class="row form-group">
                            <div class="col col-md-2"><label for="disabled-input" class=" form-control-label"><font color="red">*Fisical Year  Budget :</font> </label></div>
                            <div class="col-24 col-md-4"> <input type="text" id="Year"  maxlength="4"    pattern="[0-9]{4}"   name="Year" value="<?php  echo date("Y") ?>" placeholder="Fiscal Year Budget" class="form-control"></div>

                           


                          </div>
                            <div class="row form-group">

                            <div class="col col-md-2"><label for="disabled-input" class=" form-control-label">Apr :</label></div>
                            <div class="col-24 col-md-4"><input type="number" id="input1" pattern="[0-9]"  max="99999999999"     Onchange="JavaScript:return fnccheck();" name="Apr" value="0"      class="form-control"> </div>

                                <div class="col col-md-2"><label for="disabled-input" class=" form-control-label">May :</label></div>
                            <div class="col-24 col-md-4"><input type="number" id="input2"  pattern="[0-9]"  max="99999999999"  Onchange="JavaScript:return fnccheck();"  maxlength="13"   name="May" value="0"    class="form-control"></div>
                        </div>
                             <div class="row form-group">

                           <div class="col col-md-2"><label for="disabled-input" class=" form-control-label">Jun :</label></div>
                            <div class="col-24 col-md-4"> <input type="number" id="input3" pattern="[0-9]" max="99999999999"   Onchange="JavaScript:return fnccheck();"   maxlength="13"  name="Junl" value="0"    class="form-control"></div>

                              <div class="col col-md-2"><label for="disabled-input" class=" form-control-label">Jul :</label></div>
                            <div class="col-24 col-md-4"><input type="number"  id="input4"  pattern="[0-9]" max="99999999999"  Onchange="JavaScript:return fnccheck();"  maxlength="13"   name="Jul" value="0"    class="form-control"></div>
                        </div>
                             <div class="row form-group">

                            <div class="col col-md-2"><label for="disabled-input" class=" form-control-label">Aug :</label></div>
                            <div class="col-24 col-md-4"><input type="number"  id="input5" pattern="[0-9]" max="99999999999"    Onchange="JavaScript:return fnccheck();"  maxlength="13"    name="Aug" value="0"    class="form-control"></div>

                               <div class="col col-md-2"><label for="disabled-input" class=" form-control-label">Sep :</label></div>
                            <div class="col-24 col-md-4"><input type="number"  id="input6" pattern="[0-9]" max="99999999999"    Onchange="JavaScript:return fnccheck();"   maxlength="13"   name="Sep" value="0"    class="form-control"></div>
                        </div>
                             <div class="row form-group">
                              <div class="col col-md-2"><label for="disabled-input" class=" form-control-label">Oct :</label></div>
                            <div class="col-24 col-md-4"><input type="number" id="input7"  pattern="[0-9]"  max="99999999999"  Onchange="JavaScript:return fnccheck();"   maxlength="13"   name="Oct" value="0"   class="form-control"> </div>

                                  <div class="col col-md-2"><label for="disabled-input" class=" form-control-label">Nov :</label></div>
                            <div class="col-24 col-md-4"> <input type="number" id="input8"   pattern="[0-9]" max="99999999999"   Onchange="JavaScript:return fnccheck();"  maxlength="13"   name="Nov" value="0"    class="form-control"> </div>
                        </div>
                             <div class="row form-group">

                           <div class="col col-md-2"><label for="disabled-input" class=" form-control-label">Dec :</label></div>
                            <div class="col-24 col-md-4"><input type="number" id="input9"  pattern="[0-9]" max="99999999999"   Onchange="JavaScript:return fnccheck();"   maxlength="13"   name="Dec" value="0"    class="form-control"></div>

                              <div class="col col-md-2"><label for="disabled-input" class=" form-control-label"> Jan :</label></div>
                            <div class="col-24 col-md-4"><input type="number" id="input10"  pattern="[0-9]" max="99999999999"   Onchange="JavaScript:return fnccheck();"  maxlength="13"    name="Jan" value="0"    class="form-control"></div>
                        </div>
                             <div class="row form-group">

                             <div class="col col-md-2"><label for="disabled-input" class=" form-control-label">Feb : </label></div>
                            <div class="col-24 col-md-4"><input type="number" id="input11" pattern="[0-9]" max="99999999999"   Onchange="JavaScript:return fnccheck();"  maxlength="13"   name="Feb" value="0"   class="form-control"></div>

                                 <div class="col col-md-2"><label for="disabled-input" class=" form-control-label">Mar :</label></div>
                            <div class="col-24 col-md-4"><input type="number" id="input12" pattern="[0-9]" max="99999999999"   Onchange="JavaScript:return fnccheck();"  maxlength="13"    name="Mar" value="0"    class="form-control"></div>
                        </div>
                         <div class="row form-group">

                            <div class="col col-md-2"><label for="disabled-input" class=" form-control-label"><font color="red">*Total Budget Amount   :</font>  </label></div>
                            <div class="col-24 col-md-4"><input type="text"  required   maxlength="4" readonly=""   name="total" id="total" value="0" placeholder="Total" class="form-control"> </div>

                              
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
                           
 
    <!-- MONTH  ========================================== -->
                        
                 


  <div class="row form-group">
                            <div class="col col-md-2"><label for="disabled-input" class=" form-control-label">Remark   :</label></div>
                            <div class="col-12 col-md-10"><input type="text" id="Remark"   name="Remark_1" value=""  pattern="^[a-zA-Z0-9\s]+$"   placeholder="Remark"  class="form-control"></div>

                          </div>

                       <div class="row form-group">

                            <div class="col-12 col-md-12"><input type="text" id="Remark1"    name="Remark_2" value="" placeholder="Remark"  pattern="^[a-zA-Z0-9\s]+$" class="form-control"></div>

                          </div>

 <div class="row form-group">

                            <div class="col-12 col-md-12"><input type="text" id="Remark2"    name="Remark_3" value="" placeholder="Remark" pattern="^[a-zA-Z0-9\s]+$"  class="form-control"></div>

                          </div>
                    <div class="row form-group">

                            <div class="col-12 col-md-12"><input type="text" id="Remark3"    name="Remark_4" value="" placeholder="Remark" pattern="^[a-zA-Z0-9\s]+$"  class="form-control"></div>

                          </div>
                          <div class="row form-group">

                                  <div class="col-12 col-md-12"><input type="text" id="Remark4"    name="Remark_5" value="" placeholder="Remark"  pattern="^[a-zA-Z0-9\s]+$"  class="form-control"></div>

                                </div>
                                <div class="row form-group">

                                        <div class="col-12 col-md-12"><input type="text" id="Remark5"    name="Remark_6" value="" placeholder="Remark" pattern="^[a-zA-Z0-9\s]+$"   class="form-control"></div>

                                      </div>




                      </div>
                      <!--  DRAP  dROP  -->

<div class="row form-group">

       <div class="col col-md-2"><label for="disabled-input" class=" form-control-label"><font color="red">*Select file to upload:</font></label></div>
  <input type="file" id = "imagefile" name="imagefile">
</div>

                      <!--  END DRAP DROP  -->
                       <div class="card-footer" align="center">
                        <p id="demo"></p>
                        <!--  <button type="submit" id = "submit_one"  onclick="myFunction()" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Save
                        </button> -->

                      <button type="submit" id = "submit_one" formaction="./update_data_add.php"   class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Save
                        </button>  


                     <a class="btn btn-danger btn-sm" href = http://mail.smcthai.co.th:8082/pj_mail/M_UMR/WEB/index_mail.php>  Back
                        </a>

                      </div>  
         
</script>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

          </form>

        </div>

 
<script type="text/javascript">
  

  $(document).keypress(
  function(event){
    if (event.which == '13') {
      event.preventDefault();
    }
});


  
 

  function check_submit(){



                   var value_a = document.getElementById("User_Code_Dist").value; 
                    var value_b = document.getElementById("Distributor").value;
                    var value_c = document.getElementById("O1CUSN").value;
 ////////////// input condition 

                   


           /*     if(document.getElementById("customer_cusn").value == "")
                {
                    alert('Please fill  Tax ID   !!');
                    document.getElementById("customer_cusn").focus();
                    return false;
                } else

                if(document.getElementById("customer_cusn1").value == "")
                {
                    alert('Please fill  Tax  Branch  Code   !!');
                    document.getElementById("customer_cusn1").focus();
                    return false;
                } else */


                 if(document.getElementById("User_Code_Dist").value == "")
                {
                    alert('Please fill  Distributor End User Code   !!');
                    document.getElementById("User_Code_Dist").focus();
                    return false;
                } else 
                

                 if(document.getElementById("Sales_Man_Dis").value == "")
                {
                    alert('Please fill  Salesman Distributor   !!');
                    document.getElementById("Sales_Man_Dis").focus();
                    return false;
                } else

                 if(document.getElementById("Contact_Name").value == "")
                {
                    alert('Please fill  Issued By !!');
                    document.getElementById("Contact_Name").focus();
                    return false;
                } else

 

                  if(document.getElementById("Position").value == "")
                {
                    alert('Please fill  Position !!');
                    document.getElementById("Position").focus();
                    return false;
                } else
                  if(document.getElementById("Tel").value == "")
                {
                    alert('Please fill  Tel !!');
                    document.getElementById("Tel").focus();
                    return false;
                }  else

                  if(document.getElementById("Year").value == "")
                {
                    alert('Please fill  Fisical Year Budget !!');
                    document.getElementById("Year").focus();
                    return false;
                } else
  
 

           if(document.getElementById("input1").value == "")
                {
                    alert('Please fill  value  of  April , Enter a value of at least 0 or more !! ');
                    document.getElementById("input1").focus();
                    return false;
                }



        if(document.getElementById("input2").value == "")
                {
                    alert('Please fill  value  of  May , Enter a value of at least 0 or more !! ');
                    document.getElementById("input2").focus();
                    return false;
                }
       if(document.getElementById("input3").value == "")
                {
                    alert('Please fill  value  of  June , Enter a value of at least 0 or more !! ');
                    document.getElementById("input3").focus();
                    return false;
                }
        if(document.getElementById("input4").value == "")
                {
                    alert('Please fill  value  of  July , Enter a value of at least 0 or more !! ');
                    document.getElementById("input4").focus();
                    return false;
                }
          if(document.getElementById("input5").value == "")
                {
                    alert('Please fill  value  of  August , Enter a value of at least 0 or more !! ');
                    document.getElementById("input5").focus();
                    return false;
                }

          if(document.getElementById("input6").value == "")
                {
                    alert('Please fill  value  of  September , Enter a value of at least 0 or more !! ');
                    document.getElementById("input6").focus();
                    return false;
                }

          if(document.getElementById("input7").value == "")
                {
                    alert('Please fill  value  of  October , Enter a value of at least 0 or more !! ');
                    document.getElementById("input7").focus();
                    return false;
                }
       if(document.getElementById("input8").value == "")
                {
                    alert('Please fill  value  of  November , Enter a value of at least 0 or more !! ');
                    document.getElementById("input8").focus();
                    return false;
                }
        if(document.getElementById("input9").value == "")
                {
                    alert('Please fill  value  of  December , Enter a value of at least 0 or more !! ');
                    document.getElementById("input8").focus();
                    return false;
                }

        if(document.getElementById("input10").value == "")
                {
                    alert('Please fill  value  of  January , Enter a value of at least 0 or more !! ');
                    document.getElementById("input10").focus();
                    return false;
                }
        if(document.getElementById("input11").value == "")
                {
                    alert('Please fill  value  of  February , Enter a value of at least 0 or more !! ');
                    document.getElementById("input11").focus();
                    return false;
                }
        if(document.getElementById("input12").value == "")
                {
                    alert('Please fill  value  of  March , Enter a value of at least 0 or more !! ');
                    document.getElementById("input12").focus();
                    return false;
                }
            else

          if (document.getElementById("total").value == 0) {
                  alert("Please fill  value  of  month !!  ");
                  return false;
          } 

                else     if (parseFloat(sum) <= 0) {

            alert("Please enter a value greater than zero!!");
              return false;
                             
     }  
                else


/////////////// for index_add.php only //////////////////
                if (document.getElementById("imagefile").files.length == 0) {
                        alert("Please select attachment files !!  ");
                        return false;
                } else
/////////////// for index_add.php only //////////////////
                  
                    if (document.getElementById("O1ECNM").value == "") {
                        alert("Please enter the correct Tax ID and Tax ID Branch and  Click here after type Tax ID & Branch  or Click Button Search by Username. !!  ");
                           document.getElementById("customer_cusn").focus();
                        return false;
                }  

          /*  else

         if(document.getElementById("User_Code_Dist").value != "")
                {
                    var value_a = document.getElementById("User_Code_Dist").value;
                    var value_b = document.getElementById("Distributor").value;
                    var value_c = document.getElementById("O1CUSN").value;
                     $.post("check_code.php", { Usercode : value_a,Districode : value_b,Smccode : value_c } , function(return_value, status_a){

                   if ( return_value == 1 ) {
 
                      alert("Please new fill  Distributor End  User Code because Duplicate  !! ");
                      document.getElementById("User_Code_Dist").value = "";
                      document.getElementById("User_Code_Dist").focus();             
                        return false;
                     }

                    }); 

                } */
                
 
    var status = confirm("Do you want to save Entry Data?");

                        if ( status == false ) {
                             return false;
                            } else {


                 var check_alert;
                      $.post("check_code.php", { Usercode : value_a,Districode : value_b,Smccode : value_c } , function(return_value, status_a){

                   
                           
                           check_alert = return_value ;
                     
                     

                     
                    });

                      if ( check_alert == 1 ) {

                         alert("Please new fill  Distributor End  User Code because Duplicate  !! ");
                      document.getElementById("User_Code_Dist").value = "";
                      document.getElementById("User_Code_Dist").focus();             
                        return false;

                      }


                    // return false;

                            }
////////////// input condition


   




  }

 
 



 document.getElementById("Sales_Man_Dis").addEventListener("keyup", function(event) {
      if (event.keyCode === 13) {
       event.preventDefault();
        var value_a = document.getElementById("Sales_Man_Dis").value;

        if (value_a == "") {

            alert("Please fill Distributor Salesman  !!");
            document.getElementById("Sales_Man_Dis").value = "";

        } else{
            
             document.getElementById("Contact_Name").focus();

        }



      }
  });


document.getElementById("Contact_Name").addEventListener("keyup", function(event) {
      if (event.keyCode === 13) {
       event.preventDefault();
        var value_a = document.getElementById("Contact_Name").value;

        if (value_a == "") {

            alert("Please fill Issued By  !!");
            document.getElementById("Contact_Name").value = "";

        } else{
            
             document.getElementById("Position").focus();

        }



      }
  });


document.getElementById("Position").addEventListener("keyup", function(event) {
      if (event.keyCode === 13) {
       event.preventDefault();
        var value_a = document.getElementById("Position").value;

        if (value_a == "") {

            alert("Please fill Position  !!");
            document.getElementById("Position").value = "";

        } else{
            
             document.getElementById("Tel").focus();

        }



      }
  });



document.getElementById("Tel").addEventListener("keyup", function(event) {
      if (event.keyCode === 13) {
       event.preventDefault();
        var value_a = document.getElementById("Tel").value;

        if (value_a == "") {

            alert("Please fill  Tel !!");
            document.getElementById("Tel").value = "";

        } else{
            
             document.getElementById("Year").focus();

        }



      }
  });



 
document.getElementById("Year").addEventListener("keyup", function(event) {
      if (event.keyCode === 13) {
       event.preventDefault();
        var value_a = document.getElementById("Year").value;

  
        if (value_a == "") {

            alert("Please fill  Fisical Year Budget !!");
            document.getElementById("Year").value = "";

        } 
       

        else{
                                                                 
               if (document.getElementById("total").value == 0) {
                        alert("Please fill  value  of  month !!  ");
                        return false;
                }  

        }



      }
  });

 
 


 document.getElementById("User_Code_Dist").addEventListener("keyup", function(event) {
      if (event.keyCode === 13) {
       event.preventDefault();

        var value_a = document.getElementById("User_Code_Dist").value;
        var value_b = document.getElementById("Distributor").value;
        var value_c = document.getElementById("O1CUSN").value;
       $.post("check_code.php", { Usercode : value_a,Districode : value_b,Smccode : value_c } , function(return_value, status_a){

          //var object = jQuery.parseJSON(return_value);
        
          if ( return_value == 1 ) {
 
            alert("Please new fill  Distributor End  User Code because Duplicate  !! ");
             document.getElementById("User_Code_Dist").value = "";
              document.getElementById("User_Code_Dist").focus();             

          }else{

            document.getElementById("Sales_Man_Dis").focus();

          }


      }); 



      }
  });






 document.getElementById("customer_cusn").addEventListener("keyup", function(event) {
      if (event.keyCode === 13) {
       event.preventDefault();
       //alert("test");

       var value_a = document.getElementById("customer_cusn").value;

       $.post("check_code.php", { taxid: value_a } , function(return_value, status_a){

          //var object = jQuery.parseJSON(return_value);
        
          if ( return_value == 1 ) {

           // alert("Tax ID is correct");            

          }else{

            alert("Tax ID is incorrect");

          }


      }); 


      }
  });



 document.getElementById("customer_cusn1").addEventListener("keyup", function(event) {
      if (event.keyCode === 13) {
       event.preventDefault();
       //alert("test");

       var value_b = document.getElementById("customer_cusn1").value;

       $.post("check_code.php", { brachid: value_b } , function(return_value, status_a){

          //var object = jQuery.parseJSON(return_value);
        
          if ( return_value == 1 ) {

            alert("Please  Click here after type Tax ID & Branch");            

          }else{

            alert("Tax ID Branch Code is incorrect");

          }


      }); 


      }
  });

  function check_usercode(){


     var value_a = document.getElementById("User_Code_Dist").value;
                    var value_b = document.getElementById("Distributor").value;
                    var value_c = document.getElementById("O1CUSN").value;
                     $.post("check_code.php", { Usercode : value_a,Districode : value_b,Smccode : value_c } , function(return_value, status_a){

                   if ( return_value == 1 ) {
 
                      alert("Please new fill  Distributor End  User Code because Duplicate  !! " );
                      document.getElementById("User_Code_Dist").value = "";
                      document.getElementById("User_Code_Dist").focus();             
                        return false;
                     }

                    }); 

  }
  

  function execute_search(){


       var value_a = document.getElementById("customer_cusn").value;
       var value_b = document.getElementById("customer_cusn1").value;
     

       $.post("query.php", { taxid: value_a , brachid : value_b  } , function(return_value, status_a){

          //console.log(return_value); //debug

  
          var object = jQuery.parseJSON(return_value);
          $("#O1ECNM").val(object.O1ECNM);
          $("#O1TCNM").val(object.O1TCNM);
          $("#O1EAD1").val(object.O1EAD1);
          $("#O8EAD1").val(object.O8EAD1);
          $("#O1EAD2").val(object.O1EAD2);
          $("#O8EAD2").val(object.O8EAD2);
          $("#O1EAD3").val(object.O1EAD3);
          $("#O8EAD3").val(object.O8EAD3);
          $("#EXEDES").val(object.EXEDES);
          $("#O1PSTC").val(object.O1PSTC);
          $("#O8PSTC").val(object.O8PSTC);
          $("#O1TAD1").val(object.O1TAD1);
          $("#O8TAD1").val(object.O8TAD1);
          $("#O1TAD2").val(object.O1TAD2);
          $("#O8TAD2").val(object.O8TAD2);
          $("#O1TAD3").val(object.O1TAD3);
          $("#O8TAD3").val(object.O8TAD3);
          $("#O1TAD4").val(object.O1TAD4);
          $("#O8TAD4").val(object.O8TAD4);
          $("#O1CENM").val(object.O1CENM);
          $("#O8CENM").val(object.O8CENM);
          $("#O1CTNM").val(object.O1CTNM);
          $("#O8CTNM").val(object.O8CTNM);
          $("#O1CHQP").val(object.O1CHQP);
          $("#O1TLNO").val(object.O1TLNO);
          $("#O8TLNO").val(object.O8TLNO);
          $("#O1FXNO").val(object.O1FXNO);
          $("#O8FXNO").val(object.O8FXNO);
          $("#OHCCTX1").val(object.OHCCTX1);
          $("#OHSTRG1").val(object.OHSTRG1);  
          $("#OHCCTX").val(object.OHCCTX);
          $("#O1TSR1").val(object.O1TSR1);
          $("#OWMIX").val(object.OWMIX);
          $("#INDT").val(object.INDT);
           $("#INDT1").val(object.INDT1);
          $("#O1RGEX").val(object.O1RGEX);
         $("#OBAMGR").val(object.OBAMGR);

       
         $("#OBAMGR11").val(object.OBAMGR11);   
          $("#OBAMGR111").val(object.OBAMGR111);   



      }); 


 }






  document.getElementById("execute_search").addEventListener("click", function(event) {

   



       var value_a = document.getElementById("customer_cusn").value;
       var value_b = document.getElementById("customer_cusn1").value;
     

       if ( value_a == "") {
            alert(" Search Tax ID is NULL");
            return false;
       }

       if ( value_b == "") {
            alert(" Search Branch Code is NULL ");
            return false;
       }





       $.post("query.php", { taxid: value_a , brachid : value_b  } , function(return_value, status_a){

          //console.log(return_value); //debug

          var object = jQuery.parseJSON(return_value);
          $("#O1ECNM").val(object.O1ECNM);
          $("#O1TCNM").val(object.O1TCNM);
          $("#O1EAD1").val(object.O1EAD1);
          $("#O8EAD1").val(object.O8EAD1);
          $("#O1EAD2").val(object.O1EAD2);
          $("#O8EAD2").val(object.O8EAD2);
          $("#O1EAD3").val(object.O1EAD3);
          $("#O8EAD3").val(object.O8EAD3);
          $("#EXEDES").val(object.EXEDES);
          $("#O1PSTC").val(object.O1PSTC);
          $("#O8PSTC").val(object.O8PSTC);
          $("#O1TAD1").val(object.O1TAD1);
          $("#O8TAD1").val(object.O8TAD1);
          $("#O1TAD2").val(object.O1TAD2);
          $("#O8TAD2").val(object.O8TAD2);
          $("#O1TAD3").val(object.O1TAD3);
          $("#O8TAD3").val(object.O8TAD3);
          $("#O1TAD4").val(object.O1TAD4);
          $("#O8TAD4").val(object.O8TAD4);
          $("#O1CENM").val(object.O1CENM);
          $("#O8CENM").val(object.O8CENM);
          $("#O1CTNM").val(object.O1CTNM);
          $("#O8CTNM").val(object.O8CTNM);
          $("#O1CHQP").val(object.O1CHQP);
          $("#O1TLNO").val(object.O1TLNO);
          $("#O8TLNO").val(object.O8TLNO);
          $("#O1FXNO").val(object.O1FXNO);
          $("#O8FXNO").val(object.O8FXNO);
          $("#OHCCTX1").val(object.OHCCTX1);
          $("#OHSTRG1").val(object.OHSTRG1);  
          $("#OHCCTX").val(object.OHCCTX);
          $("#O1TSR1").val(object.O1TSR1);
          $("#OWMIX").val(object.OWMIX);
          $("#INDT").val(object.INDT);
           $("#INDT1").val(object.INDT1);
          $("#O1RGEX").val(object.O1RGEX);
         $("#OBAMGR").val(object.OBAMGR);


  $("#O1CUSN").val(object.O1CUSN);

         $("#OBAMGR11").val(object.OBAMGR11);   
          $("#OBAMGR111").val(object.OBAMGR111);   



      }); 


      
  });


  document.getElementById("execute_search1").addEventListener("click", function(event) {

    

        var value_a = document.getElementById("User_Code_Dist").value;
        var value_b = document.getElementById("Distributor").value;
        var value_c = document.getElementById("O1CUSN").value;
       $.post("check_code.php", { Usercode : value_a,Districode : value_b,Smccode : value_c } , function(return_value, status_a){

          //var object = jQuery.parseJSON(return_value);
        
          if ( return_value == 1 ) {
 
            alert("Please new fill  Distributor End  User Code because Duplicate  !! ");
             document.getElementById("User_Code_Dist").value = "";
              document.getElementById("User_Code_Dist").focus();             

          } 


      }); 


 

      
  });
</script>