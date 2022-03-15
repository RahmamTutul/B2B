
jQuery(function(){
  
        // Add edit Attribute
        var maxField = 10; //Input fields increment limitation
        var addButton = $('.add_button'); //Add button selector
        var wrapper = $('.field_wrapper'); //Input field wrapper
        var fieldHTML = '<div class="field_wrapper"><div class="row"><div class="col-md-6"><div class="form-group"><input type="text" name="key[]" class="form-control"></div></div><div class="col-md-6"><div class="form-group"><select class="form-control" name="value[]" id=""><option value="">Select</option><option value="1">Yes</option><option value="0">No</option></select></div></div><a href="javascript:void(0);" class="remove_button btn btn-danger" title="Delete Field">Delete</a></div></div></div>'; //New input field html
        var x = 1; //Initial field counter is 1

        //Once add button is clicked
        $(addButton).click(function(){
            //Check maximum number of input fields
            if(x < maxField){
                x++; //Increment field counter
                $(wrapper).append(fieldHTML); //Add field html
            }
        });

        //Once remove button is clicked
        $(wrapper).on('click', '.remove_button', function(e){
            e.preventDefault();
            $(this).parent('div').remove(); //Remove field html
            x--; //Decrement field counter
        });

        // Update package Status
        $(document).on("click",".updatePackageStatus",function(){
            var status = $(this).children("i").attr("status");
            var package_id = $(this).attr("package_id");
            $.ajax({
            type:'post',
            url: '/b2b/package/update-package-status',
            data:{status:status, package_id:package_id},
            success:function(resp){
                if(resp['status']==0){
                    $('#package-'+package_id).html("<i class='material-icons' status='Disabled'>toggle_off</i>");
                }else if(resp['status']==1){
                    $('#package-'+package_id).html("<i class='material-icons' status='Active'>toggle_on</i>");
                }
            },error:function () {
                alert("Error");
            }
            });
        });
        // Update banner Status
        $(document).on("click",".updateBannerStatus",function(){
            var status = $(this).children("i").attr("status");
            var banner_id = $(this).attr("banner_id");
            $.ajax({
            type:'post',
            url: '/b2b/component/banner/update-banner-status',
            data:{status:status, banner_id:banner_id},
            success:function(resp){
                if(resp['status']==0){
                    $('#banner-'+banner_id).html("<i class='material-icons' status='Disabled'>toggle_off</i>");
                }else if(resp['status']==1){
                    $('#banner-'+banner_id).html("<i class='material-icons' status='Active'>toggle_on</i>");
                }
            },error:function () {
                alert("Error");
            }
            });
        });
        // Update Category Status
        $(document).on("click",".updateCategoryStatus",function(){
            var status = $(this).children("i").attr("status");
            var category_id = $(this).attr("category_id");
            $.ajax({
            type:'post',
            url: '/b2b/category/update-category-status',
            data:{status:status, category_id:category_id},
            success:function(resp){
                if(resp['status']==0){
                    $('#category-'+category_id).html("<i class='material-icons' status='Disabled'>toggle_off</i>");
                }else if(resp['status']==1){
                    $('#category-'+category_id).html("<i class='material-icons' status='Active'>toggle_on</i>");
                }
            },error:function () {
                alert("Error");
            }
            });
        });
        // Update About Status
        $(document).on("click",".updateAboutStatus",function(){
            var status = $(this).children("i").attr("status");
            var about_id = $(this).attr("about_id");
            $.ajax({
            type:'post',
            url: '/b2b/about/update-about-status',
            data:{status:status, about_id:about_id},
            success:function(resp){
                if(resp['status']==0){
                    $('#about-'+about_id).html("<i class='material-icons' status='Disabled'>toggle_off</i>");
                }else if(resp['status']==1){
                    $('#about-'+about_id).html("<i class='material-icons' status='Active'>toggle_on</i>");
                }
            },error:function () {
                alert("Error");
            }
            });
        });
        //Delete Confirmation 
          $(".confirmDelete").click(function(){
             var name =$(this).attr("name");
             if(confirm("Are you sure you want to delete this " +name+ "?")){
                return true;
             }else {
                 return false;
             }
          });
});

