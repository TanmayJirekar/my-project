<html>
    <head>
        <title> My First Session</title>
    </head>
    <body>
        <center><h1> Sumago Infotech Pvt Ltd.</h1></center>
        <hr>
        <center>
            
              <a href="demo.html">Home</a>&nbsp;&nbsp;      
              <a href="About.html">About us</a>&nbsp;&nbsp;   
              <a href="Team.html">Team</a>&nbsp;&nbsp;         
              <a href="Contact.html">Contact</a>&nbsp;&nbsp;  
        </center>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3749.760518336659!2d73.77554287472014!3d19.97657118142237!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bddebaead9a4d49%3A0xfd6c10f8929d7902!2sSUMAGO%20INFOTECH%20PVT%20LTD!5e0!3m2!1sen!2sin!4v1686556040475!5m2!1sen!2sin" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        
    </body>
</html>



<div class="col-md-4">
    <div class="panel panel-default">
        <div class="panel-heading">
         Registration form
        </div>
       
            <div class="panel-body">
                <label> FULL NAME</label>
                <input type="text" name="stud_name">
                <br><br>
    
                <label> Contact Number</label>
                <input type="text" name="stud_phone">
                <br><br>
    
                <label> Email id</label>
                <input type="email" name="stud_email">
                <br><br>
    
                <label> Address</label>
                <textarea row="10" cols="10" name="stud_address"></textarea>
                <br><br>
    
                <label> Gender</label>
                <input type="radio" name="gender" value="male">Male
                    <input type="radio" name="gender" value="female">Female
                
                <br><br>
    
                <label> City</label>
                <select name="stud_city">
                    <option>Nashik</option>
                    <option>Dhule</option>
                    <option>Mumbai</option>
                    <option>Pune</option>
                </select>
                <br><br>
                <label> User name</label>
                <input type="text" name="stud_user">
                    <br><br>
    
    
                    <label> Password</label>
                    <input type="password" name="stud_pass" placeholder="password should be more than 8 characters">
                        <br><br>
    
    
                        <label>DOB</label>
                        <input type="date" name="stud_dob">
                            <br><br>
    
                            <label> Languages</label>
                            <input type="checkbox" name="lang[]" value="English">English
                            <input type="checkbox" name="lang[]" value="Hindi">Hindi
                            <input type="checkbox" name="lang[]" value="Marathi">Marathi
                            <input type="checkbox" name="lang[]" value="Russian">Russian
                                <br><br>
    
                            <label> Select Photo</label>
                            <input type="file" name="stud_pic">
                            <br><br>
                            <button type="submit" class="btn btn-warning">Submit</button> <button type="submit" class="btn btn-info">Reset</button>
            </div>
         
          
      </div>
</div>


<div class="col-md-4">

    <div class="panel panel-default">
        <div class="panel-heading">
            Employee Details
        </div>
                 <div class="panel-body">
                  <table class="table table-hover">
                    <tr>
                      <th> Sr No.</th>
                      <th> Name</th>
                      <th> Contact</th>
                      <th> Email</th>
        
                  </tr>
        
                  <tr>
                      <td rowspan="1" class="active"> 1 </td>
                      <td class="active"> Tanmay</td>
                      <td class="active"> 1234567890</td>
                      <tdclass="active"> tanmay@gmail.com</td>
                  </tr>
        
                  <tr>
                      <td class="success" colspan="1"> 2 </td>
                      <td class="success"> Rudra</td>
                      <td class="success"> 1234509876</td>
                      <td class="success"> rudra@gmail.com</td>
                  </tr>
        
                  <tr>
                  <td> 3 </td>
                      <td> Rohit</td>
                      <td> 12348657890</td>
                      <td> rohit@gmail.com</td>
                  </tr>
        
                  <tr>
                      <td> 4 </td>
                      <td> Yuvraj</td>
                      <td> 1234364587890</td>
                      <td> yuvraj@gmail.com</td>
                  </tr>
                  </table>
                </div>
                <?php
                include "config.php";
                if(isset($_post['submit']))
                {
                    extract($_POST);
                    $add=mysqli_queryt($con,"insert into contact(name,email,message)values('$con_name','$con_email','$con_message')")or die(mysqli_error);
                    if($add)
                    {
                        echo"<script>";
                        echo"alert("Data insert Successfully.......");";
                        echo"</script>";
                    }
                    else{
                        echo"<script>";
                        echo"alert("Data error.......");";
                        echo"</script>";
                    }
                }