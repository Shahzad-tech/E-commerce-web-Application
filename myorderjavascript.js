
var totalVolume = 3;
var totalAmount = 900;

$(document).click(function(event) {
   
   var currenId = $(event.target).attr("id");
   var ParentId = $(event.target).parent().attr("id");
   var volume = $("#"+ParentId+" #"+"volume").text();
   var amount = $("#"+ParentId+" #"+"amount").text();
   volume = parseInt(volume);
   amount = parseInt(amount);

   if(currenId == "plus"){   

        volume = volume + 1 ;
        amount = amount + 300;
        totalVolume = totalVolume + 1;
        totalAmount = totalAmount+ 300;  //original value should be there.
        
        $("#"+ParentId+" #"+"volume").text(volume);
        $("#"+ParentId+" #"+"amount").text(amount+"Rs");
    
   }
   else if(currenId=="minus"){

        if(!(volume <= 1)){                          //can't be less then 1
            volume = volume - 1 ;
            amount = amount - 300;
            totalVolume = totalVolume - 1;
            totalAmount = totalAmount - 300;
            $("#"+ParentId+" #"+"volume").text(volume);
            $("#"+ParentId+" #"+"amount").text(amount+"Rs");
        }
        else{
            
            swal({
                title:"Error",   
                text:"Can't be less then one",
                icon:"warning",
                type: "error",
                confirmButtonText: "Ok",
            });
        }
   }

   else if(currenId=="delete"){
    
    swal({
        title: "Deletion",
        text: "Are you sure you want to delete this?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      
      .then((willDelete) => {
        if (willDelete) {
            
            totalAmount = totalAmount - amount;
            totalVolume = totalVolume - volume;

            $("#"+ParentId).siblings()[0].remove();
            $("#"+ParentId).remove();
        
        
            swal( "Item delted!", {
                icon: "success",
                        });
        
        } 
        
      });
    
       
}

   $("#totalVolume").text(totalVolume);
   $("#totalAmount").text(totalAmount+"rs");

    

});
