<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/vendors/css/validationEngine.jquery.css">
</head>
<body>

    <div class="container">
        <div class="row">
        <div class="col-md-4 col-md-offset-4" style="margin-top: 10px;">
            <form id="bankform" method="post" action="save.php">
                <h1>bank form</h1>
                <div class="form-group">
                    <label>name</label>
                    <input type="text" id="name" name="name" class="form-control validate[required]">
                </div>
                <div class="form-group">
                    <label>account no</label>
                    <input type="account no"  id="account_no" name="account_no"class="form-control validate[required,minSize[10],ajax[ajaxaccountcheck]]">
                </div>
                <div class="form-group">
                    <label>branch name</label>
                    <select id="branch" name="branch" class="form-control custom-select">
                        <option selected="rs puram">rs puram</option>
                        <option selected="pn palayam">pn palayam</option>
                        <option selected="ngr street">ngr street</option>
                    </select>
                </div>

                
                <div class="form-group">
                    <label>phone no</label>
                    <input type="text" id="phn_no" name="phn_no" class="form-control validate[required,minSize[10],ajax[ajaxphonecheck]]">
                </div>

                <div class="form-group">
                    <label>status</label>
                    <select id="status" name="status" class="form-control">
                        <option selected="active">active</option>
                        <option selected="inactive">inactive</option>
                      </select>
                  
                </div>
                
                <div class="form-group">
                    
                    <input type="submit" class="btn btn-success" value="submit">
                </div>
                
            </form>
        </div>

        </div>
    </div>
    <script src="asset/js/jquery3.5.1.js"></script>
    <script src="asset/vendors/js/languages/jquery.validationEngine-en.js"></script>
    <script src="asset/vendors/js/jquery.validationEngine.js"></script>
    <script>
        $(function() {
            $("#bankform").validationEngine();
        })
        </script>
</body>
</html>