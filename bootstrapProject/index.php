<?php include 'template/header.php'; ?>

    


<div class="col-12 vh-100">
                            <div class="row">
                                <!-- card boxs -->
                                <div class="col-12 col-lg-6 col-xl-3  mb-2">
                                    
                                        <div class="card p-2 card-items" onclick="go('https://youtube.com')">
                                            <div class="card-body">
                                                <div class="row align-items-center">
                                                    <div class="col-4">
                                                        <div class="img"><i class="fas fa-box-open text-secondary  fs-1"></i></div>
                                                    </div>
                                                    <div class="col-8 ">
                                                        <p class="fw-bolder mb-0 counter">233</p>
                                                        <p class="text-dark-50 text-uppercase mb-0">Today Order</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                   
                                
                                </div>
                                <div class="col-12 col-lg-6 col-xl-3  mb-2 ">
                                        
                                    <div class="card p-2 card-items" onclick="go('_input.html')">
                                       <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-4">
                                                <div class="img"><i class="fas fa-user-friends text-secondary  fs-1"></i></div>
                                            </div>
                                            <div class="col-8 ">
                                                <p class="fw-bolder mb-0 counter">665</p>
                                                <p class="text-dark-50 text-uppercase mb-0">Users Order</p>
                                            </div>
                                        </div>
                                       </div>
                                    </div>
                            
                            
                                </div>
                                <div class="col-12 col-lg-6 col-xl-3  mb-2 ">
                                        
                                    <div class="card p-2 card-items">
                                       <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-4">
                                                <div class="img"><i class="fas fa-toolbox text-secondary  fs-1"></i></div>
                                            </div>
                                            <div class="col-8 ">
                                                <p class="fw-bolder mb-0 counter">100</p>
                                                <p class="text-dark-50 text-uppercase mb-0">Users Itmes</p>

                                            </div>
                                        </div>
                                       </div>
                                    </div>
                            
                            
                                </div>
                                <div class="col-12 col-lg-6 col-xl-3  mb-2 ">
                                        
                                    <div class="card p-2 card-items">
                                            <div class="card-body">
                                                <div class="row align-items-center">
                                                <div class="col-4">
                                                    <div class="img"><i class="fas fa-location-arrow text-secondary  fs-1"></i></div>
                                                </div>
                                                <div class="col-8 ">
                                                    <p class="fw-bolder mb-0 counter">66</p>
                                                    <p class="text-dark-50 text-uppercase mb-0">Singapore</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            
                            
                                </div>        
                                <!-- card box end -->
                            </div>

                            <!-- bar chart.js part -->
                            <div class="row">
                                <div class="col-12 col-xl-7 my-2 ">
                                    <div class="card card-items _chart">
                                        <div class="card-title text-uppercase m-4 mb-0 d-flex justify-content-between align-items-center">
                                            <div class="fw-bolder"> Order List bar chart result </div>
                                            <div class="fw-bolder " id="lineBtn"><i class="fa fa-window-maximize nav" id=''></i> </div>
                                        </div>
                                        <div class="card-body">
                                            <canvas id="myChart" class="lineChart" ></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-5  my-2 ">
                                    <div class="card card-items _piechart">
                                        <div class="card-title text-uppercase m-4 mb-0 d-flex justify-content-between align-items-center">
                                            <div class="fw-bolder"> Pie Chart result </div>
                                            <div class="fw-bolder " id="pieBtn"><i class="fa fa-window-maximize  nav" id=''></i> </div>
                                        </div>

                                        <div class="card-body">
                                            <canvas id="pie" height="218px" class="" ></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- bar chart.js part -->

                            <!-- table and curosel -->
                            <div class="row" >
                                <div class="col-12 col-lg-7 col-xl-8 my-2  " >
                                    <div class="card card-items overflow-auto" id="btn" >
                                        <div class="card-title text-uppercase m-4 mb-0 d-flex justify-content-between align-items-center">
                                            <div class="fw-bolder"> Order List Today </div>
                                            <div class="fw-bolder " id="maxibtn"><i class="fa fa-window-maximize nav" id=''></i> </div>
                                        </div>
                                        <div class="card-body">
                                            <table class="table table-hover table-responsive ">
                                                <thead class="">
                                                    <tr>
                                                        <td>No</td>
                                                        <td>Name</td>                                                        
                                                        <td>Address</td>
                                                        <td>Phone </td>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Aung Pyae Phyo</td>
                                                        <td>Myanmar,Pheknon</td>
                                                        <td>09777126169</span></td>

                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Aung Phyo</td>
                                                        <td>Myanmar,Pheknon</td>
                                                        <td>0956126169</span></td>

                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Aung  Phyo</td>
                                                        <td>Myanmar,Myitkyina</td>
                                                        <td>09777126169</td>

                                                    </tr>

                                                    <tr>
                                                        <td>4</td>
                                                        <td>Zin Pyae Phyo</td>
                                                        <td>Myanmar,Pheknon</td>
                                                        <td>09777126169</td>

                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>Aung Pyae </td>
                                                        <td>Myanmar,Mandalay</td>
                                                        <td>09777126169</td>

                                                    </tr>
                                     
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-5 col-xl-4 my-2 align-self-end">
                                    <div class="card card-items -responCard">
                                        <div class="card-body">
                                            <div id="carouselExampleIndicators"  class="carousel curoselImg slide" data-bs-ride="carousel">
                                                <div style="bottom: -20px;" class="carousel-indicators m-0 mt-2">
                                                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active bg-secondary" aria-current="true" aria-label="Slide 1"></button>
                                                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="bg-secondary " aria-label="Slide 2"></button>
                                                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class="bg-secondary " aria-label="Slide 3"></button>
                                                </div>
                                                <div class="carousel-inner">
                                                  <div class="carousel-item active">
                                                    <div class="d-flex justify-content-lg-between align-items-end">
                                                        <div class="curosel-item flex-grow-1 mb-2">
                                                            <span class="d-block">$500</span>
                                                            <span class="d-block text-uppercase text-secondary">Nice Box </span>
                                                            <div class="progress" style="height: 5px;">
                                                                <div class="progress-bar bg-info" role="progressbar" style="width: 95%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                                              </div>
                                                        </div>
                                                        <div class="">
                                                        <i class="fa fa-box-open  vw-50 text-info"></i>
                                                        </div>
                                                    </div>
                                                  </div>
                                                  <div class="carousel-item ">
                                                    <div class="d-flex justify-content-lg-between align-items-end">
                                                        <div class="curosel-item flex-grow-1 mb-2">
                                                            <span class="d-block">$2500</span>
                                                            <span class="d-block text-uppercase text-secondary">Tower Box </span>
                                                            <div class="progress" style="height: 5px;">
                                                                <div class="progress-bar bg-info" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                              </div>
                                                        </div>
                                                        <div class="">
                                                        <i class="fa fa-broadcast-tower  vw-50 text-info"></i>
                                                        </div>
                                                    </div>
                                                  </div>
                                                  <div class="carousel-item">
                                                    <div class="d-flex justify-content-lg-between align-items-end">
                                                        <div class="curosel-item flex-grow-1 mb-2" style="margin-right: 20px;">
                                                            <span class="d-block">$5030</span>
                                                            <span class="d-block text-uppercase text-secondary">Bitcoin Box </span>
                                                            <div class="progress" style="height: 5px;">
                                                                <div class="progress-bar bg-info" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                                              </div>
                                                        </div>
                                                        <div class="">
                                                        <i class="fa fa-building text-info"></i>
                                                        </div>
                                                    </div>
                                                  </div>
                                                </div>
                                               
                                              </div>
                                            
                                        </div>
                                  </div>
                                </div>
                            </div>
                            <!-- end of table and curosel-->
                        <div class="col-12 bg-secondary vh-100">

                        </div>
                        <div class="col-12 bg-info vh-100">
                            
                        </div>


<?php include 'template/footer.php'; ?>


<script>
            $('.counter').counterUp({
            delay: 10,
            time: 1000
        });

        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            data: [5, 9, 3, 5, 2, 3],
       
            borderColor: 'rgba(255, 99, 132, 1)',
           fill:false,
           
            borderWidth: 0,
            tension:0,
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
        
var ctx = document.getElementById('pie').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: 'Order of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,159, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    hoverOffset: 4,
    options: {
        plugins: {
            legend: {
                position: 'center',
                display: false,
               
            }
        }
    }
});
</script>