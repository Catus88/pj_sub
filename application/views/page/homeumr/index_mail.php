   <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>User Master Registration Data Entry</h1>
                                </div>
                            </div>



                            <form method="post" >

                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">

                                          
                                    
                                    <div id="toolbar"> 
                                       
                                    </div>
                                         <div id="toolbar">
                                              

                                             
                                              <button class='btn btn-primary btn-sm' formaction="http://mail.smcthai.co.th:8082/pj_mail/M_UMRR/web/index_add.php" >Create</button>  
 
                                           <!------ example ----->
                <button class='btn btn-warning btn-sm' formaction="./index_edit.php" >Edit</button> 

                                           <!------ example ----->
 

                                          <!------ example ----->
               <button class='btn btn-danger btn-sm' formaction="./cancle.php" >Delete</button>

                                           <!------ example ----->
                                               
                                                 <button class='btn btn-success btn-sm' formaction="  http://mail.smcthai.co.th:8082/pj_mail/M_UMRR/web/submit.php  " >Submit</button>

                                    </div>
                                   <table id="table" data-toggle="table" data-pagination="true" data-search="true"     data-key-events="true"   data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId"  data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <th data-field="state" ></th>
                                                 
                                                <th data-field="id">No</th>
                                                <th data-field="name"  >UMR No.</th>
                                                <th data-field="email"  >Date</th>
                                                <th data-field="phone" >SMC A/C</th>
                                                <th data-field="complete">Distributor <br> Code</th>
                                                <th data-field="complete1">Distributor <br> End User Code</th>
                                                <th data-field="task"  >User Name</th>
                                                 <th data-field="status"  >Status</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
       <!--   STATEMENT   QUERY     -->
    
    

  <?php /*


$STRQTY = "select  *   from [StockPrice].[dbo].[Username]  where [UserN]  ='".$_SESSION["USUSID"]."'  ";
$login_result = odbc_fetch_array(odbc_exec($con, $STRQTY));
$Company = trim($login_result["Company"]);
$User_name = trim($login_result["UserN"]);

                $count = 0;

                                                           

 # select * from smctest.CUSTREFID1 a join  smctest.sopdg b on a.CADSTC = b.DGURID where b.DGUSSQ  = 'Z1TEST'  order by CARFNO desc 

  #$querystr_SOPCA = odbc_exec($conn,"select * from smctest.CUSTREFID1 where   CACOCD = '02' and CABRCD = ''    and CAURID =  '".$User_name."' order by CARFNO desc      ");

   $querystr_SOPCA = odbc_exec($conn,"select * from smctest.CUSTREFID1 a join  smctest.sopdg b on a.CARFNO = b.DGRFNO where b.DGUSSQ  =  '".$User_name."'  order by CARFNO desc     ");
 #$querystr_SOPCA = odbc_exec($conn,"select * from smctest.SOPCA where   CACOCD = '02' and  CADSTC = '".$USID_trim."'   ");
           while ($result_approve = odbc_fetch_array($querystr_SOPCA)) {

            $CARFNO  = iconv("windows-874", "utf-8", $result_approve["CARFNO"]);
            $CARFDT = iconv("windows-874", "utf-8", $result_approve["CARFDT"]);
            $CACUSN = iconv("windows-874", "utf-8", $result_approve["CACUSN"]);
            $CAECNM  = iconv("windows-874", "utf-8", $result_approve["CAECNM"]);
            $CASTAT = iconv("windows-874", "utf-8", $result_approve["CASTAT"]);
            $CADSTC = iconv("windows-874", "utf-8", $result_approve["CADSTC"]);
             $CAURID = iconv("windows-874", "utf-8", $result_approve["CAURID"]);
            $CASLMG = iconv("windows-874", "utf-8", $result_approve["CASLMG"]);
            $CAAUAP = iconv("windows-874", "utf-8", $result_approve["CAAUAP"]);
            $CAARSM = iconv("windows-874", "utf-8", $result_approve["CAARSM"]);

             $CAURID_T = trim($CAURID);   
            $CARFNO_T = trim($CARFNO);
            $CACUSN_T = trim($CACUSN);
            $CADSTC_T = trim($CADSTC);
             $CASLMG_T = trim($CASLMG); 
            $CAAUAP_T = trim($CAAUAP);
            $CAARSM_T = trim($CAARSM);

     $querystr_sopcf = odbc_exec($conn,"select CFUSRC from smctest.SOPCF where   CFRFNO =  '".$CARFNO."'  "); 
     while ($result_approve_o2 = odbc_fetch_array($querystr_sopcf)) {
$CFUSRC = iconv("windows-874", "utf-8", $result_approve_o2["CFUSRC"]);

 



            $test = 'null';
            $count++;
            $status =  "";


          #<a href ='./index_edit.php?DCNO=".$CARFNO_T."' >  <button class='btn btn-info btn-sm' >Edit  </button>  </a>
           #     <a href ='./cancle.php?DCNO=".$CARFNO_T."' >  <button class='btn btn-danger btn-sm' >Cancle </button> </a>
            #     <a href ='./display.php?DCNO=".$CARFNO_T."' >  <button class='btn btn-success btn-sm' >Display </button> </a>

    if ($result_approve) {
          
           $Message_b = "
               
               
                 <a href ='./display.php?DCNO=".$CARFNO_T."' >  <button class='btn btn-warning btn-sm' >  Summit </button> </a>

                <input name='CARFNO_T' type = 'text' hidden value = '".$CARFNO_T."' >  
                       
                       "; 
 

          $Message_M  =  "
                      
               <a href ='./display.php?DCNO=".$CARFNO_T."' > <button class='btn btn-gray btn-sm' >submit  </button>  &#10003   </a>
                
               <input name='CARFNO_T' type = 'text' hidden value = '".$CARFNO_T."' >
                       
                       ";   
         $Message_D  =  "
                       
                          <a href ='./display.php?DCNO=".$CARFNO_T."' > <button class='btn btn-gray btn-sm' >Delete  </button> </a>
                           ";  
                
         $Message_C  =  "
                         
                           <a href ='./display.php?DCNO=".$CARFNO_T."' > <button type='button' class='btn btn-success'> Complete  </button> 
                            </a>    "; 
                                             
          $Message_R  =  "
                            
                            <a href ='./display.php?DCNO=".$CARFNO_T."' > <button class='btn btn-gray btn-sm' > BM Approve   </button>  </a>   ";          
         $Message_U  =   "
                          
                            <a href ='./display.php?DCNO=".$CARFNO_T."' > <button class='btn btn-gray btn-sm' > Area  Approve   </button>    </a>
                            ";  

      $Message_bz = "
               
                  <button data-toggle='tooltip' title='Submit' class='btn btn-warning'><i class='fa fa-envelope-o' aria-hidden='true'></i></button>
                                            <button data-toggle='tooltip' title='Edit' class='btn btn-primary' formaction  ='./display.php?DCNO=".$CARFNO_T."'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></button>
                                            <button data-toggle='tooltip' title='Trash' class='btn btn-danger'  class='pd-setting-ed' formaction  ='./display.php?DCNO=".$CARFNO_T."'>
                                            <i class='fa fa-trash-o' aria-hidden='true'></i></button>
                <input name='CARFNO_T' type = 'text' hidden value = '".$CARFNO_T."' >
                <input name='CARFNO_T' type = 'text' hidden value = '".$CARFNO_T."' >  
                       
                       "; 
 

          $Message_Mz  =  "
                      

               
                 <button class='btn btn-gray btn-sm' formaction  ='./display.php?DCNO=".$CARFNO_T."' >  WAT  </button>       
               <input name='CARFNO_T' type = 'text' hidden value = '".$CARFNO_T."' >
                       
                       ";   
         $Message_Dz  =  "
                       
                          <button data-toggle='tooltip' title='Delete' class='btn btn-danger'  class='pd-setting-ed' formaction  ='./display.php?DCNO=".$CARFNO_T."'>
                                            <i class='fa fa-times' aria-hidden='true'></i></button>  
                           ";  
                
         $Message_Cz  =  "
                         
                            <button data-toggle='tooltip' title='Complete Submit' class='btn btn-success'  class='pd-setting-ed' formaction  ='./display.php?DCNO=".$CARFNO_T."'>
                                            <i class='fa fa-check' aria-hidden='true'></i></button>
                               "; 
                                             
          $Message_Rz  =  "
                            
                            <button class='btn btn-gray btn-sm' formaction  ='./display.php?DCNO=".$CARFNO_T."'>  BM
<span class='sr-only'>Loading...</span>   </button>        ";          
         $Message_Uz  =   "
                          
                              <button class='btn btn-gray btn-sm' formaction  ='./display.php?DCNO=".$CARFNO_T."' > ARM
<span class='sr-only'>Loading...</span>   </button>   
                            ";  
                                
   $Message_XUz  =   "
                          
                               <button class='btn btn-p btn-sm' formaction  ='./display.php?DCNO=".$CARFNO_T."' > <i class='fa fa-tag'></i>
<span class='sr-only'>Loading...</span>   </button>     
  <input name='CARFNO_T' type = 'text' hidden value = '".$CARFNO_T."' >
                            ";  
                                




                                 $Message_bz1 = "
               
                  <button data-toggle='tooltip' title='Submit' class='btn btn-warning'><i class='fa fa-envelope-o' aria-hidden='true'></i></button>
                                            <button data-toggle='tooltip' title='Edit' class='btn btn-primary' formaction  ='./display.php?DCNO=".$CARFNO_T."'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></button>
                                            <button data-toggle='tooltip' title='Trash' class='btn btn-danger'  class='pd-setting-ed' formaction  ='./display.php?DCNO=".$CARFNO_T."'>
                                            <i class='fa fa-trash-o' aria-hidden='true'></i></button>
              
                <input name='CARFNO_T' type = 'text' hidden value = '".$CARFNO_T."' >  
                       
                       "; 
 

          $Message_Mz1  =  "
                      
                  <button class='btn   btn-warning btn-sm'   formaction  ='./display.php?DCNO=".$CARFNO_T."' > Wait Approve </button>   
               
                
                       
                       ";   
         $Message_Dz1  =  "
                       
                         <button class='btn btn-danger btn-sm' formaction  ='./display.php?DCNO=".$CARFNO_T."'> Delete </button>   
                           ";  




            $Message_Dz2  =  "
                       
                         <button class='btn btn-danger btn-sm' formaction  ='./display.php?DCNO=".$CARFNO_T."'> Delete Branch Manager  </button>   
                           "; 

                $Message_Dz3  =  "
                       
                         <button class='btn btn-danger btn-sm' formaction  ='./display.php?DCNO=".$CARFNO_T."'> Delete Area  Manager </button>   
                           "; 

             $Message_Dz4  =  "
                       
                         <button class='btn btn-danger btn-sm' formaction  ='./display.php?DCNO=".$CARFNO_T."'>Disagree </button>   
                           "; 



                
         $Message_Cz1  =  "
                         
                              <button class='btn btn-success btn-primary btn-sm'   formaction  ='./display.php?DCNO=".$CARFNO_T."' > Approve Already </button>   
                               "; 
                                             
          $Message_Rz1  =  "
                            
                          <button class='btn btn-warning btn-warning btn-sm'   formaction  ='./display.php?DCNO=".$CARFNO_T."' > Branch manager Approve </button>        ";          
         $Message_Uz1  =   "
                            <button class='btn btn-warning btn-warning btn-sm'   formaction  ='./display.php?DCNO=".$CARFNO_T."' > Area manager Approve</button>    
                            ";  
                                
      $Message_XUz1  =   "
                          
                               <button class='btn btn-primary btn-info btn-sm'   formaction  ='./display.php?DCNO=".$CARFNO_T."' >  Wait Submit </button>  
                            ";  

      $Message_ZUz1  =   "
                          
                               <button class='btn btn-danger btn-info btn-sm'   formaction  ='./display.php?DCNO=".$CARFNO_T."' >  Cancle </button>  
                            ";  

       if ($CASTAT == ' ' ) {
                echo    "
                     <tr>
                    <td>  <input name='num'  id  = 'num' type='radio' value='".$CARFNO."'> <br> </td>
                      
                        <td><font color='DodgerBlue'>".$count."</font></td>
                           
                         <td > <a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='DodgerBlue'>  ".$CARFNO." </font> </div> </a></td>  
                        <td><a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='DodgerBlue'>".$CARFDT."</font></div></a></td>
                        <td><a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='DodgerBlue'>".$CACUSN."</font></div></a></td>
                        <td><a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='DodgerBlue'>".$CADSTC_T."</font></div></a></td>
                         
                        <td><a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='DodgerBlue'>".$CFUSRC."</font></div></a></td>
                           
                         <td><a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='DodgerBlue'>".$CAECNM."</font></div></a></td> 
                          <td>".$Message_XUz1."</td>
                         </tr> ";
                  }
        if ($CASTAT == 'M') {
                echo    "
                     <tr>
                        <td>    </td>
                   
                      <td><font color='Orange'>".$count."</font></td>
                       
                         <td > <a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='Orange'>  ".$CARFNO." </font></div> </a></td>  
                        <td><a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='Orange'>".$CARFDT."</font></div></a></td>
                        <td><a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='Orange'>".$CACUSN."</font></div></a></td>
                        <td><a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='Orange'>".$CADSTC_T."</font></div></a></td>
                           
                        <td><a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='Orange'>".$CFUSRC."</font></div></a></td>
                         <td><a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='Orange'>".$CAECNM."</font></div></a></td>
                         <td>".$Message_Mz1."</td>
                         </tr> ";
                    }


                     if ($CASTAT == 'D' and $CAURID_T != ''  and $CAARSM_T != ''    and $CAURID_T != 'SJ') {
                      echo    "
                     <tr>
                       <td>    </td>
                      
                       <td><font color='red'>".$count."</font></td>
                         
                         <td >  <a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='red'>  ".$CARFNO."  </div> </a> </td>  
                        <td> <a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='red'> ".$CARFDT." </font></div></a></td>
                        <td><a href ='./display.php?DCNO=".$CARFNO_T."'><div> <font color='red'> ".$CACUSN."</font></div></a></td>
                        <td><a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='red'>  ".$CADSTC_T."</font></div></a></td>
                          
                        <td><a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='red'>  ".$CFUSRC."</font></div></a></td>
                          <td> <a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='red'>  ".$CAECNM." </font></div></a></td>
                        <td>".$Message_Dz4."</td>
                         </tr> ";
                        }

    if ($CASTAT == 'D' and $CAURID_T != ''  and $CAARSM_T == ''    and $CAURID_T != 'SJ') {
                      echo    "
                     <tr>
                       <td>    </td>
                      
                       <td><font color='red'>".$count."</font></td>
                         
                         <td >  <a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='red'>  ".$CARFNO."  </div> </a> </td>  
                        <td> <a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='red'> ".$CARFDT." </font></div></a></td>
                        <td><a href ='./display.php?DCNO=".$CARFNO_T."'><div> <font color='red'> ".$CACUSN."</font></div></a></td>
                        <td><a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='red'>  ".$CADSTC_T."</font></div></a></td>
                          
                        <td><a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='red'>  ".$CFUSRC."</font></div></a></td>
                          <td> <a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='red'>  ".$CAECNM." </font></div></a></td>
                        <td>".$Message_Dz1."</td>
                         </tr> ";
                        }

    

     

      if ($CASTAT == 'D' and $CAURID_T == 'SJ' ) {
                      echo    "
                    
                      <td>  </td>
                       <td><font color='red'>".$count."</font></td>
                         
                         <td >  <a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='red'>  ".$CARFNO."  </div> </a> </td>  
                        <td> <a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='red'> ".$CARFDT." </font></div></a></td>
                        <td><a href ='./display.php?DCNO=".$CARFNO_T."'><div> <font color='red'> ".$CACUSN."</font></div></a></td>
                        <td><a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='red'>  ".$CADSTC_T."</font></div></a></td>
                          
                        <td><a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='red'>  ".$CFUSRC."</font></div></a></td>
                          <td> <a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='red'>  ".$CAECNM." </font></div></a></td>
                        <td>".$Message_ZUz1."</td>
                         </tr> ";
                        }


     if ($CASTAT == 'C') {
                            echo    "
                     <tr>
                       <td>   </td>
                     
                        <td><font color='green'>".$count."</font></td>
                         
                         <td > <a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='green'>  ".$CARFNO."  </font></div> </a></td>  
                        <td><a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='green'>".$CARFDT."</font></div></a></td>
                        <td><a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='green'>".$CACUSN."</font></div></a></td>
                        <td><a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='green'>".$CADSTC_T."</font></div></a></td>
                           
                        <td><a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='green'>".$CFUSRC."</font></div></a></td>
                        <td><a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='green'>".$CAECNM."</font></div></a></td>
                        <td>".$Message_Cz1."</td>
                         </tr> ";
                          }
      if ($CASTAT == 'R') {
                                    echo    "
                     <tr>
                      <td>   </td>
                      
                       <td><font color='Orange'>".$count."</font></td>
                        
                        <td > <a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='Orange'>  ".$CARFNO."  </font></div> </a></td>  
                        <td><a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='Orange'>".$CARFDT."</font></div></a></td>
                        <td><a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='Orange'>".$CACUSN."</font></div></a></td>
                        <td><a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='Orange'>".$CADSTC_T."</font></div></a></td>
                        
                          <td><a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='Orange'>".$CFUSRC."</font></div></a></td>
                          <td><a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='Orange'>".$CAECNM."</font></div></a></td>
                        <td>".$Message_Rz1."</td>
                         </tr> ";
                         }
      if ($CASTAT == 'U') {
                            echo    "
                     <tr>
                       <td>    </td>
                        
                          <td><font color='Orange'>".$count."</font></td>
                        <td > <a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='Orange'>  ".$CARFNO."  </font></div> </a></td>  
                        <td><a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='Orange'>".$CARFDT."</font></div></a></td>
                        <td><a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='Orange'>".$CACUSN."</font></div></a></td>
                        <td><a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='Orange'>".$CADSTC_T."</font></div></a></td>
                        
                          <td><a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='Orange'>".$CFUSRC."</font></div></a></td>
                         <td><a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='Orange'>".$CAECNM."</font></div></a></td>
                          <td>".$Message_Uz1."</td>
                         </tr> ";
                 }

               
          
         }
   }
  }





 


    odbc_close($conn);
        ob_end_flush();
*/
     ?>





       <!--  end  STATEMENT   QUERY     -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
        </form>




                        </div>
                    </div>
                </div>
            </div>
        </div>