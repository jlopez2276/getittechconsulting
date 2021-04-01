<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ asset('fonts/material-icon/css/material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" href="{{ asset('vendor/nouislider/nouislider.min.css')}}">

    <!-- Main css -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>

    <div class="main">

        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="images/form-img.jpg" alt="">
                    <div class="signup-img-content">
                        <h2>New Quote </h2>
                        <p>Enter project details</p>
                    </div>
                </div>
                <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form">
                        <div class="form-row">
                            <div class="form-group">
                                <h4>Client Details</h4>
                                <div class="form-input">
                                    <label for="first_name" class="required">First name</label>
                                    <input type="text" name="first_name" id="first_name" />
                                </div>
                                <div class="form-input">
                                    <label for="last_name" class="required">Last name</label>
                                    <input type="text" name="last_name" id="last_name" />
                                </div>
                                <div class="form-input">
                                    <label for="email" class="required">Email</label>
                                    <input type="email" name="email" id="email" />
                                </div>
                                <div class="form-input">
                                    <label for="phone_number" class="required">Phone number</label>
                                    <input type="tel" name="phone_number" id="phone_number" />
                                </div>
                                <div class="form-input">
                                    <label for="company" class="required">Company</label>
                                    <input type="text" name="company" id="company" />
                                </div>
                                <div class="form-input">
                                    <label for="company-addr" class="required">Address</label>
                                    <input type="textarea" name="company-addr" id="company-addr" />
                                </div>
                            </div>
                            <div class="form-group">
                                <h4>Job Description</h4>
                                <div class="form-select">
                                    <div class="label-flex">
                                        <label for="invoice-type">Document Type</label>
                                        <!--<a href="#" class="form-link">Lunch detail</a>-->
                                    </div>
                                    <div class="select-list">
                                        <select name="invoice-type" id="invoice-type">
                                            <option value="InQuote">Quote</option>
                                            <option value="Invoiced">Invoice</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-input">
                                    <label for="job-desc" class="required">Title</label>
                                    <input type="text" name="job-desc" id="job-desc" />
                                </div>
                                
                                <!--<div class="form-radio">
                                    <div class="label-flex">
                                        <label for="payment">Payment Mode</label>
                                        <a href="#" class="form-link">Payment Detail</a>
                                    </div>
                                    <div class="form-radio-group">            
                                        <div class="form-radio-item">
                                            <input type="radio" name="payment" id="cash" checked>
                                            <label for="cash">Cash</label>
                                            <span class="check"></span>
                                        </div>
                                        <div class="form-radio-item">
                                            <input type="radio" name="payment" id="cheque">
                                            <label for="cheque">Cheque</label>
                                            <span class="check"></span>
                                        </div>
                                        <div class="form-radio-item">
                                            <input type="radio" name="payment" id="demand">
                                            <label for="demand">Demand Draf</label>
                                            <span class="check"></span>
                                        </div>
                                    </div>
                                </div>-->
                                <div class="form-input">
                                    <label for="job-addr" class="required">Address</label>
                                    <input type="textarea" name="job-addr" id="job-addr" />
                                </div>
                                <div class="form-input">
                                    <label for="service-item">Service Item</label>
                                    <input type="text" name="service-item" id="service-item" />
                                </div>
                                <div class="form-input">
                                    <label for="serv-item-cost">Estimated Cost ($)</label>
                                    <input type="number" min="1" step="any" name="serv-item-cost" id="serv-item-cost"/>
                                </div>
                                <div class="form-input">
                                    <label for="est-total">Estimated Cost of the Job</label>
                                    <input type="text" name="est-total" id="est-total" />
                                </div>
                            </div>
                        </div>
                        <div class="donate-us">
                            <label>Disclaimer</label>
                            <div class="price_slider ui-slider ui-slider-horizontal">
                                <em>Note that the above information related to the work needed for the job that is stated is an estimated cost.</em>
                            </div>
                        </div>
                        <div class="form-submit">
                            <input type="submit" value="Submit" class="submit" id="submit" name="submit" />
                            <input type="submit" value="Reset" class="submit" id="reset" name="reset" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="{{ asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('vendor/nouislider/nouislider.min.js')}}"></script>
    <script src="{{ asset('vendor/wnumb/wNumb.js')}}"></script>
    <script src="{{ asset('vendor/jquery-validation/dist/jquery.validate.min.js')}}"></script>
    <script src="{{ asset('vendor/jquery-validation/dist/additional-methods.min.js')}}"></script>
    <script src="{{ asset('js/main.js')}}"></script>
</body>
</html>