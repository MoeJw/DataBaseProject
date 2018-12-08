<!DOCTYPE HTML>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="de.css" rel="stylesheet">
        
        <style>
            
        .{
            margin-left: 90px;
        margin-right: 1px;
        text-align: right;
        border-bottom: 3px solid #4CAF50;
        padding-bottom: 20px;
        padding-left: 20px;
        }

        </style>
</head>
<?php
function OpenCon()
{
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "root";
$db = "login";


$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);


return $conn;
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
        $conn = OpenCon();
        $result=$conn->prepare("INSERT INTO employee values(?, ?, ?,?, ?, ?,?)  ");
        $result->bind_param('sssiiss',
        $fname,$mname,$lname,$id,$phoneNumber,
        $bdate,$adress);
        $a=$result->execute();
        echo $a;
     
}       


?>
<body>
        <nav class="navbar navbar-inverse ">
                <div class="container-fluid">
                        <ul class="nav navbar-nav navbar-left">
                                
                                <li><a href="index.html"><span class="glyphicon glyphicon-log-in"></span> تسجيل الخروج</a></li>
                              </ul>
                  <div class="navbar-header navbar-right">
                        <a class="navbar-brand" href="#">Baby<span style="color:#4CAF50; font-size: 20px;"><bold>Zone</bold></span></a>
                  </div>
                  <ul class="nav navbar-nav navbar-right" >
                        <li class="active" ><a href="#" >الاطفال </a></li>
                    <li ><a href="expensess.html">المصروفات</a></li>
                    <li  ><a href="events.html">الاحداث</a></li>
                    <li ><a href="employeesAcounts.php" >الموظفين</a></li>
                    
                  </ul>
                </div>
              </nav>
<!-----------------------right bar-------------------------->
                    <div class="left-nav fixed-top" style="    position: fixed; left:1150px; " >
                            <div class="block" onclick="show(-1)">
                                    <a href="#" >إضافة طفل</a>
                                    <span style="color:#4CAF50" class="glyphicon glyphicon-plus "></span>

                                </div>
                        <div class="block" onclick="show(6)">
                            <a   class="active" >بحث عن طلفل </a>
                            <span style="color:#4CAF50" class="glyphicon glyphicon-search"></span>
                        </div>

                        <div class="block" onclick="show(2)">
                                <a  style="font-size:18px">عرض جميع الاطفال</a>
                                <span style="color:#4CAF50" class=" glyphicon glyphicon-list-alt"></span>
                            </div>
                        
                            <div class="block">
                                    <a   class="active" onclick="show(5)">تعديل  بيانات طفل </a>
                                    <span style="color:#4CAF50" class="glyphicon glyphicon-pencil"></span>
                                </div>
                                <div class="block" onclick="show(4)">
                                        <a   class="active" style="font-size:18px">جدول الغياب والحضور</a>
                                        <span style="color:#4CAF50" class="glyphicon glyphicon-calendar"></span>
                                    </div>

                                    <div class="block" onclick="show(3)">
                                            <a   class="active" style="font-size:18px">إرسال رسالة</a>
                                            <span style="color:#4CAF50" class="glyphicon glyphicon-envelope"></span>
                                        </div>

                        
                    </div>
