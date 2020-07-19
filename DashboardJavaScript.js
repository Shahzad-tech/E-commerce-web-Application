$(document).ready(function(){
    var ctx = $('#myChart')[0].getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Login1', 'Login2', 'Login3', 'Login4', 'Login5', 'Login6'],// login details
            datasets: [{
                label: 'Money Spent',
                data: [300, 600, 900, 200, 450, 560],//Data
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

$(document).click(function(event){

    var current = $(event.target).text();
    if(current == "Remove"){
        
        swal({
            title: "Remove",
            text: "Are you sure you want to remove this item?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          
          .then((willDelete) => {
            if (willDelete) {
                
                $(event.target).parent().remove();
               
                swal( "Item delted!", {
                    icon: "success",
                            });
            
            } 
            
          });


    }


});

});
