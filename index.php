<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Complete CRUD</title>
</head>

<body>
    <section class="left-part mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <form action="" method="post">
                        <fieldset class="border p-2">
                            <legend class="w-auto">Identity</legend>
                            
                        <div class="form-group">
                            
                            <label for="name">Name</label>  
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="Department">Department</label>
                            <input type="text" class="form-control" id="Department" name="department" required>
                        
                        </div>
                    </fieldset>
                           
                            <fieldset class="border p-2">
                                <legend class="w-auto">Contact</legend>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="tel" class="form-control" id="phone" name="phone">
                        </div>
                        <div class="form-group">
                            <label for="Department">Email</label>
                            <input type="text" class="form-control" id="Department" name="department" required>
                        </div>
                        </fieldset>
                        <button class="form-control btn-success mt-2" type="submit" name="submit">Save Information</button>
                    </form>
                    
                </div>
                <div class="col-md-6">
                    <table class="table table-hover table-dark table-bordered">
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Department</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Update|Delete</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Hasan</td>
                            <td>CSE</td>
                            <td>01794383900</td>
                            <td>hasanra17@gmail.com</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>
    
</body>

</html>