<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./styles/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chivo+Mono:wght@200;400;600&display=swap" rel="stylesheet">
    <title>Convenience Store POS</title>
</head>
<body>
    
        <div class="outer-container">
            <header>
                <div class="main-header" data-id="header">
                    <i id="bars" class="fa fa-solid fa-bars" data-id="bar-icon"></i>
                    <h2 id="title">thisPOS</h2>
                   <a id="log-out" href="./log_out.php"><h2 >Log out</h2></a> 
                </div>

            </header>

            <nav class="hidden nav-animation" data-id="navigation-bar">
                    <div class="nav-items" data-id="navigation">
                        <i class="fa fa-solid fa-book"></i>
                    </div>
            </nav>
            
            <main>
                <div class="inner-content">
                    <div class="text-output">
                        <p data-id="text-output"></p>
                    </div>
                    
                    <div class="list-items">

                        <div class="form-area hidden form-area-animation" data-id="sales-form">

                            <!-- FORM POSITION -->
                                <form action="./inventory_search.php" method="GET" class="sales-form function-form">
                                    <label>Search for available item</label>
                                    <label>Input Item ID</label>
                                    <input type="number" name="inventory-search-id">
                                    <label>Input Item Description</label>
                                    <input type="text" name="inventory-search-name">
                                    <button type="submit" name="inventory-submit-seach" class="form-btn">Submit</button>
                                </form>
                            <!--  -->
                        </div>

                        <!-- WELCOME FORM -->
                        <div class="function-form form-area" id="welcome" data-id="welcome-form">
                            <h2 id="welcome-form-text">WELCOME TO thisPOS</h2>
                        </div>
                        <!--  -->

                        <!-- ADD NEW SALE FORM-->
                        <div class="add-sale form-area hidden form-area-animation" data-id="addsale-div">
                            <form action="./sale_addnew.php" method="POST" class="function-form">
                                <span id="newsalespan">
                                    <label class="salespan">Item ID</label>
                                    <input type="number" name="item-id" require>   
                                </span>

                                <label>Input Quantity</label>
                                <input type="number" name="sale-quantity" required>

                                <label>Mode of Payment</label>
                                <select name="mode-payment" required>
                                    <option value="Card">Card</option>
                                    <option value="Cash">Cash</option>
                                </select>

                                <button type="submit" name="add-sale" class="form-btn">Submit</button>
                            </form>
                        </div>
                        <!--   -->



                        <!-- INVENTORY FORM -->
                        <div class="inventory-form-div form-area hidden form-area-animation" data-id="inventory-form">
                            <form action="./addNew.php" method="GET" class="function-form" name="inventory-main-form" method="GET" data-id="inventory-form">
                                
                                <span id="inventory-btn">
                                
                                    <button class="form-btn" data-id="inventory-addnew" type="button">Add New Item</button>
                                    <button class="form-btn" data-id="inventory-update" type="button">Update Item</button>
                                    <button class="form-btn" type="button" data-id="inventory-delete">Delete Item</button>
                                </span>
                            
                            </form>
                        </div>

                        <!-- INVENTORY SEARCH -->
                        <div class="form-area hidden form-area-animation" data-id="inventory-search-form">
                            <form action="./inventory_search.php" class="function-form" method="GET">
                                <label>FILL IN ANY OF THE FOLLOWING</label>
                                <label>Input Item ID</label>
                                <input type="number" name="inventory-search-id">
                                
                                <label>Input Item Name</label>
                                <input type="text" name="inventory-search-name">

                                <button class="form-btn" type="submit" name="inventory-submit-search">Submit</button>
                            </form>
                        </div>
                        <!--  -->

                        <!-- SUPPLIER FORM -->
                        <div class="add-sale form-area hidden form-area-animation" data-id="supplier-form">
                            <form action="" method="" class="function-form">
                                <span id="supplier-btn">
                                    <button type="button" class="form-btn" data-id="addnew-supplier">Add new</button>
                                    <button type="button" class="form-btn" data-id="update-supplier">Update</button>
                                    <button type="button" class="form-btn" data-id="delete-supplier">Delete</button>
                                </span>
                            </form>
                        </div>

                        <!-- SUPPLIER SEARCH FORM -->
                        <div class="add-sale form-area supplier-div hidden form-area-animation" data-id="supplier-new-form">
                            <form action="./supplier_search.php" class="function-form add-supplier" method="get">
                                <label>Input Supplier ID</label>
                                <input type="text" name="addsupplier-id">
                                
                                <label>Input Supplier Name</label>
                                <input type="text" name="addsupplier-name">

                                <button type="submit" class="form-btn">Submit</button>
                            </form>
                        </div>
                        <!--  -->

                        <!-- SALE SEARCH -->
                        <div class="form-area hidden form-area-animation" data-id="sale-search-form">
                            <form action="./sale_search.php" class="function-form" method="GET">
                                <label>Input Sale ID</label>
                                <input type="number" name="sale-search-id" required>                   
                                <button class="form-btn" type="submit" name="sale-submit-search">Submit</button>
                            </form>
                        </div>
                        <!--  -->
                        <!-- FEEDBACK FORM -->
                        <div class="add-sale form-area hidden form-area-animation" data-id="feedback-form">
                            <form action="./feedback_search.php" class="function-form" method="GET">
                                <label>Input Feedback ID</label>
                                <input type="number" name="feedback-number" required>

                                <button type="submit" class="form-btn">Search</button>
                            </form>
                        </div>

                        <!--  -->


                        <!-- TABLE AREA -->
                        
                        <!-- NOTIFICATION BAR -->
                        <div class="table notification-bar hidden form-area-animation" data-id="notification-pop">
                            <div class="main-notif">
                                <p>Do you want to add a new item?</p>
                                <span>
                                    <button class="form-btn" data-id="notif-button notif-inventory-yes"><a href="./addNew.php" class="notif">YES</a></button>
                                    <button class="form-btn" data-id="notif-button notif-inventory-no"><a href="./home.php" class="notif">NO</a></button>
                                </span>
                            </div>   
                        </div>
                        <!--  -->

                        <!-- UPDATE NOTIF BAR -->
                        <div class="table notification-bar hidden form-area-animation" data-id="update-notification-pop">
                            <div class="main-notif">
                                <p>Do you want to continue update?</p>
                                <span>
                                    <button class="form-btn" data-id="notif-button notif-inventory-yes"><a href="./inventory_update.php" class="notif">YES</a></button>
                                    <button class="form-btn" data-id="notif-button notif-inventory-no"><a href="./home.php" class="notif">NO</a></button>
                                </span>
                            </div>   
                        </div>
                        <!--  -->

                        <!-- DELETE NOTIF BAR -->
                        <div class="table notification-bar hidden form-area-animation" data-id="delete-notification-pop">
                            <div class="main-notif">
                                <p>Do you want to continue deleting?</p>
                                <span>
                                    <button class="form-btn" data-id="notif-button notif-inventory-yes"><a href="./inventory_delete.php" class="notif">YES</a></button>
                                    <button class="form-btn" data-id="notif-button notif-inventory-no"><a href="./home.php" class="notif">NO</a></button>
                                </span>
                            </div>   
                        </div>
                        <!--  -->

                        <!-- ADDNEW SUPPLIER -->
                        <div class="table notification-bar hidden form-area-animation" data-id="addnew-supplier-notif">
                            <div class="main-notif">
                                <p>Do you want to add a new supplier?</p>
                                <span>
                                    <button class="form-btn" data-id="notif-button notif-inventory-yes"><a href="./supplier_addNew.php" class="notif">YES</a></button>
                                    <button class="form-btn" data-id="notif-button notif-inventory-no"><a href="./home.php" class="notif">NO</a></button>
                                </span>
                            </div>   
                        </div>
                        <!--  -->

                        <!-- UPDATE SUPPLIER -->
                        <div class="table notification-bar hidden form-area-animation" data-id="update-supplier-notif">
                            <div class="main-notif">
                                <p>Do you want to update an existing supplier?</p>
                                <span>
                                    <button class="form-btn" data-id="notif-button notif-inventory-yes"><a href="./supplier_update.php" class="notif">YES</a></button>
                                    <button class="form-btn" data-id="notif-button notif-inventory-no"><a href="./home.php" class="notif">NO</a></button>
                                </span>
                            </div>   
                        </div>
                        <!--  -->

                        <!-- DELETE SUPPLIER -->
                        <div class="table notification-bar hidden form-area-animation" data-id="delete-supplier-notif">
                            <div class="main-notif">
                                <p>Do you want to delete an existing supplier?</p>
                                <span>
                                    <button class="form-btn" data-id="notif-button notif-inventory-yes"><a href="./supplier_delete.php" class="notif">YES</a></button>
                                    <button class="form-btn" data-id="notif-button notif-inventory-no"><a href="./home.php" class="notif">NO</a></button>
                                </span>
                            </div>   
                        </div>
                        <!--  -->
                    </div>
                </div>

                <!-- BUTTONS -->
                <div class="buttons-list">
                    <div class="button-items" data-id="button-items">
                        <span>
                            <button data-id="sale-button" class="main-btn">SALES</button>
                            <button data-id="inventory-button" class="main-btn">INVENTORY</button>
                        </span>

                        <span>
                            <button data-id="supplier-button" class="main-btn">SUPPLIER</button>
                            <button data-id="feedback-button" class="main-btn">FEEDBACKS</button>
                        </span>
                    </div>
                </div>
                <!--  -->


                <!-- SALES -->
                <div class="feedback hidden functionality" data-id="sales-div" id="sale-area">
                    <span>
                        <button class="sales-btn main-btn" data-id="add-sale">Add New Sale</button>
                        <button class="sales-btn main-btn" data-id="search-sale">Search Sale</button>
                    </span>
                    <span>
                        <button class="sales-btn main-btn" data-id="showall-sale" onclick="window.location.href='./sale_showall.php'">Show All Sales</button>
                        <button class="sales-btn main-btn" data-id="back-btn">Back</button>
                    </span>

                </div>
                <!--  -->
                
                <!-- INVENTORY -->
                <div class="inventory hidden functionality" data-id="inventory">
                    <span>
                        <button name="inventory-showall" data-id="inventory-showall" onclick="window.location.href='./inventory.php'" class="main-btn">Show All</button>
                        <button data-id="inventory-search" class="main-btn">Search Item</button>
                    </span>
                    
                    <span>
                        <button data-id="inventory-back" class="main-btn">Back</button>
                    </span>
                </div>

                <!-- SUPPLIER -->
                <div class="inventory hidden functionality" data-id="supplier">
                    <span>
                        <button data-id="addsupplier-btn" class="main-btn">Seach Supplier</button>
                        <button onclick="window.location.href='./supplier.php'" class="main-btn">Show All</button>
                    </span>

                    <span>
                        <button data-id="supplier-back" class="main-btn">Back</button>
                    </span>
                </div>
                <!--  -->

                <!--  FEEDBACK  -->
                <div class="feedback hidden functionality" data-id="feedback">
                    <span>
                        <button onclick="window.location.href='./feedback_showall.php'" class="main-btn">Show All</button>
                        <button data-id="feedback-back" class="main-btn">Back</button>
                    </span>
                </div>
                <!--  -->
            </main>

            <footer>
                <p data-id="time">THIS IS TIME</p>
            </footer>

               





        </div>
    <script src="./javascript/app.js"></script>
</body>
</html>