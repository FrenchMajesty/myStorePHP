     <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">
                    Products <small>List</small>
                </h1>
            </div>
        </div>
         <!-- /. ROW  -->

    <div class="row">
        <div class="col-md-12">
            <!-- Advanced Tables -->
            <div class="panel panel-default">
                <div class="panel-heading">
                     Advanced Tables
                </div>
                <div class="panel-body">
                    <div data-type="table-message"></div>
                    <div class="table-responsive">
                        <table class="table table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>Thumbnail</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>In Stock</th>
                                    <th>Colors</th>
                                    <th>Category</th>
                                    <th>Size</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                {@productList}
                                <!--tr class="odd gradeX">
                                    <td>Trident</td>
                                    <td>Internet Explorer 4.0</td>
                                    <td>Win 95+</td>
                                    <td class="center">4</td>
                                    <td class="center">X</td>
                                </tr>
                                <tr class="even gradeC">
                                    <td>Trident</td>
                                    <td>Internet Explorer 5.0</td>
                                    <td>Win 95+</td>
                                    <td class="center">5</td>
                                    <td class="center">C</td>
                                </tr>
                                <tr class="odd gradeA">
                                    <td>Trident</td>
                                    <td>Internet Explorer 5.5</td>
                                    <td>Win 95+</td>
                                    <td class="center">5.5</td>
                                    <td class="center">A</td>
                                </tr>
                                <tr class="even gradeA">
                                    <td>Trident</td>
                                    <td>Internet Explorer 6</td>
                                    <td>Win 98+</td>
                                    <td class="center">6</td>
                                    <td class="center">A</td>
                                </tr>
                                <tr class="odd gradeA">
                                    <td>Trident</td>
                                    <td>Internet Explorer 7</td>
                                    <td>Win XP SP2+</td>
                                    <td class="center">7</td>
                                    <td class="center">A</td>
                                </tr>
                                <tr class="even gradeA">
                                    <td>Trident</td>
                                    <td>AOL browser (AOL desktop)</td>
                                    <td>Win XP</td>
                                    <td class="center">6</td>
                                    <td class="center">A</td>
                                </tr>

                                <tr class="gradeX">
                                    <td>Misc</td>
                                    <td>Lynx</td>
                                    <td>Text only</td>
                                    <td class="center">-</td>
                                    <td class="center">X</td>
                                </tr>
                                <tr class="gradeC">
                                    <td>Misc</td>
                                    <td>IE Mobile</td>
                                    <td>Windows Mobile 6</td>
                                    <td class="center">-</td>
                                    <td class="center">C</td>
                                </tr>
                                <tr class="gradeC">
                                    <td>Misc</td>
                                    <td>PSP browser</td>
                                    <td>PSP</td>
                                    <td class="center">-</td>
                                    <td class="center">C</td>
                                </tr>
                                <tr class="gradeU">
                                    <td>Other browsers</td>
                                    <td>All others</td>
                                    <td>-</td>
                                    <td class="center">-</td>
                                    <td class="center">U</td>
                                </tr-->
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <!--End Advanced Tables -->
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                            Add A New Product
                        </div>

                        <div class="panel-body">
                            <div data-type="form-message"></div>
                            <form method="post" action="products/add" enctype="multipart/form-data">
                             <br> <br>

                             <div class="row">
                                 <div class="col-md-6">
                                     -thumbnail upload here-
                                <input id="img-uplaod" name="image" type="file" class="file" data-preview-file-type="text" >
                                     <script>
                        window.onload = function() { $("#img-upload").fileinput({
                             allowedFileExtensions: ['jpeg', 'bmp', 'jpg', 'png'],
                             uploadIcon: '<i class="fa fa-upload"></i>',
                             removeIcon: '<i class="fa fa-times"></i>',
                             browseIcon: '<i class="fa fa-folder-open"></i>',
                             browseLabel: 'Fuk'
                        }); }
                                     </script>
                                 </div>

                                 <div class="col-md-6">

                                 <div class="form-group">
                                    <label>Product Name</label>
                                    <input type="text" class="form-control" name="name" value="quick" placeholder="Nice cotton shirt" required>
                                </div>



                               <div class="form-group">
                                  <label>Price (USD)</label>
                                  <input type="number" class="form-control" name="price" value="1.00" placeholder="49.99" pattern="\d+\.\d{1,2}" title="50.00" required>
                              </div>



                              <div class="form-group">
                                 <label>Quantity </label>
                                 <input type="number" class="form-control" name="quantity" value="9" placeholder="100" required>
                             </div>



                             <div class="form-group" data-type="checkbox-list">
                                <label>Colors available: </label>

                                            <label class="checkbox-inline">
                                                <input name="color-black" type="checkbox" checked>Black
                                            </label>
                                            <label class="checkbox-inline">
                                                <input name="color-white" type="checkbox">White
                                            </label>
                                            <label class="checkbox-inline" data-button="add-checkbox">
                                                <i class="fa fa-plus-circle"></i> Add
                                            </label>

                            </div>

                            <div class="form-group">
                                            <label>Category</label>
                                <select class="form-control" name="category">
                                    <option value="men">Men</option>
                                    <option value="women">Women</option>
                                </select>
                            </div>

                            <div class="form-group">
                               <label>Size</label>
                               <input class="form-control" name="size" pattern="[,\s\d]+" value="10, 9" title="Numbers and commas only"
                                placeholder="Separate sizes with a comma. (e.g.: 10, 9, etc..)" required>
                           </div>
                       </div>
                   </div>

                            <input type="hidden" name="token" value="{@token}">
                           <br>
                           <center><button type="submit" class="btn btn-success"><i class="fa fa-plus-circle"></i>
                            Add </button></center>
                        </form>
                        </div>

                    </div>
                    </div>
    </div>
<script>
// Delete product
const deleteButtons = document.querySelectorAll('.fa-trash')
      deleteButtons.forEach((button) => button.addEventListener('click', deleteProduct))

// Add product form
const form = document.querySelector('form')
      form.addEventListener('submit', createProduct)

// Creating new colors
const addButton = document.querySelector('label[data-button="add-checkbox"]')
      addButton.addEventListener('click', function() {

          const colorName = prompt("What color would you like to add?")
          addCheckbox(colorName.toLowerCase())
      })

function createProduct(e) {
    e.preventDefault()

    const formData = new FormData(this)

    $.ajax({
        type: 'POST',
        url: 'products/add',
        data: formData,
        processData: false,
        contentType: false
    })
    .done(function(operation) {
        operation = JSON.parse(operation)

        if(operation.success) e.target.reset() // Clear form fields

        const message = $(operation.message)
              $('div[data-type="form-message"').html(message)
    })
}

function deleteProduct(e) {
    if(!confirm("Are you sure you want to delete this product?")) return;

    const id = e.target.getAttribute('data-id')

        $.ajax({
            type: 'POST',
            url: 'products/delete/' + id
        })
        .done(function(operation) {
            operation = JSON.parse(operation)

            if(operation.success) removeProductFromList(e.target)

            const message = $(operation.message)
                  $('div[data-type="table-message"]').html(message)
        })
}

function removeProductFromList(product) {
    const productRow = product.parentElement.parentElement;
    $(productRow).hide();
}

function addCheckbox(name) {
    let addButton = $('.form-group[data-type="checkbox-list"]').children(':last-child')

    addButton.before(`
        <label class="checkbox-inline">
            <input name="color-${name}" type="checkbox">${name}
        </label>`)
}
</script>
