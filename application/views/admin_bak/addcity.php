<?php $this->load->view('admin/header'); ?>
<script type="text/javascript">
function getstates()
  {
	  id=$('#countryid').val();
	  url='<?php echo base_url();?>admin/master/getstate';
	  
	  $.post(url,{"id":id,"action":"city"},function (data)		{ 	$('#stateid').html(data); 	});
				

	  
	  
	  } 

function validateform()
{



	var countryid=jQuery("#countryid").val(); 
	var stateid=jQuery("#stateid").val(); 
	var cityname=jQuery("#cityname").val(); 
	
	
	
	
	
	
var error='';
if(countryid=='' || countryid=='Select Country')
  {
	error+="* Please select Socity Admin";
  	$("#countryid").addClass('inp-form-error');
	 }else
	   {
   	$("#countryid").removeClass('inp-form-error');
	   }
	   if(stateid=='' || stateid=='Select State')
  {
	error+="* Please select Socity Admin";
  	$("#stateid").addClass('inp-form-error');
	 }else
	   {
   	$("#stateid").removeClass('inp-form-error');
	   }


	   if(cityname=='')
  {
	error+="* Please select Socity Admin";
  	$("#cityname").addClass('inp-form-error');
	 }else
	   {
   	$("#cityname").removeClass('inp-form-error');
	   }

	   
	   

	   
	   if(error!='')
	{
	//	alert(error);
		return false;
	}
	return true; 
}
</script>

<div class="clear"></div>
<div id="content-outer">
  <!-- start content -->
  <div id="content">
    <!--  start page-heading -->
    <div id="page-heading">
      <h1>Add City</h1>
    </div>
    <!-- end page-heading -->

    <table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
      <tr>
        <th rowspan="3" class="sized"><img src="<?php echo AdminThemeUrl; ?>images/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
        <th class="topleft"></th>
        <td id="tbl-border-top">&nbsp;</td>
        <th class="topright"></th>
        <th rowspan="3" class="sized"><img src="<?php echo AdminThemeUrl; ?>images/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
      </tr>
      <tr>
        <td id="tbl-border-left"></td>
        <td><!--  start content-table-inner ...................................................................... START -->
          <form method="post" id="addnewsocity" name="addnewsocity" onsubmit="return validateform()"  action="<?php echo base_url();?>admin/master/addcity" >
            <table id="id-form" class="table table-bordered">
              <thead>
                <tr> </tr>
                <tr>
                  <th><label>Select Country</label></th>
                  <th>
                  <select id="countryid" name="countryid" onchange="getstates(this.id)"  >
                  <option>Select Country</option>
                  <?php foreach($allcountry as $allcountry)
				     {
						 ?>
                         
                         
                         <option value="<?php echo $allcountry['id']?>" ><?php echo $allcountry['countryname']?></option>
                         
						 
						<?php }?>
                 </select>
                    
                    
                    </th>
                </tr>
                <tr>
                  <th><label>Select State</label></th>
                  <th>
                  <select id="stateid" name="stateid" >
                  <option>Select State</option>
                 </select>
                    
                    
                    </th>
                </tr>
                <tr>              	    <th><label>Enter 	City Name</label></th><th>
                    <input type="text" id="cityname" name="cityname" class="inp-form" value="" /></th>
                </tr>
                <tr>
                  <th> <input type="submit" class="form-submit"  value="Add New User" /></th><th><input type="reset" value="Reset" class="form-reset" />
                    <input type="hidden" id="status" name="status" value="1" />
                                     </th>
                </tr>
              </thead>
            </table>
          </form>
          <!--  end content-table-inner ............................................END  --></td>
        <td id="tbl-border-right"></td>
      </tr>
      <tr>
        <th class="sized bottomleft"></th>
        <td id="tbl-border-bottom">&nbsp;</td>
        <th class="sized bottomright"></th>
      </tr>
    </table>
    <div class="clear">&nbsp;</div>
  </div>
  <!--  end content -->
  <div class="clear">&nbsp;</div>
</div>
<div class="clear">&nbsp;</div>
<?php $this->load->view('admin/footer'); ?>
