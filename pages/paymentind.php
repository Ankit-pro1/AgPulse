<?php
include_once "header.php";
$item = $_GET['optradio'];
$itemPrice = filter_var($item, FILTER_SANITIZE_NUMBER_INT);
$itemName = preg_replace("/[^a-zA-Z]+/", " ", $item);
$gst = ($itemPrice * (18 / 100));
?>

<div id="paymentind">
    <div class="container">
        <div class="row" id="order-summary">
            <div class="col-12">
                <h5 class="payment-heading">ORDER SUMMARY</h5>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>S.No.</th>
                            <th>Item</th>
                            <th>Price</th>
                            <th>GST(18%)</th>
                            <th>Total Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1.</td>
                            <td><?php echo $itemName; ?></td>
                            <td>Rs. <?php echo $itemPrice; ?> </td>
                            <td>Rs. <?php echo  $gst; ?></td>
                            <td style="font-weight: 600; font-size:16px">Rs. <?php echo $gst + $itemPrice; ?> </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-12">
                <h5 class="payment-heading">SUBSCRIBER DETAIL</h5>
                <form action="pay.php" method='POST' class="needs-validation" novalidate>
                    <!-- Total Price Value (Price + GST Price) -->
                    <input type="text" name="itemPrice" value="<?php echo $gst + $itemPrice; ?>" hidden>
                    <!-- Total Price Value (Price + GST Price) -->
                    <div class="row mb-3">
                        <div class="col">
                            <label for="subName">Full Name <sup>*</sup> </label>
                            <input type="text" name="subName" class="form-control" placeholder="Full Name" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please enter your full name</div>
                        </div>
                        <div class="col">
                            <label for="subCompany">Company Name <sup>*</sup></label>
                            <input type="text" name="subCompany" id="" class="form-control" placeholder="Company Name" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please enter your company name</div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="subwPhone">Work Phone<sup>*</sup></label>
                            <input type="tel" name="subwPhone" class="form-control" placeholder="Work Phone Number" required pattern="^[0-9]+$">
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please enter you work phone number</div>
                        </div>
                        <div class="col">
                            <label for="subPhone">Phone Number</label>
                            <input type="tel" name="subPhone" class="form-control" placeholder="Phone Number" pattern="^[0-9]+$">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="subEmail">Corporate Email Address<sup>*</sup></label>
                            <input type="email" name="subEmail" id="" class="form-control" placeholder="Corporate Email Address" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please enter a valid email</div>
                        </div>
                        <div class="col">
                            <label for="subGstin">GSTIN <sup>*</sup></label>
                            <input type="text" name="subGstin" id="" class="form-control" placeholder="GSTIN" required pattern="^[0-9A-Za-z]{15}$">
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Enter 15 digit GST number</div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="subAddress">Company Address <sup>*</sup></label>
                            <input type="text" name="subAddress" class="form-control" placeholder="Company Address" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please enter your company address</div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="subCity">City</label>
                            <input type="text" name="subCity" class="form-control" placeholder="City">
                        </div>
                        <div class="col">
                            <label for="subState">State</label>
                            <select name="substate" class="form-control">
                                <option value="" disabled selected>Select your state </option>
                                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                <option value="Assam">Assam</option>
                                <option value="Bihar">Bihar</option>
                                <option value="Chandigarh">Chandigarh</option>
                                <option value="Chhattisgarh">Chhattisgarh</option>
                                <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                                <option value="Daman and Diu">Daman and Diu</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Goa">Goa</option>
                                <option value="Gujarat">Gujarat</option>
                                <option value="Haryana">Haryana</option>
                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                <option value="Jharkhand">Jharkhand</option>
                                <option value="Karnataka">Karnataka</option>
                                <option value="Kerala">Kerala</option>
                                <option value="Lakshadweep">Lakshadweep</option>
                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                <option value="Maharashtra">Maharashtra</option>
                                <option value="Manipur">Manipur</option>
                                <option value="Meghalaya">Meghalaya</option>
                                <option value="Mizoram">Mizoram</option>
                                <option value="Nagaland">Nagaland</option>
                                <option value="Orissa">Orissa</option>
                                <option value="Pondicherry">Pondicherry</option>
                                <option value="Punjab">Punjab</option>
                                <option value="Rajasthan">Rajasthan</option>
                                <option value="Sikkim">Sikkim</option>
                                <option value="Tamil Nadu">Tamil Nadu</option>
                                <option value="Tripura">Tripura</option>
                                <option value="Uttaranchal">Uttaranchal</option>
                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                <option value="West Bengal">West Bengal</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="subpinCode">Pin Code</label>
                            <input type="text" name="subZipCode" class="form-control" placeholder="Pin Code">
                        </div>
                        <div class="col">
                            <label for="subCountry">Country</label>
                            <select name="subCountry" class="form-control">
                                <option value="India" selected>India</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="remember" required>  I have read and agree with AgPulse's <a href="./subscriber-agreement.php">subscription agreement</a>.
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Check this checkbox to continue.</div>
                        </label>
                    </div>
                    <div class="row justify-content-center mb-5">
                        <button type="submit" class="btn btn-success">Proceed To Payment</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
include_once 'footer.php';
?>
<script>
    // Disable form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Get the forms we want to add validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>