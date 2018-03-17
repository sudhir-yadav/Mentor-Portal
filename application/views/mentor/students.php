<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

       <style type="text/css">

.demo-list-two {
  width: 300px;
}

.usr_img{width: 40px; height: 40px;border-radius: 50px;margin-right: 10px;display: inline-block;float:left;}

.paginate_button{

      padding: 5px 10px;
    margin: 2px;
    border: 1px solid #dadada;
    border-radius: 2px;
    text-align: center;
    display: inline-block;
    cursor:pointer;
}
.paginate_button:hover{
  background:#039be5;
  color:#fff;
}
.dataTables_info{padding:10px;}
.dataTables_length{float:left;}
select[name=example_length]{display:inline-block;float:left;}
#example_filter{width: 40%;float: right !important;}
td,th{text-align: center !important;}
       </style>  



      <main class="mdl-layout__content mdl-color--grey-100">
        
          <div class="mdl-grid demo-content">

           <div class="demo-graphs mdl-shadow--2dp mdl-color--white mdl-cell mdl-cell--12-col " >
             
  
              <table id="example" class="mdl-data-table" cellspacing="0" width="100%">
                  <thead>
                      <tr>
                          <th style="width:5%"></th>
                          <th>ID</th>
                          <th>FIRST NAME</th>
                          <th>LAST NAME</th>
                          <th> EMAIL</th>
                          <th><i class=" material-icons" role="presentation">contact_mail</i></th>
                      </tr>
                  </thead>
                  <tbody>

                       <?php foreach ($sessData as $row){ ?>
                           <tr>
                                  <td ><span class='usr_img' style="background:url('<?=$row->sm_user_img; ?>')center no-repeat;background-size:100%;"> </span></td>
                                  <td><?=$row->sm_id; ?></td>
                                  <td style="text-transform: uppercase;"><?=$row->sm_name; ?></td>
                                  <td style="text-transform: uppercase;"><?=$row->sm_last_name; ?></td>
                                  <td><?=$row->sm_email; ?></td>
                                  <td><button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect mdl-button--accent">
                                     Send Mail
                                   </button></td>
                          </tr>
                       <?php } ?>
               
                  </tbody>
              </table>

     


          </div>

          
        </div>

      </main>
     
<script src="<?php echo base_url('template/js/jquery.dataTables.js');?>"></script>

<script>       
 $(document).ready(function(){$('#example').DataTable();});
</script>