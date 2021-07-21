
                    </div>
                </div>
             </div>

       </div>
 </div>


    <script src="<?php echo $url; ?>/assets/js/jquery.min.js"></script>
    <script src="<?php echo $url; ?>/assets/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="<?php echo $url; ?>/assets/js/vendor.js"></script>
    <script src="<?php echo $url; ?>/assets/js/Chart.min.js"></script>
    <script src="<?php echo $url; ?>/assets/imakewebthings-waypoints-34d9f6d/lib/jquery.waypoints.js"></script>
    <script src="<?php echo $url; ?>/assets/js/counter_up.js"></script>
    <script >



    console.log(location.href)
    let currentPage = location.href;

    $('.link').each(function(e){
       let links = $(this).attr('href');
       if(currentPage == links){
           console.log($(this).siblings().css('color','green !important'))
           $(this).css('color','green')

       }
    });


      
    </script>
</body>
</html>