<!---------------------------mid box----------------------------->
            <div class="mid-box " id="mid-box" style="height: 1500px; margin-right:300px; ">
                  
                    <div class="mid-container" id="mid-container">
                            <div class="form" >
                                    <div class="form-group row"  style="margin-left:100px;width:790px;   text-align: right" >
                                            <div style="margin-left:10px; "  class="col-xs-2 " >
                                            <label for="ex1">اسم العائلة</label>
                                            <input class="form-control" id="ex1" type="text"  name="namefam">
                                          </div>
                                          <div style="margin-left:10px; "  class="col-xs-3 " >
                                            <label for="ex1">اسم الجد</label>
                                            <input class="form-control" id="ex1" type="text" name="namegrand">
                                            </div>
                              
                                            <div style="margin-left:10px; "  class="col-xs-3 " >
                                            
                                            <label for="ex1">اسم الاب</label>
                                            <input class="form-control" id="ex1" type="text" name="MidName>
                                            </div>
                                            <div style="margin-left:10px; "  class="col-xs-2 " >
                                                    <label for="ex1">اسم الطفل</label>
                                                    <input class="form-control" id="ex1" type="text" name="FirstName">
                                            </div>

                              
                                            
                                    </div>
                                    <div class="form-group row"  style="margin-left:100px;  text-align: right" >
                                         
                                         
                                           <div style="margin-left:10px; "  class="col-xs-3 col-xs-push-3 " >
                                            <label for="ex1">انثى</label>
                                            <div class="form-check">
                                                <input class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio1" value="option1" >
                                            </div>
                                            </div>
                                          
                                             <div style="margin-left:10px; "  class="col-xs-3 col-xs-push-3 " >
                                            <label for="ex1">ذكر</label>
                                            <div class="form-check">
                                                <input class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio1" value="option1" >
                                            </div>
                                            
                                    </div>
                                     <div style="margin-left:10px; "  class="col-xs-3 col-xs-push-2" >
                                        <label for="ex1">جنس الطفل</label>
                                      </div>
                              
                                  </div>
                              
                              
                                     <div class="form-group row"  style="margin-left:100px;  text-align: right" >
                                       <div style="margin-left:28px; "  class="col-xs-3 col-xs-push-8 " >
                                          <label for="ex1">تاريخ الميلاد</label>
                                          <input class="form-control" id="ex1" type="text" name="Bdate">
                                          </div>
                                  </div>
                              
                                     <div class="form-group row"  style="margin-left:90px;  text-align: right;border-bottom:1px black" >
                                       <div style="margin-left:10px; "  class="col-xs-2 col-xs-push-3"  >
                                          <label for="ex1">مكان الميلاد </label>
                                          <input class="form-control" id="ex1" type="text" name="placeBirth">
                                          </div>
                                           <div style="margin-left:10px; "  class="col-xs-3 col-xs-push-3 " >
                                              <label for="ex1">المحافظة التي ولد بها</label>
                                              <input class="form-control" id="ex1" type="text" name="whereState">
                                              </div>
                              
                                               <div style="margin-left:10px; "  class="col-xs-3  col-xs-push-3" >
                                                  <label for="ex1">المحافظة التي يقيم بها حاليا</label>
                                                  <input class="form-control" id="ex1" type="text" name="whereLive">
                                                  </div>

                                                  <div style="margin-left:10px; "  class="col-xs-3 col-xs-pull-9" >   
                                                        <label for="ex1">رقم الهوية</label>
                                                        <input class="form-control" id="ex1" type="text" name="id">
                                            
                                                      </div>
                                  </div>
                              
                                
                                       <div class="form-group row"  style="margin-left:100px;  text-align: right" >
                                         <div style="margin-left:10px; "  class="col-xs-2" >   
                                            <label for="ex1">  صلة القرابة  </label>
                                            <input class="form-control" id="ex1" type="text" name="relative">
                                
                                          </div> 
                              
                                         <div style="margin-left:10px; "  class="col-xs-3 " >   
                                            <label for="ex1">  الاسم  </label>
                                            <input class="form-control" id="ex1" type="text" name="RFirstname">
                                
                                          </div>
                              
                                         <div style="margin-left:10px; "  class="col-xs-4 "  >   
                                            <label for="ex1">  الشخص  المسؤول  عن إحضار الطفل  </label>
                                            
                                
                                          </div>
                                      
                                      </div>
                              
                                         <div class="form-group row"  style="margin-left:100px;  text-align: right" >
                                           <div style="margin-left:10px; "  class="col-xs-2 " >   
                                              <label for="ex1">  صلة القرابة  </label>
                                              <input class="form-control" id="ex1" type="text" name="relative2">
                                  
                                            </div> 
                                
                                           <div style="margin-left:10px; "  class="col-xs-3 " >   
                                              <label for="ex1">  الاسم  </label>
                                              <input class="form-control" id="ex1" type="text" name="RFname2">
                                  
                                            </div>
                                             <div style="margin-left:10px; "  class="col-xs-3 " >   
                                                <label for="ex1">  رقم الجوال/ رقم الهاتف  </label>
                                                <input class="form-control" id="ex1" type="text" name="PhoneNumberR2">
                                    
                                              </div>
                                
                                           <div style="margin-left:10px; "  class="col-xs-3 " >   
                                              <label for="ex1">  الشخص  المسؤول  عن استلام الطفل  </label>
                                              
                                  
                                            </div>  
                                            
                                            
                                       </div> 
                              
                                          <div class="form-group row"  style="margin-left:100px;  text-align: right" >
                                           <div style="margin-left:10px; "  class="col-xs-3 " >
                                              <label for="ex1"> الاسم  </label>
                                              <input class="form-control" id="ex1" type="text" name="RFname3">
                                          </div>
                              
                                           <div style="margin-left:10px; "  class="col-xs-2 " >
                                              <label for="ex1">  صلة القرابة  </label>
                                              <input class="form-control" id="ex1" type="text" name="relative3"> 
                                          </div>
                              
                                           <div style="margin-left:10px; "  class="col-xs-3 " >
                                              <label for="ex1"> رقم الجوال  </label>
                                              <input class="form-control" id="ex1" type="text" name="PhoneNumberR3">
                                          </div>
                              
                                           <div style="margin-left:10px; "  class="col-xs-3 " >
                                              <label for="ex1">  في حالة الطوارئ يمكن الاتصال   </label>
                                          </div>
                                          </div> 
                                          

                                </div>
                                <!--------------------------------------------------------------->
                                <div class="form0" style="color:#4CAF50;font-size:50px;text-align: center"><h1>معلومات الأهل </h1></div>
                               
                                    <div class="form-group row"  style="margin-right:100px;  text-align: right" >
                                            <div style="margin-left:10px; "  class="col-xs-3 col-xs-push-10" >
                                                    <label for="ex1">: عنوان  المنزل </label>
                                                    
                                                    </div>
                                          <div style="margin-left:4px; "  class="col-xs-3 " >
                                            <label for="ex1">الشارع</label>
                                            <input class="form-control" id="ex1" type="text" name="street">
                                          </div>
                                         <div style="margin-left:0px; "  class="col-xs-2" >
                                            <label for="ex1">الحي</label>
                                            <input class="form-control" id="ex1" type="text" name="hood">
                                            </div>
                                
                                           <div style="margin-left:10px; "  class="col-xs-3 " >
                                            
                                            <label for="ex1">اسم المدينة/القرية</label>
                                            <input class="form-control" id="ex1" type="text" name="city">
                                            </div>
                                
                                          
                                
                                
                                    </div>
                                      <div class="form-group row"  style="margin-left:100px;  text-align: right" >
                                         
                                         
                                         
                                          
                                           <div style="margin-left:30px; "  class="col-xs-3 col-xs-push-6" >
                                                <label for="ex1">رقم هاتف المنزل</label>
                                                <input class="form-control" id="ex1" type="text" name="HomeFamilyPhone">
                                            
                                    </div>
                                   
                                
                                  </div>
                                
                                
                                 
                                  <div class="form-group row"  style="margin-left:100px;  text-align: right" >
                                  <div style="margin-left:10px; "  class="col-xs-3  " >   
                                       <label for="ex1">  اسم الام  </label> 
                                       
                                            <input class="form-control" id="ex1" type="text" name="MomWorkPhone">
                                
                                          </div>
                                     <div style="margin-left:10px; "  class="col-xs-3 " >
                                          <label for="ex1">هاتف العمل</label>
                                          <input class="form-control" id="ex1" type="text" name="DadWorkPhone">
                                          </div>

                                          
                                         <div style="margin-left:10px; "  class="col-xs-3 " >
                                              <label for="ex1">مكان عمل الاب</label>
                                              <input class="form-control" id="ex1" type="text" name="DadWork">
                                              </div>
                                              
                                            

                                                  
                                                  <div style="margin-left:30px; "  class="col-xs-3  col-xs-push-6" >   
                                            <label for="ex1">رقم الجوال   </label>
                                            <input class="form-control" id="ex1" type="text" name="DadPhone">
                                            
                                
                                          </div> 
                                          <div style="margin-right:15px; "  class="col-xs-3 " >   
                                                        <label for="ex1">رقم الهوية</label>
                                                        <input class="form-control" id="ex1" type="text" name="id">
                                            
                                                      </div>
                                                      <div style="margin-left:30px; "  class="col-xs-3 col-xs-pull-7" >
                                                  <label for="ex1">عمل الاب</label>
                                                  <input class="form-control" id="ex1" type="text" name="NameDadWork">
                                                  </div>
                                  </div>
                                
                                  
                                
                                    <div class="form-group row"  style="margin-left:100px;  text-align: right" >
                                       
                                       <div style="margin-left:10px; "  class="col-xs-3 " >  
                                       <label for="ex1">  عمل الام  </label> 
                                            
                                            <input class="form-control" id="ex1" type="text" name="MomWork">
                                
                                          </div>  
                                
                                       <div style="margin-left:10px; "  class="col-xs-3 " >  
                                       <label for="ex1"> هاتف عمل الام   </label>  
                                            
                                            <input class="form-control" id="ex1" type="text" name="MotherName">
                                
                                          </div> 
                                
                                       <div style="margin-left:10px; "  class="col-xs-3  " >   
                                       <label for="ex1">  اسم الام  </label> 
                                       
                                            <input class="form-control" id="ex1" type="text" name="MomWorkPhone">
                                
                                          </div>
                                          <div style="margin-left:10px; "  class="col-xs-3 col-xs-push-3" >   
                                            <label for="ex1">رقم الجوال   </label>
                                            <input class="form-control" id="ex1" type="text" name="MomPhone">
                                
                                          </div> 
                                
                                       <div style="margin-left:20px; "  class="col-xs-3  col-xs-push-3" >   
                                       <label for="ex1"> مكان عمل الام    </label>
                                            <input class="form-control" id="ex1" type="text" name="NameMomWork">
                                            
                                
                                          </div>
                                          <div style="margin-left:40px; "  class="col-xs-3  col-xs-pull-7" >   
                                                        <label for="ex1">رقم الهوية</label>
                                                        <input class="form-control" id="ex1" type="text" name="id">
                                            
                                                      </div>
                                      
                                      </div>
                                
                                      <div class="form-group row"  style="margin-left:100px;  text-align: right" >
                                         <div style="margin-left:10px; "  class="col-xs-3 " >   
                                              <label for="ex1"> ترتيب الطفل في العائلة    </label>
                                              <input class="form-control" id="ex1" type="text" name="sort">
                                  
                                            </div> 
                                
                                         <div style="margin-left:10px; "  class="col-xs-3 " >   
                                              <label for="ex1">  عدد الإناث  </label>
                                              <input class="form-control" id="ex1" type="text" name="femalNumber">
                                  
                                            </div>
                                           <div style="margin-left:10px; "  class="col-xs-3 " >   
                                                <label for="ex1">  عدد  الذكور  </label>
                                                <input class="form-control" id="ex1" type="text" name="maleNumber">
                                    
                                              </div>
                                
                                         <div style="margin-left:30px; "  class="col-xs-3 col-xs-push-6 " >   
                                              <label for="ex1">  عدد الاخوة والاخوات لطفل  </label>
                                              <input class="form-control" id="ex1" type="text" name="numberOfsisAndBrother">
                                              
                                              
                                  
                                            </div>  
                                            
                                            
                                       </div> 
                                
                                       
                                          
                                          <div class="form-group row"  style="margin-left:100px;  text-align: right" >
                                                <div style="margin-left:10px; "  class="col-xs-3  col-xs-push-6" >
                                                       <a style=" padding:6px 20px" class="btn btn-success">إضافة</a>
                                                    </div>
                                        </div> 
                               
                                
                    <!------------------------------------------------------------------------->
                    <div  id="table1">
                                         <script>
                            var m=document.getElementById("table1").style.display="none";
                                         </script>

                            <h2 style="text-align: right ;margin-right: 50px; color:#777;">جميع المصروفات </h2>          
                            <table class="table table-striped">
                            <thead>
                                <tr>
                               
                                
                                <th style="color:#4CAF50;">الملاحظات</th>
                                <th style="color:#4CAF50;"> الفئة المستهدفة</th>
                                <th style="color:#4CAF50;">نوع الحدث</th>
                                <th style="color:#4CAF50;">التاريخ</th>
                                </tr>
                            </thead>
                            <tbody style="color:#777;">
                                <tr>
                                <td>John</td>
                                <td>Doe</td>
                                <td>john@example.com</td>
                                <td>john@example.com</td>
                                </tr>
                                
                                <tr>
                                <td>Mary</td>
                                <td>Moe</td>
                                <td>mary@example.com</td>
                                <td>john@example.com</td>
                                </tr>
                                <tr>
                                <td>July</td>
                                <td>Dooley</td>
                                <td>july@example.com</td>
                                <td>john@example.com</td>   
                                </tr>
                                
                            </tbody>
                            </table>
                        </div>
                  
                  <!------------------------------------------------->
                    <!------------------------end of add------------------------------>
                        
                        <div class="mid-container" id="send-message">
                            <script>document.getElementById("send-message").style.display="none";</script>
                                    <div class="form"  >
                                            <div class="form-group row"    style="  text-align: right"  >
                                                    <div   class="col-lg-4  col-lg-push-6" >
                                                            <input type="text" class="form-control" placeholder="Search">
                                                            

                                                    </div>
                                                    
                                                    <div   class="col-lg-4  col-lg-push-3" >
                                                
                                                            <label for="ex1" >اسم الموظف</label>
                                                                
                                                      </div>
                                            </div>
                                            <div class="form-group row"    style="  text-align: right"  >
                                                    <div   class="col-lg-4  col-lg-push-2" >
                                                            <textarea class="form-control" rows="15" style="margin: 0px -276.016px 0px 0px; width: 521px; height: 268px;" id="comment"></textarea>
                                                            
                                                                
                                                      </div>

                                                      <div   class="col-lg-4  col-lg-push-3" >
                                                
                                                            <label for="ex1" >الرسالة</label>
                                                                
                                                      </div>
                                                    
                                            </div>
                                            <div class="form-group row"    style="  text-align: right"  >
                                                    <div   class="col-lg-4  col-lg-push-3" >
                                                
                                                            <a class="btn btn-success">الرسالة</a>
                                                                
                                                      </div>
                                            </div>
                                    </div>
                        </div>
                    <!-------------------------end-send-message---------------->
                            <div class="mid-container" id="Recored-employee">
                                    <script>document.getElementById("Recored-employee").style.display="none";</script>
                                    <div  id="table1">
                                            <script>
                              document.getElementById("Recored-employee").style.display="none";
                                            </script>
   
                               <h2 style="text-align: right ;margin-right: 50px; color:#777; margin-bottom:50px;">جدول الحضور والغياب </h2> 
                               <div class="form"  >
                                    <div class="form-group row"    style="  text-align: right"  >
                                            <div   class="col-lg-4  col-lg-push-6" >
                                                        <input type="text" class="form-control" placeholder="Search">
                                                    

                                            </div>
                                            
                                            <div   class="col-lg-4  col-lg-push-3" >
                                        
                                                    <label for="ex1" >اسم الموظف</label>
                                                        
                                              </div>
                                    </div>
                                    <div class="form-group row"    style="  text-align: right"  >
                                            <div   class="col-lg-4  col-lg-push-5" >
                                        
                                                    <a class="btn btn-success" style="    padding: 6px 25px;">موافق</a>
                                                        
                                              </div>
                                </div>         
                               <table class="table table-striped">
                               <thead>
                                   <tr>
                                  
                                   
                                   <th style="color:#4CAF50;">الملاحظات</th>
                                   <th style="color:#4CAF50;"> الفئة المستهدفة</th>
                                   <th style="color:#4CAF50;">نوع الحدث</th>
                                   <th style="color:#4CAF50;">التاريخ</th>
                                   </tr>
                               </thead>
                               <tbody style="color:#777;">
                                   <tr>
                                   <td>John</td>
                                   <td>Doe</td>
                                   <td>john@example.com</td>
                                   <td>john@example.com</td>
                                   </tr>
                                   
                                   <tr>
                                   <td>Mary</td>
                                   <td>Moe</td>
                                   <td>mary@example.com</td>
                                   <td>john@example.com</td>
                                   </tr>
                                   <tr>
                                   <td>July</td>
                                   <td>Dooley</td>
                                   <td>july@example.com</td>
                                   <td>john@example.com</td>   
                                   </tr>
                                   
                               </tbody>
                               </table>
                           </div>
                     
                            </div>
                        </div>
             <!----------Recored-------------------------------------------------------->
             
        </div>
                        

            
            <script src="show.js"></script> 

                </body> 
                </html>
