# Mage2 Module Ecommistry ProductList

    ``ecommistry/module-productlist``

 - [Main Functionalities](#markdown-header-main-functionalities)
 - [Installation](#markdown-header-installation)
 - [Configuration](#markdown-header-configuration)
 - [Specifications](#markdown-header-specifications)
 - [Attributes](#markdown-header-attributes)


## Main Functionalities
- Created a new Yes/No attribute for products. The attribute code is `handle_display` and label is `Display`
<img src="https://raw.githubusercontent.com/jaiminmagento/M2Screenshot/master/ProductList/admin_product_attribute.png" />
- Developed a new page that only a logged in customer can access for e.g. www.yourdomain.com/ecommistry/productlist/view
<img src="https://raw.githubusercontent.com/jaiminmagento/M2Screenshot/master/ProductList/frontend_standalone_page.png" />
- Added a new item into the My Account menu `ProductList` and can be accessible for the loggedin user only. www.yourdomain.com/ecommistry/productlist/index
<img src="https://raw.githubusercontent.com/jaiminmagento/M2Screenshot/master/ProductList/frontend_myaccount.png" />
- Displayed a product list for products with the handle_display attribute set to Yes
once extension installed change attribute(attribute code(handle_display) and lable(Display)) for your selected products to Yes(manual process)
<img src="https://raw.githubusercontent.com/jaiminmagento/M2Screenshot/master/ProductList/admin_product_attribute.png" />
<img src="https://raw.githubusercontent.com/jaiminmagento/M2Screenshot/master/ProductList/frontend_myaccount.png" /> 
- Added a custom configuration into the System Configuration to handle the limit number of products displayed on the customer page.(ecommistry/productlist/number_of_products). Store->Settings->Configuration->Ecommistry->ecommistry->ProductList->Number of Products
<img src="https://raw.githubusercontent.com/jaiminmagento/M2Screenshot/master/ProductList/admin-config.png" />
- Added a slider and show the products in it. Use the mode param to optionally select this view like www.yourdomain.com/ecommistry/productlist/index/?viewmode=slider
<img src="https://raw.githubusercontent.com/jaiminmagento/M2Screenshot/master/ProductList/frontend_myaccount_slider.png" />


## Installation
\* = in production please use the `--keep-generated` option

### Type 1: Zip file

 - Unzip the zip file in `app/code/Ecommistry/ProductList`
 - Enable the module by running `php bin/magento module:enable Ecommistry_ProductList`
 - Apply database updates by running `php bin/magento setup:upgrade`\*
 - `bin/magento setup:di:compile` and `php bin/magento setup:static-content:deploy -f`
 - Flush the cache by running `php bin/magento cache:flush` also provide proper permission.


## Configuration

 - Number of Products (ecommistry/productlist/number_of_products)
 - Enabled (ecommistry/productlist/enabled)
<img src="https://raw.githubusercontent.com/jaiminmagento/M2Screenshot/master/ProductList/admin-config.png" />

## Specifications

 - Controller
	- frontend > ecommistry/productlist/index
	- frontend > ecommistry/productlist/view


## Attributes

 - Product - Display (handle_display)
<img src="https://raw.githubusercontent.com/jaiminmagento/M2Screenshot/master/ProductList/admin_product_attribute.png" />
