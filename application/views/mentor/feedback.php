<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

                 
      <main class="mdl-layout__content mdl-color--grey-100">
        
        <div class="mdl-grid demo-content">
          
          <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-grid">
             <h5>Review 1 <small style="display:block;">10/11/2015</small></h5>
             <!--  <br/>
             <i class="mdl-color-text--blue-grey-400 material-icons" >speaker_notes</i>
              30 review
             <i class="mdl-color-text--blue-grey-400 material-icons" >speaker_notes_off</i>
             20 remaining -->
            <!--  <i class="mdl-color-text--blue-grey-400 material-icons">beenhere</i> -->
                <canvas id="canvas1" height="240px"></canvas>
          </div> 

          <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--8-col mdl-grid" style="padding:10px;">
               hello 
                <canvas id="canvas"></canvas>
          </div> 
          

          <div class="demo-graphs mdl-shadow--2dp mdl-color--white mdl-cell mdl-cell--12-col">       
                         
<br/>
                 <table style="text-align:left;" id="example" class="mdl-data-table responsive-table" cellspacing="0" width="100%">
                 
                  <tbody>
                      <tr>
                          <td>Q.no</td>
                          <td style="border-right:1px solid #dadada;text-align:center;">Question</td>
                          <td colspan="2" style="text-align:center;" class="feed_head"> Feedback </td>  
                      </tr>
                      <!-- <tr>
                          <td class="feed_head"> 1</td><td class="feed_head">2</td><td class="feed_head">3</td><td class="feed_head">4</td class="feed_head"><td class="feed_head">5</td>
                       
                      </tr> -->

                       <?php $sum = 0; foreach ($feedback_details as $row){ ?>
                           <tr>
                                 <td><?php echo $row->fq_id; ?></td>
                                  <td style="text-transform: uppercase;text-align: left;border-right:1px solid #dadada;"><?php echo $row->fq_text; ?></td>
                                  <td style="text-transform: uppercase;text-align:center;border-right:1px solid #dadada;    width: 13%;"> 
                                  <div style="margin: 0.5rem 0 0rem 0;" class="progress">
                                      <div class="determinate" style="width:<?php echo round($row->avg_of_ques,3)*20; ?>%"></div>
                                  </div>
                                   <small><?php echo round($row->avg_of_ques,3)*20; ?>%</small>
                                  </td>
                                  <td><?php echo round($row->avg_of_ques,3); ?></td>
                                  
                                   
                          </tr> 
                         <!-- <tr>
                            <td colspan="4">
                              
                              Strongly agree 
                                 30%
                            </td>
                          </tr>-->
                         
                          
                       <?php $sum += $row->avg_of_ques; } ?>

                        <tr>
                                  <td style="text-transform: uppercase;text-align: center;border-right:1px solid #dadada;font-weight:4;" colspan="2"> <b>Average </b></td>
                                  <td style="text-align:center;">
                                     <div style="margin: 0.5rem 0 0rem 0;" class="progress">
                                      <div class="determinate" style="width:<?php echo round($row->avg_of_ques,3)*20; ?>%"></div>
                                  </div>
                                   <small><?php echo round(($sum/count($feedback_details)),2)*20; ?>%</small>
                                  </td>
                                  <td>
                                   
                                  <?php echo round(($sum/count($feedback_details)),5); ?>
                                    

                                  </td>

                                   
                          </tr> 

               
                  </tbody>
              </table>


            <!--    <pre>
                <?php
                     print_r($feedback_details);
                 ?>
                 </pre> -->
 

          </div>

        </div>

      </main>

     

     <div id="mypopup1" class="popup fade">
       <div class="popup_block mdl-cell--5-col mdl-cell">
           <div class='popup_header'>
             my popup1 
             <span><a role='close_popup'><i class="material-icons">clear</i></a></span>
           </div>
           <div class='popup_content'>
             none of my business 
           </div>
        </div>
      </div> 

      <div id="mypopup2" class="popup fade">
       <div class="popup_block mdl-cell--5-col mdl-cell">
           <div class='popup_header'>
             my popup2 
             <span><a role='close_popup'><i class="material-icons">clear</i></a></span>
           </div>
           <div class='popup_content'>
             none of my business 
           </div>
        </div>
      </div> 

 <script>

      

       var barChartData = {
                             labels: ["Question 1", "Question 2", "Question 3", "Question 4", "Question 5", "Question 6", "Question 7","Question 8","Question 9"],
                              datasets: [
                                  {
                                      label: "data1",
                                      borderWidth: 1,
                                      data: [3,4,5,3,2,3,4,6,7],
                                      backgroundColor: [
                                                          'rgba(255, 99, 132, 0.2)',
                                                          'rgba(54, 162, 235, 0.2)',
                                                          'rgba(255, 206, 86, 0.2)',
                                                          'rgba(75, 192, 192, 0.2)',
                                                          'rgba(153, 102, 255, 0.2)',
                                                          'rgba(255, 159, 64, 0.2)',
                                                          'rgba(255, 99, 132, 0.2)',
                                                          'rgba(54, 162, 235, 0.2)',
                                                          'rgba(255, 206, 86, 0.2)'
                                                       ],
                                      borderColor: [
                                          'rgba(255,99,132,1)',
                                          'rgba(54, 162, 235, 1)',
                                          'rgba(255, 206, 86, 1)',
                                          'rgba(75, 192, 192, 1)',
                                          'rgba(153, 102, 255, 1)',
                                          'rgba(255, 159, 64, 1)',
                                          'rgba(255,99,132,1)',
                                          'rgba(54, 162, 235, 1)',
                                          'rgba(255, 206, 86, 1)'
                                                   ]
                                  }
                              ]
                          };

        var pieChartdata = {
                    labels: [
                                "Attempted review ",
                                "Remaining"
                            ],
                    datasets: [
                        {
                            data: [100,300],
                            backgroundColor: [
                                "#FF6384",
                                "#36A2EB"
                            ]
                        }]
                     };


        window.onload = function() {
            var ctx = document.getElementById("canvas").getContext("2d");
            var ctx1 = document.getElementById("canvas1").getContext("2d");
            window.myBar = new Chart(ctx, {
                type: 'bar',
                data: barChartData,
                options: {
                    elements: {
                        rectangle: {
                            borderWidth: 1,
                            borderColor: 'rgb(0, 255, 0)',
                            borderSkipped: 'bottom'
                        },
                        scales: {
                                   xAxes: [{
                                            display: true,
                                            labelString: 'probability'
                                    }],
                                    yAxes: [{
                                            display: true,
                                            labelString: 'probability'
                                    }]
                                }
                    },
                    responsive: true,
                    legend: {
                        position: 'top',
                        display: false,
                    },
                    title: {
                        display: false,
                        text: 'Nu mentor portal'
                    }
                }
            });


        window.myBar1 = new Chart(ctx1,{
                    type: 'doughnut',
                    data: pieChartdata,
                    title: { display: true,text: 'Nu mentor portal'},
                      options: {responsive: true,
                      legend: {position: 'top',},
                      title: {display: false,text: 'PIE CHART'},
                      animation: {animateScale: true,animateRotate: true}
                     }
                });
              };







    </script>






    