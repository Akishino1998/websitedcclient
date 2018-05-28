<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME ICONS STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM STYLES-->
    <link href="assets/css/style.css" rel="stylesheet" />
      <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div id="wrapper">
        <?php include('assets/layout/header.php'); ?>
        <!-- /. SIDEBAR MENU (navbar-side) -->
        <div id="page-wrapper" class="page-wrapper-cls">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Forms </h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                           BASIC  FORM ELEMENTS
                        </div>
                        <div class="panel-body">
                       <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" />
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" />
  </div>
  <div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" id="exampleInputFile" />
    <p class="help-block">Example block-level help text here.</p>
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox" /> Check me out
    </label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
                           <hr />
                           <input type="text" class="form-control" placeholder="Text input" />
                           <hr />
                           <textarea class="form-control" rows="3" placeholder="Text Area"></textarea>
                           <hr />
                           <div class="checkbox">
  <label>
    <input type="checkbox" value="" />
    Option one is this and that&mdash;be sure to include why it's great
  </label>
</div>
<div class="checkbox disabled">
  <label>
    <input type="checkbox" value="" disabled />
    Option two is disabled
  </label>
</div>

<div class="radio">
  <label>
    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked />
    Option one is this and that&mdash;be sure to include why it's great
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" />
    Option two can be something else and selecting it will deselect option one
  </label>
</div>
<div class="radio disabled">
  <label>
    <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled />
    Option three is disabled
  </label>
</div>
</form>
                            </div>
                            </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                           OTHER  FORM ELEMENTS
                        </div>
                        <div class="panel-body">
                            <form role="form">
                                        <div class="form-group has-success">
                                            <label class="control-label" for="success">SUCCESS EXAMPLE</label>
                                            <input type="text" class="form-control" id="success" />
                                        </div>
                                        <div class="form-group has-warning">
                                            <label class="control-label" for="warning">WARNING EXAMPLE</label>
                                            <input type="text" class="form-control" id="warning" />
                                        </div>
                                        <div class="form-group has-error">
                                            <label class="control-label" for="error">ERROR EXAMPLE</label>
                                            <input type="text" class="form-control" id="error" />
                                        </div>
                                    </form>
                            <hr />
                            <div class="form-group">
                                            <label>Select Example</label>
                                            <select class="form-control">
                                                <option>One Vale</option>
                                                <option>Two Vale</option>
                                                <option>Three Vale</option>
                                                <option>Four Vale</option>
                                                <option>Five Vale</option>
                                            </select>
                                        </div>
                            <hr />
                            <div class="form-group">
                                            <label>Multiple Select Example</label>
                                            <select multiple="" class="form-control">
                                                <option>One Vale</option>
                                                <option>Two Vale</option>
                                                <option>Three Vale</option>
                                                <option>Four Vale</option>
                                            </select>
                                        </div>
                            <hr />
                            For more customization for this template or its components please
                             visit official bootstrap website i.e <strong> getbootstrap.com </strong> or
                            <a href="http://getbootstrap.com/css/#forms" target="_blank">click here</a>

                        </div>
                            </div>
                        </div>
                </div>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <footer >
        &copy; 2018 Doctor Computer | By : <a href="http://www.designbootstrap.com/" target="_blank">Doctor Computer</a>
    </footer>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>
</html>
