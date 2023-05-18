// WRITE YOUR INDIVIDUAL CODES HERE 
const App = {

    $:{
        barIcon : document.querySelector('[data-id = "bar-icon"]'),
        navItems : document.querySelector('[data-id = "navigation"]'),
        navBar : document.querySelector('[data-id = "navigation-bar"]'),
        header: document.querySelector('[data-id = "header"]'),
        time: document.querySelector('[data-id = "time"]'),
        salesBtn : document.querySelector('[data-id = "sale-button"]'),
        sales : document.querySelector('[data-id = "sales-div"]'),
        buttonItems : document.querySelector('[data-id = "button-items"]'),
        inventory : document.querySelector('[data-id = "inventory"]'),
        inventoryBtn : document.querySelector('[data-id = "inventory-button"]'),
        supplier : document.querySelector('[data-id = "supplier"]'),
        supplierItems : document.querySelectorAll('[data-id = "supplier-item"]'),
        supplierBtn : document.querySelector('[data-id = "supplier-button"]'),
        feedback : document.querySelector('[data-id = "feedback"]'),
        feedbackItems : document.querySelectorAll('[data-id = "feedback-item"]'),
        feedbackBtn : document.querySelector('[data-id = "feedback-button"]'),
    },

    $$:{
        welcomeForm : document.querySelector('[data-id = "welcome-form"]'),
        salesForm : document.querySelector('[data-id = "sales-form"]'),
        addSaleBtn : document.querySelector('[data-id = "add-sale"]'),
        addNewSale : document.querySelector('[data-id = "addsale-div"]'),
        backBtn : document.querySelector('[data-id = "back-btn"]'),
        inventoryShowAllBtn : document.querySelector('[data-id = "inventory-showall"]'),
        inventorySearch : document.querySelector('[data-id = "inventory-search"]'),
        inventoryBack : document.querySelector('[data-id = "inventory-back"]'),
        inventoryForm : document.querySelector('[data-id = "inventory-form"]'),
        inventorySearchForm : document.querySelector('[data-id = "inventory-search-form"]'),
        supplierForm : document.querySelector('[data-id = "supplier-form"]'),
        addNewSupplierBtn : document.querySelector('[data-id = "addsupplier-btn"]'),
        supplierNewForm : document.querySelector('[data-id = "supplier-new-form"]'),
        supplierBackBtn : document.querySelector('[data-id = "supplier-back"]'),
        feedbackForm : document.querySelector('[data-id = "feedback-form"]'),
        feedbackBackBtn : document.querySelector('[data-id = "feedback-back"]'),
        inventoryUpdateBtn : document.querySelector('[data-id = "inventory-update"]'),
        inventoryDeleteBtn : document.querySelector('[data-id = "inventory-delete"]'),
    },

    $$$:{
        addNewInventoryBtn : document.querySelector('[data-id = "inventory-addnew"]'),
        notifWindow : document.querySelector('[data-id = "notification-pop"]'),
        inventoryForm : document.querySelector('[data-id = "inventory-form"]'),
        inventoryUpdateForm : document.querySelector('[data-id = "inventory-update-form"]'),
        inventoryDeleteForm : document.querySelector('[data-id = "inventory-delete-form"]'),
        updateNotifPop : document.querySelector('[data-id = "update-notification-pop"]'),
        deleteNotifPop : document.querySelector('[data-id = "delete-notification-pop"]'),
        
        //SUPPLIER
        addNewSupplierBtn : document.querySelector('[data-id = "addnew-supplier"]'),
        updateSupplierBtn : document.querySelector('[data-id = "update-supplier"]'),
        deleteSupplierBtn : document.querySelector('[data-id = "delete-supplier"]'), 
        addNewSupplierNotif : document.querySelector('[data-id = "addnew-supplier-notif"]'),
        updateSupplierNotif : document.querySelector('[data-id = "update-supplier-notif"]'),
        deleteSupplierNotif : document.querySelector('[data-id = "delete-supplier-notif"]'),
        
        //SALE
        searchSaleBtn : document.querySelector('[data-id = "search-sale"]'),
        saleSearchForm : document.querySelector('[data-id = "sale-search-form"]'),
    
        //TEXT-OUTPUT
        textOutput : document.querySelector('[data-id = "text-output"]'),
    },

    init(){
        App.timeFunctionality();
        App.registerEventListeners();
        App.formEventListeners();
        App.formOnSubmitListeners();
    },

    registerEventListeners(){
        //Navbar
        App.$.barIcon.addEventListener('click', event => {
            App.$.navBar.classList.toggle('hidden');
        });

        //Sales
        App.$.salesBtn.addEventListener('click', event => {
            App.$.sales.classList.toggle('hidden');
            App.$.sales.classList.add('button-items');
            App.$.buttonItems.classList.add('hidden');
        });

        //Inventory
        App.$.inventoryBtn.addEventListener('click', event => {
            App.$.inventory.classList.toggle('hidden');
            App.$.inventory.classList.add('button-items');
            App.$.buttonItems.classList.add('hidden');
        });

        //Supplier
        App.$.supplierBtn.addEventListener('click', event => {
            App.$.supplier.classList.toggle('hidden');
            App.$.buttonItems.classList.add('hidden');
            App.$.supplier.classList.add('button-items');
        });

        //Feedback
        App.$.feedbackBtn.addEventListener('click', event => {
            App.$.feedback.classList.toggle('hidden');
            App.$.buttonItems.classList.add('hidden');
            App.$.feedback.classList.add('button-items');
        });

    },

    formEventListeners(){

        // SALE
        App.$.salesBtn.addEventListener('click', event => {
            App.$$.welcomeForm.classList.add('hidden');
            App.$$.salesForm.classList.remove('hidden');

            App.$$$.textOutput.classList.add('text-animation');
            App.$$$.textOutput.innerText = `LET'S MAKE A SALE!`;
        });

        App.$$.addSaleBtn.addEventListener('click', event => {
            App.$$.addNewSale.classList.remove('hidden');
            App.$$.salesForm.classList.add('hidden');
            App.$$$.saleSearchForm.classList.add('hidden');
        });

        App.$$.backBtn.addEventListener('click', event => {
            App.$$.addNewSale.classList.add('hidden');
            App.$.buttonItems.classList.remove('hidden');
            App.$.sales.classList.add('hidden');
            App.$$.salesForm.classList.add('hidden');
            App.$$.welcomeForm.classList.toggle('hidden');
            App.$$$.saleSearchForm.classList.add('hidden');
            App.$$$.textOutput.classList.remove('text-animation');
            App.$$$.textOutput.innerText = "";
        });
        
        // INVENTORY
        App.$.inventoryBtn.addEventListener('click', event => {
            App.$$.welcomeForm.classList.add('hidden');
            App.$$.inventoryForm.classList.toggle('hidden');
        
            App.$$$.textOutput.classList.add('text-animation');
            App.$$$.textOutput.innerText = `LET'S SEE WHAT WE HAVE HERE!`;
        });

        App.$$.inventorySearch.addEventListener('click', event =>{
            App.$$.inventoryForm.classList.add('hidden');
            App.$$.inventorySearchForm.classList.remove('hidden');
        });

        App.$$.inventoryBack.addEventListener('click', event => {
            App.$$.inventorySearchForm.classList.add('hidden');
            App.$$.welcomeForm.classList.remove('hidden');
            App.$.inventory.classList.add('hidden');
            App.$.buttonItems.classList.remove('hidden')
            App.$$.inventoryForm.classList.add('hidden');
            App.$$$.notifWindow.classList.add('hidden');
            App.$$$.updateNotifPop.classList.add('hidden');
            App.$$$.deleteNotifPop.classList.add('hidden');
            App.$$$.textOutput.classList.remove('text-animation');
            App.$$$.textOutput.innerText = "";
        });

        App.$$.inventoryUpdateBtn.addEventListener('click', event => {
            App.$$$.updateNotifPop.classList.remove('hidden');
            App.$$$.deleteNotifPop.classList.add('hidden');
            App.$$$.notifWindow.classList.add('hidden');
        });

        App.$$.inventoryDeleteBtn.addEventListener('click', event => {
            App.$$$.deleteNotifPop.classList.remove('hidden');
            App.$$$.notifWindow.classList.add('hidden');
            App.$$$.updateNotifPop.classList.add('hidden');
        });

        //SUPPLIER
        App.$.supplierBtn.addEventListener('click', event => {
            App.$$.welcomeForm.classList.add('hidden');
            App.$$.supplierForm.classList.remove('hidden');
            
            App.$$$.textOutput.classList.add('text-animation');
            App.$$$.textOutput.innerText = 'GET TO KNOW OUR SUPPLIERS!'
        });

        App.$$.addNewSupplierBtn.addEventListener('click', event => {
            App.$$.supplierForm.classList.add('hidden');
            App.$$.supplierNewForm.classList.remove('hidden');
        });

        App.$$.supplierBackBtn.addEventListener('click', event => {
            App.$$.supplierNewForm.classList.add('hidden');
            App.$$.welcomeForm.classList.remove('hidden');
            App.$$.supplierForm.classList.add('hidden');
            App.$.buttonItems.classList.remove('hidden');
            App.$.supplier.classList.add('hidden');
            App.$$$.updateSupplierNotif.classList.add('hidden');
            App.$$$.addNewSupplierNotif.classList.add('hidden');
            App.$$$.deleteSupplierNotif.classList.add('hidden');
        
            App.$$$.textOutput.classList.remove('text-animation');
            App.$$$.textOutput.innerText = "";
        })

        App.$$$.addNewSupplierBtn.addEventListener('click', event => {
            App.$$$.addNewSupplierNotif.classList.remove('hidden');
            App.$$$.updateSupplierNotif.classList.add('hidden');
            App.$$$.deleteSupplierNotif.classList.add('hidden');
        });

        App.$$$.updateSupplierBtn.addEventListener('click', event => {
            App.$$$.addNewSupplierNotif.classList.add('hidden');
            App.$$$.updateSupplierNotif.classList.remove('hidden');
            App.$$$.deleteSupplierNotif.classList.add('hidden');
        });

        App.$$$.deleteSupplierBtn.addEventListener('click', event => {
            App.$$$.addNewSupplierNotif.classList.add('hidden');
            App.$$$.updateSupplierNotif.classList.add('hidden');
            App.$$$.deleteSupplierNotif.classList.remove('hidden');
        });

        //FEEDBACK
        App.$.feedbackBtn.addEventListener('click', event => {
            App.$$.welcomeForm.classList.add('hidden');
            App.$$.feedbackForm.classList.remove('hidden');
            
            App.$$$.textOutput.classList.add('text-animation');
            App.$$$.textOutput.innerText = "WE VALUE YOUR FEEDBACKS!";
        });
        
        App.$$.feedbackBackBtn.addEventListener('click', event => {
            App.$$.feedbackForm.classList.add('hidden');
            App.$$.welcomeForm.classList.remove('hidden');
            App.$.feedback.classList.add('hidden');
            App.$.buttonItems.classList.remove('hidden');
            App.$$$.textOutput.classList.remove('text-animation');
            App.$$$.textOutput.innerText = "";
        });

    },

    formOnSubmitListeners(){
        App.$$$.addNewInventoryBtn.addEventListener('click', event => {
            App.$$$.notifWindow.classList.remove('hidden');
            App.$$$.updateNotifPop.classList.add('hidden');
            App.$$$.deleteNotifPop.classList.add('hidden');
        });

        App.$$$.searchSaleBtn.addEventListener('click', event => {
            App.$$.salesForm.classList.add('hidden');
            App.$$$.saleSearchForm.classList.remove('hidden');
            App.$$.addNewSale.classList.add('hidden');
        });
    },

    timeFunctionality(){
            let hour = new Date().getHours();
            let minute = new Date().getMinutes();
            let second = new Date().getSeconds();
            let ampm = 'AM';
    
            let finalTime = "";
    
    
            if (hour > 12)
                {
                    ampm = 'PM';
                }
            
            minute = minute < 10 ? "0" + minute : minute;
            second = second < 10 ? "0" + second : second;
    
            finalTime = hour + " :" + minute + " :" + second + " :" + ampm;
            App.$.time.innerText = finalTime;
    
            setTimeout(() => {
                App.timeFunctionality();
            }, 1000);      
    },


};

window.addEventListener('load', App.init);



