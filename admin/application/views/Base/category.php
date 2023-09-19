<?php //echo "hii"; die;?>
<div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
					<div class="page-header">
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="title">
									<h4>Category List</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="<?=base_url()?>Dashboard">Home</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											Category List
										</li>
									</ol>
								</nav>
							</div>
							
						</div>
					</div>
					<div class="pd-20 bg-white border-radius-4 box-shadow mb-30 "> 
                            <div class="category-container">
                            
                                <div class="category-list">
                                   
                                    <table class="responsive-table" id="example1">
                                        <thead>
                                            <tr>
                                                <th>S No.</th>
                                                <th>Category Name</th>
                                                <th>Category Image</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        //print_r($category);
                                            $i =0;
                                            if(!empty($category))
                                            {
                                                foreach($category as $row)
                                                {
                                                    $i++;
                                                ?>
                                                <tr>
                                                    <td><?= $i ?></td>
                                                    <td><?= $row->category_name ?></td>
                                                    <td><img src="<?= base_url() ?>assets/uploads/<?= $row->category_image ?>" alt="Category Image" width="50" height="50"></td>
                                                    <td>
                                                    
                                                        <select class="custom-select" name='category_status' id='select' onchange='showConfirmation(<?= $row->id ?>)'>
                                                            <option value='1' class="badge bg-green" style="color:green;" <?= $row->status == 1 ? 'selected' : '' ?>>Active</option>
                                                            <option value='2' class="badge bg-red" style="color:red;"<?= $row->status == 2 ? 'selected' : '' ?>>In-actvie</option>
                                                        </select>
                                                    </td>
                                                   
                                                    <td style="display:flex;"> 
                                                        <a href="<?= site_url('Auth/allCategory/'.$row->id)?>" class='btn btn-warning' data-toggle='tooltip' title='' data-original-title='Edit Category'><i class='fa fa-edit'></i></a>    

                                                    </td>
                                                   
                                                </tr>
                                        <?php  }
                                            }
                                        ?>
                                        
                                        </tbody>
                                    </table>
                                </div>
                                <!-- <div class="category-form">
                                    <h2>Add Category</h2>
                                    <form>
                                        <label for="categoryName">Category Name</label>
                                        <input type="text" id="categoryName" placeholder="Category Name" required>
                                        
                                        <label for="categoryImage">Category Image</label>
                                        <input type="file" id="categoryImage" accept="image/*" required>
                                        
                                        <button class=" submit-btn" type="submit">Add Category</button>
                                    </form>
                                </div> -->
                                <?php //print_r($edit_category);  ?>
                                <div class="category-form">
                                    <h3 class='card-header'>Add Category</h3>
                                    <form action="<?= base_url('Auth/addCategory') ?>" method="POST" enctype="multipart/form-data">
                                        <label class="required" for=""> Name</label>
                                        <input type="hidden" name="category_id" class="form-control" placeholder="Enter service Name" value="<?php if(!empty($edit_category)) {
                                        echo $edit_category[0]->id; } ?>" required >
                                        <input type="text" id="" name="category_name" placeholder="Category Name" value="<?php if(!empty($edit_category)) {
                                        echo $edit_category[0]->category_name;  } ?>" required >
                                        <label class="required" for=""> Image</label>
                                        <input type="file" id="" name="category_image" placeholder="Category Image"  accept="image/*" <?php if (empty($edit_category)) {
                                          echo 'required';} ?>>
                                        <div class="add-category">
                                            <?php if(!empty($edit_category)){
                                                echo"<input type='submit' name='submit' value='Update'>";
                                            }else { 
                                                echo"<input type='submit' name='submit' value='Add category'>";
                                            }?>
                                        </div>
                                        
                                    </form>
                                </div>
                            </div>

				    </div>
				</div>
				
			</div>
</div>


<script>
    $(function () {
       $("#example1").DataTable();
   });

   function showConfirmation(categoryId) {
        
        var status = $('#select').val();
         // alert(status);
        

        $.ajax({
        type: 'POST',
        url: '<?= base_url();?>Auth/updateCategoryStatus', 

        data: { categoryId:categoryId,status: status }, 
        success: function(response) {
            // Handle the AJAX response
            console.log(response);
             location.reload();
        },
        error: function(xhr, status, error) {
            // Handle AJAX error
            console.error(error);
        }
    });
    }
</script>